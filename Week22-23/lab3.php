<!DOCTYPE HTML>  
<html>
<head>
<style>
span {color: #FF0000;}
</style>
</head>
<body>  

<?php

$name = $email = $input = "";
$emailErr = $nameErr = "*";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	if (empty($_POST["name"])) {
		$nameErr = "* Name is required";
		$name = $email = "";
		if (empty($_POST["email"])) {
			$emailErr = "* Email is required";
			$name = $email = "";
		} 
	} 
	if (empty($_POST["email"])) {
		$emailErr = "* Email is required";
		$name = $email = "";
		if (empty($_POST["name"])) {
			$nameErr = "* Name is required";
			$name = $email = "";
		}
	} 
	else if (!empty($_POST["name"]) && !empty($_POST["email"])) {
		$input = "<h1>Your input:</h1>";
  		$name = test_input($_POST["name"]);
  		$email = test_input($_POST["email"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<p><span>* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Name: <input type="text" name="name">
	<span><?php echo $nameErr;?></span>
	<br><br>
	Email: <input type="text" name="email">
	<span><?php echo $emailErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Verzenden">  
</form>

<?php
	echo $input.$name."<br>".$email;
?>

</body>
</html>	