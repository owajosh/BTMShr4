<?php
include 'sidebar.php';
$conn = new mysqli("localhost", "root", "", "pogipoako");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $employee_type = $_POST['employee_type'];
    $department = $_POST['department'];

    $sql = "INSERT INTO employee (fullname, contact, email, gender, employee_type, department) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fullname, $contact, $email, $gender, $employee_type, $department);
    
    if ($stmt->execute()) {
        echo "Employee added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employee</title>
</head>
<body>
    <h2>Add New Employee</h2>
    <form method="POST" action="">
        Fullname: <input type="text" name="fullname" required><br>
        Contact: <input type="text" name="contact"><br>
        Email: <input type="email" name="email"><br>
        Gender: 
        <select name="gender" required>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>
        Employee Type: 
        <select name="employee_type" required>
            <option value="Casual">Casual</option>
            <option value="Part-Time">Part-Time</option>
            <option value="Full-Time">Full-Time</option>
        </select><br>
        Department: <input type="text" name="department" required><br>
        <button type="submit">Add Employee</button>
    </form>
</body>
</html>