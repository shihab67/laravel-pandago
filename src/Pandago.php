<?php

namespace Shihab\Pandago;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Pandago extends Controller
{
    public function index()
    {
        echo 'Hello, World!';
    }

    public function store($data)
    {
        if (!array_key_exists("recipient", $data))
        {
            return 'Recipient is not defined.';
        }
        else if (!array_key_exists("amount", $data))
        {
            return 'Amount is not defined.';
        }
        else if (!array_key_exists("description", $data))
        {
            return 'Description is not defined.';
        }
        else
        {
            try {
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);

                curl_setopt($ch, CURLOPT_POST, TRUE);

                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Content-Type: application/json",
                    "Accept: application/json",
                    "Authorization: Bearer {access-token}"
                ));

                $response = curl_exec($ch);
                curl_close($ch);

                var_dump($response);
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }

    public function find($order_id)
    {
        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,
                "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders/" . $order_id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Accept: application/json",
                "Authorization: Bearer {access-token}"
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            var_dump($response);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function cancel($reason, $order_id)
    {
        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders/" . $order_id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($reason));

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Accept: application/json",
                "Authorization: Bearer {access-token}"
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            var_dump($response);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function proof($order_id)
    {
        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders/proof-of-delivery/" . $order_id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Accept: application/json",
                "Authorization: Bearer {access-token}"
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            var_dump($response);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function courierLocation($order_id)
    {
        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,
            "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders/" . $order_id . "/coordinates");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Accept: application/json",
                "Authorization: Bearer {access-token}"
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            var_dump($response);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function estimateFee($data)
    {
        if (!array_key_exists("recipient", $data))
        {
            return 'Recipient is not defined.';
        }
        else if (!array_key_exists("amount", $data))
        {
            return 'Amount is not defined.';
        }
        else if (!array_key_exists("description", $data))
        {
            return 'Description is not defined.';
        }
        else
        {
            try {
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders/fee");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);

                curl_setopt($ch, CURLOPT_POST, TRUE);

                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Content-Type: application/json",
                    "Accept: application/json",
                    "Authorization: Bearer {access-token}"
                ));

                $response = curl_exec($ch);
                curl_close($ch);

                var_dump($response);
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }

    public function estimateTime($data)
    {
        if (!array_key_exists("recipient", $data))
        {
            return 'Recipient is not defined.';
        }
        else if (!array_key_exists("amount", $data))
        {
            return 'Amount is not defined.';
        }
        else if (!array_key_exists("description", $data))
        {
            return 'Description is not defined.';
        }
        else
        {
            try {
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/orders/time");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);

                curl_setopt($ch, CURLOPT_POST, TRUE);

                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Content-Type: application/json",
                    "Accept: application/json",
                    "Authorization: Bearer {access-token}"
                ));

                $response = curl_exec($ch);
                curl_close($ch);

                var_dump($response);
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }

    public function outlet($client_vendor_id, $data)
    {
        if (!array_key_exists("name", $data))
        {
            return 'Name is not defined.';
        }
        else if (!array_key_exists("address", $data))
        {
            return 'Address is not defined.';
        }
        else if (!array_key_exists("latitude", $data))
        {
            return 'Latitude is not defined.';
        }
        else if (!array_key_exists("longitude", $data))
        {
            return 'Longitude is not defined.';
        }
        else if (!array_key_exists("city", $data))
        {
            return 'City is not defined.';
        }
        else if (!array_key_exists("phone_number", $data))
        {
            return 'Phone number is not defined.';
        }
        else if (!array_key_exists("currency", $data))
        {
            return 'Currency is not defined.';
        }
        else if (!array_key_exists("locale", $data))
        {
            return 'Locale is not defined.';
        }
        else if (!array_key_exists("description", $data))
        {
            return 'Description is not defined.';
        }
        else
        {
            try {
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL,
                "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/outlets/" . $client_vendor_id);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);

                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Content-Type: application/json",
                    "Accept: application/json",
                    "Authorization: Bearer {access-token}"
                ));

                $response = curl_exec($ch);
                curl_close($ch);

                var_dump($response);
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }

    public function getOutlet($client_vendor_id)
    {
       try {
           $ch = curl_init();

           curl_setopt($ch, CURLOPT_URL,
           "https://private-anon-452e81bed8-pandago.apiary-proxy.com/sg/api/v1/outlets/" . $client_vendor_id);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
           curl_setopt($ch, CURLOPT_HEADER, FALSE);

           curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Accept: application/json",
                "Authorization: Bearer {access-token}"
           ));

           $response = curl_exec($ch);
           curl_close($ch);

           var_dump($response);
       } catch (\Throwable $th) {
           dd($th);
       }
    }
}
