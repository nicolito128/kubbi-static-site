document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const fullname = document.getElementById('fullname').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    if (!fullname || !email || !message) {
        alert('Por favor, completa todos los campos requeridos.');
        return;
    }

    alert(`
        Gracias por contactarme, ${fullname}!\n
        He recibido tu mensaje sobre "${subject || 'Sin Asunto'}".\n
        Me pondré en contacto contigo pronto a través de ${email}.
    `);

    event.target.reset();
});