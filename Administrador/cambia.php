<?php
include_once '../Controlador/UsuarioDAO.php';
$obj = new UsuarioDAO();
$obj->cambia($_REQUEST['codigo'], $_REQUEST["usu"], $_REQUEST["correo"], $_REQUEST["contraseña"]);
header("location:pagListado.php");