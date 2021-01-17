<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(){


        $students = Student::all();
        return view('index', compact('students'));

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
    $storeData = $request->validate([
            'full_name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);

        $students = Student::create($storeData);

            return redirect('/students')->with('completed', 'Student has been saved!');

    }

    public function show($id){

    }

    public function edit($id){

        $students = Student::findOrFail($id);
        return view('edit', compact('students'));

    }

    public function update(Request $request,$id){
      $updateData = $request->validate([
            'full_name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        Student::whereId($id)->update($updateData);


        return redirect('/students')->with('completed', 'Student has been updated');

    }


    public function destroy($id){
        $students = Student::findOrFail($id);
        $students->delete();

        return redirect('/students')->with('completed', 'Student has been deleted');
    }
















}

