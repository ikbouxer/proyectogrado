<?php
require "../config/Conexion.php";

class UsuarioR
{
    public function __construct()
    {
        // Si no necesitas inicializar nada, puedes omitir completamente el constructor.
    }

    public function insertarusuario($nombre, $apellido, $ci, $direccion, $telefono, $email, $usuario, $contrasena)
    {
        // Sanitizar y validar datos antes de incluirlos en la consulta
        $nombre = limpiarCadena($nombre);
        $apellido = limpiarCadena($apellido);
        $ci = limpiarCadena($ci);
        $direccion = limpiarCadena($direccion);
        $telefono = limpiarCadena($telefono);
        $email = limpiarCadena($email);
        $usuario = limpiarCadena($usuario);
        $contrasena = limpiarCadena($contrasena);

        // Hash SHA256 en la contraseña
        $clavehash = hash("SHA256", $contrasena);

        // Preparar la consulta SQL
        $sql = "INSERT INTO usuario (nombre,apellido,ci,direccion,telefono,email,cargo,login,clave,estado)
                VALUES ('$nombre','$apellido','$ci','$direccion','$telefono','$email','admin','$usuario','$clavehash','1')";

        // Ejecutar la consulta y manejar errores
        try {
            $resultado = ejecutarConsulta($sql);

            if (!$resultado) {
                throw new Exception("Error en la ejecución de la consulta SQL.");
            }

            // Si es necesario realizar alguna acción adicional, aquí es donde lo harías

            return true;
        } catch (Exception $e) {
            // Manejar el error
            // Puedes imprimir el mensaje de error o registrar el error en un archivo de registro, según tus necesidades.
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
