<?php


require('cons.php');

$uname = $_POST['username'];
$pass = $_POST['password'];
$fname = $_POST['fullname'];
//$filename =$_FILES['image']['name'];

//if(isset($_POST['submit'])){
   $ins = "SELECT * FROM details where username =  '$uname' ";
   $res = mysqli_query($conn,$ins);
   $num = mysqli_num_rows($res);
   
   if($num > 0){
        echo "Record already exist";
   	}else{
   		 // $hashpass = hash_password($pass);
   	 	 $sql = "INSERT INTO details (username, password, fullname) values('$uname', '$pass', '$fname')";
   	    if (mysqli_query($conn, $sql) == true){
   	    echo "Record added successfully.";
   }else{
      echo"record not inserted: ".mysql_error();
   }
}

   
?>