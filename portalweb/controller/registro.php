<?php
require_once "../model/Registro.php";

$usuarior = new UsuarioR();

$idusar = isset($_POST["idusar"]) ? limpiarCadena($_POST["idusar"]) : "";
$nombre = isset($_POST["txtnombre"]) ? limpiarCadena($_POST["txtnombre"]) : "";
$ci = isset($_POST["ci"]) ? limpiarCadena($_POST["ci"]) : "";
$apellido = isset($_POST["txtapellido"]) ? limpiarCadena($_POST["txtapellido"]) : "";
$direccion = isset($_POST["txtdireccion"]) ? limpiarCadena($_POST["txtdireccion"]) : "";
$telefono = isset($_POST["txttelefono"]) ? limpiarCadena($_POST["txttelefono"]) : "";
$email = isset($_POST["txtcorreo"]) ? limpiarCadena($_POST["txtcorreo"]) : "";
$usuario = isset($_POST["txtusuario"]) ? limpiarCadena($_POST["txtusuario"]) : "";
$contrasena = isset($_POST["txtcontrasena"]) ? limpiarCadena($_POST["txtcontrasena"]) : "";

switch ($_GET["op"]) {
    case 'registro':
        //Insertar usuario
        $rspta = $usuarior->insertarusuario($nombre, $apellido, $ci, $direccion, $telefono, $email, $usuario, $contrasena);
        
        if ($rspta) {
            echo "Registro exitoso";
            // Puedes redirigir al usuario a otra página si es necesario
            // header("Location: otra_pagina.php");
        } else {
            echo "Error al registrar";
        }
        break;
}
?>
