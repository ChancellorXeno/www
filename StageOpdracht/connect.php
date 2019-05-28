<form action="connect.php" method="post">
    <input placeholder="name" type="text" name="name">
    <br>
    <input placeholder="mail" type="text" name="mail">
    <br>
    <input placeholder="description" type="text" name="description">
    <input type="submit" name="submit">
</form>
<?
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "CarWash";


try {
    $conn = new PDO("mysql:host=$servername;dbname=CarWash", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('connection succesful');</script>";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage()."<br/>";
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$description = $_POST['description'];

$sql = "INSERT INTO contact (name,mail,description) VALUES ('John','@John','Me John')"


?>