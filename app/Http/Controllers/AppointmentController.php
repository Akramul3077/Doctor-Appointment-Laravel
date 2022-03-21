<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use App\Models\Appointments;
use Redirect,Response;


class AppointmentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['departments'] = DB::table('departments')->get();

        return view("Appointment",$data);
    }

    

    function getDoctors()
    {
        $id = $_GET['myID'];

        $res = DB::table('departments')
        ->join('doctors','departments.id','=','doctors.department_id')
        ->where('departments.id', $id)
        ->get();

        return Response::json($res);
    }

    function getFee()
    {
        $id = $_GET['myID'];
        $res = DB::table('doctors')
        ->where('doctors.id', $id)
        ->get();

        return Response::json($res);
    }

    public function saveData($appointment_no,$appointment_date,$doctor_id,$patient_name,$patient_phone,$total_fee,$paid_amount){

        $appointment =new Appointment;
        $appointment->appointment_no = $appointment_no;
        $appointment->appointment_date = $appointment_date;
        $appointment->doctor_id = $doctor_id;
        $appointment->patient_name = $patient_name;
        $appointment->patient_phone = $patient_phone;
        $appointment->total_fee = $total_fee;
        $appointment->paid_amount = $paid_amount;
        $appointment->save();
        
        return response()->json(["data"=>"success"]);
        
        
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
