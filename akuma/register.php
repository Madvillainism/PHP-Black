<?php

include('connect.php');
session_start();


//Toma de datos desde el Formulario de Registro para almacenar 

        $cedulaR = $_POST["cedulaR"];
        $nombreR=$_POST["nombreR"];
        $apellidoR=$_POST["apellidoR"];
        $teleR=$_POST["tele1R"] . "-". $_POST["tele2R"];
        $direccionR=$_POST["direccionR"];
        $correoR = $_POST["correoR"];


//Obtencion de los datos en dropdown
        $discaR=filter_input(INPUT_POST, 'discaR', FILTER_SANITIZE_STRING);
        $membreR=filter_input(INPUT_POST, 'membreR', FILTER_SANITIZE_STRING);
        
        
//Validacion para el campo entrenador        
        if(filter_input(INPUT_POST, 'entreR', FILTER_SANITIZE_STRING)==null){
            $entreR=$_POST["entreR2"];
            }else{
            $entreR=filter_input(INPUT_POST, 'entreR', FILTER_SANITIZE_STRING);  
            }  

//Sentencia para introducir los datos a la base de datos
            //JALAR ID Y USAR PARA QUERY EN HOLA.PHP

        $sql = "INSERT INTO clientes (cedula,nombre,apellido, telefono, 
        direccion, correo,discapacidad, entrenador, membresia)
        VALUES ('$cedulaR','$nombreR','$apellidoR','$teleR','$direccionR', '$correoR','$discaR','$entreR','$membreR')";
        
            if($mysqli->query($sql) === TRUE){


//Notificar de la carga de los datos y regreso a la pagina de registro una vez confirmado
                echo "<script language='javascript'>alert('Registro completado, bienvenido: $nombreR ')</script>";
                header("refresh:0.2;url=hola.php");

            }else{
                echo "errorcito en: " . $mysqli->error;
            } 
            $mysqli->close();
            
?>