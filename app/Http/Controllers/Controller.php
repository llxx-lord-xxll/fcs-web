<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //Stripe Function
    public function GetStripeCustomer($emailAddress) {
        try {
            $response = \Stripe\Customer::all(["limit" => 1, "email" => $emailAddress]);
            if(empty($response->data))
            {
                $customer = \Stripe\Customer::create(array(
                    'email' => $emailAddress,
                ));

                return $customer;
            }
            else
            {
                $customer = $response->data[0];
                return $customer;
            }
        } catch (\Exception $e) {
            return [];
        }
    }
}
