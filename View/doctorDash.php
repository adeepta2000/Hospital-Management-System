<?php
 include("../controller/patientshow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div>
        
        <nav>
        
            <ul>
                <li><a href="doctorDash.php" class="active">Dashboard</a></li>
                <li><a href="doctorProfile.php">Profile</a></li>
                <li><a href="doctorAddpatient.php">Add Patient</a></li>
                <li><a href="doctorAppointment.php">Appointments</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
           
        </nav>
    </div>
    <?php
    session_start();
    ?>
    <div class="session">
    <h1 > Welcome
    <?php
    echo $_SESSION['uname'];
    ?>
    </h1 >
    </div>
    <h2>Patient List</h2>
    <table class="table"  width="100%">
    <tr>
        
        <th>First Name</th>
        <th>Last Name</th>
       
        <th>Email</th>
        <th>Gender</th>
        
</tr>
<?php

while($data=mysqli_fetch_assoc( $userQuery))
{    
   
    $FirstName= $data['FirstName'];
    $LastName= $data['LastName'];
    
    $Email= $data['Email'];
    $Gender= $data['Gender'];

    echo 
    "<tr>
   
    <td>$FirstName</td>
    <td>$LastName</td>
   
    <td>$Email</td>
    <td>$Gender</td>

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