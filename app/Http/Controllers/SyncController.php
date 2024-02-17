<?php

namespace App\Http\Controllers;

use App\Libraries\RoadFinity;
use Illuminate\Http\Request;

class SyncController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {

        $order = $this->woocommerce->get('orders/' . $id);
        $roadfn = new RoadFinity;
        $products = [];
        foreach ($order->line_items as $prod) {
            $products[] = $prod->name;
        }
        $roadfn->orderDraft([
            "ShipmentTrackingNo" => rand(100000, 999999) . time(),
            "qrAltId" => $order->id,
            "ShipmentTypeID" => 0,
            "ClientName" => $order->shipping->first_name . ' ' . $order->shipping->last_name,
            "ClientCityID" => $order->shipping->city,
            "ClientAreaID" => $order->shipping->state,
            "ClientPhone" => $order->billing->phone ?? $order->shipping->phone,
            // "ClientPhone2" => "string",
            "ClientAddress" => $order->shipping->address_1,
            "Alert" => "1",
            "ShipmentTotal" => $order->total,
            "Remarks" => "string",
            "IsReturn" => false,
            "ShipmentContains" => implode(',', $products),
            "lang" => "en",
        ]);
    }
}
