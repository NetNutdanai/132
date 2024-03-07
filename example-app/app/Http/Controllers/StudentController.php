<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
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

        $student->save();

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = $student->id . '.' . $extension;

            // สร้างไดเรกทอรีด้วย ID ของนักเรียน
            $directory = 'uploads/students/' . $student->id;

            // ถ้าไดเรกทอรียังไม่มี
            if (!file_exists($directory)) {
                // สร้างไดเรกทอรี
                mkdir($directory, 0777, true);
            }

            // บันทึกรูปในไดเรกทอรี
            $file->move($directory, $filename);

            // อัพเดทชื่อไฟล์ในฐานข้อมูล
            $student->profile_image = $filename;
            $student->save();
        }
        return redirect()->back()->with('status', 'Student Image Added Succesfully');

    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {

        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->course = $request->input('course');

        if ($request->hasFile('profile_image')) {
            $destination = 'uploads/students/' . $student->id . '/' . $student->profile_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = $student->id . '.' . $extension;
            $file->move('uploads/students/' . $student->id, $filename);
            $student->profile_image = $filename;
        }
        $student->save();
        Alert::success('Edit Success');
        return redirect('http://localhost:8000/students');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $destination = 'uploads/students/' . $student->id . '/' . $student->profile_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back()->with('status', 'Image Deleted Successfully');
    }
}
