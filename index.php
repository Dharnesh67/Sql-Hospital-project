<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HMS HOME PAGE</title>
	<style>
		.rounded-full {
			border-radius: 5%;
		}
		.rounded-half {
			border-radius: 2%;
		}
		.color{
			background-color: #DEFAFE;
		}

	</style>
</head>

<body>
	<?php
	include("include/header.php");

	?>
	<div style="margin-top:50px"></div>
	<div class="container ">
		<div class="row">
			<div class="d-flex flex-row justify-content-between ">
				<div class="col-4 p-3 d-flex flex-column align-items-center shadow rounded-half color">
					<img src="img/Doctor.jpg" class="img-fluid shadow  rounded-full" style="width:350px">
					<h5 class="text-center my-3">We are Employing Doctors</h5>
					<a href="#"><button class="btn btn-info text-white my-3">"Join Our Team"</button>
					</a>
				</div>
				<div class="col-4 p-3 d-flex flex-column align-items-center shadow rounded-half color">
					<img src="img/p.jpg" class="img-fluid shadow rounded-full" style="width:350px">
					<h5 class="text-center my-3">"Register as a Patient: Your Path to Seamless Healthcare Access"</h5>
					<a href="#">
						<button class="btn btn-info text-white my-1 w-20">Create Account</button>
					</a>
				</div>
				<div class="col-3 p-3 d-flex flex-column align-items-center shadow rounded-half color">
					<img src="img/info.jpg" class="img-fluid shadow  rounded-full " style="width: 500px;">
					<h5 class="text-centre my-3"> Learn More and Apply Now!</h5>
					<a href="#"><button class="btn btn-info mt-5 text-white">More</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

</html>




// Path: include/header.php
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Dharnesh67/Sql-Hospital-project.git
git push -u origin main