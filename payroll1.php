<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];

    $sql = "SELECT * FROM attendance WHERE employee_id = '$employee_id'";
    $result = $conn->query($sql);

    $total_hours = 0;
    while ($row = $result->fetch_assoc()) {
        $time_in = strtotime($row['time_in']);
        $time_out = strtotime($row['time_out']);
        $hours_worked = ($time_out - $time_in) / 3600;
        $total_hours += $hours_worked;
    }

    $employee_sql = "SELECT salary FROM employees WHERE id = '$employee_id'";
    $employee_result = $conn->query($employee_sql);
    $employee_data = $employee_result->fetch_assoc();
    $hourly_rate = $employee_data['salary'] / 160; // Assuming 160 working hours per month

    $payroll = $total_hours * $hourly_rate;

    echo "<div class='alert alert-info'>Total Payroll for Employee: $" . $payroll . "</div>";
}
?>
