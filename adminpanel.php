<?php
//session_start();
//require("staffvalidate.php");
//if (!isset($_SESSION['loggedin'])){ 
	//echo "logged out";
	//header('Location: adminlogin.php');
	//exit();


require('cons.php');
require('adminvalidate.php'); 
      $var1 ='';
      $var1 = $_SESSION['aname'] ;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
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
            width: 10000px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

 


    </style>

</head>
<body>

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/real_logo.jpg" width="200" height="100" class="d-inline-block align-top" >
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/RAK_Hospital/"  style= "color: #5D1E5F;"> Home Page</a>
                </li>
               
             
               
                
            </ul>
        </div>
    </nav>
</body>
<body>
	

	<div class="container-fluid">

<div class="row">
	<div class="col-md-3">
	
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"></a>
                      
					</div>
					

					<div class="col-md-5">
						 <?php
                   // session_start();
                    //require('adminvalidate.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['aname'] ;
                    ?>


           <marquee><h1 align="right">WELCOME <?php echo $var1 ?> </h1></marquee>
					
					</div>


</div>
</div>
		<div class="container-fluid">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color:#5D1E5F; color: white; border-color: #5D1E5F;"><h3 align="center">Registrations</h3>

					<a href="" class="list-group-item action">Register Doctor</a>
					<a href="patient.php" class="list-group-item action">Register Patient</a>
					<a href="pharmacistreg.php" class="list-group-item action">Register Pharmacist</a>
					<a href="patappoint.php" class="list-group-item action">Make Appointment</a>
					<a href="add_drug.php" class="list-group-item action">Add drugs</a>
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color:#5D1E5F;"><h3 align="center">View Details</h3>
					<a href="doctor_details.php" class="list-group-item action">View Doctors Details</a>

					<a href="view_patientdetails.php" class="list-group-item action">View Patients Details</a>

					<a href="all_appointment.php" class="list-group-item action">View Appointment</a>

					<a href="viewdrug.php" class="list-group-item action">View Drug Orders</a>
				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #5D1E5F; color: white; text-align: center;";>
				<div class="dropdown">
				<h5>Doctor Registration </h5> </div></div>
				<div class="card-body" >
					<form class="form-group" action="doctorreg.php" method="POST" enctype="multipart/form-data">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
						<label>Phone Number</label>
						<input type="text" name="number" class="form-control" required>
						<label>Email</label>
						<input type="text" name="email" class="form-control" required="number"><br>
						<label>Speciality</label>
						<select class="form-control" name="speciality">
							<option>Select...</option>
							<option>Accidents</option>
							<option>Cardiology</option>
							<option>Dentist</option>
							<option>Dermatology</option>
							<option>Surgery</option>
						</select>
                        <label>Profile</label>
						<input type="text" name="profile"  class="form-control" required><br>

						<label>Password</label>
						<input type="password" name="password" id="pass" class="form-control" required><br>

						<label>Image</label>
						<input type="file" name="image" class="form-control" required><br>
						<center> <input type="submit" name="doctorreg" value="Register Doctor" class="btn btn-primary" style="background-color: #9C449D;"></center>

					</form>
				</div>
			</div>
		</div>
            
            <div class="col-md-3">
				
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #5D1E5F;"><h3 align="center">Other</h3>
					
					<a href="logout.php" class="list-group-item action">Log Out</a>
					
					
				</div>
			</div>

			<footer id="footer" class="5D1E5F">
    <div class="container" style="width: 500px; margin-top: 150px;">
        <div class="row">
            <div class="col-sm-12">
                <center> Medical Appointment System. &copy; <?= date('Y'); ?>. All Rights Reserved.</center>

                <div style="text-align: right;">
                    <a href="https://www.facebook.com/RakHospital/">Facebook</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/rakhospital/?hl=en">Instagram</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="https://www.youtube.com/channel/UCg-wsVDqLRGcWUQptEHRdSw">Youtube</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/company/arabian-health-care-llc/">Linkedin</a>
                </div>
            </div>
        </div>
    </div>
</footer><!--/#footer-->


		<div class="col-md-1">
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
});
</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				  Swal.fire({
				  title: 'Welcome Admin',
				  text: 'Enjoy your operations',
				  imageUrl: 'images/logo.jpg',
				  imageWidth: 200,
				  imageHeight: 100,
				  imageAlt: 'Custom image',
				  animation: false
				})
	});

</script> > -->
</body>
</html>