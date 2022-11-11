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

// POST ----------------------------------------------------
if ($_POST) {
    // Comprobamos si se ha enviado algo por el formulario de juego nuevo
    if (isset($_POST['nuevoJuego'])) {
        $nombre = filtrado($_POST['nombre']);
        $descripcion = filtrado($_POST['descripcion']);
        $plataforma = filtrado($_POST['plataforma']);
        $genero = filtrado($_POST['genero']);

        insertarJuego($nombre, $descripcion, $plataforma, $genero);
    }
}

?>
