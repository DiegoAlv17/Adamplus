<?php
include_once 'Conexion.php';
include_once '../Modelo/Suscripcion.php';

class SusDAO
{
    //metodo para listar
    function listado()
    {
        $obj = new Conexion();
        $sql = "select * from suscripcion_form";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
        $vec = array();
        //leer filaxfila los datos cargados en memoria
        while ($f = mysqli_fetch_array($res)) {
            $ep = new Suscripcion($f[0], $f[1], $f[2], $f[3],$f[4],$f[5],$f[6],$f[7],$f[8]);
            $vec[] = $ep;
        }
        return $vec;
    }

    //grabar nuevos Usuarios
    function adiciona($tar, $fec, $cvv,$pais, $idUsu)
    {
        $obj = new Conexion();
        $sql = "call InsertSuscripcion($tar,'$fec','$cvv','$pais','$idUsu','P001')";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
    }

    //actualizar
    function cambia($cod,$tar, $fec,$cvv, $pais, $idplan)
    {
        $obj = new Conexion();
        $sql = "update suscripcion_form set num_tar=$tar, fec_tar='$fec', cvv='$cvv', pais ='$pais' where id_suscripcion=$cod";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
    }
    //anulacion
    function borra($cod)
    {
        $obj = new Conexion();
        $sql = "delete from suscripcion_form where id_suscripcion=$cod";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
    }

    function consulta($cod)
    {
        $sql = "select * from suscripcion_form where id_suscripcion=$cod";
        $obj = new Conexion();
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error(mysql));
        if (mysqli_num_rows($res) > 0) {
            $fila = mysqli_fetch_array($res);
            $p = new Suscripcion($fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5], $fila[6], $fila[7], $fila[8]);
        } else {
            $p = null;
        }
        return $p;
    }
}