<?php 

require('cons.php');
if(isset($_POST['doctorreg'])){
    $name = $_POST['fullname'];
	$phone = $_POST['number'];
	$email = $_POST['email'];
	$speciality = $_POST['speciality'];
	$profile = $_POST['profile'];
	$password = $_POST['password'];
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name']; 

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

$sql = "INSERT INTO doctors  VALUES(NULL, '$name', '$speciality', '$email', '$phone', '$profile', '$password', '$target')";
$result = mysqli_query($conn, $sql);
 /*if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 	echo "image uploaded";
 }else{
 	echo "failed to upload image";
 }*/
if ($result) {
	echo "<script>alert('New Doctor Registed Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>