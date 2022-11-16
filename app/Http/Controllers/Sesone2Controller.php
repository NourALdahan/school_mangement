<?php

namespace App\Http\Controllers;

use App\Models\sesone2;
use Illuminate\Http\Request;

class Sesone2Controller extends Controller
{
    public function index($id){

        $sesone1 = sesone2::where('studant_id', $id)->get();

        return view('sesone1',compact('sesone1'));
    }
}
