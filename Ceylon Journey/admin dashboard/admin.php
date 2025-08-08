<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Journey Admin Dashboard</title>

    <link rel="stylesheet" href="styler.css">
    <!-- Added link to reservation CSS -->
</head>

<body>

    <div class="sidebar">
        <a href="#users">Manage Users</a>
        <a href="#reviews">Manage Reviews</a>
        <a href="#hotels">Manage Destinations</a>
        <a href="#guides">Manage Tour Guides</a>
        <a href="#guides">Manage Hotel Managers</a>
        <a href="#reports">Generate Reports</a>
    </div>

    <div class="top-bar">
        Welcome, Admin | <a href="#" style="color:white;">Logout</a>
    </div>

    <div class="main-content">
        <h1>Admin Dashboard - Ceylon Journey</h1>

        <!-- Sample Users Management Section -->
        <div class="card" id="users">
            <h2>Manage Users</h2>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Registered User</td>
                    <td><button class="btn">View</button> <button class="btn">Delete</button></td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>

        <!-- Sample Reservations Management Section -->
        <?php include 'readCout.php';?>

        <!-- Sample Reviews Management Section -->
        <div class="card" id="reviews">
            <h2>Manage Reviews</h2>
            <table>
                <tr>
                    <th>Review ID</th>
                    <th>User</th>
                    <th>Entity</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>RV001</td>
                    <td>Emily Johnson</td>
                    <td>Hotel ABC</td>
                    <td>Pending</td>
                    <td><button class="btn">Approve</button> <button class="btn">Reject</button></td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>




    </div>

</body>

</html>