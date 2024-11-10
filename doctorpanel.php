
<?php 

require('cons.php');
require('doctorvalidate.php'); 
if(isset($_POST['subreport'])){
    $var1 ='';
    $var1 = $_SESSION['name'] ;
    $pat_num = $_POST['pat_num'];
    $pat_email = $_POST['pat_email'];
    $diag = $_POST['diagnosis'];
	$psychological = $_POST['psychological'];
	$chronic = $_POST['chronic'];
	$drugs= $_POST['drugs'];
	$advice = $_POST['advice'];
	$todayDate = date("Y-m-d H:i:s");

	
	
$sql = "INSERT INTO report VALUES(null, '$pat_num', '$pat_email','$var1', '$diag', '$psychological', '$chronic', '$drugs', '$advice', '$todayDate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Record Registered Succesfully')</script>";
	echo "<script>window.open('doctorpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
    //ader("Location:adminpanel.php");
    
}
}

?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="container-fluid">

<div class="row">
	<div class="col-md-3">
	
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"></a>
                      
					</div>
					

					<div class="col-md-5">
						 <?php
                    //session_start();
                    //require('doctorvalidate.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
                    ?>


           <marquee><h1 align="right">WELCOME <?php echo $var1 ?> </h1></marquee>
					
					</div>


</div>
</div>
		<div class="container-fluid">
                  


<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="doctorappointment.php" class="list-group-item">View My Appointments</a>
					<a href="drugsearch.php" class="list-group-item">Search Drug</a>
					<a href="patientreport.php" class="list-group-item">View Patient Report</a>


					
					
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #06F2F8;"><h3 align="center">Profile</h3>
					<a href="doctorupdate.php" class="list-group-item">Update My Profile</a>
					<a href="logout.php" class="list-group-item action">Log Out</a>

				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #5D1E5F; color: white; text-align: center;";>
				
				<h5>Patient Consultation </h5></div>
				<div class="card-body" >
					<form class="form-group"  method="POST" enctype="multipart/form-data">	
					
					 <label>Patient No</label>
						<input type="text" name="pat_num"  class="form-control" required><br>

					<label>Patient Email</label>
						<input type="text" name="pat_email"  class="form-control" required><br>

                    
                    <label>Diagonosis</label>
						<input type="text" name="diagnosis"  class="form-control" required><br>

					<label>Psychological Status</label>
						<input type="text" name="psychological"  class="form-control" required><br>

					<label>Chronic Disease Note</label>
						<input type="text" name="chronic"  class="form-control" required><br>

					<label>Prescribed Medications</label>
						<input type="text" name="drugs"  class="form-control" required><br>
                        
					<label>Medical Advice</label>
					    <input type="text" name="advice"  class="form-control" required><br>

					
						
						<center> <input type="submit" name="subreport" value="Submit Report" class="btn btn-secondary" style="background-color: #9C449D;"></center>

					</form>
				</div>
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