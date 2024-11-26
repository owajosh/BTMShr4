<?php
include('database.php');
include 'sidebar.php';

// Fetch employee details for the dropdown
$sql = "SELECT * FROM payroll";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeId = $_POST['employee_id'];
    $basicSalary = $_POST['basic_salary'];
    $overtimeHours = $_POST['overtime_hours'];
    $overtimeRate = $_POST['overtime_rate'];

    // Update employee details
    $sql = "UPDATE payroll
            SET basic_salary = $basicSalary, overtime_hours = $overtimeHours, overtime_rate = $overtimeRate 
            WHERE id = $employeeId";

$result=mysqli_query($conn,$sql);
if($result){
        echo "Employee details updated successfully!";
    } else {
        echo "Error updating employee: " . 
        die(mysqli_error($con));
    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee Details</title>
</head>
<body>
    <h1>Update Employee Salary & Overtime</h1>
    <form method="POST">
        <label for="employee_id">Select Employee:</label>
        <select name="employee_id" id="employee_id" required>
            <?php while ($employee = $result->fetch_assoc()) { ?>
                <option value="<?php echo $employee['id']; ?>">
                    <?php echo $employee['fullname'] . " (" . $employee['position'] . ")"; ?>
                </option>
            <?php } ?>
        </select>

        <label for="basic_salary">Basic Salary:</label>
        <input type="number" name="basic_salary" id="basic_salary" required>

        <label for="overtime_hours">Overtime Hours:</label>
        <input type="number" name="overtime_hours" id="overtime_hours" required>

        <label for="overtime_rate">Overtime Rate (Per Hour):</label>
        <input type="number" step="0.01" name="overtime_rate" id="overtime_rate" required>

        <button type="submit">Update Employee</button>
    </form>
</body>
</html>
