<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travel</title>

    <!-- Link to custom CSS file for styling -->
    <link rel="stylesheet" href="hstyles.css">

    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <!-- Header Section -->
    <header>
        <!-- Menu icon for mobile view -->
        <div id="menu-bar" class="fas fa-bars"></div>

        <!-- Website logo -->
        <a href="#" class="logo"><span>C</span>eylon Journey</a>

        <!-- Navigation menu with links to different sections of the website -->
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="../contact and hotels/hotels.php">Hotels</a>
            <a href="../Rides/ride.php">Rides</a>
            <a href="#destination">Destination</a>
            <a href="../review/service.php">Services</a>
            <a href="../review/review1.php">Review</a>
            <a href="../contact and hotels/contact.php">Contact</a>
        </nav>

        <!-- Login button -->
        <div class="login-btn-container">
            <a href="../Login Page/login.php" class="btn login-btn">Login</a>
        </div>
    </header>

    <!-- JavaScript for toggling the mobile menu -->
    <script>
        let menuBar = document.getElementById('menu-bar');
        let navbar = document.querySelector('.navbar');

        menuBar.onclick = () => {
            menuBar.classList.toggle('fa-times'); // Toggle icon between bars and times (for close)
            navbar.classList.toggle('active'); // Toggle active class on the navbar
        };
    </script>

</body>

</html>