<?php

$con = new mysqli("localhost", "root", "", "review");


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>
