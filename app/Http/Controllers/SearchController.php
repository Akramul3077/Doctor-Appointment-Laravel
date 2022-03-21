<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorAppointment;
use App\Models\Appointments;
use App\Models\Doctor;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $doctorAppointments = DB::table('appointments')
            ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'doctors.name')
            ->orderBy('id','DESC')
            ->paginate(10);



        $search =$request['search']?? "";
        if($search !=""){
            $doctorAppointments = DB::table('appointments')
            ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'doctors.name')
            ->Where('appointment_no','LIKE',"%$search%")
            ->orWhere('appointment_date','LIKE',"$search")
            ->orWhere('doctors.name','LIKE',"%$search%")
            ->orWhere('patient_name','LIKE',"%$search%")
            ->orWhere('patient_phone','LIKE',"$search")
            ->orderBy('id','DESC')
            ->paginate(10);
        }else{

             return view('DoctorAppointment',['doctorAppointments'=>$doctorAppointments]);
        }
        
        
        $data =compact('search','doctorAppointments');
        return view('DoctorAppointment')->with($data);


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
