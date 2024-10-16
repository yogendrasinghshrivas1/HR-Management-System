<?php
// db.php
$username = "root";
$password = "";
$dbname = "hr_management";

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");

echo "great work";

?>
