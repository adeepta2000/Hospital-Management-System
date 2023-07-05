<?php
include("../model/database.php");
?>
<?php
	session_start();
            
            $Profile = new db();
            $conn=$Profile->OpenConn();   
            $userQuery=$Profile->PatientProfile($conn,$_SESSION['uname']);
            $data=mysqli_fetch_assoc( $userQuery);
                  

?>