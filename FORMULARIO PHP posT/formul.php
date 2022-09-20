
<?php
$name = $email = $role ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    $name = val($_POST["name"]);
    $email = val($_POST["email"]);
    $role = val($_POST["role"]); //DECLARACION DE VARIABLES

}

function val($data){ //PROCESAMIENTO DE LOS DATOS INTRODUCIDOS 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html>
	<head>
	<title><?php echo "FORMULARIO EN SELF"; ?> </title>
    <style>

        h1{
    color: red;
    font-weight: bolder;
    font-style: italic;
}

p{
    font-weight: bold;
}

select{
    background-color: purple;
    color: white;
    transition: all 0.4s;
}

select:hover{
    margin: -10px;
    background-color: grey;
    color:red;
    font-weight:bold;

}

.tabla{
    display: flex;
    flex-direction: column;
    width: 500px;
    justify-content: center;
    align-items: center;
}

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

.btnInfo{
    width: 60px;
    margin: 20px;
    cursor: pointer;
    height: 20px;  
    justify-content: center;
    background-color: silver;
    border : 3px groove goldenrod;
    border-radius: 15px;
    transition: all 0.4s;
    color: green;
}

.btnInfo:hover{
    margin:10px;
    text-align: center;
    width: 70px;
    background-color: black;
    color:white;
    font-family: sans-serif;
}

        </style>
	</head>
	<body>

	<h1><?php echo"FORMULARIO DE PRUEBINHA" ?></h1>
    
    <form name="user" method="post" action="getformul.php">
    <!--ACTION HACIA OTRA PAGINA-->
	<div class="tabla">
    <table width="400" cellspacing="1" cellpadding="1">
        <tr>
    <td><label for="name">NAME</label></td>
    <td><input type="text" value="PRUEBA" name="name" 
    size="10"></td>
</tr>
            <tr>
                <td><label for="email">EMAIL</label></td>
                <td><input type="text" value="xd@gmail.com"
                name="email" size="20"></td>
</tr>
<tr>
                <td><label for="role">ROLE</label></td>
                <td>
                <select name="role" class="lista">
                    <option value="PROGRAMMER" CHECKED>PROGRAMMER</option>
                    <option value="DESIGNER">DESIGNER</option>
                    <option value="ANALIST">ANALIST</option>
                    <option value="COFFEE MAKER">BARISTA</option>
</select>
</td>
    <tr>
    <td><input type="submit" value="SEND" 
        name="submit" class="btnInfo"></td>
        <tr> <!--ENVIO DE DATOS-->
</tr>
 
</div>
<!--AÑADIR VALIDACION Y OTROS INPUTS-->
</form>

	</body>
</html>
