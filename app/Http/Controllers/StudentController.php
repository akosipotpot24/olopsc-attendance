<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function delete(Student $value){
        $value -> delete();
        return redirect("/1");
    }
    public function edit1(Student $value, Request $req){
        $values = $req->validate([
            'fullname' => 'required',
            'stud_number' => 'required',
            'email' => 'email',
            'grade_level' => 'required'
        ]);

        $value->update($values);
        return redirect('/1');

    }
    public function edit(Student $value){
        return view('edit',['value'=> $value]);
    }
    public function student_register(Request $req){
        $values = $req->validate([
            'fullname' => 'required',
            'stud_number' => 'required',
            'email' => 'email',
            'grade_level' => 'required'
        ]);

        $values['fullname'] = strip_tags($values['fullname']);
        $values['stud_number'] = strip_tags($values['stud_number']);
        $values['email'] = strip_tags($values['email']);
        $values['grade_level'] = strip_tags($values['grade_level']);

        Student::create($values);

        return redirect('/2');
    }
}
