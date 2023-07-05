<?php
include("../model/database.php");
?>
<?php
$delete="";
$delete=$_GET['id'];
if($delete)
{
    $doc = new db();
    $conn=$doc->OpenConn();  
$Query=$doc->docDelete($conn,$delete);
header("location:../view/adminDoctor.php?id="); 
}

?>