<?php 
require('cons.php');
require('patientvalidate.php'); 

//session_start();
  
if(isset($_POST['orderdrug'])){
    $var1 = '';
    $var1 = $_SESSION['email'] ;
    $drugname = $_POST['drugname'];
    $quantity= $_POST['quantity'];
    $address= $_POST['address'];
    $patient= $_POST['patient_name'];
    $orderdate = $_POST['order_date'];

    $sql = "INSERT INTO `orders` (`id`, `patient_email`, `drug_name`, `quantity`, `address`, `patient_name`, `order_date`) 
            VALUES (NULL, '$var1' , '$drugname', '$quantity', '$address', '$patient', '$orderdate')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New Drug Order Registered Successfully')</script>";
        echo "<script>window.open('drugorder.php','_self')</script>";
    } else {
        echo "<script>alert('Sorry, an error occurred')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <!--making page response-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            width: 700px;
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
               
               <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/RAK_Hospital/patientpanel.php"  style= "color: #5D1E5F;"> Back To Patient Panel</a>
                </li>
               
                
            </ul>
        </div>
    </nav>
</body>


    <div class="container" style="width: 400px; margin-top:30px;">
        <div class="card">
            <img src="images/drug_order.png" class="card-img-top" height="100px" width="200" >
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="drugname">Drug Name</label>
                        <input type="text" class="form-control" id="drugname" name="drugname" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="patient_name">Patient Name</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name"required>

                     <div class="form-group">
                        <label for="order_date">Order Date</label>
                       <input type="date" class="form-control" id="order_date" name="order_date" required>

  </form>



</div>
<div class="form-group">
<!--<label for="status">Status</label>
<select class="form-control" id="status" name="status" required>
<option value="Pending">Pending</option>
<option value="Delivered">Delivered</option>
<option value="Cancelled">Cancelled</option>
</select>-->
</div>
<center><button type="submit" class="btn btn-primary" name="orderdrug" style="background-color: #9C449D;">Order</button></center>

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
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
<!-- closing the database connection -->
<?php mysqli_close($conn); ?>
