<?php
 $fname='';
 $lname='';
 $uname='';
 $email='';
 $pass='';

	if(isset($_POST['btnClick2']))
    {

        session_start();
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];        
        $uname=$_POST['uname'];
        $email=$_POST["email" ];
        $pass=$_POST['pass'];
        
            
                          
            $profileupdate = new db();
            $conns=$profileupdate->OpenConn();   
            $userQuerys=$profileupdate-> DoctorProfileupdate($conn,$fname,$lname,$uname,$email,$pass,$_SESSION['uname']);      
                                         
            header("location:doctorProfile.php");       
                   
       
	}
?>