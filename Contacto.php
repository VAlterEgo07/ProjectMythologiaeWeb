<!DOCTYPE html>                                                                            <!--He indicado que el archivo es un documento HTML5-->
<html lang="es">                                                                           <!--He especificado que el idioma del documento es español-->
<head>                                                                                     <!--He creado la cabecera del documento-->
    <meta charset="UTF-8">                                                                 <!--He definido el conjunto de caracteres del documento como UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                 <!--He añadido una etiqueta meta para que la página sea responsive-->
    <title>Contacto</title>                                                                <!--He establecido el título de la página como "Contacto"-->
    <link rel="stylesheet" href="estilosContacto.css">                                     <!--He enlazado una hoja de estilos CSS externa-->
</head>
<body>                                                                                     <!--He iniciado el cuerpo del documento-->
    <header class="cabecera">                                                              <!-- He creado una cabecera con clase cabecera -->
        <!-- Contenedor de la izquierda (logo y enlaces) -->
        <div class="izquierda">
            <img src="logo.png" alt="Logo" class="logo">
                                                  <!-- He puesto la foto del logo -->
            <!-- Menú de navegación -->
            <nav> <!-- He creado una navegación y dentro sus respectivos enlaces -->
                <a href="Historia.html">Historia</a>
                <a href="Mapa.html">Mapa</a>
                <a href="Atención al cliente.html">Atención al cliente</a>
                <a href="Mythologiae.html">Mythologiae</a>
            </nav>
        </div>
        </div>
    </header>
    <div class="contenido">                                                                <!--He creado un contenedor principal para el contenido-->
        <h1>Contáctenos</h1>                                                               <!--He añadido un título principal para la página-->
    </div>
    <table align="center" border="2" cellpadding="10">                                     <!--He creado una tabla para centrar el formulario con bordes y espacio interno-->
        <tr>                                                                               <!--He añadido una fila para contener la celda-->
            <td>                                                                           <!--He añadido una celda para el formulario-->
                <form id="contactForm" method="post">                                                    <!--He creado un formulario con un identificador-->
                    <input type="text" id="name" name="name" placeholder="Nombre completo">                     <!--He creado un campo de texto obligatorio para el nombre-->
                    <input type="email" id="email" name="email" placeholder="Correo electrónico">                  <!--He creado un campo de texto obligatorio para el correo-->
                    <input type="message" id="message" name="message" placeholder="Mensaje">    <!--He creado un área de texto obligatoria para el mensaje-->
                    <input type="submit" name="register" class="register" value="Enviar">                                  <!--He añadido un botón para enviar el formulario-->
                </form>
                    <?php
                    include("register.php");
                    ?>
            </td>
        </tr>
    </table>
    <footer align="center">                                                                <!--He creado un pie de página centrado-->
        <p>ProyectMythologiae © 2022 by AlterEgo07 is licensed under CC BY-NC 4.0</p>                                   <!--He añadido un mensaje de copyright-->
    </footer>           
</body>
</html>
