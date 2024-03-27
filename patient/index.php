<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['patient'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: patientlogin.php");
    exit();
}
// Display the patient dashboard
?>

<!DOCTYPE html>
<html>

<head>
    <title>Patient Dashboard</title>
    <!-- Add your CSS and JS files here -->
</head>

<body>
    <?php include("../include/header.php") ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3" style="margin-left: -30px;">
                    <?php include("sidenav.php") ?>
                </div>
                <div class="col-md-9">
                    <h5 class="text-center bg-success py-4 rounded-circle my-1" >Patient Dashboard</h5>
                    <div class="col-md-12">
                        <div class="dashboard-content">
                            <h1>Welcome, <?php echo $_SESSION['patient']; ?></h1>
                            <h2>Appointments</h2>
                            <?php
                            // Retrieve the patient's appointments from the database
                            // and display them here
                            ?>

                            <h2>Account Details</h2>
                            <?php
                            // Retrieve the patient's account details from the database
                            // and display them here
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Add your dashboard content here -->
</body>

</html>