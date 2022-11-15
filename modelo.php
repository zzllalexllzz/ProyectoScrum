<?php

    /*
    function conexionBD() {
        $dbh = null;

        try {
            $dsn = "mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_ca471d73cdae49f";
            $dbh = new PDO($dsn, "b74bcf883c4e67", "185e1aaf");
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }
    
    */
    function conexionBD() {
        $dbh = null;

        try {
            //mariadb --> nombre del contenedor donde tengamos mysql
            $dsn = "mysql:host=mariadb2;dbname=heroku";
            $dbh = new PDO($dsn, "root", "toor");
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }
    
    
    /**
     * Comprobar si el juego existe 
     */
    function existeJuego($juego) {
        //mysql -u root -p
        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM juegos WHERE nombre = ?");
            $stmt->bindValue(1, $juego);
            $stmt->execute();
            $numeroJ = $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión

        //Si me devuelve una fila es que existe un juego
        if ($numeroJ == 1) 
            return true;    
        else 
            return false;
    }

    //Obterner toda los juego
    function getJuegos() {
        $conexion = conexionBD();
        $id = null;

        try {
            $stmt = $conexion->prepare("SELECT * FROM juegos");
            $stmt->execute();
            $juegosE = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($juegosE);
            //$id = $juegosE['id'];
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
        return $juegosE;
    }

    //Obterner toda los juego
    function getLocalizacion($idJuego) {
        $conexion = conexionBD();
        $id = null;

        try {
            $stmt = $conexion->prepare("SELECT * FROM localizaciones where id_juego = ?");
            $stmt->bindValue(1, $idJuego);
            $stmt->execute();
            $juegosE = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($juegosE);
            //$id = $juegosE['id'];
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
        return $juegosE;
    }

    //Obtener todas las localizaciones de ese juego
    function selectLocalizacion($idJuego) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM localizaciones WHERE id_juego = ?");
            $stmt->bindValue(1, $idJuego);
            $stmt->execute();
            $localizaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión

        return $localizaciones;
    }

    //Insertar nuevos juegos con todos sus parametros
    function insertarJuego($nombre, $descripcion, $plataforma, $genero) {

        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("INSERT INTO juegos (nombre, descripcion, plataforma, genero) VALUES (?, ?, ?, ?)" );

            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $descripcion);
            $stmt->bindValue(3, $plataforma);
            $stmt->bindValue(4, $genero);
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }

    //Insertar nuevas localizaciones con todos sus parametros
    function insertarLocalizacion($nombre, $descripcion, $importancia, $idJuego) {

        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("INSERT INTO localizaciones (nombre, descripcion, importancia, id_juego) VALUES (?, ?, ?, ?)" );

            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $descripcion);
            $stmt->bindValue(3, $importancia);
            $stmt->bindValue(4, $idJuego);
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }

    //Borrar juegos mediante su id
    function borrarJuego($idJuego) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM juegos WHERE id = ?");
            $stmt->bindValue(1, $idJuego);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }

    //Borrar Localizacion
    function borrarLocalizacion($idLocalizacion) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM localizaciones WHERE id = ?");
            $stmt->bindValue(1, $idLocalizacion);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }
    
?>