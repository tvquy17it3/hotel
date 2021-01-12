<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
class UserController extends Controller
{
     #account
    public function accounts()
    {

    	$accounts = User::orderBy('id', 'ASC')->paginate(8);
        return view('admin.users.users',['accounts'=>$accounts]);
    }

    public function blocks()
    {

    	$accounts = User::orderBy('id', 'ASC')->Where('role', 4)->paginate(8);
        return view('admin.users.blocks',['accounts'=>$accounts]);
    }
    public function position(Request $request)
    {
    	 $validator = Validator::make($request->all(), [ 
              'id' => 'required|integer', 
              'role' => 'required'
            ]);
            if ($validator->fails()) { 
                return redirect()->back();        
        }
        $ldate = date('Y-m-d H:i:s');
        $user = User::find($request->id);
        $user->role = $request->role;
        $user->updated_at = $ldate;
        $user->save();
        return redirect()->back();
    }

    public function block($id)
    {
        $ldate = date('Y-m-d H:i:s');
        $user = User::find($id);
        $user->role = 4;
        $user->updated_at = $ldate;
        $user->save();
        return redirect()->back();
    }
}
