   <?php
                    require('cons.php');
				    require('pharmacistvalidate.php');	
				    $var1 ='';
				    $var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM pharmacist WHERE fullname = '$var1'";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $name =  $row['fullname'];
				       $phone = $row['phone_number'];
				       $email = $row['email'];
				       $password =$row['password'];

				       }
				   }else{

      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('pharmacistpanel.php', '_self')</script>";
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

<body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"></a>
                      
					
					
					</div>

</div>

	<div class="container-fluid">
                  


<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #5D1E5F; color: white; border-color: #5D1E5F;"><h3 align="center">Preferences</h3>
					
                    <a href="pharmacistpanel.php" class="list-group-item">Add Drug Details</a>
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
				<div class="card-body" style="background-color: #9C449D; color: white; text-align: center;";>
				
                      

				<h5>Update My Profile </h5></div>
				<div class="card-body" >
					<form class="form-group" action="pharmacist_update_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Fullname</label>
						<input type="text" name="fullname"  class="form-control" value="<?php echo $name; ?>" required><br>

					<label>Phone Number</label>
						<input type="text" name="phone_number"  class="form-control" value="<?php echo $phone; ?>" required><br>
					<label>Email</label>
						<input type="text" name="email"  class="form-control" value="<?php echo $email; ?>" required><br>
					
					<label>Password</label>
						<input type="text" name="password"  class="form-control" value="<?php echo $password; ?>" required><br>
					
                     
					
						<center> <input type="submit" name="update" value="Update Details" class="btn btn-warning" style="background-color:#5D1E5F; color: white;"></center>

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
</footer>


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