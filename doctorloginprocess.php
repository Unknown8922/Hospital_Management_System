<?php 
 session_start();
require('cons.php');

if(isset($_POST['loginsubmit'])){
    $username = $_POST['username'];
	$password = $_POST['password'];

	
	$sql = "SELECT * FROM doctors WHERE email = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	if($final > 0){
		while ($row=mysqli_fetch_array($result)) {
		 $_SESSION['loggedin'] = TRUE;
     	 $_SESSION['name'] =  $row['fullname'];
     	 $_SESSION['email'] =  $row['email'];
         header("Location:doctorpanel.php");
     }
 }else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('doctorlogin.php','_self')</script>";
		
	}
}


?>