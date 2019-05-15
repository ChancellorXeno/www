<?
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Boekenclub";


try {
    $conn = new PDO("mysql:host=$servername;dbname=Planningstool", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('connection succesful');</script>";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage()."<br/>";
}
?>