<?php
require('connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['name'];
	$age=$_POST['age'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$sports="";
	if(!empty($_POST['sports'])){
		$sports=implode(",",$_POST['sports']);
	}
	
	
$sql="INSERT INTO ulit_information(name, age, sports, subject, message)
VALUES('$name', '$age', '$sports', '$subject', '$message')";

if(mysqli_query($conn,$sql)) {
echo "<p style='color: green;'>recorded</p>";
}else{
	echo "<p style='color: red;'>wrong: " . mysqli_error($conn) . "</p>";
}
}
	
?>
	