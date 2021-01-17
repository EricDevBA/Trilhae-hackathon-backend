<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(){


    $students = Student::all();
    return view('studentform', compact('students', $students));

    }

    public function create(){
        return view('addstudent');
    }

    public function store(Request $request){
        $request->validate([
            'full_name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'mobile' => 'required'
        ]);
            $students = new Student;
            $students->full_name = $request->input('full_name');
            $students->course = $request->input('course');
            $students->address = $request->input('address');
            $students->mobile = $request->input('mobile');
            $students->save();
            return redirect('students/')->with('success', 'Data added successfully');


    }

    public function show($id){

    }

    public function edit($id){

        $students = Student::find($id);
        return view('studenteditdata',compact('students','id'));

    }

    public function update(Request $request,$id){
        $request->validate([
            'full_name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $students = Student::find($id);
        $students->full_name = $request->input('full_name');
        $students->course = $request->input('course');
        $students->address = $request->input('address');
        $students->mobile = $request->input('mobile');
        $students->save();

        return redirect('/students')->with('success', 'Data updated successfully');

    }


    public function destroy($id){
       $students = Student::find($id);
        $students->delete();

        return redirect('/students')->with('success', 'Data deleted successfully');
    }
















}

