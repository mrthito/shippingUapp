<?php

namespace App\Http\Controllers;

use App\Libraries\RoadFinity;
use Illuminate\Http\Request;

class OrderSyncController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $order = $this->woocommerce->get('orders/' . $id);
        return view('order.show', compact('order'));
    }
}
