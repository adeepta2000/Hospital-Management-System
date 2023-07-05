<?php
 include("../model/database.php");
?>
<?php
 $uname="";
 $vuname="";
 $pass="";
 $vpass="";
 
if(isset($_POST["btnClick"]))
{
   
    if (empty($_POST['uname'])) {
        $vuname= "<span style='color:red;'>Required</span>";
		}
        else
        {
            $uname=$_POST['uname'];
        }
    if (empty($_POST['pass'])) {
            $vpass= "<span style='color:red;'>Required</span>";
            }
            else
            {
                $pass=$_POST['pass'];
            }
    if(!empty($uname && $pass))  
         {
 $passUp = new db();
 $conn = $passUp->OpenConn();   
 $userQuery= $passUp->passChange($conn,$uname,$pass);
  }


}

?>