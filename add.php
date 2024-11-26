<?php
include('database.php');
include 'sidebar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fname'];
    $position = $_POST['position'];
    $basicSalary = $_POST['basic_salary'];
    $bonus = $_POST['bonus'];
    $deductions = $_POST['deductions'];
    $overtimeHours = $_POST['overtime_hours'];
    $overtimeRate = $_POST['overtime_rate'];


    $sql = "INSERT INTO payroll (fname, position, basic_salary, bonus, deductions, overtime_hours, overtime_rate) 
            VALUES ('$fullname', '$position', $basicSalary, $bonus, $deductions, $overtimeHours, $overtimeRate)";
 if ($conn->query($conn,$sql) === TRUE) {
    echo "Employee added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add New Employee</h1>
    <form method="POST">
        <label for="fname">Name:</label>
        <input type="text" name="fname" id="fname" required>

        <label for="position">Position:</label>
        <input type="text" name="position" id="position" required>

        <label for="basic_salary">Basic Salary:</label>
        <input type="number" step="0.01" name="basic_salary" id="basic_salary" required>

        <label for="bonus">Bonus:</label>
        <input type="number" step="0.01" name="bonus" id="bonus">

        <label for="deductions">Deductions:</label>
        <input type="number" step="0.01" name="deductions" id="deductions">

        <label for="overtime_hours">Overtime Hours:</label>
        <input type="number" name="overtime_hours" id="overtime_hours">

        <label for="overtime_rate">Overtime Rate (Per Hour):</label>
        <input type="number" step="0.01" name="overtime_rate" id="overtime_rate">

        <button type="submit">Add Employee</button>
    </form>
</body>
</html>
