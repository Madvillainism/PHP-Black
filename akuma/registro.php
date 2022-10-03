

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <title>Home</title>



<!-- Habilitar la opcion de Entrenador segun el plan o deshabilitarlo y dejarlo en NO en caso de ser el "Plan Normal" -->


    <script>
                function habilitarCombo(valor){
                if(valor=="NORMAL"){
   
                document.getElementById("entrenador").disabled = true;
                document.getElementById("entrenador").selectedIndex ="0";
                }
                else {
    
                document.getElementById("entrenador").disabled = false;
                document.getElementById("entrenador").selectedIndex ="1";


                }
                }






</script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark p-2 p-lg-0">
        <div class="container-fluid">
          <a class="navbar-brand px-2 logo" href="#">AKUMA TEMPLE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link px-3 my-1 my-lg-0 mx-1 active" href="./index.html">Inicio</a>
              <div class="separator d-none d-md-block"></div>
              <a class="nav-link px-3 my-1 my-lg-0 mx-1 btn btn-primary" href="./login.php"><i class="bi bi-person-fill me-1"></i>Iniciar Sesión</a>
              <a class="nav-link px-3 my-1 my-lg-0 mx-1 btn btn-outline-primary" href="./registro.php"><i class="bi bi-person-plus-fill me-1"></i>Registrarse</a>
            </div>
          </div>
        </div>
    </nav>
    <div class="row my-5 mx-auto w-75 align-items-center">
        <h2 class="h1 fw-bold text-center"><i class="bi bi-person-plus-fill me-2"></i></i>ACTUALIZA</h2>
        <div class="col-12 col-lg-6 p-3">
            <img src="./src/img/logo.png" class="img-fluid h-50">
        </div>
        <div class="col-12 col-lg-6 p-3 text-center text-lg-start">
            <form action="register.php" method="POST">
                

            <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-postcard me-1"></i>Cedula</label>  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                <input  id="cel" class="form-control" name="cedulaR" placeholder="Ingrese la cedula" required type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">

            <div class="row">

            <div class="col-6">
                <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check me-1"></i>Nombre</label> <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                <input required type="text" id="name" class="form-control" name="nombreR" placeholder="Ingrese el Nombre">
                </div>

                <div class="col-6">
                <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check-fill me-1"></i>Apellido</label> <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                <input required type="text" id="lname" class="form-control" name="apellidoR" placeholder="Ingrese el Apellido">
                </div>

            </div>

            <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-phone-vibrate me-1"></i>Telefono</label>

            <div class="row">

                <div class="col-3">                                                                     <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                <input required id="tlf1" class="form-control" name="tele1R" placeholder="XXXX" type="text" maxlength="4" minlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                 </div>

                <div class="col-9">                                                                     <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                <input required type="number" id="tlf2" class="form-control" name="tele2R" placeholder="XXXXXXX" type="text" maxlength="7" minlength="7" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                </div>

                </div>


                <label for="" class="form-label mt-2 fs-5"><i class="bi bi-mailbox me-2"></i>Dirección</label> <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                <input required type="text" id="direccion" class="form-control" name="direccionR" placeholder="Ingrese el correo electronico">

                <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-envelope me-2"></i>Correo</label> <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                <input required type="email" id="email" class="form-control" name="correoR" placeholder="Ingrese el correo electronico">
                
          
                <div class="row">

            

                <div class="col-6">
                    
                <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-award me-2"></i>Membresia</label>

                <!-- Definicion de select, sus opciones y definicion de la funcion documentada al inicio del codigo-->
                <select name="membreR" class="form-control" id="membresia" onchange="habilitarCombo(this.value);">
                    <option value="NORMAL">NORMAL</option>
                    <option value="GOLD">GOLD</option>
                    <option value="PLATINUM">PLATINUM</option>
                    </select>
                </div>

                <div class="col-6">



                <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-emoji-sunglasses me-2"></i>Entrenador</label>

                <!-- Definicion de select y sus opciones -->
                    <select name="entreR" class="form-control" id="entrenador" disabled="true";>
                    <option value="NO">NO</option>
                    <option value="SI">SI</option>
                    </select>
                    <input type="hidden" name="entreR2" value="NO"/>
                 </div>


                 <div class="col-12">
                    
                    <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-bandaid me-2"></i>Discapacidad</label>

                    <!-- Definicion de select y sus opciones -->
                    <select name="discaR" class="form-control" id="Disca">
                    <option value="NO">NO</option>
                    <option value="SI">SI</option>
                    
    
                    </select>
                     </div>



                </div>

                <!-- Enviar informacion para registrar en la BDD -->    
                <input type="submit" name="submitR" id="" class="btn btn-primary my-3 w-100" value="Ingresar">

                <input type="hidden" name="id">
            </form>
            <div></div>

        </div>
    </div> 
    <footer class="footer p-2 d-flex">
        <h2 class="h6 text-white">Kaizen Gym</h2>
        <h2 class="h6 text-white"><i class="bi bi-c-circle-fill me-2"></i>Copyright 2020-2022</h2>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>