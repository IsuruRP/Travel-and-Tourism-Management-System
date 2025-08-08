<?php
    include("conconfig.php");  // Include the database connection file

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Delete query
        $sql = "DELETE FROM contact WHERE id='$id'";

        if (mysqli_query($con, $sql)) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }

        mysqli_close($con);  // Close the database connection
    }
?>
