<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<? include "navigation.php"; ?>

<div class="container">
  <div class="gallery" id="gallery"><!-- Grid row -->
  
    
    <div class="mb-3"><!-- Grid column -->
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
    </div><!-- /Grid column -->
    
  
    
    <div class="mb-3"><!-- Grid column -->
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
    </div><!-- /Grid column -->
    
  
    
    <div class="mb-3"><!-- Grid column -->
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
    </div><!-- /Grid column -->
    
  
    
    <div class="mb-3"><!-- Grid column -->
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
    </div><!-- /Grid column -->
    
  
    
    <div class="mb-3"><!-- Grid column -->
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
    </div><!-- /Grid column -->
    <div class="mb-3"><!-- Grid column -->
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
    </div><!-- /Grid column -->
  </div><!-- /Grid row -->
</div>
  
  <style>
    body {
      background-color: #D3D3D3;
    }
    .gallery {
    -webkit-column-count: 3;
    column-count: 3;
    -webkit-column-width: 33%;
    column-width: 33%; 
    }
  </style>

<? include "labinclude.php"; ?>
</body>
</html>