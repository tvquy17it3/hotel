<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     public function index()
    {
    
        return view('admin.index');
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
    

    #room
    public function room()
    {

    	return view('admin.room.room');
    }

    #account
     public function account()
    {

    	return view('admin.users.users');
    }

    
}
