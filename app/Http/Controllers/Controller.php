<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Automattic\WooCommerce\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $woocommerce;

    public function __construct()
    {
        $this->woocommerce = new Client(
            'https://hadiind.com',
            'ck_0df097f6dd2b7a1f0cd7d227f43dc4cdcecb42fe',
            'cs_6d4c2992423aadf8371b4db03a3c748f15a53eb4',
            [
                'version' => 'wc/v3',
            ]
        );
    }
}
