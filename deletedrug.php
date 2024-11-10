<?php
// Database connection
require('cons.php');

// Check if the form is submitted
if(isset($_POST['delete'])) {
    // Get the drug ID to be deleted
    $drug_id = $_POST['drug_id'];

    // Delete the drug record from the database
    $sql = "DELETE FROM drug WHERE id = $drug_id";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if($result) {
        echo "<script>alert('Drug deleted successfully.')</script>";
        echo "<script>window.open('drugdelete.php','_self')</script>";
    } else {
        echo "<script>alert('Failed to delete drug.')</script>";
        echo "<script>window.open('drugdelete.php','_self')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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



<div class="container" style="width: 1500px; margin-top:200px";>
  <div class="card">
       <!<img src="images/admin.jpeg" class="card-img-top" width="500px" height="150px">
       
    <div class="card-body" style="background-color: #9C449D ; color: white; border-color:#9C449D;">
         <div class="row">
         <div class="col-md-2">
         
             <img src="images/drugdelete.png " class="center" width="600px">

</div>
    <div class="container">
        
        <form method="POST">
            <div class="form-group">
                <label for="drug_id">Drug ID:</label>
                <input type="text" class="form-control" id="drug_id" name="drug_id" required>
            </div>
            <button type="submit" class="btn btn-danger" name="delete" style="background-color:#5D1E5F; border-color:#5D1E5F;">Delete</button>
        </form>
    </div>
    </div>
</div>
</div>
</div>


</body>

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

	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>
