<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/adminlte.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include_once '../Controlador/UsuarioDAO.php';
        $obj=new UsuarioDAO();
        $id=$_REQUEST['cod'];
        $p=$obj->consulta($id);
        
       ?>
    <center>
        <form action="cambia.php">
            <h3>Editar Usuario</h3>
        <table class="table table-bordered">
            <input type="hidden" name="codigo" value="<?=$p->getId_usuario()?>">
            <tr><td> Usuario <td><input name="usu" value="<?=$p->getNombre()?>">
            <tr><td> Correo <td><input name="correo" value="<?=$p->getEmail()?>">
            <tr><td> Contraseña <td><input name="contraseña" value="<?=$p->getContraseña()?>">
            <tr><td> <input type="submit" name="envia">
        </table>
        </form>       
    </center>
    
    </body>
</html>