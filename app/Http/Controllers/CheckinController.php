<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function index()
    {
        $checkin = session()->has('checkin') ? session()->get('checkin') : [];
        session(['checkin' => $checkin]);
        return view('checkin');
    }
    public function postData(Request $request) {
        $checkin = session()->has('checkin') ? session()->get('checkin') : [];
        $checkin = [
            'dateCheckIn' => $request->dateCheckIn,
            'dateCheckOut' => $request->dateCheckOut,
            'quantity' => $request->qty,
        ];
        session(['checkin' => $checkin]);
        return json_encode(session('checkin'));
    }
}