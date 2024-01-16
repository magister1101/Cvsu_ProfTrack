<?php

include '../constants/config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch specific columns from the 'schedule' table
$sql = "SELECT * FROM schedule";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row; // Add each row to the $data array
    }
}

$conn->close();

// Return data as JSON
echo json_encode($data);
?>