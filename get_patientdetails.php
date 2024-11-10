<!DOCTYPE html>
<<?php include('doc_details_process.php') ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body style="background:url('images/rak.jpg'); no-repeat background-size:cover; opacity: 2 ; ">
<div class="container" style="width: 1000px; margin-top:200px";>
	<div class="card">
       <!<img src="C:\Users\Zoe Mirielle Varma\Downloads\Real_RAK_Hospital\images\RAK Hospital.jpg" class="card-img-top" width="50px" height="150px">
       
		<div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-3">
         <a href="adminpanel.php" class="btn btn-light">Click to go back</a></div>
		<div class="col-md-4">
		<h4> Patient Details</h4> </div>
		 
		 </div>
	</div>
		<div class="card-body">
			<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">RAK NO</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      

    </tr>
  </thead>
  <tbody>
    <?php 
      get_patient_details();  
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