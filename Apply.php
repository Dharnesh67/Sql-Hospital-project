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
                    <form method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Mobile No">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="Gender" id="G"  class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group
                        ">
                            <label>Country</label>
                            <select name="Gender" id="G" class="form-control">
                                <option value="">SELECT COUNTRY</option>
                                <option value="">INDIA</option>
                                <option value="male">RUSSIA</option>
                                <option value="female">USA</option>
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
                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
                        </div>
                        <input type="submit" name="submit" value="Apply" class="btn btn-success">
                        <p>I already have an Account<a href="doctorlogin.php" style="text-decoration: none;">  Sign IN !</a></p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>