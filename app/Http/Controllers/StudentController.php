<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
    $students = Student::get();
        return view('student.index', compact('students'));
}
    // showing create page
    public function create()
    {
        return view('student.create');
    }

    // store the value
    public function store(Request $request)
    {
        Student::create([
            'name'        => $request->name,
            'student_id' => $request->student_id,
            'cgpa'      => $request->cgpa,
            'age'       => $request->age,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'status'       => $request->status,
        ]);

        return redirect()->route('student.index')
            ->with('message', 'Created Successfully.');
    }
    // showing create page
    public function edit($id)
    {
        $Students = Student::where('id', $id)->first();
        return view('student.edit', compact('student'));
    }

    // store the value
    public function update(Request $request)
    {
        $Students = Student::find($request->id);

            // $category = Category::where('id', $id)->first();
       

        $update = $Students->update([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'cgpa' => $request->cgpa,
            'age' => $request->age,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        if ($update) {
            return redirect()->route('student.index')->with('message', 'Updated Successfully.');
        } else {
            return back()->with('message', 'update failed.');
        }
    }


    public function status($id)
    {
        $Students = Student::where('id', $id)->first();
        if ($Students->status == 1) {
            $Students->update([
                'status' => 0,
            ]);
        } else {
            $Students->update([
                'status' => 1,
            ]);
        }

        if ($Students) {
            return redirect()->route('student.index')->with('message', 'Category update Successfully.');
        } else {
            return back()->with('message', 'Category does not update.');
        }
    }

    public function delete($id)
    {
        $Students = Student::where('id', $id)->delete();
        if ($Students) {
            return redirect()->route('student.index')->with('message', 'delete Successfully.');
        } else {
            return back()->with('message', 'does not create.');
        }
    }
}
