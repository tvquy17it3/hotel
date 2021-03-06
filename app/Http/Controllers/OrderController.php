<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use DB;
use Carbon\Carbon;

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
            'checkOut' => date('Y-m-d H:i:s', $request->checkOut),
            'created_at' =>\Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        // $orderID = DB::table('orders')->insertGetId(
        //     $request->all()
        // );

        $orderID = DB::table('orders')
        ->insertGetId(array(
            'cusName' => $request->input('cusName'),
            'phone' => $request->input('phone'),
            'price' => $request->input('price'),
            'people' => $request->input('people'),
            'status' => 0,
            'checkIn' => $request->input('checkIn'),
            'checkOut' => $request->input('checkOut'),
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        ));

        foreach($cart as $value){
            OrderDetail::create(["orderID"=>$orderID,"roomID"=> $value['id'], "qty"=>$value['qty'], "price"=>$value['price']]);
        }
        if($orderID>0){
            session()->flush();
        }
        return json_encode($orderID);
    }
}