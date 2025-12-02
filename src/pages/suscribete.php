<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suscribete - Kubbi | Música de 8 bits</title>
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/forms.css" />
  </head>
  <body>
    <?php include '../partials/header.php'; ?>

    <main class="contenido-principal">
      <form id="subForm">
        <fieldset>
          <legend>Suscribete</legend>
          <p>¡Recibe notificaciones sobre lo último de Kubbi!</p>

          <div class="form-elem">
            <p>
              <label for="fullname">Nombre completo:</label>
            </p>
            <p>
              <input
                type="text"
                name="fullname"
                id="fullname"
                placeholder="John Dee"
                required
                minlength="4"
                maxlength="64"
              />
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
              <input type="checkbox" name="albums" id="albums" value="Albums" />
              <label for="albums" class="option-label">Albums</label>
            </p>
            <p>
              <input
                type="checkbox"
                name="singles"
                id="singles"
                value="Singles"
              />
              <label for="singles" class="option-label">Sencillos</label>
            </p>
            <p>
              <input type="checkbox" name="colab" id="colab" value="colab" />
              <label for="colab" class="option-label">Colaboraciones</label>
            </p>
          </div>

          <div class="form-elem">
            <input type="submit" value="Suscribirse" />
          </div>
        </fieldset>
      </form>
    </main>

    <?php include '../partials/footer.php'; ?>

    <script src="/scripts/suscribete.js"></script>
  </body>
</html>
