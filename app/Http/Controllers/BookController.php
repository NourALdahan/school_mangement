<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function indes(){
        $book=book::all();
        return view('book');


    }
}
