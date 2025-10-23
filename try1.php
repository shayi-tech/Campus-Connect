<!DOCTYPE html>
<html>
<head>
<title>subok</title>
</head>

<body>
<h1> subok information </h1>
<form method="POST" action="subok_recorded.php">

<input type="text" name="name" required><br>

<select name="school_year" required>
<option value="">select school year</option>
<option value="1st year">1st year</option>
<option value="2nd year">2nd year</option>
<option value="3rd year">3rd year</option>
<option value="4th year">4th year</option>
</select><br>

<label> choose a scholarship grants</label><br>
<input type="radio" name="scholarship" value="mandanas" required>mandanas
<input type="radio" name="scholarship" value="lgu" required>lgu
<input type="radio" name="scholarship" value="ched" required>ched<br>
<br>

<input type="text" name="email" required><br>
<button type="submit">add student</button>
</form>
</body>
<html>
