<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Session;

class RoomController extends Controller
{
    private $num = 0;

    public function index()
    {
        $rooms = Room::all();
        $room1 = Room::where('capacity', '=',1)->get();
        $room2 = Room::where('capacity', '=',2)->get();
        $room3 = Room::where('capacity', '=',3)->get();
        $room4 = Room::where('capacity', '=',4)->get();
        
        //session()->flush();
        $cart = session()->has('cart') ? session()->get('cart') : [];
        session(['cart' => $cart]);
        
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
    public function postData(Request $request) {

        

        $cart = session()->has('cart') ? session()->get('cart') : [];
        if((int)$request->qty == 0){
            unset($cart[$request->id]);
        }else{
            $room = Room::find((int)$request->id);
            $cart[(int)$request->id] = [
            'id'=>(int)$request->id,
            'name' => $room->name,
            'price' => $room->price,
            'qty' => $request->qty,
            ];
        }
        

        session(['cart' => $cart]);
        //$this->num = $request->qty;
       // $request->session()->put('numRoom','1');
        return json_encode($cart);
    }

    public function getCart(Request $request) {
        session()->flush();
        $cart = session()->has('cart') ? session()->get('cart') : [];
        session(['cart' => $cart]);

        $info = $request->all();
        $cart = session(['cart' => $info]);
        return json_encode($cart);
    }

    public function seeItem(Request $request, $id)
    {
        $rooms = Room::find($id);
        $room1 = [];
        $room2 = [];
        $room3 = [];
        $room4 = [];

        
        $cart = session()->has('cart') ? session()->get('cart') : [];
        session(['cart' => $cart]);
        
        return view('roomInfo', ['rooms'=>$rooms, 'room1'=>$room1, 'room2'=>$room2, 'room3'=>$room3, 'room4'=>$room4]);
    }

}