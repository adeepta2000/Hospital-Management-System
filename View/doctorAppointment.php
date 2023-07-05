<?php
include("../controller/appointShow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Appointment</title>
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
<table class="table"  width="100%">
    <tr>
        
        <th> Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Gender</th>
        <th>Message</th>
</tr>
<?php

while($data=mysqli_fetch_assoc( $userQuery))
{    
   
    $Name= $data['Name'];
    $Email= $data['Email'];
    $Phone= $data['Phone'];
    $Date= $data['Date'];
    $Gender= $data['Gender'];
    $Message= $data['Message'];
    
    

    echo 
    "<tr>
    
    <td>$Name</td>
    <td>$Email</td>
    <td>$Phone</td>
    <td>$Date</td>
    <td>$Gender</td>
    <td> $Message</td>
    
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