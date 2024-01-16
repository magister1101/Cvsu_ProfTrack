<?php
include '../constants/config.php';

error_reporting(0);
session_start();



if (isset($_SESSION['id'])) {

    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM `account` WHERE `id` = '$id'");
    $rows = mysqli_fetch_assoc($result);
    $accountType = $rows['accountType'];

    if ($accountType == 0) {
        echo "<script>location.href='profile_faculty_dashboard.php'</script>";
    }
    
    else if ($accountType == 1) {
        echo "<script>location.href='profile_student_dashboard.php'</script>";
    }
}


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

    <?php include '../constants/navbar.php'; ?>

    <div class="container">
        <h1>Choose account type</h1>
        <div class="option01">
            <a class="click" name="click" href="profile_student_login.php" style="text-decoration: none;">
                <h1>Student</h1>
            </a>
        </div>
        <div class="option02">
            <a class="click" name="click" href="profile_faculty_login.php" style="text-decoration: none;">
                <h1>Faculty</h1>
            </a>
        </div>
    </div>

</body>

</html>