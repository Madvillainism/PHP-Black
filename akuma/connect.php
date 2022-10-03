<?php

     //datos del server
     $host = "localhost";
     $db = "kaizen";
     $username = "root";
     $password = "";
     //creamos la conexion
$mysqli = new mysqli($host, $username, $password, $db);
if($mysqli->connect_errno){
    echo "fallo conexion" . $mysqli->connect_errno;
}


    return $mysqli;

    echo "vivaeltoddy";

?>