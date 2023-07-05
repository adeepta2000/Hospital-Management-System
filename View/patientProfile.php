<?php
include("../controller/patientProfilecontrol.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <link rel="stylesheet" href="adminstyle.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ysabeau:wght@500&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Ysabeau', sans-serif;
}
.hero{
    height: 100%;
width: 100%;
background-position: center;
position: absolute;
}
.form-box{
    width: 400px;
    height: 580px;
    position: relative;
    margin: 0% auto;
    background: #fff;
    padding: 5px;
    
}
.input-group{
    top: 100px;
    position: absolute;
    width: 300px;
    transition: .5s;
    line-height: 20px;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 60%;
    height: 40px;
    padding: 10px, 30px;
    cursor: pointer;
    display: block;
    margin: 20px;
    background: linear-gradient(to right, #ff105f,#ffad06);
    border: 0;
    outline: none;
    border-radius: 30px;
}
        </style>
</head>
<body>
<div>
        
        <nav>
        
            <ul>
                <li><a href="patientDash.php" class="active">Dashboard</a></li>
                <li><a href="patientProfile.php">Profile</a></li>
                <li><a href="bookAppointment.php">Book Appointments</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
           
        </nav>
    </div>
    <?php
include("../controller/patientProfileupdate.php");
?>
    <div class="hero">
        <div class="form-box">   
<form id="doctor" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="input-group" onsubmit="return validate1()">
            First Name:<input type="text" id="fname" class="input-field" name="fname" value="<?php echo $data['FirstName'];?> " >
            Last Name:<input type="text" id="lname" class="input-field" name="lname" value="<?php echo $data['LastName'];?>" >
            Username:<input type="text" id="uname" class="input-field" name="uname" value="<?php echo $data['Username'];?>" >
            Email:<input type="email" id="email" class="input-field" name="email" value="<?php echo $data['Email'];?>" >
            Password:<input type="text" id="pass" class="input-field" name="pass"  value="<?php echo $data['Password'];?>"  >
           
            <input type="submit" class="submit-btn" value="Submit" name="btnClick2">

            </form>
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>