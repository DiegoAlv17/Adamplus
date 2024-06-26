<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="./styleLogin.&Regis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <?php
    include_once './Controlador/UsuarioDAO2.php';
    $obj = new UsuarioDAO2();
    ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="registroForm">
                <h1>Crear una cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu correo electrónico para registrarte</span>
                <input type="text" placeholder="Nombre" name="name" id="txtNombre" required />
                <input type="email" placeholder="Correo Electronico" name="email" id="txtCorreo" required />
                <input type="password" placeholder="Contraseña" name="password" id="txtContra" required />
                <br>
                <button type="submit" name="regis">Crear una cuenta</button>
            </form>
        </div>
        <?php
        if (isset($_REQUEST["regis"])) {
            $obj->adiciona($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['password']);
            echo 'alert("Usuario registrado correctamente. Por favor inicie sesión.")';
        }
        ?>
        <div class="form-container sign-in-container">
            <form id="loginForm">
                <h1>Bienvenido a Adam+</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu cuenta</span>
                <input type="email" placeholder="Correo Electronico" name="email" id="txtCorreoL" required />
                <input type="password" placeholder="Contraseña" name="password" id="txtContraL" required />
                <label id="txtIntentos" name="msj" style="color: red;">
                <?php
        if (isset($_REQUEST["log"])) {
            if ($obj->comprueba($_REQUEST['email'], $_REQUEST['password']) != null) {
                $vec = $obj->comprueba($_REQUEST['email'], $_REQUEST['password']);  
                $id = $vec ->getId_usuario();
                header("location:indexLogin.html");
            } else {
                    echo 'Usuario no registrado. Intente de nuevo';
            }
        }
        ?>
                </label>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="submit" name="log">Iniciar Sesión</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Hola, Amigo!</h1>
                    <p>Ingresa tus datos personales y comienza la aventura con nosotros.</p>
                    <button class="ghost" id="signUp">Registrate</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./JavaScript/Login.js"></script>
</body>

</html>