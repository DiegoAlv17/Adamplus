<?php
include_once '../Controlador/SusDAO.php';
$obj = new SusDAO();
$obj->borra($_REQUEST['cod']);
header("location:pagListadoS.php");