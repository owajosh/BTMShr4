<?php
include 'database.php';
if(isset($_GET['deleteID'])){
    $ID=$_GET['deleteID'];
    $sql="DELETE from employee where id=$ID";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "DELETED SUCCESSFULL";
        header('location:dashboard.php');
    }else{
        die(mysqli_error($con));
        }
}
?>
