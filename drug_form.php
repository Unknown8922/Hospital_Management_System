<?php 

require('cons.php');
require('patientvalidate.php'); 
      
if(isset($_POST['orderdrug'])){
    $var1 ='';
    $var1 = $_SESSION['email'] ;
    $drugname = $_POST['drug_name'];
    $quantity= $_POST['quantity'];
    $address= $_POST['address'];
    $patient= $_POST['patient'];
    $date = date("Y-m-d H:i:s");
   // $status = $_POST['status'];

    $tt = "SELECT * FROM `orders`  WHERE drug_name = '$drugname'  AND date = '$date' ";
    $result1 = mysqli_query($conn, $tt);
   if (mysqli_num_rows($result1) > 0) {
       echo "<script>alert('Sorry the drug is not available.')</script>"; 
       echo "<script>window.open('drugorder.php','_self')</script>";   
}else{

   $sql = "INSERT INTO `orders` (`id`, `drug_name`, `quantity`, `address`, `patient`, `date`) VALUES (NULL, '$drugname', '$quantity', '$address', '$patient', '$date','$var1')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('New Order Registered Succesfully')</script>";
    echo "<script>window.open('patientpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurred')</script>";
    //echo "<script>window.open('adminpanel.php','_self')</script>";
    //ader("Location:adminpanel.php");
    }
}
}

?>