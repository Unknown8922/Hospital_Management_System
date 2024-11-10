<!DOCTYPE html>
<<?php include('doc_details_process.php') ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
</head>
<style> 
        body {
            background-color: #D19BD3; 
        }

        
  .nav-link {
    font-size: 30px;
  }

    .navbar-brand {
    display: flex;
    justify-content: ;
    align-items: center;

}


footer {
            background-color:#5D1E5F;
            color: #fff;
            padding: 20px 0;
            margin-top: 150px;
            
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

 


    </style>

</head>
<div class="container" style="width: 1500px; margin-top:200px";>
  <div class="card">
       <!<img src="images/admin.jpeg" class="card-img-top" width="50px" height="150px">
       
    <div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-2">
         </div>
    <div class="col-md-7">
             <img src="images/med.jpg ">

     </div>
     
     </div>
  </div>
    <div class="card-body">
      <table class="table table-hover">
  <thead>
    <tr>
      
     
      
      <th scope="col">Drug Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Address</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Date</th>
      <th scope="col">Patient Email</th>

      

    </tr>
  </thead>
  <tbody>
    <?php 
      patient_report();  
     ?>
  </tbody>
</table>
      
    </div>
  </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
