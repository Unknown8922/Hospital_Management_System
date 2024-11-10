<?php 
 session_start();
require('cons.php');
if(isset($_POST['loginsubmit'])){

    $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	//$final = mysqli_num_rows($result);

	//if($result == 1){
		//$_SESSION['loggedin'] = TRUE;
        //$_SESSION['username'] = $username;
	if($result == true){
		while ($row=mysqli_fetch_array($result)) {
     	 $_SESSION['aname'] =  $row['full_name'];
     	 //$_SESSION['email'] =  $row['email'];
     	 $_SESSION['username'] = $username;
        header("Location:adminpanel.php");
     }  
	}else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		
	}
}


?>