<?php
// Include necessary PHP files
require('inc/essentials.php');
require('inc/db_config.php');

// Call adminLogin() function (make sure it's defined somewhere)
adminLogin();

// Check if the 'seen' parameter is set in the URL (currently no code inside this block)
if(isset($_GET['seen'])) {
    // Add your logic here if needed
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Rooms</title>
    <!-- Include CSS files -->
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <!-- Include header -->
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">User Queries</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <!-- Content goes here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include JavaScript files -->
    <?php require('inc/scripts.php'); ?>
</body>
</html>
