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
$sql = "CREATE TABLE studentinfo(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
	echo "Table studentinfo created successfully";
}else{
	echo"error creating table" . mysqli_error($conn);
}


mysqli_close($conn);

?>


</body>
</html> 