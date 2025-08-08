<?php

// Include the database configuration
require 'conconfig.php';

// Collect form data from POST request
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare the SQL query to insert form data into the database

$sql = "INSERT INTO contact (name, email, number, subject, message) 
        VALUES ('$name', '$email', '$number', '$subject', '$message')";

// Check if the query executes successfully
if ($con->query($sql)) {
    echo "Message sent successfully";
} else {
    
    echo "Error: " . $con->error;
}

// Close the database connection
$con->close();

?>
