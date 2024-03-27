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
    include("include/header.php");
    include("include/connection.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-10">
                <header>
        <h1>About Our Hospital Management System Project</h1>
    </header>
    <section id="dev-team">
        <h2>Development Team</h2>
        <ul>
            <li>Introduction to the members of our development team:</li>
            <ul>
                <li>Dharmesh Raikwar    ::221Me117</li>
                <li>Soham Gandhi        ::221Me117</li>
                <li>Adithya Naikode     ::221Me103</li>
                <!-- Add any challenges or successes experienced while working on the project as a team -->
            </ul>
        </ul>
    </section>
    <section id="features">
        <h2>Features Highlight</h2>
        <ul>
            <li>Mention key features of your system such as:</li>
            <ul>
                <li>doctor registration</li>
                <li>doctor Login</li>
                <li>Admin Login</li>
                <li>patient registration</li>
                <li>Doctor application Approval And rejection</li>
                <li>admin portal management/li>
                <li>Staff management</li>
                <li>Reporting capabilities</li>
            </ul>
            <li>Emphasize any unique or innovative features that differentiate your system from others in the market.</li>
        </ul>
    </section>

    <section id="tech-stack">
        <h2>Technology Stack</h2>
        <ul>
            <li>List of technologies and tools we're using:</li>
            <ul>
                <li>PHP for server-side scripting</li>
                <li>SQL database for data storage</li>
                <li>Bootstrap for frontend design</li>
                <!-- Add any other frameworks or libraries here -->
            </ul>
            <li>Brief explanation of why we chose these technologies and how they contribute to the functionality and usability of our system.</li>
        </ul>
    </section>

   
                </div>
            </div>
        </div>
    </div>
</body>

</html>