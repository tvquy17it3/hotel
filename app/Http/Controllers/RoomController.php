<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Session;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $room1 = Room::where('capacity', '=',1)->get();
        $room2 = Room::where('capacity', '=',2)->get();
        $room3 = Room::where('capacity', '=',3)->get();
        $room4 = Room::where('capacity', '=',4)->get();

        Session::put('numRoom',0);
        // foreach($room1 as $value){
        //     if($value->kindOfRoom=='2'){

        //     }
        // }
        return view('slide', ['rooms'=>$rooms, 'room1'=>$room1, 'room2'=>$room2, 'room3'=>$room3, 'room4'=>$room4]);
    }
    // public function store(Request $request){
    //     $selectValue = $request->input('chooseRoom');
    //     Session::put('numRoom',$selectValue);
    // }
    public function Postdata(Request $request) {
        $value = $request->chooseRoom;
        \log($value);
        Session::put('numRoom',$value); 
    }
}