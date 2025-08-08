<?php
    // Include the database connection
    include("conconfig.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form values from the POST request
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];

        // Update query
        $sql = "UPDATE contact SET name='$name', email='$email', number='$number', message='$message' WHERE id='$id'";

        // Execute the query and check for success
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }

        // Close the connection
        mysqli_close($con);

        // Redirect back to the readcontact.php page
        header("Location: readcontact.php");
    }
?>
