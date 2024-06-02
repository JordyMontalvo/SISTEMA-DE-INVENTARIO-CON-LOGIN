<?php
require_once "conexion/basededatos.php"; 

require_once "controladores/registrarcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="diseño/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="diseño/css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/all.min.css"> 
   <link rel="stylesheet" href="css/fontawesome.min.css"> 
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Registro</title>

</head>
<body>
   <img class="wave" src="diseño/img/wave.png">
   <div class="container">
      <div class="img">
         <img src="diseño/img/bg.svg">
      </div>
      <div class="login-content">
         <form method="post" action="">
            <img src="diseño/img/avatar.svg">
            <h2 class="title">CREA UNA CUENTA </h2>
            
            <!-- Muestra los mensajes de error debajo del título -->
            <div style="color: red;">
                <?php 
                echo $nombre_err . "<br>";
                echo $apellido_err . "<br>";
                echo $usuario_err . "<br>";
                echo $password_err . "<br>";
                ?>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Nombre</h5>
                  <input id="nombre" type="text" class="input" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Apellido</h5>
                  <input type="text" id="apellido" class="input" name="apellido" value="<?php echo htmlspecialchars($apellido); ?>">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input type="text" class="input" name="usuario" value="<?php echo htmlspecialchars($usuario); ?>">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center"></div>
            <input  class="btn" type="submit" value="REGISTRARSE">
         </form>
      </div>
   </div>
   <script src="diseño/js/fontawesome.js"></script>
   <script src="diseño/js/main.js"></script>
   <script src="diseño/js/main2.js"></script>
   <script src="diseño/js/jquery.min.js"></script>
   <script src="diseño/js/bootstrap.js"></script>
   <script src="diseño/js/bootstrap.bundle.js"></script>
</body>
</html>
