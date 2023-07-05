<?php
 include("../controller/logincheck.php");
 if(isset($_COOKIE['ucookie']) && isset($_COOKIE['pcookie'])){
    $u=$_COOKIE['ucookie'];
    $p=$_COOKIE['pcookie'];
 }
 else{
    $u="";
    $p="";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<div class="hero">
        <div class="form-box">
        <div class="button-box">
                <div id="btn"> </div>
                <button type="button" class="toggle-btn">Login</button>
            </div>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="input-group" method="post" onsubmit="return validateLogin()">
   
                 <input type="text" id="uname"class="input-field" placeholder="Username" name="uname" value="<?php echo $u ?>">
   
                <input type="password" id="pass"class="input-field" placeholder="Password" name="pass" value="<?php echo $p ?>">       
                
                <input type="checkbox" class="check-box" name="remember"><span>Remember me</span>
                             
                <input type="submit" class="submit-btn" value="Login" name="btnClick">
               <div class="forget">
                <a href="forgotPass.php">Forgot Password?</a>
                </div>
                <br><br><br>
                
               <div class="home">
                <a href="home.php">Home</a>
                </div>

</form>
</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

var username=document.getElementById('uname');
		var password=document.getElementById('pass');
	function validateLogin()
	{
		if(username.value=="" || password.value=="")
		{
	     swal("Username or password is empty");
			return false;
		}
		else
			return true;
	}
</script>
</body>
</html>