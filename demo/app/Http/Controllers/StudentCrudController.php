<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        $data=compact('students');

        // echo "<pre>";
        // print_r($students);

        return view('Container.allStudent')->with($data);
    }
    public function form(){
        return view('Container.form');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'create';
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'age'=>'required|numeric',
            'phno'=>'required',
            'email'=>'required|email',
            'class'=>'required',
        ]);
        // echo '<pre>';
        // print_r($request->all());
        $student=new Student;
        $student->fname=$request['fname'];
        $student->email=$request['email'];
        $student->phno=$request['phno'];
        $student->class=$request['class'];
        $student->age=$request['age'];
        $student->save();
        return redirect('/');
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
        $data=Student::find($id);
        return view('Container.Edit',compact('data'));
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
        $request->validate([
            'fname'=>'required',
            'age'=>'required|numeric',
            'phno'=>'required',
            'email'=>'required|email',
            'class'=>'required',
        ]);
        // echo $id.'<br>';
        // print_r($request->all());
        $Update_data=Student::find($id);
        $Update_data->fname=$request['fname'];
        $Update_data->email=$request['email'];
        $Update_data->phno=$request['phno'];
        $Update_data->class=$request['class'];
        $Update_data->age=$request['age'];
        $Update_data->save();
        return redirect('/');
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
