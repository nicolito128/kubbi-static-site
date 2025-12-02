const buttons = document.querySelectorAll('#buyButton');

for (const button of buttons) {
  button.addEventListener('click', function (event) {
    alert('¡Gracias por tu compra! Pronto recibirás un correo con los detalles.');
  });
}