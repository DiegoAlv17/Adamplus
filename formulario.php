<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="./styleFormu.css">
</head>

<body>
    <?php
    include_once 'Controlador\SusDAO2.php';
    $obj = new SusDAO2();
    


    ?>
    <div class="wrapper">
        <h1>Formulario de Pago</h1>
        <br>
        <form id="paymentForm" method="get">
            <div class="input-box">
                <input type="text" id="nombre" name="nombre" placeholder="Nombres" onkeypress="letras()">
            </div>

            <div class="input-box">
                <input type="text" id="numero" name="numero" placeholder="Número de Tarjeta" maxlength="16"
                    onkeypress="numero2()">
            </div>

            <div class="input-box">
                <input type="date" id="vencimiento" name="vencimiento" placeholder="Fecha de Vencimiento" required>
            </div>

            <div class="input-box">
                <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="3" onkeypress="numero2()">
            </div>

            <div class="input-box">
                <input type="text" id="pais" name="pais" placeholder="País" onkeypress="letras()">
            </div>

            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
            </div>
            <input type="submit" class="btn" name ="frm" value="Pagar">
            <?php
            if (isset($_REQUEST['frm'])) {
                $obj->adiciona($_REQUEST['numero'],$_REQUEST['vencimiento'],$_REQUEST['cvv'],$_REQUEST['pais'],$_REQUEST['102']);
                header("location:indexFor.html");
            }
            ?>
        </form>
    </div>
    <script src="./JavaScript/Formulario.js"></script>
</body>

</html>