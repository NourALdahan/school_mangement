<?php

namespace App\Http\Controllers;

use App\Models\sesone1;

use Illuminate\Http\Request;

class Sesone1Controller extends Controller
{
    public function index($id){

        $sesone1 = sesone1::where('studant_id', $id)->get();
        return view('sesone1',compact('sesone1'));
    }
}
