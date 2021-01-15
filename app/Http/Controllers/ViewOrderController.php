<?php

namespace App\Http\Controllers;
use App\Order;
use App\OrderDetail;
use App\Room;

use Illuminate\Http\Request;

class ViewOrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        //$name = '';

        foreach($order as $value){
            $orderDetail = OrderDetail::where('orderID', '=',$value->id)->get();
            foreach($orderDetail as $detail){
                $detailInfo = Room::find($detail->roomID);
                $detail->name = $detailInfo->name;
                $detail->capacity = $detailInfo->capacity;
            }
            $value->orderDetail = $orderDetail;
            //$value->name = 'a';
        }
        return view('vieworder',['order'=>$order]);
    }
}