<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    .carousel {
      width: 678px;
      height: 678px;
    }
    .carousel {
      margin: 0 auto;
    }
  </style>
</head>
<body>
<? include "navigation.php"; ?>
<div class="container">
  <div id="meme" class="carousel slide" data-ride="carousel">
  
    <ul class="carousel-indicators">
      <li data-target="#meme" data-slide-to="0" class="active"></li>
      <li data-target="#meme" data-slide-to="1"></li>
      <li data-target="#meme" data-slide-to="2"></li>
    </ul>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="img/404.jpg" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/drake.jpg" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/elmo.jpg" alt="New York">
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#meme" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#meme" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
<? include "labinclude.php"; ?>
</body>
</html>