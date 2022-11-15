<?php
include_once('lib.php');
include_once('cabecera.php');
include_once('modelo.php');

if (isset($_GET['accion'])) {

    if ($_GET['accion'] == "insertar") {
        echo "
                <div class='container-fluid w-50' id='nuevaLocalizacion'>
                    <form method='post' class='user ' action='controlador.php'>
                        <div class='form-group'>
                            <input type='hidden' name='nuevaLocalizacion' class='form-control form-control-user'
                                value='nuevaLocalizacion'>
                        </div>
                        <div class='form-group'>
                            <label for='nombre'>Nombre:</label>
                            <input type='text' name='nombre' class='form-control form-control-user text-white'
                                id='' >
                        </div>
                        <div class='form-group'>
                            <label for='descripcion'>Descripcion:</label>
                            <textarea name='descripcion' class='form-control form-control-user text-white'
                                id='' cols='30' rows='5' ></textarea>
                        </div>
                        <div class='form-group'>
                            <label for='importancia'>Importancia:</label>
                            <select name='importancia' class='form-control form-control-user '>
                                <option value='1'>Uno</option>
                                <option value='2'>Dos</option>
                                <option value='3'>Tres</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label hidden for='idjuego'>Id:</label>
                            <input type='hidden' name='idjuego' class='form-control form-control-user'
                                id='' value='" . $_GET['id'] . "'>
                        </div>
                        <button type='submit' class='btn btn-success mt-3'>
                            Insertar localizacion
                        </button>
                    </form>
                </div>'";
    }
}




include_once('pie.php');
