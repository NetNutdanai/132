<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        if($request->hasFile('profile_image')){
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $student->profile_image = $filename;
        }
        $student->save();
        return redirect()->back()->with('status','Student Image Added Succesfully');

    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $request,$id){
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');

        if($request->hasFile('profile_image')){
            $destination = 'uploads/students/'.$student->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $student->profile_image = $filename;
        }
        $student->save();
        return redirect()->back()->with('status','Update Successfully');
    }
}
