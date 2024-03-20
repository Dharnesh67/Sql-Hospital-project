<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin profile</title>
</head>
<body>
	<?php
	include("../include/header.php");
	include("../include/connection.php");

	$ad=$_SESSION['admin'];


	$query="SELECT * FROM admin WHERE username='$ad'";
	$res=mysqli_query($connect,$query);
	while ($row = mysqli_fetch_array($res)) {

        $username = $row['username'];
        $profiles= $row['profile'];
    // Additional code here...
    }


	
	?>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" style="margin-left:-20px;">
					<?php
					include("sidenav.php");
					?>
				</div>
				<div class="col-md-10">
					<div class="col-md-12">
						
						<div class="row">
							<div class="col-md-6">
								<h4><?php echo $username;?> profile</h4>
								<?php
								if (isset($_POST['update'])) {

                                    $profile= $_FILES['profile']['name'];
                                    if (empty($profile)) {
        // Handle case when no file is uploaded
        // Example: echo "No file uploaded.";
                                    } else {
                                        $query = "UPDATE admin SET profile='$profile' WHERE username='$ad'";
                                        $result = mysqli_query($connect, $query);

                                    if ($result) {
                                        move_uploaded_file($_FILES['profile']['tmp_name'],"img/$profile");
            // File moved successfully
                                    }
                                }
                            }			                   
                                ?>
								<form method="post" enctype="multipart/form-data">
									<?php

									echo "<img src='img/$profiles'class='col-md-12' style='height:250px;'>"
									?>
									
								<br><br>
								<div class="from-group">
									<label>UPDATE PROFILE</label>
									<input type="file" name="profile" class="form-control">
								</div>
								<br>
								<input type="submit" name="update" value="UPDATE" class="btn btn-success">
								</form>
								
							</div>
							<div class="col-md-6">
								<?php
								if(isset($_POST['change'])){
									$uname=$_POST['uname'];
									if (empty($uname)) {

										// code...
									}else{
										$query="UPDATE admin SET username='$uname' WHERE username='$ad'";

										$res=mysqli_query($connect,$query);
										if ($res) {

											$_SESSION['admin']=$uname;
											// code...
										}


									}


								}


								?>
								<form method="post">
									<label>Change username</label>
									<input type="text" name="uname" class="form-control" autocomplete="off">
									<br>
									<input type="submit" name="Change" class="btn btn-success" value="Change">
								</form>

								<br>
								<?php
								if (isset($_POST['update_pass'])) {
									$old_pass=$_POST['old_pass'];
									$new_pass=$_POST['new_pass'];
									$con_pass=$_POST['con_pass'];

									$error=array();
									$old=mysqli_query($connect,"SELECT * FROM admin WHERE username='$ad'");
									$row=mysqli_fetch_array($old);
									$pass=$row['password'];
									if (empty($old_pass)) {
										$error['p']="Enter old Password";
										// code...
									}elseif (empty($new_pass)) {
										$error['p']="Enter New Password";
										// code...
									}elseif(empty($con_pass)){
										$error['p']="confirm Password";
									}elseif($old_pass!=$pass){
										$error['p']="Invalid old Password";


									}elseif($new_pass!=$con_pass){
										$error['p']="Both Password does not match";
									}


										if (count($error)==0) {
											$query="UPDATE admin SET password='$new_pass' WHERE username='$ad'";
											mysqli_query($connect,$query);


											// code...
										}

									

									



									// code...
								}
								if (isset($error['p'])) {
											$e=$error['p'];
											$show="<h5 class='text-center alert alert-danger'>$e</h5>";
										
											// code...
										}else{
											$show="";
										}
								?>

								<form method="post">
									<h5 class="text-centre my-4">Change password</h5>

									<div>
										<?php
										echo $show;

										?>

									</div>

									<div class="from-group">
										<label>old password</label>
										<input type="password" name="old_pass" class="form-control">
										

									</div>
									<div class="from-group">
										<label>New Password</label>
										<input type="password" name="new_pass" class="form-control">
									</div>
									<div class="from-group">
										<label>Confirm Password</label>
										<input type="password" name="con_pass" class="form-control">
										
									</div>
									<br>
									<input type="submit" name="update_pass" value="Update Password" class="btn btn-info">
								</form>
							</div>
							

						</div>
					</div>

				</div>
				

			</div>

		</div>

	</div>
</body>
</html>