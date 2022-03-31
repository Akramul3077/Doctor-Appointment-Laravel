@extends('layouts.master')
@section('title','Doctor Appointment')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <h5 class="text-info">Doctor Appointment</h5>
      </a>
      
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('doctor') }}">Doctor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('appointment') }}">Appointment</a>
          </li>
          
        </ul>
          
        </ul>
      </div>
    </div>
  </nav>

<!-- Page Content -->
<div class="container" style="padding: 30px; 0;">
  <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h4 >Appointment List</h4>
                    </div>
                    <div  class="col-md-6">
                      <form action="{{ route('search') }}" class="d-flex">
                        <input class="form-control me-2" name="search" type="search" placeholder="Search ">
                        <button class="btn btn-outline-success" type="submit" >Search</button>
                      </form>
                    </div>
                </div>
            </div>
            <div class="panel-body">
           
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>App. No.</th>
                            <th>App. Date</th>
                            <th>Doctor</th>
                            <th>Patient Name</th>
                            <th>Patient Phone</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($doctorAppointments as $appointment)
                            <tr>
                              <td>{{ $appointment->id }}</td>
                              <td>{{ $appointment->appointment_date }}</td>
                              <td>{{ $appointment->name }}</td>
                              <td>{{ $appointment->patient_name }}</td>
                              <td>{{ $appointment->patient_phone }}</td>
                            </tr>
                      @endforeach
                    </tbody>
                </table>
                {{ $doctorAppointments->links() }}
            </div>
        </div>
    </div>
</div>


@endsection










