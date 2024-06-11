<html>
<head>
    <meta charset="UTF-8">
    <link href="../css/adminlte.min.css" rel="stylesheet" type="text/css" />
    <title></title>
    
</head>

<body>
    <?php
    include_once '../Controlador/UsuarioDAO.php';
    include_once '../Modelo/Usuario.php';
    $obj = new UsuarioDAO();
    $vec = $obj->listado();

    ?>
    <center>
        <h3>Listado de Usuarios</h3>
        <table class="table table-hover">
            <thead>
                <tr class="text-white bg-dark">
                    <th>Codigo de Usuario
                    <td>Nombre
                    <td>Correo
                    <td>Contraseña
            </thead>
            <?php
            foreach ($vec as $d) {
                echo "<tr><td>{$d->getId_usuario()}<td>{$d->getNombre()}<td>{$d->getEmail()}"
                    . "<td>{$d->getContraseña()}";
                ?>
                <td><a href="pagEditar.php?cod=<?= $d->getId_usuario() ?>" class="btn btn-success">Edit</a>
                    <a href="borra.php?cod=<?= $d->getId_usuario() ?>" class="btn btn-danger">borra</a>

                <?php
            }
            ?>

        </table>


</body>

</html>