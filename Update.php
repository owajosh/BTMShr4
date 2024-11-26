<?php
include "database.php";
include "sidebar.php";

$id=$_GET['updateID'];
$sql="SELECT * from employee where id=$id";
$result=mysqli_query ($conn,$sql);
$row=mysqli_fetch_assoc($result);
$fullname=$row['fullname'];
$gender=$row['gender'];
$email=$row['email'];
$contact=$row['contact'];
$type=$row['employee_type'];
$department=$row['department'];


if(isset($_POST['confirm'])){ 
  $fullname      = $_POST['fname'];
  $contact    = $_POST['contact'];
  $email    = $_POST['email'];
  $gender   = $_POST['gender'];
  $type    = $_POST['employee_type'];
  $department  = $_POST['department'];

  $sql = "UPDATE employee SET id=$id, fname='$fullname', gender='$gender',email='$email,  employee_type='$type', department='$department' WHERE id=$id";    
  $result=mysqli_query($conn,$sql);
    if($result){
    
       header('location: dashboard.php');
    }else{
        die(mysqli_error($con));
    }
}

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
                  