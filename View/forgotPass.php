<?php
 include("../controller/passChange.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password-Update</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<div class="hero">
        <div class="form-box">
            <h2>Change Password</h2>
        
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="input-group" method="post" >
   
                 <input type="text" id="uname"class="input-field" placeholder="Username" name="uname" >
   
                <input type="password" id="pass"class="input-field" placeholder="New Password" name="pass" >       
                
               
                             
                <input type="submit" class="submit-btn" value="Click" name="btnClick">
               
               <div class="home">
                <a href="login.php">Login</a>
                </div>

</form>
</div>
</div>

</body>
</html>