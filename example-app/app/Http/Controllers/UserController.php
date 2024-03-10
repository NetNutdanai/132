<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Users::all();
        return view('student.index', compact('user'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $user = new Users;
        $user->user_fname = $request->input('fname');
        $user->user_lname = $request->input('lname');
        $user->user_role = $request->input('role');
        $user->user_email = $request->input('email');
        $user->user_password = $request->input('password');
        // $user->user_insert_proj = $request->input('course');
        // $user->user_permission = $request->input('course');
        $user->major = $request->input('major');


        $user->save();

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = $user->user_id . '.' . $extension;

            // สร้างไดเรกทอรีด้วย ID ของนักเรียน
            $directory = 'uploads/users/' . $user->user_id;

            // ถ้าไดเรกทอรียังไม่มี
            if (!file_exists($directory)) {
                // สร้างไดเรกทอรี
                mkdir($directory, 0777, true);
            }

            // บันทึกรูปในไดเรกทอรี
            $file->move($directory, $filename);

            // อัพเดทชื่อไฟล์ในฐานข้อมูล
            $user->user_img = $filename;
            $user->save();
        }
        // return redirect()->back()->with('status', 'Student Image Added Succesfully');
        return redirect('http://localhost:8000/students');

    }
}
