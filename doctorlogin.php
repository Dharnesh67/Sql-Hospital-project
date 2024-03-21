
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
</head>

<body style="background-image: url(img/Back.cms); background-size:cover; background-repeat:no-repeat;" >
    <?php
    include("include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6  jumbotron my-5">
                    <h1 class="text-centre my-5">Doctor's Login</h1>
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