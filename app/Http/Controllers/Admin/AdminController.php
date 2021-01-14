<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\Model\Order;
use DB;
class AdminController extends Controller
{
     public function index()
    {
        $dateInput =  date('Y-m-d');
        $room = Room::All();
        return view('admin.index',['room'=>$room,'dateS'=> $dateInput]);
    }

    #order
    public function order()
    {

    	return view('admin.order.order');
    }
    public function addorder()
    {
    	
    	return view('admin.order.addorder');
    }
    public function success()
    {
    	
    	return view('admin.order.success1');
    }
    public function huy()
    {
    	
    	return view('admin.order.huy');
    }
    public function editorder()
    {
        return view('admin.order.editorder');
    }
    public function editorder1(Request $request,$id)
    {
        #dd($id);
        return redirect('admin/order');
    }

    #chart
    public function week()
    {
        $groups = DB::table('orders')
                  ->select('price', DB::raw('count(*) as total'))
                  ->groupBy('price')
                  ->pluck('total', 'price')->all();
        // $ord = Order::WhereYear('created_at', date('Y-m-d'))->get();
        for ($i=0; $i<=count($groups); $i++) {
            $cl[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        $lb = (array_keys($groups));
        $dt = (array_values($groups));
        return view('admin.chart.week',compact('lb','cl','dt'));
    }
    public function year()
    {
       
        return view('admin.chart.year');
    }
    
}