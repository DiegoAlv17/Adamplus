<html>
<head>
    <meta charset="UTF-8">
    <link href="../css/adminlte.min.css" rel="stylesheet" type="text/css" />
    <title></title>
</head>
<body>
    <?php
    include_once '../Controlador/SusDAO.php';
    include_once '../Modelo/Suscripcion.php';
    $obj = new SusDAO();
    $vec = $obj->listado();

    ?>
    <center>
        <h3>Listado de Suscripcion</h3>
        <table class="table table-hover">
            <thead>
                <tr class="text-white bg-dark">
                    <th>Codigo de Suscripcion
                    <td>Fecha de inicio
                    <td>Fecha de Finalización
                    <td>Numero de tarjeta
                    <td>Fecha de la tarjeta
                    <td>CVV
                    <td>Pais
                    <td>Id del Usuario
                    <td>Id del Plan
            </thead>
            <?php
            foreach ($vec as $d) {
                echo "<tr><td>{$d->getId()}<td>{$d->getFec_ini()}<td>{$d->getFec_fin()}"
                    . "<td>{$d->getNum_tar()}<td>{$d->getFec_tar()}<td>{$d->getCvv()}"
                    . "<td>{$d->getPais()}<td>{$d->getId_usuario()}<td>{$d->getId_planes()}";
                ?>
                <td><a href="pagEditarS.php?cod=<?= $d->getId() ?>" class="btn btn-success">Edit</a>
                    <a href="borraS.php?cod=<?= $d->getId() ?>" class="btn btn-danger">borra</a>

                <?php
            }
            ?>
        </table>
</body>
</html>