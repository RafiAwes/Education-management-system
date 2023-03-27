<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\department;
use App\section;
use App\course;
use carbon\carbon;

class uploadData extends Controller
{
    public function uploadData(){
        $departments = department::all();
        $courses = course::all();
        return view('backend.upload',compact('departments','courses'));
    }

    public function uploadDep(Request $request){
        $validatedData = $request->validate([
            'department' => 'required|min:3',
        ]);
        department::insert([
            'department'=>$request->department,
            'created_at'=> carbon::now()
        ]);
        Toastr::success('Department Uploaded', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    public function uploadSec(Request $request){

        section::insert([
            'department_id'=>$request->cls_id,
            'course_id'=>$request->crs_id,
            'section'=>$request->section,
            'created_at'=> carbon::now()
        ]);
        Toastr::success('Courses Uploaded', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
    public function uploadCourse(Request $request){

        course::insert([
            'department_id'=>$request->dep_id,
            'course_code'=>$request->crs_code,
            'course_name'=>$request->crs_name,
            'created_at'=> carbon::now()
        ]);
        Toastr::success('Courses Uploaded', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}


