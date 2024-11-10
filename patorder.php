<!DOCTYPE html>
<?php include('doc_details_process.php') ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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

<div class="container" style="width: 1500px; margin-top:200px";>
    <div class="card">

        <center> <!<img src="images/admin.jpeg" class="card-img-top" width="10px" height="100px"></center>
       
       
        <div class="card-body" style="background-color: #9C449D ; color: white; border-color: #9C449D;">
         <div class="row">
         <div class="col-md-2">
         </div>
        <div class="col-md-7">
             <img src="images/myorder.png ">

         </div>
         
         </div>
    </div>
        <div class="card-body">
            <table class="table table-hover">
  <thead>
                                        <tr>
                                            <th scope="col">Patient Email</th>
                                            <th scope="col">Drug Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Date</th>
                                            



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        view_my_order();
                                        ?>
                                    </tbody>
                                </table>

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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            </div>
        </div>
    </body>

    </html>