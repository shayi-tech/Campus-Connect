<!DOCTYPE html>
<html>
<head>
<title> PRACTICING </title>
</head>
<body>
<h2> add student record</h2>
<form method="POST" action="student_add.php">
<label for="name"> NAME: </label>
<input type="text" name="name" required><br><br>

<label for="email"> EMAIL: </label>
<input type="email" name="email" required><br><br>

<label> gender:</label>
<input type="radio" name="gender" value="male" required>MALE
<input type="radio" name="gender" value="female" required>FEMALE 
<input type="radio" name="gender" value="other" required>OTHER<br><br>

<label for="course">COURSE:</label>
<select name="course" required>
<option value="">---choose course---</option>
<option value="bsit">BSIT</option>
<option value="bscs">BSCS</option>
<option value="bsba">BSBA</option>
</select><br><br>

<label>HOBBIES:</label><br> 
<input type="checkbox" name="hobbies[]" value="reading">reading
<input type="checkbox" name="hobbies[]" value="swimming">swimmong
<input type="checkbox" name="hobbies[]" value="music"> music

<button type="reset"> reset </button><br><br>
<button type="submit"> submit </button>

</form>
<body>
</html>