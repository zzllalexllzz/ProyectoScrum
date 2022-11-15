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
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quas autem corporis! Dolorum sint doloribus, earum nihil, officiis, quidem ipsum voluptatum id rerum ducimus sequi vero nisi minima fugit facere!
              Fugiat, officiis amet labore ullam in veritatis. Quasi molestias facilis beatae quia nobis. A ab saepe, fugit dolores voluptas nisi esse sint aliquid adipisci sed porro possimus repellat, sunt eos!
              Assumenda ducimus repudiandae veniam necessitatibus sed facere sunt voluptas praesentium esse numquam, mollitia pariatur ratione labore voluptatibus, perferendis fugiat laudantium eum vel aliquam, sint aperiam. Sint dolore perspiciatis qui tempore.
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
