<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name, email, phone, address, position, salary) 
            VALUES ('$name', '$email', '$phone', '$address', '$position', '$salary')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>New employee added successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>
