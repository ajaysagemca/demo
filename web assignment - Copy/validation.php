<?php
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
$nameErr = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}
if (empty($_POST["message"])) {
$messageErr = "Message is required";
} else {
$message = test_input($_POST["message"]);
}
if ($nameErr == "" && $emailErr == "" && $messageErr == "") {
// You can save the data to the database or send an email
echo "<h3>Form submitted successfully!</h3>";
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Message: $message<br>";
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation Example</title>
<style>
.error { color: red; }
</style>
</head>
<body>
<h2>Contact Form</h2>
<form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error"><?php echo $nameErr;?></span>
<br><br>
Email: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error"><?php echo $emailErr;?></span>
<br><br>
Message: <textarea name="message" rows="5" cols="40"><?php echo
$message;?></textarea>
<span class="error"><?php echo $messageErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>