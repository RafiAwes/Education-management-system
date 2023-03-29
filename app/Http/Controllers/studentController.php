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
use Image;


class studentController extends Controller
{
    public function uploadStudentPage(){
        $departments = department::all();
        $courses = course::all();
        return view('backend.studentUpload',compact('departments','courses'));
    }

    public function admitStudent(Request $request){

        if($request->hasFile('image')){
            //image processing
            $get_image = $request->file('image');
            $image_name = time().'.'. $get_image->getClientOriginalExtension();
            Image::make($get_image)->save('student_image/'.$image_name,100) ;

            //slug
            $without_space = str_replace(' ','-',$request->name);
            $without_slashAndSpace = str_replace('/','-',$without_space);
            $slug = str_replace('.','-',$without_slashAndSpace);

            //inserting data
            student::insert([
                'name' => $request->name,
                'student_id' => $request->id,
                'email' => $request->email,
                'contact_number' => $request->number,
                'department_id' => $request->dep_id,
                'admissiondate' => $request->date,
                'slug' => $slug,
                'image' =>'student_image/'.$image_name,
                'dob' => $request->dob,
                'bloodgroup' => $request->bloodGroup,
                'created_at' => carbon::now(),
            ]);

            Toastr::success('Student Admited', 'Success', ["positionClass" => "toast-top-right"]);
            return back();
        };
    }
    public function studentList()
    {
        $students = DB::table('students')
        ->join('departments','students.department_id','=','departments.id')
        ->select('students.*','departments.department')
        ->orderBy('id','desc')
        ->get() ;
        return view('backend.studentList', compact('students'));
    }
}

