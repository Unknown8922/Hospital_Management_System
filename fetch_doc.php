<?php
function load_country(){
include'cons.php';
$output = '';
$sql = "SELECT * FROM tb_country ORDER BY country_name";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	$output .= '<option value="'.$row["country_id"].'">'.$row["country_name"].'</option>';
}
  return $output;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>dynamic</title>
	<script src="jquery.js"></script>
</head>
<body>
   <label>List Of countries</label>
   <select name="country" id="country">
   	 <option value="">Select Country</option>
   	   <?php echo load_country(); ?>
   </select><br>
   <label>List of states</label>
   <select name="state" id="state">
   	 <option value="">Select States</option>
   </select>


<script>
  $(document).ready(function(){
    ('#country').change(function(){
      var country_id = $(this).val();
      $.ajax({
        url:"tt.php",
        method:"POST",
        data:{CountryID:country_id},
        dataType:"text",
        success:function(data)
        {
          $('#state').html(data);
        }

      });
    });
  });
</script> 

</body>
</html>

 




<!--$sql = "SELECT fullname FROM doctors WHERE speciality = '.$_POST["deptName"].'";
$result = mysli_query($con, $sql);
$output = '<option value="">Select Doctor</option>';
while ($row = mysqli_fetch_array($result)) {
	$output .= '<option value="">.$row["fullname"]</option>';
}
  echo $output;


?>
-->
