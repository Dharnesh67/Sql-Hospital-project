<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-info bg-primary">
		<h5 class="text-white"><a href="index.php" style="text-decoration: none; color:aliceblue">Hospital Management System</a></h5>
		<div class="ms-auto"></div>
		<div class="d-flex">
			<ul class="navbar-nav d-flex ">
				<?php
				if (isset($_SESSION['admin'])) {
					$user = $_SESSION['admin'];
					echo '
    <li class="nav-item "><a href="#" class="nav-link text-white">' . $user . '</a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>
    ';
				} else if (isset($_SESSION['doctor'])) {
					$user = $_SESSION['doctor'];
					echo '
	<li class="nav-item "><a href="#" class="nav-link text-white">' . $user . '</a></li>
	<li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>
	';
				} else if (isset($_SESSION['patient'])) {
					$user = $_SESSION['patient'];
					echo '
	<li class="nav-item "><a href="#" class="nav-link text-white">' . $user . '</a></li>
	<li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>
	';
				} else {
					echo '
			
    <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
    <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
    <li class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">Doctor</a></li>
    <li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></li>
    ';
				}
				?>
			</ul>
		</div>
	</nav>
</body>

</html>