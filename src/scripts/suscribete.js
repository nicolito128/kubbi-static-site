document.getElementById('subForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const fullname = document.getElementById('fullname').value;
    const email = document.getElementById('email').value;
    const checkAlbums = document.getElementById('albums').checked;
    const checkSingles = document.getElementById('singles').checked;
    const checkColab = document.getElementById('colab').checked;

    if (!fullname || !email) {
        alert('Por favor, completa todos los campos requeridos.');
        return;
    }

    let preferences = [];
    if (checkAlbums) preferences.push('Nuevos Álbumes');
    if (checkSingles) preferences.push('Nuevos Singles');
    if (checkColab) preferences.push('Colaboraciones');
    if (preferences.length === 0) {
        preferences.push('Ninguna');
    }

    alert(`
        Gracias por suscribirte, ${fullname}!\n
        Has seleccionado las siguientes preferencias: ${preferences.join(', ') || 'Ninguna'}.
    `);

    event.target.reset();
});