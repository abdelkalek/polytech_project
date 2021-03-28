<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function  list_students()
    {
        $all_student = Student::
        join('groups','students.group_id','=','groups.id')->get();
   //    $specific_Student =  Student::where('id','1')->first();

        $specific_Student =  Student::find('1');
        //dd($all_student);
        return view('student', ['all_student'=> $all_student], ['specific_Student'=>$specific_Student]);
    }
}
