<?php

namespace App\Http\Controllers\Order;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Auth;
use Session;

class TrackingController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function search(Request $request) {
        $validator = Validator::make([], []); // Empty data and rules fields

        if(!$request->get("tracking_number")){
            $validator->errors()->add('tracking_number', 'Tracking Number is required.');
            throw new ValidationException($validator);
        }

        $order = Order::with(["order_activities", "customer", "rider"])
            ->whereTrackingNumber($request->get("tracking_number"))
            ->first();

        if(!$order) {
            $validator->errors()->add('tracking_number', 'Tracking number not valid');
            throw new ValidationException($validator);
        }

//        return $order;
        return view('/user/orders_tracking',compact('order'))->with('success','Post Created Successfully');;
    }


     public function logout(){
      //  dd(1);
        Session::flush();
        Auth::logout();

        return  redirect()->to('/');
    }
}
