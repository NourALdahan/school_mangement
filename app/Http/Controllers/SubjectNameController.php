<?php

namespace App\Http\Controllers;

use App\Models\subject_name;
use Illuminate\Http\Request;

class SubjectNameController extends Controller
{
    public function index($id){
        $sub=subject_name::where('book_id',$id);
        return view('sub',compact('sub'));

    }
    public function donlowd($id){
        $don=subject_name::where('id',$id);

        return url($don->url);


    }
}

