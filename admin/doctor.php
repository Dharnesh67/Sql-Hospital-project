<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Doctors</title>
</head>

<body>
    <?php
    include("../include/header.php");
    include("../include/connection.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                    include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <?php
                    $query = "SELECT * FROM doctors WHERE status='Approved' order by date_reg ASC";
                    $res = mysqli_query($connect, $query);
                    $output = "";
                    $output .= "
                        <table class='table table-bordered'>
                        <tr>    
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>gender</th>
                        <th>Phone</th>
                        <th>country</th>
                        <th>Date Registered</th>
                        <th>Date action</th></tr>
                        ";
                    if (mysqli_num_rows($res) < 1) {
                        $output .= "
                            <tr>
                            <td colspan='10' class='text-center'>No Doctors Available</td>
                            </tr>
                            ";
                    }
                    while ($row = mysqli_fetch_array($res)) {
                        $output .= "
                            <tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['first_name'] . "</td>
                            <td>" . $row['last_name'] . "</td>
                            <td>" . $row['username'] . "</td>
                            <td>" . $row['Email'] . "</td>
                            <td>" . $row['Gender'] . "</td>
                            <td>" . $row['phone'] . "</td>
                            <td>" . $row['country'] . "</td>
                            <td>" . $row['date_reg'] . "</td>
                            
                            <td>
                                <a href=''>
                                <button class='btn btn-info'>Edit</button>
                                </a>
                            </td>
                            ";
                    }
                    $output .= "</table>"; // Corrected closing table tag placement
                    echo $output; // Output the generated HTML
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>