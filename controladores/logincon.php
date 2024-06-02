<?php
require_once "conexion/basededatos.php";

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
       
        $conexion = BasedeDatos::Conectar();
        
       
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario_usuario = :usuario");
        $stmt->bindParam(":usuario", $usuario);
        $stmt->execute();
        
        
        $datos = $stmt->fetch(PDO::FETCH_ASSOC);
        
       
        if ($datos && $datos['usuario_clave'] === $password) {
            $_SESSION['usuario'] = $datos;
            header("Location: index.php"); 
            exit();
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Campos vacíos</div>";
    }
}

