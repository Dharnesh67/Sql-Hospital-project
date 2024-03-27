<?php
session_start();
include("include/connection.php");
if (isset($_POST['login'])) {
   $uname = $_POST['username'];
    $pass = $_POST['password'];
    $error = array();
    $q = "SELECT * FROM doctors WHERE username='$uname' AND password='$pass'";
    $qq = mysqli_query($connect, $q);
    $row = mysqli_fetch_array($qq);
    if (empty($uname)) {
        $error['login'] = "Enter Username";
    } elseif (empty($pass)) {
        $error['login'] = "Enter Password";
    }
    // if ($row['status'] == 'pending') {
    //     $error['login'] = "Your Application is pending";
    // }
    // if ($row['status']  == 'rejected') {
    //     $error['login'] = "Your Application is rejected Try again";
    // }
    if (count($error) == 0) {
        $query = "SELECT * FROM doctors WHERE username='$uname' AND password='$pass'";
        $res = mysqli_query($connect, $query);
        if (mysqli_num_rows($res)){
            echo "<script>alert('Login Successful')</script>";
            $_SESSION['doctor'] =$uname;
            header("location:doctor/index.php");
        } else {
            echo "<script>alert('Login Failed')</script>";
        }
    }
}

if (isset($error['login'])) {
    $er = $error['login'];
    $show = "<h4 class='text-center alert alert-danger'>$er</h4>";
}
else{
    $show = "";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
</head>

<body style="background-image: url(img/Back.cms); background-size:cover; background-repeat:no-repeat;">
    <?php
    include("include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6  jumbotron my-5">
                    <h1 class="text-center my-5">Doctor's Login</h1>
                    <div><?php echo $show; ?></div>
                    <form method="post" class="my-5">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>
                        <input type="submit" name="login" value="Login" class="btn btn-success">
                    </form>
                    <p>I don't have an account <a href="Apply.php" style="text-decoration: none;">Apply Now!!!</a> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>