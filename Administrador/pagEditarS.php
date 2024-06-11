<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/adminlte.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include_once '../Controlador/SusDAO.php';
        $obj=new SusDAO();
        $id=$_REQUEST['cod'];
        $p=$obj->consulta($id);
        
       ?>
    <center>
        <form action="cambia.php">
            <h3>Editar Suscripcion</h3>
        <table class="table table-bordered">
            <input type="hidden" name="codigo" value="<?=$p->getId()?>">
            <tr><td> Nro Tarjeta <td><input name="tar" value="<?=$p->getNum_tar()?>">
            <tr><td> Fecha de tarjeta <td><input name="ftar" value="<?=$p->getFec_tar()?>">
            <tr><td> CVV <td><input name="cvv" value="<?=$p->getCvv()?>">
            <tr><td> Pais <td><input name="pais" value="<?=$p->getPais()?>">
            <tr><td> Id Plan <td><input name="idpla" value="<?=$p->getId_planes()?>">
            <tr><td> <input type="submit" name="envia">
        </table>
        </form>       
    </center>
    
    </body>
</html>