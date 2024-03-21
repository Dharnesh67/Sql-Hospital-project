<?php
session_start();
include("include/connection.php");
if (isset($_POST['login'])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();

	if (empty($username)) {
		$error['admin'] = "Enter username";
	} elseif (empty($password)) {
		$error['admin'] = "Enter password";
	}
	if (count($error) == 0) {
		$query = "SELECT *FROM admin WHERE username='$username'AND password='$password' ";
		$result = mysqli_query($connect, $query);
	}
	if (mysqli_num_rows($result) == 1) {
		echo "<script>alert('You have logged in as admin');</script>";
		$_SESSION['admin'] = $username;
		header("location:admin/index.php");
		exit();
	} else {
		echo "<script>alert('Invalid username or password')</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin login page</title>
</head>

<body style="background-image:url(img/adminbg.jpg);background-repeat:no-repeat;background-size:cover;">
	<?php
	include("include/header.php");
	?>
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 my-5 py-5 bg-light border rounded-3">
					<img src="img/adminlogin.jpg" class="col-md-2">
					<form method="post" class="my-2">
						<div>
							<?php
							if (isset($error['admin'])) {
								$sh = $error['admin'];
								$show = "<h4 class='alert alert-danger'>$sh</h4>";
							} else {
								$show = "";
							}
							echo $show;
							?>
						</div>
						<div class="'form-group">
							<label>Username</label>
							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="pass" class="form-control">
						</div>
						<br>
						<input type="submit" name="login" class="btn btn-primary btn-lg" value="login">
					</form>
				</div>

			</div>

		</div>
	</div>

</body>

</html>