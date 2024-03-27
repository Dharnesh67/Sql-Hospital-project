<?php
include("include/connection.php");
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $conpass = $_POST['conpass'];
    $error = array();
    if (empty($fname)) {
        $error['apply'] = "Enter First Name";
    } elseif (empty($sname)) {
        $error['apply'] = "Enter Last Name";
    } elseif (empty($uname)) {
        $error['apply'] = "Enter Username";
    } elseif (empty($email)) {
        $error['apply'] = "Enter Email";
    } elseif (empty($mobile)) {
        $error['apply'] = "Enter Mobile No";
    } elseif (empty($gender) || $gender == 'Select Gender') {
        $error['apply'] = "Select Gender";
    } elseif (empty($country) || $country == 'Select Country') {
        $error['apply'] = "Select Country";
    } elseif (empty($password)) {
        $error['apply'] = "Enter Password";
    } elseif (empty($conpass)) {
        $error['apply'] = "Enter Confirm Password";
    } elseif ($password != $conpass) {
        $error['apply'] = "Password does not match";
    }
    if (count($error) == 0) {
        $query = "INSERT INTO doctors(first_name, last_name, username, Email, phone, Gender, country, Password, date_reg,status,profile, salary) VALUES('$fname','$sname','$uname','$email','$mobile','$gender','$country','$password',DATE(NOW()),'pending','doctor.jpg',100000)";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "<script>alert('You have applied successfully')</script>";
            header("location:doctorlogin.php");
        } else {
            echo "<script>alert('Failed to apply')</script>";
        }
    }
    $show;
    if (isset($error['apply'])) {
        $sh = $error['apply'];
        $show = "<h4 class='text-centre alert alert-danger'>$sh</h4>";
    } else {
        $show = "";
    }
    echo $show;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
</head>

<body style="background-image: url(img/Back.cms); background-size:cover; background-repeat:no-repeat; color:black ">
    <?php
    include("include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 my-5 jumbotron">
                    <h1 class="text-center my-5">Apply Now</h1>
                    <!-- <div><?php echo $show ?></div> -->
                    <form method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First Name" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Last Name" value="<?php if(isset($_POST['sname'])) echo $_POST['sname']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="Enter Mobile No" value="<?php if(isset($_POST['mobile'])) echo $_POST['mobile']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" id="country" class="form-control">
                                <option value="">Select Country</option>
                                <option value="India">India</option>
                                <option value="Russia">Russia</option>
                                <option value="USA">USA</option>
                            </select>
                        </div>

                        <!-- //Password -->
                        <div class="form-group
                        ">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>
                        <div class="form-group
                        ">
                            <label>Confirm Password</label>
                            <input type="password" name="conpass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
                        </div>
                        <input type="submit" name="submit" value="Apply" class="btn btn-primary btn-lg">
                        
                        <p>I already have an Account<a href="doctorlogin.php" style="text-decoration: none;"> Sign IN !</a></p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>