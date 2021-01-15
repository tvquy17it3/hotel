<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        foreach($cart as $value){
            
        }
        return $checkin['dateCheckIn'] ;
    }
}