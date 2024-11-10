<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mydb";

try{
	$dbcon = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	$dbcon->setAttribute(PDO::ATTR_ERRCODE, PDO::ERRCODE_EXCEPTION);
}catch(PDOException $ex){
  die($sex->getMessage);	
}

$conn = mysqli_connect($server, $username, $password, $db);


/*if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}else{
	echo "connected";
}
*/
?>