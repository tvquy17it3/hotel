<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use Validator;

class RoomController extends Controller
{
     public function room()
    {
    	$room = Room::paginate(8);
        return view('admin.room.room',['room'=>$room]);
    }
    public function roomVip()
    {
    	$room = Room::orderBy('id', 'ASC')->whereIn('kindOfRooms', [1])->paginate(8);
        return view('admin.room.room',['room'=>$room]);
    }
    public function roomThuong()
    {
    	$room = Room::orderBy('id', 'ASC')->whereIn('kindOfRooms',[2])->paginate(8);
        return view('admin.room.room',['room'=>$room]);
    }

    
    public function editroom($id)
    {
    	$room = Room::find((integer)$id);
        return view('admin.room.editroom', ['room'=>$room]);
    }
    public function addroom()
    {
    	return view('admin.room.addroom');
    }
    public function store(Request $request)
    {
    	$room = new Room();
       	$room->name = $request->name;
       	$room->number = $request->number;
       	$room->kindOfRooms = $request->kindOfRooms;
       	$room->price = $request->price;
		$room->capacity = $request->capacity;
		$room->status = $request->status;

        $rules = [ 'image' => 'mimes:jpeg,jpg,png,tiff,raw|max:6086' ]; 
        $posts = [ 'image' => $request->file('file') ];
        $valid = Validator::make($posts, $rules);
        
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        else {
            if ($request->file('file')->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('file')->getClientOriginalExtension(); // Lấy . của file
                $fileName = time() . "_" . rand(0,9999999) . "." . $fileExtension;
                $uploadPath = public_path('img');
                $request->file('file')->move($uploadPath, $fileName);
                $room->img = "public/img/".$fileName;
                $room->save();
                return redirect()->back()->with('success', 'Upload files thành công!');
            }
            else {
                return redirect()->back()->with('error', 'Upload files thất bại!');
            }
        }

    }

    public function update(Request $request,$id)
    {	
    	$ldate = date('Y-m-d H:i:s');
    	$room = Room::find($id);
       	$room->name = $request->name;
       	$room->number = $request->number;
       	$room->kindOfRooms = $request->kindOfRooms;
       	$room->price = $request->price;
		$room->capacity = $request->capacity;
		$room->status = $request->status;
		$room->updated_at = $ldate;
        $room->save();
        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }

    public function upload(Request $request,$id)
    {   
        $rules = [ 'image' => 'mimes:jpeg,jpg,png|max:6086' ]; 
        $posts = [ 'image' => $request->file('file') ];
        $valid = Validator::make($posts, $rules);
        
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        else {
            // Ko có lỗi, kiểm tra nếu file đã dc upload
            if ($request->file('file')->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('file')->getClientOriginalExtension(); // Lấy . của file
                
                $fileName = time() . "_" . rand(0,9999999) . "." . $fileExtension;

                $uploadPath = public_path('img');
                $request->file('file')->move($uploadPath, $fileName);

                $img = "public/img/".$fileName;
                $ldate = date('Y-m-d H:i:s');
                $room = Room::find($id);
                $room->img = $img;
                $room->updated_at = $ldate;
                $room->save();
                return redirect()->back()->with('success', 'Upload files thành công!');
            }
            else {
                return redirect()->back()->with('error', 'Upload files thất bại!');
            }
        }
       
    }

    public function delete($id)
    {     
        $id= (integer)$id;
        $del=Room::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }

}