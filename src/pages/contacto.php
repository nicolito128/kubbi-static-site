<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto - Kubbi | Música de 8 bits</title>
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/forms.css">
  </head>
  <body>
    <?php include '../partials/header.php'; ?>

    <main class="contenido-principal">
      <form id="contactForm">
        <fieldset>
          <legend>Contacto profesional</legend>
          <p>Puede contactarme con ofertas para colaboraciones o eventos en los que le gustaría que participe.</p>

          <div class="form-elem">
            <p>
              <label for="fullname">Nombre completo:</label>
            </p>
            <p>
              <input type="text" name="fullname" id="fullname" placeholder="John Dee" required>
            </p>
          </div>

          <div class="form-elem">
            <p>
              <label for="email">Email:</label>
            </p>
            <p>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="example@example.com"
                required
                minlength="4"
                maxlength="40"
              />
            </p>
          </div>

          <div class="form-elem">
            <p>
              <label for="files">Archivos adjuntos:</label>
            </p>
            <p>
              <input type="file" name="files" id="files" multiple>
            </p>
          </div>

          <div class="form-elem">
            <p>
              <label for="subject">Asunto:</label>
            </p>
            <p>
              <select name="subject" id="subject" required>
                <option value="collaboration">Colaboración</option>
                <option value="event">Evento</option>
                <option value="other">Otro</option>
              </select>
            </p>
          </div>

          <div class="form-elem">
            <p>
              <label for="message">Mensaje:</label>
            </p>
            <p>
              <textarea
                name="message"
                id="message"
                rows="6"
                placeholder="Escribe tu mensaje aquí..."
                required
              ></textarea>
            </p>
          </div>

          <div class="form-elem">
            <p>
              <input type="submit" value="Enviar mensaje">
            </p>
          </div>

        </fieldset>
      </form>
    </main>

    <?php include '../partials/footer.php'; ?>

    <script src="/scripts/contacto.js"></script>
  </body>
</html>
