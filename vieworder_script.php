<?php

require_once('cons.php');
function view_order(){
     global $conn;
     $sql = "SELECT * FROM orders ";
     $result = mysqli_query($conn, $sql);
    // $final = mysqli_num_rows($result);
     if($result){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['drug_name'];
       $quantity = $row['quantity'];
       $address = $row['address'];
       $patient = $row['patient'];
       $date = $row['date'];
             
       echo "<tr>
       
      <td>$id</td>
      <td>$patient</td>
      <td>$name</td>
      <td>$quantity</td>
      <td>$address</td>
      <td>$date</td>   
      
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }  
?>