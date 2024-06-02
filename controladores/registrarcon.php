<?php
$nombre = $apellido = $usuario = $password = "";
$nombre_err = $apellido_err = $usuario_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST['nombre']))) {
        $nombre_err = "Por favor ingrese su nombre.";
    } else {
        $nombre = trim($_POST['nombre']);
    }

    if (empty(trim($_POST['apellido']))) {
        $apellido_err = "Por favor ingrese su apellido.";
    } else {
        $apellido = trim($_POST['apellido']);
    }

    if (empty(trim($_POST['usuario']))) {
        $usuario_err = "Por favor ingrese un nombre de usuario.";
    } else {
        $usuario = trim($_POST['usuario']);
    }

    if (empty(trim($_POST['password']))) {
        $password_err = "Por favor ingrese una contraseña.";
    } else {
        $password = trim($_POST['password']);
    }

    if (empty($nombre_err) && empty($apellido_err) && empty($usuario_err) && empty($password_err)) {
        try {
            $conexion = BasedeDatos::Conectar();

            $sql = "INSERT INTO usuarios (usuario_nombre, usuario_apellido, usuario_usuario, usuario_clave)
                    VALUES (:nombre, :apellido, :usuario, :password)";

            $consulta = $conexion->prepare($sql);

            // Bind de los parámetros
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':apellido', $apellido);
            $consulta->bindParam(':usuario', $usuario);
            $consulta->bindParam(':password', $password);

            $consulta->execute();

            header("Location: index.php");
            exit(); 

        } catch (PDOException $e) {
            echo "Error al registrar: " . $e->getMessage();
        }
    } else {
        $nombre = $apellido = $usuario = $password = "";
    }
}