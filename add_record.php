<?php
require('connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['name'];
	$schoolyear=$_POST['school_year'];
	$grants=$_POST['scholarship'];
	$email=$_POST['email'];
	
$sql="INSERT INTO subok_information(name, school_year, scholarship, email)
VALUES('$name', '$schoolyear', '$grants', '$email')";

if(mysqli_query($conn,$sql)) {
echo "<p style='color: green;'>recorded</p>";
}else{
	echo "<p style='color: red;'>wrong: " . mysqli_error($conn) . "</p>";
}
}
	
?>
	