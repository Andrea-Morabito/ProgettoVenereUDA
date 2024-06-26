<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
  </head>

  
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img class="navbar-brand" src="<?php echo IMAGES_PATH.'/palette-fill.svg'?>" alt="NAVBAR_LOGO">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/signup">Registrati</a>
        </li>
        
      </ul>
    </div>
    <div>
      <h1>VENERE</h1>
    </div>
  </div>
</nav>
<img style="width:100%; object-fit: fill;" src="<?php echo IMAGES_PATH.'/museum_presentation.jpg'?>" class="img-fluid" alt="">
<!--
<div class="fixed-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo IMAGES_PATH.'/palette-fill.svg'?>" alt="MUSEUM_LOGO">
    </a>
  </div>
</div>-->

</body>
</html>