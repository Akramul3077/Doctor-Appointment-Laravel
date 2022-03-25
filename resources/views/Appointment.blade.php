
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    



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
                        <form class="form-horizontal" id="form_id">
                            <div class="form-group">
                                <label for="" class="control-label mt-5"><h6>Appointment Date</h6></label>
                                <input type="datetime-local" id="date_id" placeholder=" mm / dd / yyyy" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label mt-3"><h6>Select Department</h6></label>
                                <div class="control-label mt-3">
                                    <select class="form-select" id="departments_id" aria-label="Default select example" disabled>
                                        <option> ---Select---</option>
                                        @foreach($departments as $row)
                                            <option value={{$row->id}}>{{$row->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label mt-3"><h6>Select Doctor</h6></label>
                                <div class="control-label mt-3">
                                    <select class="form-select" id="doctors_id" aria-label="Default select example" disabled>
                                      <option > ---Select---</option>

                                    </select>
                                </div>
                            </div>
                            <div>
                                <p class="text-success" id="Available" >
                                    Available
                                </p>
                                <p class="text-danger" id="NotAvailable" >
                                    Not Available
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label mt-3" ><h6>Fee</h6></label>
                                <input type="text" id="fee_id" value="" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="" class=" control-label"></label>
                                <div>
                                    <button type="submit" id="add_id" class="btn btn-success" disabled>Add</button>
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
                            <table class="table table-bordered border-white mt-5 text-white" id="tblData">
                                <thead>
                                   <th class="text-center">SN</th>
                                   <th>App. Date</th> 
                                   <th>Doctor</th> 
                                   <th class="text-center">Fee</th>
                                   <th class="text-center">Action</th>  
                                </thead>
                                <tbody id="table_body">
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer" style="position:relative; margin-top: 95px;">
                            <div class="panel-body bg-white  ">
                                <div class="panel panel-default">
                                    <div class="panel-body ">
                                        <div class="row mx-1">
                                            <form name="contact" onsubmit="return submitData()" id="contactForm">
                                                
                                                <div class="form-group ">
                                                    <label for="" class="control-label pt-3"><h6>Patient Information</h6></label>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="patient_name" placeholder=" Patient Name" class="form-control" />
                                                          </div>
                                                        </div>
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="patient_phone" placeholder=" Patient Phone" class="form-control" />
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="" class="control-label "><h6>Payment</h6></label>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="total_fee" placeholder=" Total Fee" class="form-control" />
                                                          </div>
                                                        </div>
                                                        <div class="col">
                                                          <div class="form-outline">
                                                            <input type="text" id="paid_amount" placeholder=" Paid Amount" class="form-control" />
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block mb-4 form-control btn-submit">SUBMIT</button>
                                                {{-- <button type="submit" class="btn btn-block btn-info btn-sm">Save</button> --}}
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    // ==========available hide==========
    $(document).ready(function() {
        $('#Available').hide();
        $('#NotAvailable').hide();
        
    });

    // ==========Date Formating============
    config={
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=datetime-local]", config);


    $("#date_id").on("change",function(){
        var selected = $(this).val();
        $('#departments_id').prop('disabled', false);
    });



</script>





<script>
    

    

    // ========Get doctor  List ===========
    
    $(document).ready(function(){
        $('#departments_id').change(function(){
           var dept_id = $('#departments_id').val();
           
           $('#doctors_id').html('');

            $.ajax({
              url:'/appointment/getDoctors/{id}',
              type:'GET',
              data:{myID:dept_id},
              dataType: "json",
              success:function(data)
              {
                $('#doctors_id').append('<option > ---Select---</option>');
                $.each(data, function(key, doctors)
                 {  
                     var doctorName =doctors.name;   
                //   alert(doctors.name)
                  $('#doctors_id').prop('disabled', false).css('background','aliceblue').append('<option value="'+doctors.id+'" data-name="'+doctorName+'">'+doctorName+'</option>');
                
                    $('#doctors_id').change(function () {
                        // ========Doctor name globale decleare================
                        window.DoctorGlobalVariable = $(this).find('option:selected').attr('data-name');
                        // alert(doctor);

                    });
        
                });
              }
          });
        });
    });
    </script>
    <script>
    // ==========Get fee  ==============
    $(document).ready(function(){
        $('#doctors_id').change(function(){
           var doct_id = $('#doctors_id').val();
           var date_id_date =$('#date_id').val();
        //    alert(date_id_date);

           $('#fee_id').html('');
            $.ajax({
              url:'/appointment/getFee/{id}',
              type:'GET',
              data:{myID:doct_id,myDate:date_id_date},
              dataType: "json",
              success:function(data)
              {
                //   alert(data);
                  if(data == 2){
                    $('#NotAvailable').show();
                    $('#Available').hide();
                  }else{
                    $.each(data, function(key, doctors)
                    {
                    $('#NotAvailable').hide(); 
                    $('#Available').show();  
                    $('#fee_id').prop('disabled', false);
                    $('#fee_id').val(doctors.fee);
                    $('#add_id').prop('disabled', false);
                    });
                  }

              }
          });
        });
    });
    
</script>
<script>
    //  ===============Dynamic Data Add Table==================== 

    const formEl = document.getElementById("form_id");
    const tbodyEl = document.getElementById("table_body");
    const tableEl = document.getElementById("tblData");
    var sn =0;

    

    function onAddWebsite(e) {
        e.preventDefault();
        const date = document.getElementById("date_id").value;
        const fee = document.getElementById("fee_id").value;
        const doctor_name =DoctorGlobalVariable;
        
        sn =sn + 1;
        tbodyEl.innerHTML += `
          <tr>
                <td class="text-center">${sn}</td>
                <td>${date}</td>
                <td>${doctor_name}</td>
                <td class="text-end">${fee}</td>
              <td class="text-center"><button class="deleteBtn fa fa-solid fa-trash  text-danger" style="background: #6C757D; border:none;"></button></td>
          </tr>
      `;
    }

    function onDeleteRow(e) {
      if (!e.target.classList.contains("deleteBtn")) {
        return;
      }
      sn =sn -1;
      const btn = e.target;
      btn.closest("tr").remove();
    }

    formEl.addEventListener("submit", onAddWebsite);
    tableEl.addEventListener("click", onDeleteRow);
  

</script>
      {{-- ================data submit================= --}}
<script>
    function submitData(){

        var appointment_no =Date.now();
        var appointment_date =document.getElementById("date_id").value;
        var doctor_id=document.getElementById("doctors_id").value;
        var patient_name =document.getElementById("patient_name").value;
        var patient_phone =document.getElementById("patient_phone").value;
        var total_fee =document.getElementById("total_fee").value;
        var paid_amount =document.getElementById("paid_amount").value;

        // alert(appointment_no+" "+appointment_date+" "+doctor_id+" "+patient_name+" "+patient_phone+" "+total_fee+" "+paid_amount);

        if(total_fee==paid_amount){
            var req =new XMLHttpRequest();

            req.open("GET","/save-data/"+appointment_no+"/"+appointment_date+"/"+doctor_id+"/"+patient_name+"/"+patient_phone+"/"+total_fee+"/"+paid_amount,true);
            req.send();

            req.onreadystatechange =function(){
                if(req.readyState == 4 && req.status ==200){
                    var obj =JSON.parse(req.responseText);

                    window.location.reload();
                    alert("Submit Successfully !!!");
                }
            };
        }else{
            alert('Please Enter a Valid Amount.');
        }


        



        return false;
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>











