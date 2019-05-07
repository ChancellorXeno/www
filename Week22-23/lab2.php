<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>&#65279;</title>
</head>
<body>
	<!-- GET -->

<?php
	if( $_GET["name"] || $_GET["email"] ) {
		echo "<h1>De ingevulde gegevens zijn:</h1>";
		echo "Naam :". $_GET['name']. ".<br>";
		echo "Emailadres :". $_GET['email']. ".";
		
		exit();
	}	
?>

<!-- POST -->

<?php
	if( $_POST["name"] || $_POST["email"] ) {
		echo "<h1>De ingevulde gegevens zijn:</h1>";
		echo "Naam :". $_POST['name']. ".<br>";
		echo "Emailadres :". $_POST['email']. ".";
		
		exit();
	}
?>
</body>
</html>