<?php

namespace App\Http\Controllers;

use App\Models\sesone2;
use App\Models\studant;
use Illuminate\Http\Request;

class Sesone2Controller extends Controller
{
    public function index($id){

        $sesone1 = sesone2::where('studant_id', $id)->get();

        $studant=studant::where('id',$id)->first();
        $phot=$studant->photo;
        $avg=sesone2::Where('studant_id', $id)->pluck('value')->avg();
        return view('sesone1',compact('sesone1'),compact('phot'),compact('avg'));
    }
}
