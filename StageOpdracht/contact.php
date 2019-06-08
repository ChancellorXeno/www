<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="contact_style.css">
</head>
<body>
  <? include "navigation.php"; ?>

  <div class="container">
        
    <h1 class="header">Get in touch</h1>

    











    <div class="form_container">
    	<form action="connect_contact.php" method="post">
        <input class="form_item name_input" placeholder="Name" type="text" name="name"><br>
        <input class="form_item mail_input" placeholder="Email Address" type="email" name="mail"><br>
        <textarea class="form_item desc_input" placeholder="Description" type="text" name="description" rows="5" cols="20"></textarea><br>
        <input class="form_item submit" type="submit" name="submit">
      </form>
    </div>

  </div>    

  <footer>
    <a href="https://github.com/ChancellorXeno" class="footer_link footer_item">My GitHub</a>
    <p class="footer_item">© Ricardo Veen</p>
    <p class="compar">Created for <a href="https://www.compar.nl/">@ Compar</a></p>
  </footer>
    
</body>