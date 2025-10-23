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
$sql = "SELECT id, firstname, lastname FROM studentinfo WHERE lastname='Doe'";
$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)) {
		echo "id:".$row["id"]. "-Name:".$row["firstname"]."".$row["lastname"]."<br>";
	}
}else{
	echo "0 results";
}
mysqli_close($conn);

?>


</body>
</html> 