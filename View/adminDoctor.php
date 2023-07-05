<?php
 include("../controller/docShow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Doctor_List</title>
    <link rel="stylesheet" href="adminstyle.css">
    <style>
        .submit{
        width: 8%;
        height: 30px;
        border: 1px solid;
        background: white;
        border-radius: 10px;
        font-size: 14px;
        color: black;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        position: absolute;
        top: 20%;
  left: 45%;
        }
.submit:hover{
    border-color: green;
    background-color: green;
    transition: .5s;

}
.table button
        {
            width: 50%;
            height: 30px;
            border: 1px solid;
            background: white;
            border-radius: 10px;
            font-size: 14px;
            color: black;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            }
    .table button:hover{
        border-color: red;
        background-color: red;
        transition: .5s;
            
        }

        </style>

</head>
<body>
    
<div>
        
        <nav>
        
            <ul>
                <li><a href="adminDash.php" class="active">Dashboard</a></li>
                <li><a href="adminDoctor.php">Manage Doctors</a></li>
                <li><a href="adminPatient.php">Manage Patients</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
           
        </nav>
    </div>
    <h1>Doctors</h1>

    <a href="adminAdddoctor.php"><button class="submit">Add Doctor</button></a> 
    <br>

<table class="table"  width="100%">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
</tr>
<?php

while($data=mysqli_fetch_assoc( $userQuery))
{    
    $Id= $data['Id'];
    $FirstName= $data['FirstName'];
    $LastName= $data['LastName'];
    $Username= $data['Username'];
    $Email= $data['Email'];
    $Gender= $data['Gender'];

    echo 
    "<tr>
    <td>$Id</td>
    <td>$FirstName</td>
    <td>$LastName</td>
    <td>$Username</td>
    <td>$Email</td>
    <td>$Gender</td>
   
    <td>
    <a href='../controller/docDelete.php?id=$Id'><button>Delete</button></a>
    </td>
    </tr>
    
    ";
    
    
}


?>
</table>



<?php
include("footer.php");
?>

</body>
</html>