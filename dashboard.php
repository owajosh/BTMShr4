<?php
include 'database.php'; 
include 'sidebar.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
   
<main class="bg-gray-100 p-4">
    <div class="max-w-7xl mx-auto bg-white p-4 rounded shadow">
        <div  class="flex justify-between items-center mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
            <a href="add employee.php"><i class="fas fa-user-plus mr-2"></i> Add Employee Records
            </button> </a>
            <div class="flex items-center">
                <label for="entries" class="mr-2">Show</label>
                <select id="entries" class="border rounded p-1">
                    <option>10</option>
                    <option>20</option>
                </select>
                <span class="ml-2">entries</span>
            </div>
        </div>
        <h2 class="text-center text-xl font-semibold mb-4">Employee Records</h2>
        <div class="flex justify-between items-center mb-4">
            <div></div>
            <div class="flex items-center">
                <label for="search" class="mr-2">Search:</label>
                <input type="text" id="search" class="border rounded p-1">
            </div>
        </div>
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="PY-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">fulllname</th>
                    <th class="py-2 px-4 border">Gender</th>
                    <th class="py-2 px-4 border">Email</th> 
                    <th class="py-2 px-4 border">Contact</th>
                    <th class="py-2 px-4 border">Employee Type</th>
                    <th class="py-2 px-4 border">Department</th>
                    <th class="py-2 px-4 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql= "SELECT * from employee";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $fullname=$row['fullname'];
                        $gender=$row['gender'];
                        $email=$row['email'];
                        $contact=$row['contact'];
                        $type=$row['employee_type'];
                        $department=$row['department'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$fullname.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$email.'</td>
                        <td>'.$contact.'</td>
                        <td>'.$type.'</td>
                        <td>'.$department.'</td>
                        <td>
                        <button class="btn btn-primary"> <a href="update.php? updateID='.$id.'" class="text-light">UPDATE</a></button>
                        <button class="btn btn-danger"> <a href="delete.php? deleteID='.$id.'"  class="text-light">DELETE</a></button>
                        </td>
                      </tr>';
                
                    }
                }
                
                ?>
              </tbody>
            </table>
    </div>
</body>
</html>