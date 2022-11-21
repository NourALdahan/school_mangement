<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth ;
use App\Models\slider;
class SliderController extends Controller
{
    
    public function index(Request $request)
    {

           
          
              
        
        
    }
    public function create()
    {
        return view('slider.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,['photo' =>  'required|image', 'name' =>  'required' ]);
        //save photo
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads1/slider',$newPhoto);
        
        $slider= slider::create([
            
            'photo' =>  'uploads1/slider/'.$newPhoto,
            'name' =>  $request->name,
            
        ]);
}


}