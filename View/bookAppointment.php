<?php
include("../controller/appointCheck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient-Appointment</title>
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
    <div class="hero">
<h1>Book Appointment</h1>
        <div class="form-box">   
<form id="doctor" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="input-group" onsubmit="return validate1()">
            <input type="text" class="input-field" name="name" placeholder=" Name" >
            <input type="email" id="email" class="input-field" name="email" placeholder="Email" >
            <input type="text" class="input-field" name="phone" placeholder="Phone" >
            <input type="date" class="input-field" name="date" placeholder="Date" >
            <p>Gender:</p>
            <input type="radio"id="gender" name="gender" value="Male">Male
            <input type="radio"  id="gender"name="gender" value="Female">Female
            <input type="radio" id="gender" name="gender" value="Other">Other
            <textarea name="message" class="input-field" placeholder="Message"></textarea>
            <input type="submit" class="submit-btn" value="Book" name="btnClick2">
          
            </form>
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>