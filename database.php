<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

//check connection
if (!$conn) {
	die ("connection failed: ". mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE dbcanonoy";
if(mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
echo "error creating database" . mysqli_error($conn);
}
mysqli_close($conn);

?>


</body>
</html>