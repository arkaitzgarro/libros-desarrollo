# Ejemplos prácticos de enlaces

## Enlace al inicio del sitio web

```html
<a href="/">Inicio</a>```

## Enlace a un email

```html
<a href="mailto:nombre@direccion.com" title="Dirección de email">
Solicita más información
</a>```

Al pinchar sobre el enlace anterior, se abre automáticamente el **programa de correo electrónico** por defecto del ordenador del usuario.
Además, el protocolo *mailto* permite el paso de parámetros por método GET. De esta manera podemos mandar un email especificando el asunto y el mensaje:

```html
<a href="mailto:nombre@direccion.com?body=Me gustaría conocer mas acerca de su negocio&subject=Info">Solicita más información</a>```

Los parametros que reconocerá el programa de correo son:

- `subject` Asunto del mensaje
- `body` Cuerpo del mensaje
- `cc` Direccion de copia
- `bcc` Direccion de copia oculta

Aunque el uso de *mailto* puede parecer una ventaja, su uso está desaconsejado.
La forma más correcta de mostrar las direcciones de correo electrónico en las páginas web consiste en incluir la dirección en una imagen o indicarla de forma que solamente los usuarios puedan entenderlo.

## Enlace a un archivo  FTP

```html
<a href="ftp://ftp.ejemplo.com/ruta/archivo.zip" title="Archivo comprimido de los contenidos">
Descarga un ZIP con todos los contenidos
</a>```


## Enlazar varias hojas de estilo CSS

```html
<link rel="stylesheet" type="text/css" href="/css/comun.css" />
<link rel="stylesheet" type="text/css" href="/css/secciones.css" />```


## Enlazar hojas de estilos CSS para diferentes medios

```html
<link rel="stylesheet" type="text/css" href="/css/comun.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="/css/impresora.css" media="print" />
<link rel="stylesheet" type="text/css" href="/css/movil.css" media="handheld" />```


## Enlazar hojas de estilos, favicon y RSS

```html
<head>
    ...
    <link rel="stylesheet" type="text/css"
        href="/css/impresora.css" media="print" />
    <link rel="stylesheet" type="text/css"
        href="/css/movil.css" media="handheld" />
    <style type="text/css" media="screen,projection">
        @import '/css/main.css';
    </style>
    <link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
    <link rel="alternate" type="application/rss+xml"
        title="Resumen de todos los artículos del blog" href="/feed.xml" />
    ...
</head>```


## Indicar que existe una versión de la página en otro idioma

```html
<head>
    <title>English tutorial</title>
    <link lang="es" xml:lang="es" title="El tutorial en español"
        type="text/html" rel="alternate" hreflang="es"
        href="http://www.ejemplo.com/tutorial/espanol.html" />
</head>```


## Indicar que existe una versión de la página preparada para imprimir

```html
<head>
    <link media="print" title="El tutorial en PDF"
        type="application/pdf"rel="alternate"
        href="http://www.ejemplo.com/tutorial/documento.pdf" />
</head>```


## Indicar que existe una página que es índice de la página actual

```html
<head>
    <title>Tutorial – Capítulo 5</title>
    <link rel="start" title="El índice del tutorial"
        type="text/html"
        href="http://www.ejemplo.com/tutorial/indice.html" />
</head>```


<div class="exercise">
  <p class="title">Ejercicio 6</p>
</div>

[Ver enunciado](#ej06)

<div class="exercise">
  <p class="title">Ejercicio 7</p>
</div>

[Ver enunciado](#ej07)
