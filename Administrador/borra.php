<?php
include_once '../Controlador/UsuarioDAO.php';
$obj = new UsuarioDAO();
$obj->borra($_REQUEST['cod']);
header("location:pagListado.php");