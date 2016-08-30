<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Iladiba - EDUCACIÓN MÉDICA EN SALUD</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">


</head>
<body>
  
  <div class="container">

    <?php $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
    
    <!-- Banner Desplegable Home Header 1200 x 60-->
    <!-- Se mostrara solo si esta en el Home-->
    <?php if ($url_actual == 'http://localhost/maldonado/iladiba/') { ?>

          <div class="banner__home__header">
            <a href="#"><img class="twelve columns" src="images/header/ads-header-small.png" alt="ads-header-small"></a>
          </div> 

    <?php }else{ ?>
        

    <?php } ?>


    <div class="twelve columns ads__header_phone center">
      <a href="#"><img width="320px" src="images/header/ads_header_phone.png" alt="ads-header-small"></a>
    </div>

  </div>
  
    <!-- Header -->
    <header>
      <div class="container">
        <!-- Menu top header -->
        <section class="right__menu__top__header">
          <ul class="menu__top__header">
            <li><a href="#">Acerca de ILADIBA</a></li>
            <li><a href="#">Newsletter ILADIBA</a></li>
            <li><a href="#">Contáctenos</a></li>
          </ul>

          <!-- Menu login Header-->
          <ul class="menu__login">
            <li><a href="#">Login</a></li>
            <li><a class="color__rojo" href="#">Suscríbase ></a></li>
          </ul>

          <!-- Menu Social Header -->
          <ul class="menu__social__header">
            <a target="new" href="#"><img width="20px" src="images/header/icon_facebook.png" alt="Facebook"></a>
            <a target="new" href="#"><img width="20px" src="images/header/icon_twitter.png" alt="Twitter"></a>
            <a target="new" href="#"><img width="20px" src="images/header/icon_linkedin.png" alt="Linkedin"></a>
          </ul>
        </section>
      </div>

      <!-- Logo y menu principal -->
      <div class="logo__menu__header">
        <div class="container">
          <!-- Logo -->
          <div class="three columns logo">
            <h1><a href="#"><img width="212px" src="images/header/logo.png" alt="Logo"></a></h1>
          </div>
          
          <!-- Menu principal -->
          <nav class="seven columns menu__header">
            <ul>
              <li><a href="#">De Interés</a></li>
              <li><a href="#">Práctica Médica</a></li>
              <li><a href="#">Atención Primaria</a></li>
              <li><a href="#">Revista</a></li>
              <li><a href="#">Cursos</a></li>
              <li><a href="#">Salud A - Z</a></li>
            </ul>
          </nav>

          

          <!-- Buscador -->
          <div class="two columns buscar">
            <div class="line__left__buscar"></div>
            <input class="twelve columns" type="text" placeholder="Buscar tema de interés">
          </div>
        </div>
      </div>
        
      
    </header>
  