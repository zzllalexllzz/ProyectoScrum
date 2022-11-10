<?php session_start();



    function pintarJuegos($juegos) {
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
            
           
                forEach($juegos as $key => $value) {
                    if ($key!="id") {
                        echo "<tr>
                        <td>" . $value["nombre"] . "</td>
                        <td>" . $value["descripcion"] . "</td>
                        <td>" . $value["plataforma"] . "</td>
                        <td>" . $value["genero"] . "</td>
                        </tr>";
                    }
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