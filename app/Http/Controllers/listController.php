<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\department;
use App\section;
use App\course;
use App\student;
use carbon\carbon;

class listController extends Controller
{

    public function departmentList(){
        $departments = department::all();
        return view('backend.departmentlist', compact('departments'));

    }

    public function courseList($id){
        $courses = course::where('department_id', $id)
        ->get();

        return view('backend.courseList', compact('courses'));
    }

}
