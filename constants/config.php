<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "prof_track";

$conn = new mysqli('localhost', 'root', '', 'prof_track');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
