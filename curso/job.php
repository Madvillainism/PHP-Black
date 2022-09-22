<html>
    <head>

    <style>

        .error{
            color: red;
        }


        </style>
        <body>

        <?php

$nome = $web = $role = $emp = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){ //GENERACION DE ERROR POR REQUEST METHOD

if (empty($_POST["nome"])){
    echo "<span class=\"error\">Error: blablabla</span>";
}
elseif (empty($_POST["web"])){
    echo "<strong class=\"error\">Error dos: blablabla</strong>"; 

}

else{

    $nome = val($_POST["nome"]);
    $web = val($_POST["web"]);
    $role = val($_POST["role"]);
    $emp = val($_POST["emp"]);

}

}

function val($data){ //PROCESAMIENTO DE LOS DATOS INTRODUCIDOS 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<br>
            <h3> <?php
            echo "EMPLOYMENT APPLICATION";
            ?>

            <form name="employment" method="post" action="
            
            <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <!-- 
                PARA VERIFICAR SEGURIDAD-->

           <table width="400" cellpadding="1" cellspacing="1">
               <tr>
                <td>NAME</td>
                <td><input type="text" value="carlos" name="nome" size="8">
                    </td>
                </tr>

                <tr>
                <td>WEBSITE</td>
                <td><input type="text" value="facebook" name="web" size="12">
                    </td>
                </tr>

                <tr>
                <td>POSITION</td>
                <td>

                <select name="role">
                    <option value="pro" CHECKED>PROGRAMMER</option>
                    <option value="des">DESIGNER</option>
                    <option value="anl">ANALIST</option>
                    <option value="cof">BARISTA</option>

</select>

                    </td>
                </tr>

                <tr>
                <td>STATE OF EMPLOYMENT</td>
                <td>

                    <input type="radio" value="xd" name="emp"/>EMPLOYED
                    <input type="radio" value="free" name="emp"/>UNEMPLOYED
                    <input type="radio" value="stu" name="emp"/>STUDENT

                    </td>
                </tr>

                <tr>
                    <td><input type="submit" value="pro" name="submit">
                    <input type="reset" value="reset" name="reset">
</td>
</tr>
            </form>
        </body>
    </head>
</html>

<?php

    echo  "<h2>USER INPUT</h2>"; //IMPRESION DE LOS DATOS RECOGIDOS EN EL FORMULARIO
    echo "NAME: " . $nome . " ";
    echo "WEB: " . $web . " ";
    echo "ROLE: " . $role . " ";
    echo "JOB STATE: " . $emp . " ";

?>