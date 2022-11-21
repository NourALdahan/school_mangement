<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Auth ;
use App\Models\studentinfo;


class StudantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth'); // if users login can see it 
    }
    public function index(Request $request)
    {

            $user=Auth::user();
        $id=Auth::id();
        $studant=Student::where('user_id',Auth::id())->get();
        if ($request->accept==1) {
            return view('studentinfo.index')->with('studant',$studant);
           } 
         
        
            else  {
            
      
                return view('student.notyet');
             }
              
              
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_studant' =>  'required',
            'age' =>  'required',
            'certificate' =>  'required|image',
            'Address' =>  'required',
            'photo' =>  'required|image',
            'accept' =>'0'
        ]);
//save photo
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/student',$newPhoto);

        //save certificate
        $certificate = $request->certificate;
        $newPhoto = time().$certificate->getClientOriginalName();
        $certificate->move('uploads/student',$newPhoto);

        $studant= Student::create([
            'user_id' =>  Auth::id(),
            'name_studant' =>  $request->name_studant,
            'age' =>   $request->age,
            'photo' =>  'uploads/student/'.$newPhoto,
            'certificate' =>  'uploads/student/'.$newPhoto,
            'Address' =>   $request->Address,
            'accept'=>'0',
        ]);
        
        
       
        return redirect()->back() ;

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
            
          
               
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Student = Student::where('id', $id)->first();
        return view('studentinfo.edit',compact('Student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        $Student = Student::where('id', $id)->first();
        
        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/student',$newPhoto);
            $posts->photo ='uploads/student/'.$newPhoto ;
        }
        $Student = new  Student;
        $Student->name_studant=$request->name_studant;
        $Student->user_id=Auth::id();
            $Student->age=$request->age;
           
            $Student->certificate=$request->certificate;
            $Student->Address=$request->Address;
            $Student->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
