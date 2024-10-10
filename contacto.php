<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contacto</title>
    <link rel="stylesheet" href="css/contacto.css"> <!-- Enlaza tu CSS aquí -->
</head>
<body>
    <header>
        <a href="login.php">
            <img src="img/1-2.png" alt="Logo" class="logo"> <!-- Cambia esto a la ruta de tu logo -->
        </a>
    </header>
    
    <main>
     
     
        <section id="contacto">
            <h2>Contacto</h2>
            <div class="contact-form">
                <form action="#" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                    <button type="submit" class="btn-submit">Enviar</button>
                </form>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15697.91257444952!2d-75.4884872!3d10.3835463!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef625ab21a8f709%3A0x4e417575818c264d!2sLaura%20Nu%C3%B1ez%20Perfectskin!5e0!3m2!1ses-419!2sco!4v1710883971674!5m2!1ses-419!2sco"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
  
</body>
</html>
