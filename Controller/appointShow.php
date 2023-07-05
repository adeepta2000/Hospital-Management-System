<?php
include("../model/database.php");
?>
<?php
            
            $show = new db();
            $conn=$show->OpenConn();   
            $userQuery=$show->appointshow($conn);
            
            
                 
?>