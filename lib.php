<?php
session_start();
//Función para limpiar los input de los formularios
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}


function pintarJuegos($juegos)
{
    echo "<table class='table table-success table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>
        <th>Descripcion</th>
        <th>Plataforma</th>
        <th>Genero</th>
        <th>Acciones</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";


    foreach ($juegos as $key => $value) {
        if ($key != "id") {
            echo "<tr>
                    <td>" . $value["nombre"] . "</td>
                    <td>" . $value["descripcion"] . "</td>
                    <td align='center'>" . $value["plataforma"] . "</td>
                    <td align='center'>" . $value["genero"] . "</td>";
        }
        echo "<td align='center'><a href='controlador.php?accion=borrar&id=" . $value['id'] . "' class='btn btn-outline-danger'><span class='material-symbols-outlined'>
        delete
        </span></a>
        <a href='controlador.php?accion=info&id=" . $value['id'] . "' class='btn btn-outline-info'><span class='material-symbols-outlined'>
        info
        </span</a>
       <a href='#' type='button' data-bs-toggle='modal' data-bs-target='#nuevaLocalizacion" . $value['id'] . "' class='btn btn-outline-success'><span class='material-symbols-outlined'>
       add
       </span></a></td></tr>";
        pintarModal($value['id']);
    }

    echo "</tbody>";
    echo "</table>";
}




function pintarLocalizaciones($localizaciones)
{
    echo "<table class='table table-success table-striped'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Importancia</th>
                    <th>Acciones</th>";
            echo "</tr>";
        echo "</thead>";
    echo "<tbody>";

    foreach ($localizaciones as $key => $value) {
        if ($key != "id" && $key != "id_juego") {
            echo "<tr>
                    <td align='center'>" . $value["nombre"] . "</td>
                    <td>" . $value["descripcion"] . "</td>
                    <td align='center'>" . $value["importancia"] . "</td>";
        }
        echo "<td align='center'><a class='btn btn-outline-danger' href='controlador.php?accion=borrarL&id=" . $value['id'] . "'><span class='material-symbols-outlined'>
        delete
        </span</a></td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function pintarModal($idJuego){
    echo "<div class='modal fade' id='nuevaLocalizacion".$idJuego."'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <div class='modal-title'>
                    <h1 class='h4 text-gray-900 mb-4'>Nueva localizacion</h1>
                </div>            
            </div>
            <div class='modal-body'>
                <div class='container-fluid'>
                    <form id='formInsertarLocalizacion'>
                        <div class='form-group'>
                            <input type='hidden' name='nuevaLocalizacion' class='form-control form-control-user'
                                value='nuevaLocalizacion'>
                        </div>
                        <div class='form-group'>
                            <label for='nombre'>Nombre:</label>
                            <input type='text' name='nombre' class='form-control form-control-user'
                                id='' placeholder='Introduce el nombre...'>
                        </div>
                        <div class='form-group'>
                            <label for='descripcion'>Descripcion:</label>
                            <textarea name='descripcion' class='form-control form-control-user'
                                id='' cols='30' rows='5' placeholder='Introduce la descripcion...'></textarea>
                        </div>
                        <div class='form-group'>
                            <label for='importancia'>Importancia:</label>
                            <select name='importancia' >
                                <option value='1'>Uno</option>
                                <option value='2'>Dos</option>
                                <option value='3'>Tres</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label hidden for='idjuego'>Id:</label>
                            <input type='number' name='idjuego' class='form-control form-control-user'
                                id='' value='".$idJuego."'>
                        </div>
                        <button type='submit' name='insertarLocalizacion' form='formInsertarLocalizacion' formaction='controlador.php' formmethod='get' class='btn btn-primary btn-user btn-block'>
                            Insertar localizacion
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div'";
}

?>