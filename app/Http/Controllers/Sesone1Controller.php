<?php

namespace App\Http\Controllers;

use App\Models\sesone1;
use App\Models\studant;
use Illuminate\Http\Request;

class Sesone1Controller extends Controller
{
    public function index($id){

        $sesone1 = sesone1::where('studant_id', $id)->get();

        $studant=studant::where('id',$id)->first();
        $phot=$studant->photo;
        $avg=sesone1::Where('studant_id', $id)->pluck('value')->avg();

        return view('sesone1',compact('sesone1'),compact('phot'),compact('avg'));

    }
}
