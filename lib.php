<?php

//Función para limpiar los input de los formularios
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}


function pintarJuegos($juegos)
{
    echo"<h1 class='text-center'>JUEGOS</h1>";
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
        </span></a>
        </a>
        <a href='formLoca.php?accion=insertar&id=".$value['id']."' class='btn btn-outline-success'><span class='material-symbols-outlined'>
        add
        </span></a>
       
       </td></tr>";
        //pintarModal($value['id']);
        // <a href='#' type='button' data-bs-toggle='modal' data-bs-target='#nuevaLocalizacion" . $value['id'] . "' class='btn btn-outline-success'><span class='material-symbols-outlined'>
       //add
       //</span></a>
    }

    echo "</tbody>";
    echo "</table>";
}




function pintarLocalizaciones($localizaciones)
{
    echo"<h1 class='text-center'>LOCALIZACIONES</h1>";
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

?>