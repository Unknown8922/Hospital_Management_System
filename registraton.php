<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="login-box"></div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2> Login Here Please </h2> 
			<form action="login.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<div class="col-md-6">
			<h2> Register Here Please </h2> 
			<form action="reg.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Fullname</label>
					<input type="text" name="fullname" class="form-control" required>
				</div>
				 <div class="form-group">
					<label>Photo</label>
					<input type="file" name="photo" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register </button>
		
	</div>
</div> 
</body>
</html> 