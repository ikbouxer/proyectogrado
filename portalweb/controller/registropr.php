<?php
require_once "../model/Registropr.php";

$usuariopr = new Usuariopr();

$intidusar = true;
$txtnombre = isset($_POST["inpNombre"]) ? limpiarCadena($_POST["inpNombre"]) : "";
$txtapellido = isset($_POST["inpApellido"]) ? limpiarCadena($_POST["inpApellido"]) : "";
$txtcurso = isset($_POST["inpCurso"]) ? limpiarCadena($_POST["inpCurso"]) : "";
$txtci = isset($_POST["inpci"]) ? limpiarCadena($_POST["inpci"]) : "";
$txtdireccion = isset($_POST["inpdireccion"]) ? limpiarCadena($_POST["inpdireccion"]) : "";
$txttelefo = isset($_POST["inptelefono"]) ? limpiarCadena($_POST["inptelefono"]) : "";
$txtcorreo = isset($_POST["inpcorreo"]) ? limpiarCadena($_POST["inpcorreo"]) : "";
$txtusuario = isset($_POST["inpUsuario"]) ? limpiarCadena($_POST["inpUsuario"]) : "";
$txtcontr = isset($_POST["inpContrase"]) ? limpiarCadena($_POST["inpContrase"]) : "";

switch ($_GET["op"]) {
    case 'registro':
        $mensaje = $usuariopr->insertarusuario($txtnombre, $txtapellido, $txtcurso, $txtci, $txtdireccion, $txttelefo, $txtcorreo, $txtusuario, $txtcontr);
        echo $mensaje;
        break;
}
?>

