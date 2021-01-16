<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\Model\Order;
use DB;
use Carbon\Carbon;

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
   
    public function year()
    {
        $range = Carbon::now()->subDays(30);
        $stats = DB::table('orders')
          ->where('status', 2)
          ->where('checkOut', '>=', $range)
          ->groupBy('date')
          ->orderBy('date', 'ASC')
          ->get([DB::raw('Date(checkOut) as date'),
            DB::raw('sum(price) as sums')
          ])->All();

        $counts = count($stats);
        for ($i=0; $i< $counts; $i++) {
            $cl[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
    
        for ($i=0; $i<$counts ; $i++) { 
           $lb[] = $stats[$i]->date;
           $dt[] = $stats[$i]->sums;
        }
        if ($counts==0) {
          return view('admin.chart.nochart');
        }
        return view('admin.chart.year',compact('lb','cl','dt'));
    }

     public function week()
    {
        $range = Carbon::now()->subDays(7);
        $stats = DB::table('orders')
          ->where('status', 2)
          ->where('checkOut', '>=', $range)
          ->groupBy('date')
          ->orderBy('date', 'ASC')
          ->get([DB::raw('Date(checkOut) as date'),
            DB::raw('sum(price) as sums')
          ])->All();

        $counts = count($stats);
        for ($i=0; $i< $counts; $i++) {
            $cl[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
    
        for ($i=0; $i<$counts ; $i++) { 
           $lb[] = $stats[$i]->date;
           $dt[] = $stats[$i]->sums;
        }
        if ($counts==0) {
          return view('admin.chart.nochart');
        }
        return view('admin.chart.week',compact('lb','cl','dt'));
    }

}


