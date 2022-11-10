<?php

    include('lib.php');
    include('cabecera.php');
    include_once('modelo.php');
    
    $juegos = getJuegos();

    pintarJuegos($juegos);



    include("pie.php");
?>
