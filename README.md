# VELVET Creative Studio

## Descripción

VELVET Creative Studio es una página web que he desarrollado para una agencia creativa ficticia.

Mi idea era crear una web elegante y sencilla donde se pudieran mostrar los servicios de la agencia, algunos proyectos y un formulario de contacto.

Para el diseño he utilizado tonos beige y burdeos, buscando una imagen moderna y profesional.

## Tecnologías utilizadas

- **HTML:** para crear la estructura de la página.
- **CSS:** para los estilos, los colores y la adaptación a móviles.
- **PHP:** para trabajar con los datos del formulario de contacto.

## Funcionalidades

La web tiene un menú de navegación, una sección de servicios, dos proyectos ficticios (Maison Bloom y LUMIÈRE Beauty Studio) y un formulario de contacto.

El formulario utiliza el método `POST`. Con PHP compruebo que los campos no estén vacíos y que el correo electrónico tenga un formato válido. Después, aparece un mensaje indicando si los datos son correctos.

De momento, el formulario no envía correos ni guarda los datos.

También he adaptado el diseño para que se pueda visualizar en pantallas de móvil.

## SEO y seguridad básica

He añadido un título descriptivo, una `meta description` y una etiqueta `robots` para trabajar el SEO básico de la página.

En cuanto a la seguridad, he utilizado algunas funciones de PHP:

- `trim()` para eliminar espacios innecesarios.
- `filter_var()` para validar el correo electrónico.
- `htmlspecialchars()` para mostrar el aviso del formulario de forma segura.

También utilizo `?? ""` para evitar errores si falta algún dato del formulario.

Son medidas básicas que he aplicado como parte de mi aprendizaje.

## Cómo ejecutar el proyecto

Como la página utiliza PHP, es necesario tenerlo instalado y utilizar un servidor local.

1. Descargar el proyecto.
2. Abrir una terminal en la carpeta del proyecto.
3. Ejecutar el comando:

   `php -S localhost:8000`

4. Abrir `http://localhost:8000` en el navegador.

## Qué he aprendido

Con este proyecto he practicado HTML, CSS y PHP, además de aprender a organizar una página web, adaptar su diseño a móviles y validar un formulario.

También he trabajado aspectos básicos de SEO y seguridad que no había tenido en cuenta al empezar.

Este proyecto forma parte de mi aprendizaje en 2.º de Desarrollo de Aplicaciones Web (DAW).