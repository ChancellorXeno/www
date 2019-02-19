	<!-- GET -->

<?php
	if( $_GET["name"] || $_GET["email"] ) {
		echo "<h1>De ingevulde gegevens zijn:</h1>";
		echo "Welcome ". $_GET['name']. ".<br>";
		echo "You are ". $_GET['email']. " years old.";
		
		exit();
	}	
?>

<!-- POST -->

<?php
	if( $_GET["name"] || $_POST["email"] ) {
		echo "<h1>De ingevulde gegevens zijn:</h1>";
		echo "Naam :". $_POST['name']. ".<br>";
		echo "Emailadres :". $_POST['email']. ".";
		
		exit();
	}
?>