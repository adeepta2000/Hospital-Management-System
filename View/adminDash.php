<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div>
        
        <nav>
        
            <ul>
                <li><a href="adminDash.php" class="active">Dashboard</a></li>
                <li><a href="adminDoctor.php">Manage Doctors</a></li>
                <li><a href="adminPatient.php">Manage Patients</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
           
        </nav>
    </div>
    <?php
    session_start();
    ?>
    <div class="session">
    <h1 > Welcome
    <?php
    echo $_SESSION['uname'];
    ?>
    </h1 >
    </div>

    <button id="load_data">Click to See All Appointments</button>

	<div 
    id="main">
	</div>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load_data").on("click",function(e){
				$.ajax({
					url:"../model/ajaxdb.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script> 

<?php
include("footer.php");
?>
</body>
</html>