<?php
// Start PHP session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Dashboard</title>
</head>

<body>
    <?php
    // Include header file
    include("../include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                    // Include side navigation
                    include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <!-- Doctor's Dashboard Title -->
                    <h5 class="text-center my-1 py-3 bg-info rounded ">Doctor's Dashboard</h5>
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- Placeholder content for Doctor's Profile -->
                                <div class="col-md-3 my-2 bg-info mx-2" style="height:250px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">MY PROFILE</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Placeholder icon -->
                                                <i class="fa fa-user-circle fa-3x my-4" style="color:aliceblue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 my-2 bg-secondary mx-2" style="height:250px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white " style="font-size: 30px;">0</h5>
                                                <h5 class="text-white ">Total</h5>
                                                <h5 class="text-white ">Patient</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Placeholder icon -->
                                                <i class="fa fa-user
                                                fa-3x my-4" style="color:aliceblue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 my-2 bg-success mx-2" style="height:250px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white " style="font-size: 30px;">0</h5>
                                                <h5 class="text-white ">Total</h5>
                                                <h5 class="text-white ">Appointment</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Placeholder icon -->
                                                <i class="fa fa-calendar fa-3x my-4" style="color:aliceblue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Repeat similar content for other sections -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
