<?php
    include('cabecera.php');
    include('lib.php');
    include_once('modelo.php');
    
?>
<?php
if(isset($_GET['juegos'])){
  $juegos = getJuegos();
  pintarJuegos($juegos);
}else{
  
?>
//pagina de inicio
<div class="container-fluid tm-content-container">
  <ul class="cd-hero-slider mb-0 py-5">
    <li class="px-3" data-page-no="1">
      <div class="page-width-1" style="margin: 0 auto;">
        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
          <div class="intro-left tm-bg-dark">
            <h2 class="mb-4">Bienvenido a Game Tool</h2>
            <p class="mb-4">
            Game Tools es otra aplicación relacionada, aunque no se puede iniciar por sí misma, necesita ser lanzada desde Game Launcher. Para usar Game Tools necesitas activar su casilla dentro de Game Launcher y abrir un juego desde el mismo. Al hacerlo, obtendrás un botón flotante que te proporciona opciones muy interesantes mientras estás jugando.
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
        pintarJuegos($juegos);//pinta los juegos


        ?>
      </div>
    </li>
  </ul>
</div>

<?php
}
    include("pie.php");
?>
