
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
                        <h4 >Doctor List</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('doctor.add') }}" class="btn btn-primary pull-right">Add New</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
           
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Dept. ID</th>
                            <th>Name</th>
                            <th>Phone </th>
                            <th>Fee</th>
                            <th class="d-flex justify-content-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->id }}</td>
                            <td>{{ $doctor->department_id }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->fee }}</td>
                            <td class="d-flex justify-content-center"><a href="{{ url('/edit',$doctor->id) }}"><i class="fa fa-edit fa-lg"></i></a> <a href="{{ url('/delete',$doctor->id) }}"><i class="fa fa-solid fa-trash fa-lg text-danger ml-2 ps-2"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $doctors->links() }}
            </div>
        </div>
    </div>
</div>



@endsection






