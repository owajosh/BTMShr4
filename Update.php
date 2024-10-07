<?php 
include "database.php"; 
if(isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $contact= $_POST['contact'];
    $email= $_POST['email'];
    $gender= $_POST['gender']; 
    $employee= $_POST ['employee type'];
    $department= $_POST['department'];
}

$sql = "UPDATE 'ganda' SET 'fullname'= '$fullname'= 'contact' = '$contact', 'email' =  '$email', 'gender' ='$gender', 'employee' = '$employee', 'department','department'";
    
$result =  $conn->query($sql);

if($result == TRUE){
  echo "NEW RECORDED SUCCESSFULLY";
}
else{
  echo "Error:". $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>
