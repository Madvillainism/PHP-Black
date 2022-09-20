<!--RECEPCION DE DATOS-->
<html>
    <head>
        <style>
            .tabla2{
    display: flex;
    flex-direction: column;
    width: 300px;
    height: 300px;  
    justify-content: center;
    align-items: center;
    background-color: silver;
    border : 3px groove goldenrod;
    border-radius: 15px;
    transition: all 0.4s;
    color: green;
}

.tabla2:hover{
    margin:10px;
    padding:10px;
    background-color: black;
    color:white;
    font-family: sans-serif;
}
            </style>
</head>
<body>
    <div class="tabla2">
   <?php

if(isset($_POST["name"]) AND isset($_POST["email"])
AND isset($_POST["role"])){ //RECOLECCION DE DATOS
    $user = $_POST["name"];
    $mail = $_POST["email"];
    $role = $_POST["role"];

    echo " <h2>WORKER INFO </h2>
    <p> Worker name is: $user</p> 
    <p> Worker mail is: $mail</p>
    <p> Worker aspiring role is: $role</p> "
    ;
}
//IMPRESION DE DATOS
?>

</div>

</body>
    </html>