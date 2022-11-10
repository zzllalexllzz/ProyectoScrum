<?php

    include_once('modelo.php');
    include_once('lib.php');

    //GET ----------------------------------------------------
    if (isset($_GET['accion'])) {
        
        // Pintar localizaciones
        if ($_GET['accion'] == 'localizacion') {
            $localizaciones = selectLocalizacion($_GET['id']);

            pintarLocalizaciones($localizaciones);
        }

        // Eliminar juego
        if ($_GET['accion'] == 'eliminar') {
            
        }
    }




?>