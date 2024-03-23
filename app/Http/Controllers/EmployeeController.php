<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
        'list' =>DB::table('employees')->get()

        );
        return view('mytemplate.home',$data);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    // return $request->input();
        $request->validate([  
            'name'=>'required',  
            'address'=>'required',  
            'mobile_num'=>'required:employees',  
        ]);  
  $query = DB::table('employees')->insert([
  'name'=>$request->input('name'),
  'address'=>$request->input('address'),
  'mobile_num'=>$request->input('mobile_num')

  ]);
 if($query){
    return back()->with('success','data inserted successfully');
    
 }  
 else{
    return back()->with('failed','data inserted failed');

 }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //    echo $id;
    $row = DB::table('employees')->where('id','$id')->first();
    $data = [
'Info'=> $row,'Title'=>'Edit'


    ];
    return view('mytemplate.edit',$data);
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
        //
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
