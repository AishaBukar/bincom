<?php

//Question 2

//Database connection

$conn=mysqli_connect("localhost","root","","testsite");

if ($conn) {
	echo "connection established"; 
	echo "<br>";
}
else{
	die("connection failed".mysqli_connect_error());
}

$sql="select sum(party_score),polling_unit_uniqueid from announced_pu_results group by polling_unit_uniqueid";

$results=mysqli_query($conn,$sql);

if(mysqli_num_rows($results)>0){
	while (($row=mysqli_fetch_array($results))) {
		echo $row[0]." ". $row[1];
		echo "<br>";

	}
}
mysqli_close($conn);




?>

