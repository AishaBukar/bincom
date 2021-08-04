<?php
//Question 1

//Database connection

$conn=mysqli_connect("localhost","root","","testsite");

if ($conn) {
	echo "connection established"; 
	echo "<br>";
}
else{
	die("connection failed".mysqli_connect_error());
}

$sql="select * from polling_unit group by polling_unit_id order by uniqueid limit 1";

$results=mysqli_query($conn,$sql);

if(mysqli_num_rows($results)>0){
	while (($row=mysqli_fetch_array($results))) {
		echo $row[0]."   " .$row[1]."   ".$row[2]."   " . $row[3]."   " .$row[4] . "   " . $row[5]."   ".$row[6]."   ". $row[7]."   " .$row[8]."   " .$row[9];
		echo "<br>";

	}
}
mysqli_close($conn);




?>