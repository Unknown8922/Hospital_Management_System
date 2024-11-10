<?php
require('cons.php');

if(isset($_POST['submitBtn']) && !empty($_POST['submitBtn'])) {
    if(isset($_FILES['uploadFile']['name']) && !empty($_FILES['uploadFile']['name'])) {
        //Allowed file type
        $allowed_extensions = array("jpg","jpeg","png","gif","png");
    
        //File extension
        $ext = strtolower(pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION));
    
        //Check extension
        if(in_array($ext, $allowed_extensions)) {
           //Convert image to base64
           $encoded_image = base64_encode(file_get_contents($_FILES['uploadFile']['tmp_name']));
           $encoded_image = 'data:image/' . $ext . ';base64,' . $encoded_image;
           $query = "insert into `images` set `encoded_image` = '".$encoded_image."'";
           mysqli_query($conn, $query);
           echo "File name : " . $_FILES['uploadFile']['name'];
           echo "<br>";
           if(mysqli_affected_rows($conn) > 0) {
              echo "Status : Uploaded";
              $last_insert_id = mysqli_insert_id($con); 
           } else {
              echo "Status : Failed to upload!";
           }
       } else {
           echo "File not allowed";
       }
  }
}
?>