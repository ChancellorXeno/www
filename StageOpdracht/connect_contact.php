<? include "navigation.php"; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "CarWash";

$connect = new mysqli ('localhost', 'root', 'mysql', 'CarWash') or die ('Could not connect');

if($connect -> connect_error) {
	die('Connection failed.');
} echo "Your form was successfully insterted into the database.";


$name= $_POST['name'];
$mail= $_POST['mail'];
$description= $_POST['description'];

$sql="INSERT INTO contact (name, mail, description) VALUES ('$name','$mail','$description')";

if($connect ->query ($sql) === TRUE) {
	echo "<br><br>Name: ".$name.".<br>"."Mail: ".$mail.".<br>"."Description: ".$description.".<br>";

} else {
	echo "<br><br>Something went wrong.";
}

?>

<div class="footer">
	<li class="footer_item">Location:<br><br>Some Country<br>Some town<br>Some Address</li>
	<li class="footer_item">Phone number:<br>06 66666666<br><br>© 2019<br>Some car wash company</li>
</div>

