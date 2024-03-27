<?php
include("../include/connection.php");
$query = "SELECT * FROM doctors where status='pending' order by date_reg asc";
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
            <div class='col-md-12'>
            <div class='row'>
            <div class='col-md-6'>
            <button class='btn btn-success approve' id='" . $row['id'] . "' data-id=" . $row['id'] . ">Approve</button>
            </div>
            <div class='col-md-6'>
            <button class='btn btn-danger reject' id='" . $row['id'] . "' data-id=" . $row['id'] . ">Reject</button>
            </div>
            </div>
            </div>
        </td>
        ";
}
$output .= "</table>"; // Corrected closing table tag placement
echo $output; // Output the generated HTML
?>