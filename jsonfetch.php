<?php

require('cons.php');

$stmt = $conn->prepare("Select * from details;");
$stmt->execute();
$stmt->bind_result($username, $password, $fullname);
$product = array();
while ($stmt->fetch()) {
	$temp = array();
	$temp['username'] = $username;
	$temp['password'] = $password;
	$temp['fullname'] = $fullname;

        array_push($product, $temp);
        
}

    

    echo json_encode($product);



?>