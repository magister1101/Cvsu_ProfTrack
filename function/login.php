<?php
    session_start();

    include '../constants/config.php';

    $inputUserName = $_POST['userName'];
    $inputPassword = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM `account` WHERE `userName` = '$inputUserName'"); //gets the info that matches the email from the database
    $rows = mysqli_fetch_assoc($result); //fetches the result and stores them

    //grabs the data from the table and stores them in a variable
    $id = $rows["id"]; 
    $facultyId = $rows["facultyId"]; 
    $email = $rows["email"];
    $password = $rows["password"];

    if(isset($_SESSION['id'])){ //checks if the user is already logged in by checking if session(ID) is set.

        echo"<script>location.href='../php/profile_faculty_dashboard.php'</script>";

    }
    else{
        
        if($inputEmail == $email && $inputPassword == $password){
            $_SESSION['id'] = $id; //puts the ID into a universal session that checks every page if it is logged in or not
            $_SESSION['facultyId'] = $facultyId;
            echo"<script>location.href='../php/profile_faculty_dashboard.php'</script>"; //proceeds to admin page

        }
        else{

            echo "<script>alert('email or password incorrect')</script>";
            echo "<script>location.href='../php/profile_faculty_login.php'</script>";

        }
    }




?>