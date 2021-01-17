<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Room;

class OrderController extends Controller
{
    public function order()
    {
    	$collection = Order::count();
    	$orders = Order::where('status', 0)->paginate(8);
    	return view('admin.order.order',['orders'=>$orders,'collection'=>$collection,'xacnhan'=>'0','status'=>'Chưa xác nhận']);
    }
    public function xacnhan()
    {
    	$collection = Order::count();
    	$orders = Order::where('status', 1)->paginate(8);
    	return view('admin.order.order',['orders'=>$orders,'collection'=>$collection,'xacnhan'=>'1','status'=>'Đã xác nhận']);
    }
    public function hoanthanh()
    {
    	$collection = Order::count();
    	$orders = Order::where('status', 2)->paginate(8);
    	return view('admin.order.order',['orders'=>$orders,'collection'=>$collection,'xacnhan'=>'2','status'=>'Hoàn thành']);
    }
    public function xemtatca()
    {
    	$collection = Order::count();
    	$orders = Order::orderBy('id', 'DESC')->whereIn('status', [0,1,2,3])->paginate(8);
    	return view('admin.order.order',['orders'=>$orders,'collection'=>$collection,'xacnhan'=>'0,1,2,3','status'=>'Xem lại tất cả']);
    }
    public function dahuy()
    {
    	$collection = Order::count();
    	$orders = Order::where('status', 3)->paginate(8);
    	return view('admin.order.order',['orders'=>$orders,'collection'=>$collection,'xacnhan'=>'3','status'=>'Đã hủy']);
    }

	public function vieworder($id)
	{
		$data = Order::find((int)$id);
        $roomdt =OrderDetail::all();

        if ($data == true) {
            foreach ($data->detail as $room) {
              $name = OrderDetail::find((int)$room->roomID)->name;
              $room->name = $name;
            }
        }
        dd($data->detail);
        return view('admin.order.vieworder',['data1'=>$data->detail,'datacus'=>$data]);
	}

}
