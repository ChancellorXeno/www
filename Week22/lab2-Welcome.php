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