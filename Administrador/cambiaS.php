<?php
include_once '../Controlador/SusDAO.php';
$obj = new SusDAO();
$obj->cambia($_REQUEST['codigo'], $_REQUEST["tar"], $_REQUEST["ftar"], $_REQUEST["cvv"], $_REQUEST["pais"], $_REQUEST["idpla"]);
header("location:pagListadoS.php");