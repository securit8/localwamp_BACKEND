<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\products as products;


class guzzlepost extends Controller
{


    public function index(Request $request)
    {
        $data['menu'] = 3;

        $qty = $request['qty'];
        $Fcoupon = $request['coupon'];

        $tourName = $request['tourName'];
        $data['chkbx_value'] = $request['chkbx_value'];
        $data['tourName'] = $request['tourName'];
        $data['user_Name'] = $request['user_name'];
        $data['user_lname'] = $request['tour_lname'];
        $data['user_email'] = $request['user_email'];
        $data['user_tel'] = $request['user_tel'];
        $data['qty'] = $request['qty'];
        

        $product = products::where('order_desc', $tourName)->pluck('price');

        if ($data['chkbx_value'] == 1) {
            $data['cash_f'] = ((int)$product[0] * (int)$qty) * 0.8;
        }
        elseif ($data['chkbx_value'] == 2) {
            $data['cash_f'] = ((int)$product[0] * (int)$qty) * 0.9;
        }
         elseif (products::where('email', $Fcoupon)->value('email')) {
            $data['cash_f'] = ((int)$product[0] * (int)$qty) * 0.95;
        } else {
            $data['cash_f'] = (int)$product[0] * (int)$qty;
        }



            return view('postForm', $data);

    }
}
