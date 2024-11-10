<?php 

require('cons.php');
if(isset($_POST['patientreg'])){
    $rak_num = $_POST['rak_number'];
    $fullname = $_POST['fullname'];
	$phone = $_POST['number'];
	$email = $_POST['email'];
	$gender= $_POST['gender'];
	$address = $_POST['address'];

	
	
$sql = "INSERT INTO patient VALUES(null, '$rak_num', '$fullname', '$phone', '$email', '$address', '$gender')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Patient Registered Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
    header("Location:adminpanel.php");
    
}
}

?>