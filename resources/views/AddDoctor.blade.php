
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



    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>











