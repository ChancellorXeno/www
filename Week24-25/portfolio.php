<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
<body>
  <? include "navigation.php" ?>
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/depres.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/watch.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/infinity.jpg" class="d-block w-100" alt="...">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
  </div>
  <a name="Me"></a>
  <div class="space"></div>
  <div class="container-fluid headers">
    <h1>Over Mij</h1>
  </div>
  <div class="container">
    <img class="foto" src="img/error.jpg">
    <p class="info">Dit is informatie over mij.Links komt een foto van mij. Dit is informatie over mij.Links komt een foto van mij. Dit is informatie over mij.Links komt een foto van mij. Dit is informatie over mij.Links komt een foto van mij.</p>
  </div>
  <a name="Gallery"></a>
    <div class="container-fluid headers">
      <h1>Opdrachten</h1>
    </div>
  <div class="container">
    <div class="gallery"><!-- Grid row -->
      
      <div class="mb-3"><!-- Grid column -->
        <img class="img-fluid short" src="img/game.PNG" alt="Card image cap">
      </div><!-- /Grid column -->
   
      <div class="mb-3"><!-- Grid column -->
        <img class="img-fluid long" src="img/lingo.PNG" alt="Card image cap">
      </div><!-- /Grid column -->

      <div class="mb-3"><!-- Grid column -->
        <img class="img-fluid long" src="img/politiek.PNG" alt="Card image cap">
      </div><!-- /Grid column -->

      <div class="mb-3"><!-- Grid column -->
        <img class="img-fluid short" src="img/cafe.PNG" alt="Card image cap">
      </div><!-- /Grid column -->
      
      <div class="mb-3"><!-- Grid column -->
        <img class="img-fluid short" src="img/handy.PNG" alt="Card image cap">
      </div><!-- /Grid column -->
      <div class="mb-3"><!-- Grid column -->
        <img class="img-fluid long" src="img/responsive.PNG" alt="Card image cap">
      </div><!-- /Grid column -->
    </div><!-- /Grid row -->
  </div>


  <? include "labinclude.php" ?>

<script>
function scrollToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>