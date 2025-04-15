<?php
    session_start();
    if(!isset($_SESSION['user'])) header('Location: login.php');

    $user = $_SESSION['user'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="icon" type="image/png" href="img/Track with Us!  Mockup.png">
    <script src="https://kit.fontawesome.com/4fce8a7360.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <?php include('partials/app-sidebar.php') ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php') ?>
             <div class="dashboard_content">
                <div class="dashboard_content_main"></div>
             </div>
        </div>
    </div>

<script src="js/script.js"></script>
</body>
</html>