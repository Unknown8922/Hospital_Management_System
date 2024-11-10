
<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

	

<div class="container" style="width: 400px; margin-top:100px";>
	<div class="card">
       <img src="images/pharmacistlogin.png" class="card-img-top" width="100px" height="150px">
		<div class="card-body">
    <div class="text-center">
        <img src="images/pharmacist.jpeg" alt="patient login" width="300px" height="250px">
    </div>

</head>


	<form class="form-group" action="pharmacistpanel.php" method="post">
		<label>Email</label>
		<input type="text" name="email" class="form-control" placeholder="Enter your Email" required=""><br>
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter your password" required=""><br>
		<center>
		<input type="submit" name="loginsubmit"  class="btn btn-primary" value="Login" style="background-color: #9C449D;">	
		</center>
		
	</form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> Medical Appointment System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>

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
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>