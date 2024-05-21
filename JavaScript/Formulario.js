function letras() {
    key = window.event.keyCode;
    if (!(key >= 65 && key <= 90 || key >= 97 && key <= 122 || key == 32)) {
        alert("Solo letras");
        event.preventDefault();
    }
}

function numero2() {
    key = window.event.keyCode;
    if (!(key >= 48 && key <= 57)) {
        alert("Solo números");
        event.preventDefault();
    }
}

document.getElementById('paymentForm').addEventListener('submit', function (event) {

    const cardNumber = document.getElementById('numero').value;
    const cvv = document.getElementById('cvv').value;

    const cardNumberRegex = /^\d{16}$/;
    const cvvRegex = /^\d{3}$/;

    if (!cardNumberRegex.test(cardNumber)) {
        alert('El número de tarjeta debe tener exactamente 16 dígitos.');
        event.preventDefault();
        return;
    }
    if (!cvvRegex.test(cvv)) {
        alert('El CVV debe tener exactamente 3 dígitos.');
        event.preventDefault();
        return;
    }
});