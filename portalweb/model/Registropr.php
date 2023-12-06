<?php 
require "../config/Conexion.php";

class Usuariopr
{
    public function __construct()
    {

    }

    public function insertarusuario($nombre,$apellido,$curso, $ci, $direccion, $telefono, $email, $usuario, $contra)
    {
        // Encriptar la contraseña con SHA-256
        $contrasena_encriptada = hash('sha256', $contra);

        $sql = "INSERT INTO usuario (nombre, apellido, curso, ci, direccion, telefono, email, cargo, login, clave, estado)
                VALUES ('$nombre', '$apellido','$curso', '$ci', '$direccion', '$telefono', '$email', 'admin', '$usuario', '$contrasena_encriptada', '0')";

        $resultado = ejecutarConsulta($sql);

        if ($resultado) {
            return "Registro exitoso";
        } else {
            return "Error al registrar";
        }
    }
}
?>
