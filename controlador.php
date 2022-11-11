<?php

include_once('modelo.php');
include_once('lib.php');

//GET ----------------------------------------------------
if (isset($_GET['accion'])) {

    // Pintar localizaciones
    if ($_GET['accion'] == 'info') {
        include_once("cabecera.php");
        $localizaciones = selectLocalizacion($_GET['id']);

        pintarLocalizaciones($localizaciones);
    } 

    // Eliminar juego
    if ($_GET['accion'] == 'borrar') {
        borrarJuego($_GET['id']);
            header("Location: index.php");
    }

    // Eliminar localizacion
    if ($_GET['accion'] == 'borrarL') {
        borrarLocalizacion($_GET['id']);
            header("Location: index.php");
    }
}
