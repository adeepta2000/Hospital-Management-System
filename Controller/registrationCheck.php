<?php
 include("../model/database.php");
?>
<?php
$fname1='';
$vfname1='';
$lname1='';
$vlname1='';
$uname1='';
$vuname1='';
$gender1='';
$vgender1='';
$email1='';
$vemail1='';
$pass1='';
$vpass1='';
$fname2='';
$vfname2='';
$lname2='';
$vlname2='';
$uname2='';
$vuname2='';
$gender2='';
$vgender2='';
$email2='';
$vemail2='';
$pass2='';
$vpass2='';
$message='';

if (isset($_POST['btnClick1'])) 
{
    $fname1=$_POST['fname1'];
$lname1=$_POST['lname1'];
$uname1=$_POST['uname1'];
$email1=$_POST['email1'];
$gender1=$_POST['gender1'];
$pass1=$_POST['pass1'];	

                $reg_In1 = new db();
                $conn=$reg_In1->OpenConn();   
                $userQuery=$reg_In1->registration1($conn,$fname1,$lname1,$uname1,$email1,$gender1,$pass1);

                $message= "<span style='color:green;'>Successfully Registared!</span>";
		
	}
    if (isset($_POST['btnClick2'])) 
    {
        $fname2=$_POST['fname2'];
    $lname2=$_POST['lname2'];
    $uname2=$_POST['uname2'];
    $email2=$_POST['email2'];
    $gender2=$_POST['gender2'];
    $pass2=$_POST['pass2'];	
    
                    $reg_In2 = new db();
                    $conn=$reg_In2->OpenConn();   
                    $userQuery=$reg_In2->registration2($conn,$fname2,$lname2,$uname2,$email2,$gender2,$pass2);
    
                    $message= "<span style='color:green;'>Successfully Registared!</span>";
            
        }

        if (isset($_POST['btnClick3'])) 
        {
            header("location:../view/adminDoctor.php"); 
        }

        
        if (isset($_POST['btnClick4'])) 
        {
            header("location:../view/adminPatient.php"); 
        }

        
 
?>