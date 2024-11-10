<?php 

require('cons.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
	$barcode = $_POST['barcode'];
	$insured = $_POST['insured'];
	$status = $_POST['status'];
	$price = $_POST['price'];
	$quantity =$_POST['quantity'];
	$Registered_By =$_POST['Registered_By'];
	//$date =$_POST['date'];

  $sql= "UPDATE `drug` SET `name` = '$name', `barcode` = '$barcode', `insured` = '$insured', `status` = '$status', `price` = '$price', `quantity` = '$quantity', `Registered_By` = '$Registered_By' WHERE `drug`.`id` = '$id' ";
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
