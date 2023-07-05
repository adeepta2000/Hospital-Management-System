<?php
include("../controller/registrationCheck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="registyle.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"> </div>
                <button type="button" class="toggle-btn" onclick="doctor()">Doctor</button>
                <button type="button" class="toggle-btn"onclick="patient()">Patient</button>
            </div>
            <form id="doctor" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="input-group" onsubmit="return validate1()">
            <input type="text" id="fname1" class="input-field" name="fname1" placeholder="First Name" >
            <input type="text" id="lname1" class="input-field" name="lname1" placeholder="Last Name" >
            <input type="text" id="uname1" class="input-field" name="uname1" placeholder="Username" >
            <input type="email" id="email1" class="input-field" name="email1" placeholder="Enter Email" >
            <p>Gender:</p>
            <input type="radio"id="gender1" name="gender1" value="Male">Male
            <input type="radio"  id="gender1"name="gender1" value="Female">Female
            <input type="radio" id="gender1" name="gender1" value="Other">Other
            <input type="password" id="pass1" class="input-field" name="pass1" placeholder="Enter password" >
            <input type="submit" class="submit-btn" value="Sign Up" name="btnClick1">
            <br>
            <span>
            Already have an account?
            <a href = "login.php">Login here! </a>
</span>
            </form>
            <form id="patient"action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="input-group" onsubmit="return validate2()">
            <input type="text" id="fname2" class="input-field" name="fname2" placeholder="First Name" >
            <input type="text" id="lname2" class="input-field" name="lname2" placeholder="Last Name" >
            <input type="text" id="uname2" class="input-field" name="uname2" placeholder="Username" >
            <input type="email" id="email2" class="input-field" name="email2" placeholder="Enter Email" >
            <p>Gender:</p>
            <input type="radio"id="gender2" name="gender2" value="Male">Male
            <input type="radio" id="gender2" name="gender2" value="Female">Female
            <input type="radio" id="gender2"name="gender2" value="Other">Other
            <input type="password" id="pass2" class="input-field" name="pass2" placeholder="Enter password" >
            <input type="submit" class="submit-btn" value="Sign Up" name="btnClick2">
            <br>
            <span>
            Already have an account?
            <a href = "login.php">Login here!</a>
</span>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        var x = document.getElementById("doctor");
        var y = document.getElementById("patient");
        var z = document.getElementById("btn");

        function patient(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }

        function doctor(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }

        function validate1()
	{
		var firstname1=document.getElementById('fname1');
                var lastname1=document.getElementById('lname1');
                var username1=document.getElementById('uname1');
                var email1=document.getElementById('email1');
                var gender1=document.getElementById('gender1');
		var password1=document.getElementById('pass1');
                if(firstname1.value=="" || lastname1.value=="" || username1.value=="" || email1.value==""|| gender1.value=="" || password1.value=="")
		{
         swal("Please fillup all the box.");
			return false;
		}
		else
                {
                if(password1.length<8)
                {
                        swal("Password must be not less than 8 character "); 
                        return false;   
                }
                else{

                        return true;
                }
               
                }
			

                        
	}
        

    function validate2()
	{
		var firstname2=document.getElementById('fname2');
                var lastname2=document.getElementById('lname2');
                var username2=document.getElementById('uname2');
                var email2=document.getElementById('email2');
                var gender2=document.getElementById('gender2');
		var password2=document.getElementById('pass2');
                if(firstname2.value=="" || lastname2.value=="" || username2.value=="" || email2.value==""|| gender2.value=="" || password2.value=="")
		{
         swal("Please fillup all the box.");
			return false;
		}
		else
                {
                if(password2.value.length<8)
                {
                        swal("Password must be not less than 8 character "); 
                        return false;   
                }
                else{

                        return true;
                }
               
                }
			

                        
	}


        </script>
</body>
</html>