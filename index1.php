<?php
// Include session and database connection
include 'includes/session.php'; 
include 'includes/db.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Management System - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">HR Management Dashboard</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="employee.php">Employee Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="attendance.php">Attendance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payroll.php">Payroll</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        <h1>Welcome to the HR Management System</h1>
        <p>Use the menu to navigate through Employee Information, Attendance, and Payroll management.</p>
    </div>
</body>
</html>
