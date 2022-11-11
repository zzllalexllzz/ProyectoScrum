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
    echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#nuevoJuego'>
                Insertar juego
            </button>";

    echo "<table class='table'>";
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
                        <td>" . $value["plataforma"] . "</td>
                        <td>" . $value["genero"] . "</td>";
        }
        echo "<td><a href='controlador.php?accion=borrar&id=" . $value['id'] . "'>borrar</a></td>";
        echo "<td><a href='controlador.php?accion=info&id=" . $value['id'] . "'>insertar</a></td>";
        echo "<td><a href='controlador.php?accion=info&id=" . $value['id'] . "'>info</a></td> </tr>";
    }




    echo "</tbody>";
    echo "</table>";
}




function pintarLocalizaciones($localizaciones)
{
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>
        <th>Descripcion</th>
        <th>Importancia</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($localizaciones as $key => $value) {
        if ($key != "id" && $key != "id_juego") {
            echo "<tr>
                    <td>" . $value["nombre"] . "</td>
                    <td>" . $value["descripcion"] . "</td>
                    <td>" . $value["importancia"] . "</td>";
        }
        echo "<td><a href='controlador.php?accion=borrarL&id=" . $value['id'] . "'>borrar</a></td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
}


?>