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
    public function thongke()
    {
        $collection = Order::count();
        $cxn = Order::where('status', '0')->get();
        $chuaxacnhan =count($cxn);
        $dxn = Order::where('status', '1')->get();
        $daxacnhan = count($dxn);
        $ht = Order::where('status', '2')->get();
        $hoanthanh = count($ht);
        return $data = (['collection'=>$collection,'chuaxacnhan'=>$chuaxacnhan,'daxacnhan'=>$daxacnhan,'hoanthanh'=>$hoanthanh]);
    }

    public function editorder1(Request $request,$id)
    {
        #dd($id);
        return redirect('admin/order');
    }

    #chart

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
        $date1 = explode(' ',$range);
        $dateS = $date1[0];
        return view('admin.chart.year',compact('lb','cl','dt','dateS'));
    }

    public function chart(Request $request)
    {
       $dateInput =  $request->dateS;
          $stats = DB::table('orders')
          ->where('status', 2)
          ->where('checkOut', '>=', $dateInput)
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
        $dateS = $dateInput;
        return view('admin.chart.year',compact('lb','cl','dt','dateS'));
    }


    public function index()
    {   $tk = $this->thongke();
        extract($tk);
        $dateInput =  date('Y-m-d');
        $room = Room::All();
        return view('admin.index',['room'=>$room,'dateS'=> $dateInput,'collection'=>$collection,'chuaxacnhan'=>$chuaxacnhan,'daxacnhan'=>$daxacnhan,'hoanthanh'=>$hoanthanh]);
    }

    public function postTable(Request $request)
    {   $tk = $this->thongke();
        extract($tk);
        $dateInput = $request->dateS;
        $room = Room::All();
        return view('admin.index',['room'=>$room,'dateS'=> $dateInput,'collection'=>$collection,'chuaxacnhan'=>$chuaxacnhan,'daxacnhan'=>$daxacnhan,'hoanthanh'=>$hoanthanh]);
    }

}
