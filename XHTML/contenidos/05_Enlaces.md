# Enlaces

El **lenguaje HTML** *(HyperText Markup Language)*, como ya hemos mencionado anteriormente, es un lenguaje de marcas. Literalmente, podría ser traducido como "lenguaje de marcado para hipertexto".
El elemento principal del **hipertexto** es el hiperenlace, también llamado enlace web o simplemente **enlace**.

Un enlace es una conexión desde un recurso web a otro. Establece **relaciones entre dos recursos** (principalmente páginas web, pero también imágenes, documentos o archivos). Un enlace comienza en un recurso y apunta hacia otro.

## URL

Para poder comprender el funcionamiento y creación de los **enlaces**, es importante conocer y dominar el concepto de **URL**. El acrónimo **URL** *(Uniform Resource Locator)* es un localizador de recursos uniformes y hace referencia a un único identificador de cada recurso en Internet. Esta secuencia de caracteres nombra recursos en Internet para su localización o identificación.

La URL de un recurso tiene dos objetivos principales:

- **Identificar** de forma única a ese recurso: cada página en Internet tiene un nombre único, lo que posibilita la creación de enlaces que apunten de forma inequívoca a una página determinada.

- **Localizar** de forma eficiente ese recurso.

El **formato general** de una URL es:  `esquema://máquina/directorio/archivo`

Por ejemplo: `http://www.arkaitzgarro.com/xhtml/capitulo-5.html`

Cuyas partes son:

| Protocolo | Dominio                | Ruta          |
| :-------: | :--------------------: |:------------: |
| `http://` | `www.arkaitzgarro.com` | `/xhtml/capitulo-5.html`  |
| Mecanismo que debe utilizar el navegador para acceder a ese recurso| Nombre del dominio, hace referencia a una dirección I.P. | Recurso específico al que se quiere acceder  |

También podemos encontrar URL más complejas como:

`http://www.arkaitzgarro.com/xhtml/capitulo-5.html?page=5#url`

Donde además de las partes anteriores encontramos:

- `?page=5` **Consulta**: Información adicional para acceder al recurso. Comienza con el caracter `?` seguido de una sucesión de palabras y/o números separados por `=` y `&`.
- `#url` **Sección**: el navegador se posiciona en dicha sección de la página. Comienza con el caracter `#`.

### Codificación de caracteres en las URL

Al igual que en el texto, las URL también presentan problemas con algunos caracteres, por lo que se utiliza una **codificación de caracteres** que asegura su correcto funcionamiento.

| Caracter<br />original | Caracter<br />codificado | Caracter<br />original | Caracter<br />codificado |
| :--: | :--: | :--: | :--: |
| /  | %2F | ñ  | %F1 |
| :  | %3A | á  | %E1 |
| =  | %3D | é  | %E9 |
| "  | %22 | í  | %ED |
| '  | %60 | ó  | %F3 |
| (espacio en blanco) | %20 | ú | %2F |
| ?  | %3F | ç  | %FA |
| @  | %40 | Ñ  | %D1 |
| &  | %26 | Á  | %C1 |
| \  | %5C | É  | %C9 |
| ~  | %7E | Í  | %CD |
| #  | %23 | Ó  | %D3 |
|   || Ú  | %DA |
|   || Ç  | %C7 |

### URL completas, relativas y absolutas

Dentro de una página web podemos encontrar decenas de **enlaces** y éstos pueden ser de diferentes tipos. Como principal distinción encontramos URL completas, absolutas y relativas:

- **URL completas**: `http://www.dominio.com/directorio/recurso`
Incluyen todas las partes de la URL (protocolo, dominio y ruta) y no se necesita más información para obtener el recurso enlazado.
El enlace está completamente definido.

- **URL absolutas**: `/directorio/recurso`
Se parte de la base que el recurso al que queremos llegar esta en el mismo servidor del que partimos.

- **URL relativas**: `../recurso`
Son URL incompletas, prescinden de algunas partes de las URL para hacerlas más breves (de la parte del protocolo, del nombre del servidor e incluso de parte o toda la ruta del recurso enlazado). Por esto, es necesario tener información adicional, es decir, se debe conocer la URL del origen del enlace.
Es una versión abreviada de una URL absoluta.

Dentro de las **URL relativas**, existen distintos tipos:

- El origen y el destino del enlace se encuentran en el **mismo directorio**:

| Elemento        | Valor   |
| ------------:   | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - mismo directorio |
| URL Completa    | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina2.html` |
| URL Relativa    | `pagina2.html` |

- El destino del enlace se encuentra **en un nivel superior**:

| Elemento        | Valor   |
| --------------: | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - directorio superior llamado `ruta2` |
| URL Completa    | `http://www.ejemplo.com/ruta1/ruta2/pagina2.html` |
| URL Relativa    | `../pagina2.html` |

Si el destino se encuentra **dos niveles por encima**, se debe incluir ../ dos veces seguidas: `../../pagina2.html`

Y si el destino está en **otro directorio**, llamado por ejemplo `ruta4` que se encuentra en la **raíz del servidor**, la URL relativa sería: `../../../ruta4/pagina2.html`

- El destino del enlace se encuentra **en un nivel inferior**:

| Elemento        | Valor   |
| --------------: | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - directorio inferior llamado `ruta4` |
| URL Completa    | `http://www.ejemplo.com/ruta1/ruta2/ruta3/ruta4/pagina2.html` |
| URL Relativa    | `ruta4/pagina2.html` |

También se pueden indicar varios directorios seguidos: `ruta4/ruta5/ruta6/pagina2.html`

- El destino del enlace se encuentra **en algún lugar en la raíz del servidor**:

| Elemento        | Valor   |
| --------------: | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - directorio en la raíz del servidor `ruta7` |
| URL Completa    | `http://www.ejemplo.com/ruta7/pagina2.html` |
| URL Relativa    | `/ruta7/pagina2.html` |


Cuando la URL relativa comienza por /, el navegador considera que es la **ruta completa comenzando desde la raíz del servidor**, por lo que sólo le añade el protocolo y el nombre del servidor origen.

## Enlaces básicos

Son los creados mediante el *tag* `<a>`:

| Etiqueta              | `<a>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos, foco |
| **Atributos propios** | `name="texto"` Permite nombrar al enlace para que se pueda acceder desde otros enlaces<br /> `href="url"` Indica la URL del recurso que se quiere enlazar |
| **Tipo de elemento**  | En línea |
| **Descripción**       | Se emplea para enlazar todo tipo de recursos |

Un ejemplo de **código HTML** con la etiqueta `<a>` sería:

    [html]
    <a href="http://www.google.com">Enlace básico a una web</a>

Este enlace apunta a una web, en concreto, a la página principal de Google. Pero de la misma manera, podríamos enlazarlo con una imagen, un documento, etc., ya que el atributo `href` puede apuntar a cualquier tipo de recurso al que pueda acceder el navegador.

Por ejemplo:

    [html]
    <a href="http://www.ejemplo.com/imagen.jpg">Enlace básico a una imagen</a>

o

    [html]
    <a href="http://www.ejemplo.com/informe.pdf">Enlace básico a un archivo pdf</a>

El atributo `name` permite definir enlaces dentro de una misma página web. Esto es muy útil cuando se trata de documentos largos divididos en secciones.

Por ejemplo, si creas el "enlace vacío"

    [html]
    <a name="inicio"></a>

y en otro lugar de la página creas el enlace

    [html]
    <a href="#inicio">Volver al inicio de la página</a>

al pinchar en éste, el navegador accede a la página apuntada por la URL y baja directamente a la sección cuyo nombre se indica después del símbolo `#`.
Los enlaces directos a secciones también funcionan con el atributo `id` de cualquier elemento.

## Enlaces avanzados

La definición anterior del *tag* `<a>` no es su definición completa, ya que dispone de otros atributos específicos también muy importantes que nos servirán para crear enlaces muchos más complejos. Estos **atributos específicos**, además de `name="texto"` y `href="url"` son:

- `hreflang="codigo"` Indica el idioma y la variación idiomática en función del país del recurso enlazado que se establece a través de unos códigos estandarizados de dos letras. Algunos de ellos son:

| Código   | Idioma - Variación |
| -------: | :----------------- |
| `en`     | Inglés |
| `en-AU`  | Inglés - Australia |
| `en-US`  | Inglés - EE.UU. |
| `es`     | Español |
| `es-AR`  | Español - Argentina |
| `es-ES`  | Español - España |
| `es-MX`  | Español - México |

La lista completa de códigos se define en el [estándar ISO 639](http://xml.coverpages.org/iso639a.html).

- `type="tipo"` Da información al navegador acerca del tipo de contenido que se enlaza. Se indica mediante una cadena de texto cuyos posibles valores también están estandarizados. Algunos de los más utilizados son `"text/html"` (páginas HTML), `"image/png"` (imágenes con formato PNG) o `"text/css"` (hojas de estilo CSS).

La lista completa de tipos de contenido se define en los [estándares RFC 2045 y RFC 2046](http://www.iana.org/assignments/media-types).

Los atributos `rel` y `rev` describen la relación que la página actual tiene con la página a la que se enlaza.

- `rel="tipo"` Describe la relación del documento actual con el recurso enlazado.

- `rev="tipo"` Describe la relación del recurso enlazado con el documento actual.

Los tipos de relación pueden ser muy variados, como por ejemplo `alternate` (indica que es una versión alternativa al documento actual), `stylesheet` (indica que se ha enlazado una hoja de estilos) o `start` (indica que se trata del primer documento de una colección de documentos).

La lista completa de tipos de relaciones se define en en la [especificación oficial de HTML](http://www.w3.org/TR/1999/REC-html401-19991224/types.html#type-links).

- `charset="tipo"` Describe la codificación del recurso enlazado.

Los valores que se pueden utilizar también están estandarizados y las codificaciones más utilizadas son `UTF-8` y `ISO-8859-1`, aunque existen decenas de códigos definidos.

Aquí encontramos una [lista completa de codificaciones](http://www.iana.org/assignments/character-sets/character-sets.xml).

Un ejemplo de código HTML con un enlace avanzado sería:

    [html]
    <a href="http://www.google.com" hreflang="en"
        type="text/html" charset="UTF-8">Página principal de Google</a>

## Otros tipos de enlaces

Además de los **enlaces** creados por la etiqueta `<a>`, las **páginas HTML** pueden incluir otro tipo de enlaces que cargan los recursos automáticamente.

HTML define las etiquetas `<script>` y `<link>` para enlazar **recursos** que se deben **cargar automáticamente**. Cuando el navegador encuentra alguna de estas dos etiquetas, descarga los recursos enlazados y los aplica a la página web.

| Etiqueta              | `<script>`    |
| --------------------: | :------------- |
| **Atributos comunes** | - |
| **Atributos propios** | `src="url"` Indica la dirección del archivo que contiene el código. La URL puede ser absoluta o relativa y externa o interna<br /> `type="tipo"` Permite avisar al navegador sobre el tipo de código que se incluye (normalmente JavaScript, expresado como `"text/javascript"`)<br /> `defer="defer"` El código no va a modificar el contenido de la página web<br /> `charset="tipo"` Describe la codificación del código enlazado |
| **Tipo de elemento**  | En línea, en bloque y etiqueta vacía |
| **Descripción**       | Se emplea para enlazar o definir un bloque de código (normalmente JavaScript) |

Este *tag* permite enlazar código de **varios lenguajes de programación**, aunque su uso más habitual consiste tanto en insertar un **bloque de código JavaScript** en la página como en enlazar un **archivo JavaScript externo**. Normalmente se incluye dentro de la cabecera (`<head>`…`</head>`), aunque puede aparecer en cualquier parte del documento HTML.

Dos ejemplos de **código html** con la etiqueta `<script>` serían:

- Enlazar un archivo **JavaScript** externo:

    [html]
    <head>
        <script type="text/javascript" src="http://www.ejemplo.com/js/app.js"></script>
    </head>

- Incluir en la página web un bloque de código **JavaScript**:
Este bloque de código se debe encerrar entre `<![CDATA[` y `]]>`, de esta forma, se pueden construir páginas **HTML** válidas y código **JavaScript** correcto.

    [html]
    <html>
        <head>
            <script type="text/javascript">
            //<![CDATA[
            window.onload = function() {
                alert("La página se ha cargado completamente");
            }
            //]]>
            </script>
        </head>
        <body>
        ...
        </body>
    </html>

La etiqueta `<link>`, sin embargo, sólo se puede incluir dentro de la cabecera (`<head>`…`</head>`) del documento HTML. Su uso habitual es el de enlazar las hojas de estilos **CSS** utilizadas por las páginas web.

| Etiqueta              | `<link>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `charset`, `href`, `hreflang`, `type`, `rel` y `rev` - Todos ellos con el mismo significado que para la etiqueta `<a>`<br /> `media="tipo"` Indica el medio para el que debe aplicarse la relación. Los medios disponibles también están estandarizados |
| **Tipo de elemento**  | Etiqueta vacía |
| **Descripción**       | Se emplea para enlazar y establecer relaciones entre el documento y otros recursos |

En cuanto al atributo `media`, como ya hemos mencionado, estos medios están estandarizados. Sin embargo, existen algunos más utilizados como son:

- `screen` para los contenidos mostrados en pantalla.
- `print` para las impresoras.
- `handheld` para los dispositivos móviles.

Un ejemplo de **código html** con la etiqueta `<link>` para enlazar hojas de estilo CSS sería:

    [html]
    <head>
        ...
        <link rel="stylesheet" type="text/css" href="/css/comun.css" />
    </head>

## Ejemplos prácticos de enlaces

### Enlace al inicio del sitio web

    [html]
    <a href="/">Inicio</a>

### Enlace a un email

    [html]
    <a href="mailto:nombre@direccion.com" title="Dirección de email">
    Solicita más información
    </a>

Al pinchar sobre el enlace anterior, se abre automáticamente el **programa de correo electrónico** por defecto del ordenador del usuario.
Además, el protocolo *mailto* permite el paso de parámetros por método GET. De esta manera podemos mandar un email especificando el asunto y el mensaje:

    [html]
    <a href="mailto:nombre@direccion.com?body=Me gustaría conocer mas acerca de su negocio&subject=Info">Solicita más información</a>

Los parametros que reconocerá el programa de correo son:

- `subject` Asunto del mensaje
- `body` Cuerpo del mensaje
- `cc` Direccion de copia
- `bcc` Direccion de copia oculta

Aunque el uso de *mailto* puede parecer una ventaja, su uso está desaconsejado.
La forma más correcta de mostrar las direcciones de correo electrónico en las páginas web consiste en incluir la dirección en una imagen o indicarla de forma que solamente los usuarios puedan entenderlo.

### Enlace a un archivo  FTP

    [html]
    <a href="ftp://ftp.ejemplo.com/ruta/archivo.zip" title="Archivo comprimido de los contenidos">
    Descarga un ZIP con todos los contenidos
    </a>

### Enlazar varias hojas de estilo CSS

    [html]
    <link rel="stylesheet" type="text/css" href="/css/comun.css" />
    <link rel="stylesheet" type="text/css" href="/css/secciones.css" />

### Enlazar hojas de estilos CSS para diferentes medios

    [html]
    <link rel="stylesheet" type="text/css" href="/css/comun.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="/css/impresora.css" media="print" />
    <link rel="stylesheet" type="text/css" href="/css/movil.css" media="handheld" />

### Enlazar hojas de estilos, favicon y RSS

    [html]
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
    </head>

### Indicar que existe una versión de la página en otro idioma

    [html]
    <head>
        <title>English tutorial</title>
        <link lang="es" xml:lang="es" title="El tutorial en español"
            type="text/html" rel="alternate" hreflang="es"
            href="http://www.ejemplo.com/tutorial/espanol.html" />
    </head>

### Indicar que existe una versión de la página preparada para imprimir

    [html]
    <head>
        <link media="print" title="El tutorial en PDF"
            type="application/pdf"rel="alternate"
            href="http://www.ejemplo.com/tutorial/documento.pdf" />
    </head>

### Indicar que existe una página que es índice de la página actual

    [html]
    <head>
        <title>Tutorial – Capítulo 5</title>
        <link rel="start" title="El índice del tutorial"
            type="text/html"
            href="http://www.ejemplo.com/tutorial/indice.html" />
    </head>

<div class="exercise">
  <p class="title">Ejercicio 6</p>
</div>

[Ver enunciado](#ej06)

<div class="exercise">
  <p class="title">Ejercicio 7</p>
</div>

[Ver enunciado](#ej07)