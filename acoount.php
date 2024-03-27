<?php
include("include/connection.php");

$error = array();

if(isset($_POST['Create'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(empty($name) || empty($age) || empty($gender) || empty($phone) || empty($email) || empty($pass) || empty($cpass)){
        $error['ac'] = "All fields are required.";
    } elseif($cpass != $pass){
        $error['ac'] = "Passwords do not match.";
    }

    if(count($error) == 0){
        $query = "INSERT INTO patient(name, age, gender, phone, email, pass, cpass) VALUES('$name', '$age', '$gender', '$phone', '$email', '$pass', '$cpass')";
        $result = mysqli_query($connect, $query);
        if($result){
            header("Location: patientlogin.php");
            exit; // Make sure to exit after redirection
        } else {
            echo "<script>alert('Account not created')</script>";
        }
    } else {
        echo "<script>alert('" . $error['ac'] . "')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
</head>

<body style="background-image: url('img/9745.jpg'); background-size:cover;">
    <?php
    include("include/header.php");

    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6 my-2 jumbotron">
                    <h5 class="text-center text-danger"> Create Account</h5>
                    <form  method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" name="age" id="age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">password</label>
                            <input type="pass" name="pass" id="pass" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cpass">confirm password</label>
                            <input type="cpass" name="cpass" id="cpass" class="form-control" required>
                        </div>
                        
                        <input type="submit" name="Create" value="Create Account" class="btn btn-primary">
                        <p>I Already have Account <a href="patientlogin.php">Sign In</a> </p>
                    </form>

                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
</body>

</html>