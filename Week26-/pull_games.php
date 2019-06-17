<?php

function connectdb() {
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "CarWash";

$connect = new mysqli ('localhost', 'root', 'mysql', 'CarWash') or die ('Could not connect');

if($connect -> connect_error) {
	die('Connection failed.');
} echo "";

return $connect;
}
function collect_reviews() {
	$connect = connectdb();
	$sql="SELECT * FROM reviews ORDER BY id DESC";
	$result = $connect -> query($sql);
	$array = [];

	while ($row = $result -> fetch_assoc()) {
		$array [] = $row;

	}

	return $array;
}

?>