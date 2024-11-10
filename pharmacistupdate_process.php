<?php 

require('cons.php');
require('pharmacistvalidate.php');

if(isset($_POST['update'])){
    $var1 ='';
    $var1 = $_SESSION['name'];
    $name = $_POST['fullname'];
	$phone = $_POST['phone_number'];
	$email = $_POST['email'];
	//$profile = $_POST['profile'];
	$password = $_POST['password'];
	

  $sql= "UPDATE `pharmacist` SET `fullname` = '$name', `phone_number` = '$phone', `email` = '$email',  `password` = '$password' WHERE `pharmacist`.`fullname` = '$var1' ";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('pharmacistpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>