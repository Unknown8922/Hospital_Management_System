<?php 

require('cons.php');
require('pharmacistvalidate.php'); 
      $var1 ='';
      $var1 = $_SESSION['name'] ;
if(isset($_POST['adddrug'])){
    $name = $_POST['name'];
    $barcode = $_POST['code'];
	$ins = $_POST['ins'];
	$status = $_POST['status'];
	$price= $_POST['price'];
	$quantity= $_POST['qty'];
	$todayDate = date("Y-m-d H:i:s");

	
	
$sql = "INSERT INTO drug VALUES(null, '$name', '$barcode', '$ins', '$status', '$price', '$quantity', '$var1', '$todayDate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Drug Registered Succesfully')</script>";
	echo "<script>window.open('pharmacistpanel.php','_self')</script>";
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
                   // session_start();
                    //require('pharmacistvalidate.php'); 
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
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #5D1E5F;"><h3 align="center">Preferences</h3>
					
                    <a href="" class="list-group-item">Add Drug Details</a>
					<a href="viewdrug.php" class="list-group-item">Update Drugs</a>
					<a href="deletedrug.php" class="list-group-item">Delete Drug</a>
					
					
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #5D1E5F;"><h3 align="center">View Details</h3>
					<a href="orderdetails.php" class="list-group-item">View Orders</a>
					<a href="viewdrug.php" class="list-group-item action">View Drugs</a>
					

				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #5D1E5F; color: white; text-align: center;";>
				
				<h5>Add New Drug </h5></div>
				<div class="card-body" >
					<form class="form-group" method="POST" enctype="multipart/form-data">	
					
					 <label>Drug Name</label>
						<input type="text" name="name"  class="form-control" required>
                     
					<label>Bar Code</label>
						<input type="text" name="code"  class="form-control" required>
                        
					<label>Insured</label>
					    <SELECT type="text" name="ins"  class="form-control" required>
					    	<option>Select Status</option>
					    	<option>Yes</option>
					    	<option>No</option>
                        </SELECT>

					<label>Availability</label>
					    <SELECT type="text" name="status"  class="form-control" required>
					    	<option>Select Status</option>
					    	<option>Available</option>
					    	<option>unAvailable</option>
                        </SELECT>
					<label>Unit Price</label>
					    <input type="number" name="price"  class="form-control" required>
                    
                    <label>Quantity</label>
					    <input type="number" name="qty"  class="form-control" required><br>
						
						<center> <input type="submit" name="adddrug" value="Register Drug" class="btn btn-secondary" style="background-color:#5D1E5F;"></center>

					</form>
				</div>
			</div>
		</div>

           <div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #5D1E5F;"><h3 align="center">My Details</h3>
					
                   
					<a href="update_pharmacist.php" class="list-group-item">Update My Profile</a>
									
      
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