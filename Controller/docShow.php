<?php
include("../model/database.php");
?>
<?php
            
            $docshow = new db();
            $conn=$docshow->OpenConn();   
            $userQuery=$docshow->docshow($conn);
            
            
                 
?>