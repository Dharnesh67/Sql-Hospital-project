<?php
session_start();
include('include/connection.php');

if(isset($_POST['login'])){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if(empty($uname)){
        echo "<script>alert('Enter your username')</script>";
    } else if(empty($pass)){
        echo "<script>alert('Enter your password')</script>";
    } else {
        // Using prepared statement to prevent SQL injection
        $query = "SELECT * FROM patient WHERE name=? AND pass=?";
        $stmt = mysqli_prepare($connect, $query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);

        // Execute query
        mysqli_stmt_execute($stmt);

        // Store result
        $result = mysqli_stmt_get_result($stmt);
        
        // Check if a row is returned
        if(mysqli_num_rows($result) == 1){
            header("Location: patient/index.php");
            $_SESSION['patient'] = $uname;
        } else {
            echo "<script>alert('Please check your username and password')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
</head>
<body style="background-image: url('img/9745.jpg'); background-size:contain;">
    <?php include('include/header.php'); ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                   <div class="col-md-6 my-5 jumbotron">
                    <h5 class="text-center text-black">Patient Login</h5>
                    <form method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="uname" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="pass"  placeholder="Enter password">
                        </div>
                        <input type="submit" name="login" value="Login" class="btn btn-primary">
                        <p>I don't have an Account <a  href="acoount.php">Click Here</a></p>
                    </form>
                   </div>
                   <div class="col-md-3"></div>
                
            </div>
        </div>
    </div>
</body>
</html>
