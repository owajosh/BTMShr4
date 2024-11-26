<?php
include('database.php');
include 'sidebar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeId = $_POST['employee_id'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    
    $sql = "SELECT * FROM payroll WHERE id = $employeeId";
    $result = $conn->query($sql);
    $employee = $result->fetch_assoc();

    if (!$employee) {
        echo "Employee not found.";
        exit();
    }


    $grossSalary = $employee['basic_salary'] + $employee['bonus'];
    $overtimePay = $employee['overtime_hours'] * $employee['overtime_rate'];
    $grossSalary += $overtimePay; 
    $netSalary = $grossSalary - $employee['deductions'];

    
    $sql = "INSERT INTO payroll_history (employee_id, months, years, gross_salary, overtime_pay, net_salary)
            VALUES ($employeeId, '$month', $year, $grossSalary, $overtimePay, $netSalary)";

    if ($conn->query($sql) === TRUE) {
        echo "Payroll for $month $year calculated successfully!";
    } else {
        echo "Error calculating payroll: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Payroll</title>
</head>
<body>
    <h1>Calculate Payroll</h1>
    <form method="POST">
        <label for="employee_id">Employee ID:</label>
        <input type="number" name="employee_id" id="employee_id" required>

        <label for="month">Month:</label>
        <input type="text" name="month" id="month" required>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" required>

        <button type="submit">Calculate Payroll</button>
    </form>
</body>
</html>
