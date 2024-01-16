<?php
include '../constants/config.php';

error_reporting(0);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Prof Tracker</title>
</head>

<body>

    <?php include '../constants/navbar.php' ?>

    <form action="../function/login.php" method="post">

        <div style="text-align: justify; margin-bottom: 2%;">


            <label for="" style="margin-left: 1%;">User Name:</label>
            <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter your User Name" style="margin-bottom: 2%; margin: 1%; width: 98%;" required>

            <label for="" style="margin-left: 1%;">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password" style="margin-bottom: 2%; margin: 1%; width: 98%;" required>


        </div>

        <div class="innerfirstreg" style="text-align: justify; display: flex; flex-direction: row;">

            <div style="width: 50%; margin: 1%;">
                <button type="submit" class="btn btn-warning" id="">Login</button>
            </div>

        </div>

    </form>

</body>

</html>