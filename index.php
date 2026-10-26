
<?php
// Preparamos las variables del formulario
$nombre = "";
$email = "";
$mensaje = "";
$aviso = "";

// Comprobamos si el formulario se ha enviado con POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos los datos y eliminamos espacios innecesarios
    $nombre = trim($_POST["nombre"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    // Comprobamos si alguno de los campos está vacío
    if ($nombre == "" || $email == "" || $mensaje == "") {
        $aviso = "Debes completar todos los campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $aviso = "Introduce un correo electrónico válido.";
    } else {
        $aviso = "Formulario recibido correctamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- SEO básico -->
        <title>VELVET Creative Studio | Diseño web e identidad visual</title>
        <meta name="description" content="VELVET Creative Studio es una agencia creativa especializada en diseño web, identidad visual y redes sociales.">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>Velvet Creative Studio</h1>

            <!-- Menú para ir a las diferentes secciones de la página -->
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </header>

        <main>
            <!-- Sección de inicio -->
            <section id="inicio">
                <div class="inicio-texto">
                    <h2>Diseñamos marcas que dejan huella</h2>
                    <p>Diseños web, identidad visual y redes sociales.</p>
                    <a href="#contacto">Solicitar Presupuesto</a>
                </div>

                <img src="img/portada.png" alt="Directora creativa de Velvet Studio">
            </section>

            <!-- Sección de servicios -->
            <section id="servicios">
                <h2>Nuestros servicios</h2>

                <h3>Diseño web</h3>
                <p>Diseñamos páginas web modernas y adaptadas a cada dispositivo.</p>

                <h3>Identidad visual</h3>
                <p>Creamos identidades de marca únicas y reconocibles.</p>

                <h3>Redes sociales</h3>
                <p>Ayudamos a las marcas a destacar en el entorno digital.</p>
            </section>

            <!-- Sección de proyectos -->
            <section id="proyectos">
                <h2>Nuestros proyectos</h2>

                <article>
                    <img src="img/maison-bloom.jpg" alt="Cosmética elegante de Maison Bloom">
                    <h3>Maison Bloom</h3>
                    <p>Diseño de identidad visual para una marca de cosmética.</p>
                </article>

                <article>
                    <img src="img/lumiere-beauty.png" alt="Centro de estética Lumière Beauty Studio">
                    <h3>LUMIÈRE Beauty Studio</h3>
                    <p>Diseño web para un centro de belleza y tratamientos faciales.</p>
                </article>
            </section>

            <!-- Sección de contacto -->
            <section id="contacto">
                <h2>Hablemos de tu proyecto</h2>
                <p>Cuéntanos tu idea y te ayudaremos a hacerla realidad.</p>

                <?php
                // Mostramos el aviso de forma segura
                if ($aviso != "") {
                    echo "<p>" . htmlspecialchars($aviso, ENT_QUOTES, "UTF-8") . "</p>";
                }
                ?>

                <!-- Enviamos los datos del formulario con POST -->
                <form method="POST" action="#contacto">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>

                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>

                    <button type="submit">Enviar solicitud</button>
                </form>
            </section>
        </main>
    </body>
</html>
