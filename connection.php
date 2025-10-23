<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="exam";
//create table
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
	die ("connection failed: ". mysqli_connect_error());
}
?>

</body>
</html>