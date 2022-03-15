
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Doctor Appointment</title>


    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .sclist{
            list-style: none;
        }
        .sclist li{
            line-height: 33px;
             
        }
        .slink{
            font-size: 18px;
            margin-left: 10px;
        }
    </style>

</head>
  <body>
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
                
            </div>
        </div>
    </div>
</div>



    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>










