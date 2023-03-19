<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\division;
use carbon\carbon;

class uploadData extends Controller
{
    public function uploadData(){
        return view('backend.upload');
    }

    public function uploadDiv(Request $request){
        $validatedData = $request->validate([
            'division' => 'required|min:3',
        ]);
        division::insert([
            'division'=>$request->division,
            'created_at'=> carbon::now()
        ]);
        Toastr::success('Division Uploaded', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
