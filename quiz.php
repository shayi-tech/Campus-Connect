<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER INFORMATION</title>
</head>

<body>
<h1>customer information</h1>
<form method="POST" action="add_record.php">

<input type="text" name="name" placeholder="enter your name" required><br>
<input type="text" name="contact_no" placeholder="enter your contact" required><br>

<select name="type_of_customer" required>
<option value=""> type of customer</option>
<option value="regular">regular</option>
<option value="new">new</option>
</select><br>

<label>choose preferred payment method:</label><br>
<input type="radio" name="payment" value="gcash" required>gcash
<input type="radio" name="payment" value="delivery" required>delivery
<br><br>
<button type="submit">SUBMIT</button>
</form>
</body>
<html>


