<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AddDoctor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $doctor =new Doctor;
        $doctor->department_id =$request->department_id;
        $doctor->name =$request->name;
        $doctor->phone =$request->phone;
        $doctor->fee =$request->fee;
        $doctor->save();
        return redirect(route('doctor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor =Doctor::find($id);
        return view('EditDoctor',['doctor'=>$doctor]);
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
        $doctor =Doctor::find($id);
        $doctor->department_id =$request->department_id;
        $doctor->name =$request->name;
        $doctor->phone =$request->phone;
        $doctor->fee =$request->fee;
        $doctor->save();
        return redirect(route('doctor'));
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
        return redirect(route('doctor'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

   

}
