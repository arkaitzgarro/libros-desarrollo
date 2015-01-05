# Otros tipos de enlaces

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

```html
<head>
    <script type="text/javascript" src="http://www.ejemplo.com/js/app.js"></script>
</head>```



- Incluir en la página web un bloque de código **JavaScript**:
Este bloque de código se debe encerrar entre `<![CDATA[` y `]]>`, de esta forma, se pueden construir páginas **HTML** válidas y código **JavaScript** correcto.

```html
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
</html>```


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

```html
<head>
    ...
    <link rel="stylesheet" type="text/css" href="/css/comun.css" />
</head>```

