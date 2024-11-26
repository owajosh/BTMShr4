<?php
include('database.php');
include 'sidebar.php';

$sql = "SELECT * FROM payroll";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll Dashboard</title>
</head>
<body>
    <h1>Payroll Dashboard</h1>
    <table border="1">
        <thead>
            <tr>
                <th>FullName</th>
                <th>Position</th>
                <th>Basic Salary</th>
                <th>Bonus</th>
                <th>Deductions</th>
                <th>Overtime Hours</th>
                <th>Overtime Rate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($employee = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $employee['fullname']; ?></td>
                    <td><?php echo $employee['position']; ?></td>
                    <td><?php echo $employee['basic_salary']; ?></td>
                    <td><?php echo $employee['bonus']; ?></td>
                    <td><?php echo $employee['deductions']; ?></td>
                    <td><?php echo $employee['overtime_hours']; ?></td>
                    <td><?php echo $employee['overtime_rate']; ?></td>
                    <td>
                    <a href="update_employee.php?id=<?php echo $employee['id']; ?>">Update</a> |
                    <a href="calculate_payroll.php?id=<?php echo $employee['id']; ?>">Calculate Payroll</a>


                    </td>
                </tr>
            <?php
         } 
         ?>
        </tbody>
    </table>
    <div class="max-w-7xl mx-auto bg-white p-4 rounded shadow">
        <div  class="flex justify-between items-center mb-4">
    <button class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
            <a href="add.php"><i class="fas fa-user-plus mr-2"></i> Add Employee
            </button> </a>
        </div>
</body>
</html>


                    
                
                
                
                
                
                