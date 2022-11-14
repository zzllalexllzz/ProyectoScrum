<?php

    include('lib.php');
    include('cabecera.php');
    include_once('modelo.php');
    
?>

<div class="container-fluid tm-content-container">
  <ul class="cd-hero-slider mb-0 py-5">
    <li class="px-3" data-page-no="1">
      <div class="page-width-1" style="margin: 0 auto;">
        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
          <div class="intro-left tm-bg-dark">
            <h2 class="mb-4">Bienvenido a Game Tool</h2>
            <p class="mb-4">
              This HTML template has a motion video background loop which is provided by <a rel="sponsored" href="https://getfreepictures.com" target="_blank">Get Free Pictures</a>. This is
              one-page responsive layout for your websites. Feel
            free to use this for a commercial purpose. </p>
            <p class="mb-0">
            You are not permitted to redistribute this template on your Free CSS collection websites. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_blank">contact us</a> for more information. </p>
          </div>
          <div class="intro-right">
            <img src="img/home-img-1.jpg" alt="Image" class="img-fluid intro-img-1">
            <img src="img/home-img-2.jpg" alt="Image" class="img-fluid intro-img-2">
          </div>
          <div class="circle intro-circle-1"></div>
          <div class="circle intro-circle-2"></div>
          <div class="circle intro-circle-3"></div>
          <div class="circle intro-circle-4"></div>
        </div>
        <div class="text-center">
          <a href="#0" data-page-no="2" class="btn btn-primary tm-intro-btn tm-page-link">
            VER JUEGOS
          </a>
        </div>            
      </div>            
    </li>
    <li data-page-no="2">
      <!-- Image Carousel -->
      <div class="mx-auto position-relative ">
        <div class="circle intro-circle-1"></div>
        <div class="circle intro-circle-2"></div>
        <?php
        $juegos = getJuegos();
        pintarJuegos($juegos);
        ?>
      </div>
    </li>
  </ul>
</div>

<?php
    include("pie.php");
?>
