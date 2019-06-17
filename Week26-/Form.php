<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>&nbsp;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/form.css">
	<script src="js/scripts.js"></script>
</head>
<body>
	<? include "navigation.php"; ?>
	<div id='content'>
        <form class="form-horizontal" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="game"><p>Welk spel wilt u gaan spelen?</p></label>
                <div class="col-sm-10">
                    <input name='game' type="button" id='urlbutton game' onclick='loadURL()' class="form-control input">
                 </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="time"><p>Starttijd:</p></label>
                <div class="col-sm-10">
                    <input name='time' type="time" class="form-control input" id="time" min="9:00" max="16:00" value='<?php echo $time; ?>' required>
                 </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="teacher"><p>Host:</p></label>
                <div class="col-sm-10">
                    <input name='host' type="text" class="form-control input" id="teacher"  placeholder="Wie gaat het spel uitleggen?" value='<?php echo $host; ?>' required>
                 </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="user"><p>Spelers:</p></label>
                <div class="col-sm-10">
                    <input name='players' type="text" class="form-control input persons" id="user1" placeholder="Spelers" value='<?php echo $players; ?>' required>
                 </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="usr"></label>
                <div class="col-sm-10">
                    <input type="submit" id='button' class="form-control input" id="usr">
                 </div>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $time = strip_tags($_POST['time']);
        $players = strip_tags($_POST['players']);
        $host = strip_tags($_POST['host']);
        if(empty($players)||empty($time)||empty($host)){
           echo "<script type='text/javascript'>alert('please fill al requiered fields');</script>";
        }else{
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = 'Planningstool';

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO plannedgames (game, time, host, players)
                VALUES ('$game', '$time', '$host','$players')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo '<script>console.log("connection successfully");</script>';
                }
            catch(PDOException $e)
                {
                echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
                }

            $conn = null;
        }
    }
	?>
	<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = 'Planningstool';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "CREATE TABLE plannedgames (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            game VARCHAR(30) NOT NULL,
            time VARCHAR(30) NOT NULL,
            host VARCHAR(50),
            players VARCHAR(50)
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo '<script>console.log("Database created successfully");</script>';
        }
    catch(PDOException $e)
        {
    echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
        }

    $conn = null;
?>
</body>

</html>