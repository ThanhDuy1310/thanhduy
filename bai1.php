<?php


if (isset($_REQUEST['username'])) {
	$uName = $_REQUEST['username'];
}

if (isset($_REQUEST['password'])) {
	$pwd = $_REQUEST['password'];
}

echo '<br/>uName: '.$uName;
echo '<br/>pwd: '.$pwd;
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST">
			<div class="form-group">
			<h2>Register Account</h2>
			</div>
			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Name</label>
				<input type="text" name="Name" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Gender</label>
				<input type="text" name="Gender" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Email</label>
				<input type="text" name="Email" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Number</label>
				<input type="text" name="Number" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Address</label>
				<input type="text" name="Address" class="form-control">
			</div>
			<button class="btn btn-success">Supmit</button>
		</form>
	</div>

</body>
</html>