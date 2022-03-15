
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
<div class="container">
    <div class="row">
        <div class="col-md-6" style="background: #EFEFEF;">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="control-label mt-5"><h6>Appointment Date</h6></label>
                                <input type="text" placeholder=" mm / dd / yyyy" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label mt-3"><h6>Select Department</h6></label>
                                <div class="control-label mt-3">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected> ---Select---</option>
                                      <option value="1">Family practice physician</option>
                                      <option value="2">Internal medicine physician</option>
                                      <option value="3">Family medicine vs. internal medicine physicians</option>
                                      <option value="4">Pediatricians</option>
                                      <option value="5">Geriatric medicine</option>
                                      <option value="6">Specialty</option>
                                      <option value="7">Allergists</option>
                                      <option value="8">Dermatologists</option>
                                      <option value="9">Infectious disease doctors</option>
                                      <option value="10">Ophthalmologists</option>
                                      <option value="11">Obstetrician/gynecologists</option>
                                      <option value="12">Cardiologists</option>
                                      <option value="13">Endocrinologists</option>
                                      <option value="14">Gastroenterologists</option>
                                      <option value="15">Nephrologists</option>
                                      <option value="16">Urologists</option>
                                      <option value="17">Pulmonologists</option>
                                      <option value="18">Otolaryngologists</option>
                                      <option value="19">Neurologists</option>
                                      <option value="20">Psychiatrists</option>
                                      <option value="21">Oncologists</option>
                                      <option value="22">Radiologists</option>
                                      <option value="23">Rheumatologists</option>
                                      <option value="24">General surgeons</option>
                                      <option value="25">Orthopedic surgeons</option>
                                      <option value="26">Cardiac surgeons</option>
                                      <option value="27">Anesthesiologists</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label mt-3"><h6>Select Doctor</h6></label>
                                <div class="control-label mt-3">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected> ---Select---</option>
                                      <option value="1">Habib</option>
                                      <option value="2">Rana</option>
                                      <option value="3">Sakib</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-success">Available</h6>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label mt-3"><h6>Fee</h6></label>
                                <input type="text"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class=" control-label"></label>
                                <div>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div >

                            <div class="control-label mt-5">
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-6" style="background: #6C757D;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default ">
                            <div class="panel-body">
                            <table class="table table-bordered border-white mt-5 text-white">
                                <thead>
                                   <th class="text-center">SN</th>
                                   <th>App. Date</th> 
                                   <th>Doctor</th> 
                                   <th class="text-center">Fee</th>
                                   <th class="text-center">Action</th>  
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>2022-03-01</td>
                                        <td>Dr. Jhon Doc</td>
                                        <td class="text-end">550</td>
                                        <td class="text-center"><a href=""><i class="fa fa-solid fa-trash fa-lg text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>2022-03-05</td>
                                        <td>Dr. Finch</td>
                                        <td class="text-end">450</td>
                                        <td class="text-center"><a href=""><i class="fa fa-solid fa-trash fa-lg text-danger"></i></a></td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer" style="position:relative; margin-top: 95px;">
                            <div class="panel-body bg-white  ">
                                <div class="panel panel-default">
                                    <div class="panel-body ">
                                        <div class="row mx-1">
                                            <form class="form-horizontal ">
                                                <div class="form-group ">
                                                    <label for="" class="control-label pt-3"><h6>Patient Information</h6></label>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="form3Example1" placeholder=" Patient Name" class="form-control" />
                                                          </div>
                                                        </div>
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="form3Example2" placeholder=" Patient Phone" class="form-control" />
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="" class="control-label "><h6>Payment</h6></label>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="form3Example1" placeholder=" Total Fee" class="form-control" />
                                                          </div>
                                                        </div>
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="form3Example2" placeholder=" Paid Amount" class="form-control" />
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block mb-4 form-control">SUBMIT</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>











