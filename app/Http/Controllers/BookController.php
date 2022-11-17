<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\slider;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function indes(){
        $book=book::all();

        $silder=slider::all();
        return view('book',compact('book'),compact('silder'));


    }
}
