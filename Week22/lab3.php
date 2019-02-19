<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>&#65279;</title>
</head>
<body>
	<form action="lab3.php" method="post">
	<h1>De ingevulde gegevens zijn:</h1>
	Naam :<input type="text" name="name"><br>
	Emailadres :<input type="text" name="email"><br>
	<input type="submit" value="verzenden">
	</form>

	<?php
		if( $_GET["name"] || $_POST["email"] ) {
    		echo "Welcome ". $_POST['name']. "<br />";
    		echo "You are ". $_POST['email']. " years old.";
   		}
	?>
</body>
</html>