<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $date = $_POST['date'];
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];

    $sql = "INSERT INTO attendance (employee_id, date, time_in, time_out) 
            VALUES ('$employee_id', '$date', '$time_in', '$time_out')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Attendance logged successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>
