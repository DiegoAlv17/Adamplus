const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});


class Usuario{
    constructor(nombre, correo, contraseña){
        this.nombre = nombre;
        this.correo = correo;
        this.contraseña = contraseña;
    }
}

let intentos = 3;

function register() {
    const nombre = document.getElementById("txtNombre").value;
    const correo = document.getElementById("txtCorreo").value;
    const contraseña = document.getElementById("txtContra").value;

    const nuevo = new Usuario(nombre, correo, contraseña);

    const usuarioRegis = JSON.parse(localStorage.getItem("usuarios")) || [];
    usuarioRegis.push(nuevo);
    localStorage.setItem("usuarios",JSON.stringify(usuarioRegis));

    document.getElementById("registroForm").reset;
    alert("Usuario registrado correctamente. Por favor inicie sesión.")
}

function login() {
    const correoL = document.getElementById("txtCorreoL").value;
    const contraL = document.getElementById("txtContraL").value;

    const usuarioRegis = JSON.parse(localStorage.getItem("usuarios")) || [];
    const usuraioFind = usuarioRegis.find(usuario  => usuario.correo === correoL && usuario.contraseña === contraL);

    if (usuraioFind) {
        alert("Inicio de sesion exitoso. Redirigiendo..");
        window.open("index.html");
    } else {
        var msj = document.getElementById("txtIntentos");
        intentos--;
        msj.innerHTML = "Le quedan "+intentos+" intentos";
        if (intentos<=0) {
            alert("Se han agotado los intentos. La página se cerrará");
            window.close();
        }
    }
}


