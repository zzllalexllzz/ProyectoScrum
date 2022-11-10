<?php session_start();



    function pintarJuegos($juegos) {
        echo "<class='table table-striped'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Plataforma</th>
                        <th>Genero</th>
                        <th colspan='2'>Acciones</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                foreach($juegos as $juego) {
                    echo "<a href='./controlador.php?accion=localizacion&id=".$juego['id'].">";
                    echo "<tr>";

                        echo "<td>".$juego['nombre']."</td>
                            <td>".$juego['descripcion']."</td>
                            <td>".$juego['plataforma']."</td>
                            <td>".$juego['genero']."</td>
                            <td>
                                <a href='./controlador.php?accion=eliminar&id=".$juego['id']."' class='btn btn-danger'>
                                    Eliminar
                                </a>
                            </td>";
                    echo "</tr>";
                    echo "</a>";
                }
            echo "</tbody>";
        echo "</table>";
    }


    function pintarLocalizaciones($localizaciones) {
        echo "<class='table table-striped'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Importancia</th>
                        <th colspan='2'>Acciones</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                foreach($localizaciones as $localizacion) {
                    
                    echo "<tr>";

                        echo "<td>".$localizacion['nombre']."</td>
                            <td>".$localizacion['descripcion']."</td>
                            <td>".$localizacion['importancia']."</td>
                            <td>
                                <a href='./controlador.php?accion=eliminar&id=".$localizacion['id']."' class='btn btn-danger'>
                                    Eliminar
                                </a>
                            </td>";
                    echo "</tr>";
                    
                }
            echo "</tbody>";
        echo "</table>";
    }


?>