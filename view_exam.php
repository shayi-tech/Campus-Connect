<?php
require ('connection.php');

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM tb_info WHERE id=$id");
	header("Location: view_exam.php");
	exit;
}

$sql = "SELECT * FROM tb_info ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title> exam information</title>
<style>
</style>
</head>

<body>
<h2> student record</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Nickname</th>
<th>Hobbies</th>
<th>Action</th>
</tr>

<?php
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Address']."</td>";
		echo "<td>".$row['Nickname']."</td>";
		echo "<td>".$row['Hobbies']."</td>";
		echo "<td>
		<a class='btn btn-update' href='record_student.php?id=".$row['id']."'>UPDATE</a>
		<a class='btn btn-delete' href='view_exam.php?delete=".$row['id']."'onclick=\"return confirm('are you sure yoou want to delete it?');\">DELETE</a>
		</td>";
		echo "</tr>";
	}
	}else{
		echo "<tr><td colspan='6' style='text-align:center;'>no records found</td></tr>";
	}
	?>
	</body>
	</html>
	
		