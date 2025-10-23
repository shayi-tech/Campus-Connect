<!DOCTYPE html>
<html>
<head>
<title>subok</title>
</head>

<body>
<h1> subok information </h1>
<form method="POST" action="subok_recorded.php">

<input type="text" name="name" placeholder="enter name" required><br>
<input type="text" name="age" placeholder="age" required><br>

<label>sports</label><br>
<input type="checkbox" name="sports[]"value="swimming">swimming
<input type="checkbox" name="sports[]"value="reading">reading
<input type="checkbox" name="sports[]"value="cooking">cooking<br><br>

<select name="subject" required>
<option value="">choose a subject</option>
<option value="bsit">bsit</option>
<option value="bscs">bscs</option>
</select><br>

<label for="message">notess:</label><br>
<textarea name="message" rows="10" cols="20"></textarea><br>
<button type="submit">submit</button>
</form>
</body>
</html>

