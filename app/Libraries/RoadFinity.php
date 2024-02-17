<?php

namespace App\Libraries;

class RoadFinity
{
    public $token;
    public $url = 'https://roadfinitymobile.roadfn.com/api/';

    public function __construct()
    {
        $response = $this->curl($this->url . 'Login', 'POST', [
            'UserName' => 'researchers@road.com',
            'Password' => '123456',
            'DeviceToken' => 'string'
        ]);

        $this->token = $response['Token'];
    }

    function curl($url, $method, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->token,
            'accept: */*'
        ]);
        if ($method == 'POST') {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }
        if ($method == 'PUT') {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }
        if ($method == 'DELETE') {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
        }
        $response = curl_exec($curl);
        curl_close($curl);
        if ($url == $this->url . 'Business/CreateShipmentConfirmNew') {
            dd($response);
        }
        return json_decode($response, true);
    }

    public function orderDraft($data)
    {
        dd(($data));
        $response = $this->curl($this->url . 'Business/CreateShipmentConfirmNew', 'POST', $data);
        dd($response);
    }

    public function city($name)
    {
        $response = $this->curl($this->url . 'Business/GetCity', 'POST', ['Name' => $name]);
        return $response;
    }
}
