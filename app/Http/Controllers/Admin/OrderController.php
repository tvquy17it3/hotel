<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Room;
use Validator;
use Auth;

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
        $roomdt = OrderDetail::all();
        $nameRoom =Room::all();

        if ($data == true) {
            foreach ($data->detail as $room) {
              $name = Room::find((int)$room->roomID)->name;
              $number = Room::find((int)$room->roomID)->number;
              $room->name = $name;
              $room->number=$number;
            }
        }
        // dd($data->detail);
        return view('admin.order.vieworder',['dataRoom'=>$data->detail,'dataCus'=>$data,'orderID'=>$id,'nameRoom'=>$nameRoom]);
	}
	public function editstatus(Request $request)
    {
        $id = $request->id;
        $ldate = date('Y-m-d H:i:s');
        $data = Order::find((int)$id);
        $data->status=$request->status;
        $data->updated_at = $ldate;
        $data->save();
        return redirect()->back();
    }
    public function thanhtoan(Request $request )
    {   
        $ldate = date('Y-m-d H:i:s');
        $data = Order::find((int)$request->id);
        $data->status= 2;
        $data->price=$request->tongtien;
        $data->updated_at = $ldate;
        $data->save();
        return redirect()->back()->with('success', 'Đã thanh toán thành công!');
    }

    public function addrooms(Request $request)
    {
         $validator = Validator::make($request->input(), array(
            'orderID' => 'required',
            'roomID' => 'required',
            'soluong' => 'required',
        ));
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }
        $order = new OrderDetail();
        $order->orderID=$request->orderID;
        $order->roomID = $request->roomID;
        $order->qty = $request->soluong;
        $prices = Room::find((int)$request->roomID)->price;
        $order->price = $prices;
        $order->save();
        return response()->json([
            'error' => false,
            'room'  => $order,
        ], 200);
    }
    public function show($id)
    {
        $order = OrderDetail::find($id);
        $name = Room::find((int)$order->roomID)->name;
        return response()->json([
            'error' => false,
            'task'  => $order,
            'nameroom' =>$name
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'task' => 'required',
            'soluong' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $task = OrderDetail::find($id);
        $task->qty = $request->input('soluong');
        $task->save();
        return response()->json([
            'error' => false,
            'task'  => $task,
        ], 200);
    }

    public function destroy($id)
    {
    	// $order = OrderDetail::find($id);
        $task = OrderDetail::destroy($id);
        return response()->json([
            'error' => false,
            'ids' =>$id,
            'task'  => $task,
        ], 200);
    }

     public function huyorder($id)
    {
        $ldate = date('Y-m-d H:i:s');
        $data = Order::find((int)$id);
        $data->status= 3;
        $data->updated_at = $ldate;
        $data->save();

        return response()->json([
            'error' => false,
            'task'  => $data,
        ], 200);
    }
    public function hoadon($id)
    {
 
        $date = date('Y-m-d H:i:s');
        $nameA = Auth::user()->name;
        $data = Order::find((int)$id);
        $roomdt = OrderDetail::all();

        if ($data == true) {
            foreach ($data->detail as $room) {
              $name = Room::find((int)$room->roomID)->name;
              $number = Room::find((int)$room->roomID)->number;
              $room->name = $name;
              $room->number=$number;
            }
        }
        // dd($data->detail);
        return view('admin.order.hoadon',['dataRoom'=>$data->detail,'dataCus'=>$data,'orderID'=>$id,'stt'=> 1,'tongsotien'=>0,'date'=>$date,'nameA'=>$nameA]);
    }

}