<?php

$con = new mysqli("localhost", "root", "", "contact");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>
