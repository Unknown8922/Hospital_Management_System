<?php 
 session_start();
require('cons.php');
if(isset($_POST['loginsubmit'])){
    $email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM users WHERE email= '$email' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	//if($final > 0){
		//while ($row=mysqli_fetch_array($result)) {
		 //$_SESSION['loggedin'] = TRUE;
     	 //$_SESSION['id'] =  $row['username'];
     	// $_SESSION['email'] =  $row['email'];
		if($result == true){
		while ($row=mysqli_fetch_array($result)) {
     	$_SESSION['pname'] =  $row['patient_name'];
     	$_SESSION['email'] =  $row['email'];
         header("Location:patientpanel.php");
     }
 }else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('patientlogin.php','_self')</script>";
		
	}
}


?>


