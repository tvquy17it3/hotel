<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndowController extends Controller
{
    public function index()
    {
        return view('endow');
    }
}