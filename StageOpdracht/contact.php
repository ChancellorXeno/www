<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<nav>
		<div class="nav_inner">
			<a href="home.php"><img class="logo" src="img/logo.png"></a>
			<ul class="navmenu">
				<li class="menu_item"><a href="home.php">Home</a></li>
				<li class="menu_item"><a href="reviews.php">Reviews</a></li>
				<li class="menu_item"><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>

	<?
    include 'connect.php'

    ?>

	<div class="contact_container">
		<form action="connect.php" method="post">
            <input placeholder="name" type="text" name="name">
            <br>
            <input placeholder="mail" type="text" name="mail">
            <br>
            <input placeholder="description" type="text" name="description">
            <input type="submit" name="submit">
        </form>
	</div>

	<div class="footer">
		<li class="footer_item">Location:<br><br>Some Country<br>Some town<br>Some Address</li>
		<li class="footer_item">Phone number:<br>06 66666666<br><br>© 2019<br>Some car wash company</li>
	</div>
</body>