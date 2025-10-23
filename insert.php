<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcanonoy";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
	die ("connection failed: ". mysqli_connect_error());
}

//create table
$sql = "INSERT INTO studentinfo(firstname, lastname, email)
VALUES('lana', 'Canonoy', 'canonoy@gmail.com')";

if (mysqli_query($conn, $sql)) {
	echo "Table studentinfo created successfully";
}else{
	echo"error creating table" . mysqli_error($conn);
}


mysqli_close($conn);

?>


</body>
</html> 