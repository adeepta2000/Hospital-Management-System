<?php
class db
{
    
    function OpenConn()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="hospital";
        $conn = new mysqli($servername, $username, $password,$dbname);

        return $conn;
    }

    function registration1($conn,$fname1,$lname1,$uname1,$email1,$gender1,$pass1)
 {

$result = $conn->query("INSERT INTO `doctor` (`FirstName`, `LastName`, `Username`, `Email`,`Gender`, `Password`) VALUES ('$fname1', '$lname1', '$uname1', '$email1','$gender1', '$pass1')");
 }

 function registration2($conn,$fname2,$lname2,$uname2,$email2,$gender2,$pass2)
 {

$result = $conn->query("INSERT INTO `patient` (`FirstName`, `LastName`, `Username`, `Email`,`Gender`, `Password`) VALUES ('$fname2', '$lname2', '$uname2', '$email2','$gender2', '$pass2')");
 }

 function patientLogin($conn,$uname,$pass)
 {
$result = $conn->query("SELECT *FROM `patient` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }
 function adminLogin($conn,$uname,$pass)
 {
$result = $conn->query("SELECT * FROM `admin` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }
 function doctorLogin($conn,$uname,$pass)
 {
$result = $conn->query("SELECT * FROM `doctor` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }

 function docshow($conn)
 {
$result = $conn->query("SELECT Id, FirstName, LastName, Username, Email, Gender FROM `doctor`");

return $result;

 }

 function DoctorProfile($conn,$uname)
 {
$result = $conn->query("SELECT FirstName, LastName, Username, Email, Password FROM  `doctor` WHERE Username='$uname'");

return $result;

 }

 function DoctorProfileupdate($conn,$fname,$lname,$uname,$email,$pass,$user)
 {
$result = $conn->query("UPDATE `doctor` SET FirstName='$fname', LastName='$lname', Username='$uname' , Email='$email', Password='$pass' WHERE Username='$user'");
 }

 function patientshow($conn)
 {
$result = $conn->query("SELECT Id, FirstName, LastName, Username, Email, Gender FROM `patient`");

return $result;

 }

 function PatientProfile($conn,$uname)
 {
$result = $conn->query("SELECT FirstName, LastName, Username, Email, Password FROM `patient` WHERE Username='$uname'");

return $result;

 }

 function patientProfileupdate($conn,$fname,$lname,$uname,$email,$pass,$user)
 {
$result = $conn->query("UPDATE `patient` SET FirstName='$fname', LastName='$lname', Username='$uname' , Email='$email', Password='$pass' WHERE Username='$user'");
 }

 function docDelete($conn, $id)
 { 
$result = $conn->query("DELETE FROM `doctor` WHERE Id ='$id'");
 
 }

 function patientDelete($conn, $id)
 { 
$result = $conn->query("DELETE FROM `patient` WHERE Id ='$id'");
 
 }

 function appointment($conn,$name,$email,$phone,$date,$gender,$message)
 {

$result = $conn->query("INSERT INTO `appointment` (`Name`,`Email`, `Phone`, `Date`,`Gender`, `Message`) VALUES ('$name','$email', '$phone', '$date', '$gender', '$message')");
 }

 function appointshow($conn)
 {
$result = $conn->query("SELECT * FROM `appointment`");

return $result;

 }

 function passChange($conn,$uname,$pass)
 {
$result = $conn->query("UPDATE  `patient` SET Password ='$pass' WHERE Username='$uname'");
 }


}
?>