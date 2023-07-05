<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
    $q="SELECT * FROM appointment";
	$result=$conn->query($q);
    $output='<table class="table" border="0"<tr><th>Id</th><th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Gender</th><th>Message</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["Id"]}</td><td>{$row["Name"]}</td><td>{$row["Email"]}</td><td>{$row["Phone"]}</td><td>{$row["Date"]}</td><td>{$row["Gender"]}</td><td>{$row["Message"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "results";
}
$conn->close();
echo $output;
?>