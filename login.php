<?php

require('cons.php');

$user = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM details where username like '$user' and password like '$pass' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
	echo "Wellcome your login is correct";
}else{
    echo "wrong login credentials"; //echo"<p>";
    //echo "Clicck <a href = 'registraton.php'> Here</a> To refill the form";
    //echo "Click <a href='n_reg.php'>Here</a> To Refill the form again";
}

?>