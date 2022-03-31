@extends('layouts.master')
@section('title','Add Doctor')

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
<div class="container " style="padding: 30px 0;">
    <div class="d-flex justify-content-center">
        <div class="col-md-4 ">
            <h4>Create New Doctor</h4>
            <form action="" method="POST">
                @csrf
                <div class="form-outline ">
                    <label class=""  for="department_id"><h6>Department ID</h6></label>
                    <input type="text" id="department_id" name="department_id" placeholder=" Department ID" id="" class="form-control" />
                </div>
                <div class="form-outline ">
                    <label class="" for="name"><h6>Name</h6></label>
                    <input type="text" id="name" name="name" placeholder=" Name" id="" class="form-control" />
                </div>
                <div class="form-outline ">
                    <label class="" for="phone"><h6>Phone</h6></label>
                    <input type="text" id="phone" name="phone" placeholder=" Phone" id="" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="" for="fee"><h6>Fee</h6></label>
                    <input type="text" id="fee" name="fee" placeholder=" Fee" id="" class="form-control" />
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                </div>
            </form>
        </div>    
    </div>
</div>

@endsection

    












