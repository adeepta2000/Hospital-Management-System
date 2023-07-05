<?php
 include("../model/database.php");
?>
<?php
$name='';
$email='';
$phone='';
$date='';
$gender='';
$message='';

if (isset($_POST['btnClick2'])) 
{
    $name=$_POST['name'];
    $email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$message=$_POST['message'];	

                $book = new db();
                $conn=$book->OpenConn();   
                $userQuery=$book->appointment($conn,$name,$email,$phone,$date,$gender,$message);

               
	}
    
        
 
?>