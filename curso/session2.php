<?php

    session_start();

?>

<html>
    <head>
        <body>
            <h3><?php
                echo "lo mas lindo de mcbo se llama: " .
                $_SESSION['usuario']; //variables entre sesiones

                echo "<br>";

                echo "tiene un movil " . $_SESSION['movil']; //comunicacion de variables entre sesiones
            ?>
        </body>
    </head>

</html>