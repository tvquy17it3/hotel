<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('checkinform');
    }

    public function postData(Request $request)
    {
        $checkin = session()->has('checkin') ? session()->get('checkin') : [];
        $cart = session()->has('cart') ? session()->get('cart') : [];
        $request->merge([
            'checkIn' => date('Y-m-d H:i:s', $request->checkIn),
            'checkOut' => date('Y-m-d H:i:s', $request->checkOut)
        ]);
        $orderID = DB::table('orders')->insertGetId(
            $request->all()
        );
        foreach($cart as $value){
            OrderDetail::create(["orderID"=>$orderID,"roomID"=> $value['id'], "qty"=>$value['qty'], "price"=>$value['price']]);
        }
        return json_encode($orderID);
    }
}