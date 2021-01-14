<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;

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


    
    #account
     public function account()
    {

    	return view('admin.users.users');
    }

    
}
