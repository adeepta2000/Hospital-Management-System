<?php
include("../model/database.php");
?>
<?php
$delete="";
$delete=$_GET['id'];
if($delete)
{
    $patient = new db();
    $conn=$patient ->OpenConn();  
$Query=$patient ->patientDelete($conn,$delete);
header("location:../view/adminPatient.php?id="); 
}

?>