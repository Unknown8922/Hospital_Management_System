<!DOCTYPE html>
<?php include('doc_details_process.php'); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body style="background:url('images/4.jpg'); no-repeat; background-size:cover ; ">
	<div class="container" style="width: 800px; margin-top:150px";>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<a href="doctor_details.php" class="btn btn-danger">Back to admin</a>
						
					</div>
				<h3 style="color: brown;"> Search Result </h3>
				</div>	
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Fullname</th>
							<th scope="col">Specialist</th>
							<th scope="col">Email</th>
							<th scope="col">Phone Number</th>
						</tr>
					</thead>
					<tbody>
						<?php
                             search_doc_details();
						?>
						
					</tbody>
				</table>
				
			</div>
		</div>
		
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>





