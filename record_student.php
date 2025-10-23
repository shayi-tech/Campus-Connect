<?
require ('connection.php');

if(!isset($_GET['id'])) {
	die("no student");
}
$id = $_GET['id'];

$sql= "SELECT * FROM tb_info WHERE id=$id LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0){
	die("student not found");
}
$tb_info = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$Nickname = $_POST['Nickname'];
	
	$Hobbies = "";
	if (!empty($_POST['Hobbies'])) {
		$Hobbies = implode(", ", $_POST['Hobbies']);
	}
	
	$update = "UPDATE tb_info
	SET Name='$Name', Address='$Address', Nickname='$Nickname', Hobbies='$Hobbies'
	WHERE id=$id";
	 
	 if (mysqli_query($conn, $update)) {
		 header("Location: view_exam.php");
		 exit;
	 }else{
		 echo "error tanga: " . mysqli_error($conn);
	 }
}
?>

<!DOCTYPE html>
<html>
<head> 
<title> update student </title>
</head>
<body>
<h2> update student</h2>

<form method="POST" action="">

<label> Name:</label><br>
<input type="text" Name="Name" value="<?php echo $tb_info['Name']; ?>" required><br>

<label> Address:</label><br>
<input type="text" Name="Address" value="<?php echo $tb_info['Address']; ?>" required><br>

<label> Nickname:</label><br>
<input type="text" Name="Nickname" value="<?php echo $tb_info['Nickname']; ?>" required><br>

<label>Hobbies:</label><br>
<?php
$savedHobbies = explode(", ", $tb_info['Hobbies']);
?>
<input type="checkbox" name="Hobbies[]" value="reading" <?php if(in_array("reading",$savedHobbies)) echo "checked"; ?>> reading
<input type="checkbox" name="Hobbies[]" value="basketball" <?php if(in_array("reading",$savedHobbies)) echo "checked"; ?>> basketball
<input type="checkbox" name="Hobbies[]" value="swimming" <?php if(in_array("reading",$savedHobbies)) echo "checked"; ?>> swimming
<br>
<br>
<button type="submit">update</button>
<a href="view_exam.php">cancel</a>
</form>
</body>
</html>

	
	
	