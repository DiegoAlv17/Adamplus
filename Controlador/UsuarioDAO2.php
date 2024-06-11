<?php
include_once 'Conexion.php';
include_once './Modelo/Usuario.php';

class UsuarioDAO2
{
    //metodo para listar
    function listado()
    {
        $obj = new Conexion();
        $sql = "select * from usuarios";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
        $vec = array();
        //leer filaxfila los datos cargados en memoria
        while ($f = mysqli_fetch_array($res)) {
            $ep = new Usuario($f[0], $f[1], $f[2], $f[3]);
            $vec[] = $ep;
        }
        return $vec;
    }

    //grabar nuevos Usuarios
    function adiciona($nomb, $email, $contraseña)
    {
        $obj = new Conexion();
        $sql = "insert into usuarios values('null','$nomb','$email','$contraseña')";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
    }

    //actualizar
    function cambia($cod, $nom, $email, $contraseña)
    {
        $obj = new Conexion();
        $sql = "update usuarios set nombre='$nom', email='$email', contraseña='$contraseña' where id_usuarios=$cod";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
    }
    //anulacion
    function borra($cod)
    {
        $obj = new Conexion();
        $sql = "delete from usuarios where id_usuarios=$cod";
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error($obj->conecta()));
    }

    function consulta($cod)
    {
        $sql = "select * from usuarios where id_usuarios=$cod";
        $obj = new Conexion();
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error(mysql));
        if (mysqli_num_rows($res) > 0) {
            $fila = mysqli_fetch_array($res);
            $p = new Usuario($fila[0], $fila[1], $fila[2], $fila[3]);
        } else {
            $p = null;
        }
        return $p;
    }

    function comprueba($correo, $contra)
    {
        $sql = "select * from usuarios where email='$correo' and contraseña='$contra'";
        $obj = new Conexion();
        $res = mysqli_query($obj->conecta(), $sql) or
            die(mysqli_error(mysql));
        if (mysqli_num_rows($res) > 0) {
            $fila = mysqli_fetch_array($res);
            $p = new Usuario($fila[0], $fila[1], $fila[2], $fila[3]);
        } else {
            $p = null;
        }
        return $p;
    }
}