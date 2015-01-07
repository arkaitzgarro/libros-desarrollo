# Media Queries

Desde la especificación de CSS 2.1, ha sido posible modificar el aspecto de los documentos HTML en función del [**tipo de dispositivo**](http://www.w3.org/TR/CSS2/media.html) en el que se mostraban. El caso más común es el de crear una hoja de estilos que se aplica al imprimir los documentos:

    [html]
    <link rel="stylesheet" type="text/css" href="core.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />

Como no sólo vamos a formatear nuestros documentos para que se muestren de manera correcta, la especificación CSS ofrece una buena cantidad de tipos de medios (*media type*) para los que podemos aplicar un diseño específico, concretamente los siguientes: `all, braille, embossed, handheld, print, projection, screen, speech, tty, y tv.`. El problema es existe una extensa variedad de dispositivos que comparten el mismo tipo de medio, pero son completamente diferentes entre sí.

Por suerte, la W3C introdujo los *Media Query* como parte de la especificación de CSS 3, mejorando de manera notable el objetivo de los *Media Type*. Un *Media Query* no sólo nos permite seleccionar el tipo de medio, sino consultar otras características sobre el dispositivo que esta mostrando la página.

Un simple ejemplo de *Media Query*:

    [html]
    <link rel="stylesheet" type="text/css"
        media="screen and (max-device-width: 480px)"
        href="shetland.css" />

Esta consulta contiene dos componentes:

* Un tipo de medio (`screen`)
* y una consulta concreta sobre la característica del medio (`max-device-width`) y el valor objetivo (`480px`).

En otras palabras, estamos preguntando al dispositivo si su resolución horizontal (`max-device-width`) es igual o menor a `480px`. Si se cumple la condición, el dispositivo cargará la hoa de estilos `shetland.css`. De otra manera, el `link` será ignorado.

Los *Media Query* también pueden ser definidos dentro de la propia hoja de estilos:

    [css]
    @media screen and (min-width: 1024px) {
      body  {
        font-size: 100%;
      }
    }

O incluso utilizando la sentencia `@import`:

    [css]
    @import url("wide.css") screen and (min-width: 1024px);

No importa la manera en la que se defina el *Media Query*, el resultado debe ser el mismo: si el navegador cumple con el tipo de medio y las condiciones indicadas, se aplicarán las reglas CSS definidas.

## Sintaxis

Los *Media Queries* pueden contener una o más expresiones, expresadas como funciones multimedia, que se resuelven en *true* o *false*. El resultado del *query* o consulta devuelve *true* si el *media type* especificado en el *Media Query* coincide con el tipo de dispositivo en que el documento está siendo mostrado y todas las expresiones en el *Media Query* devuelven *true*.

Cuando un *Media Query* devuelve *true*, la correspondiente hoja de estilo es aplicada, siguiente las reglas habituales de CSS. Las hojas de estilo con *Media Queries* adjuntos a los *tags* `<link>` seguirán descargándose, incluso si sus *Media Queries* resultan *false* (sin embargo, no se aplicarán).

### Operadores lógicos o *logical operators*

Se pueden crear *Media Queries* complejos utilizando *logical operators*, incluyendo `not`, `and` y `only`. El operador `and` es usado para combinar múltiples *media features* en un sólo *Media Query*, requiriendo que cada función devuelve *true* para que el *Query* también lo sea. El operador `not` se utiliza para negar un *Media Query* completo y el operador `only` se usa para aplicar un estilo sólo si el *Query* completo es correcto.

Además, se pueden combinar múltiples *Media Queries* separados por comas en una lista; si alguno de los *Queries* devuelve *true, todo el *media statement* devolverá *true*. Esto es equivalente a un operador `or`.

#### and

El keyword `and` se usa para combinar múltiples *media features*, así como combinar éstos con *media types*. Un *Media Query* básico sería:

    [css]
    @media (min-width: 700px) { ... }

Sin embargo, si quisiéramos que esto sólo se aplicara si la pantalla está en modo *landscape*, se usaría el operador `and`:

    [css]
    @media (min-width: 700px) and (orientation: landscape) { ... }

Si además, sólo quisiéramos que esto se aplicara si el dispositivo fuera un *media type TV*:

    [css]
    @media tv and (min-width: 700px) and (orientation: landscape) { ... }

#### comma-separated lists

Cuando se utilizan las listas separadas por comas en los *Media Queries*, si algunas de las *Media Queries* devuelven *true*, los estilos se aplican. Cada *Media Query* separado por comas en la lista se trata como un *Query* individual, y cualquier operador aplicado a un *Media Query* no afecta a los demás. Esto significa que los *Media Queries* separados por comas puede dirigirse a diferentes *media features, types* o *states*.

Por ejemplo, si quisiéramos aplicar un conjunto de estilos si el dispositivo de visualización tienen un mínimo de 700px o está en modo *landscape*:

    [css]
    @media (min-width: 700px), handheld and (orientation: landscape) { ... }

#### not

La *keyword* `not` se aplica al *Media Query* en su totalidad y devuelve *true* si el *Media Query* devuelve *false* (como `monochrome` en una pantalla a color). Este *keyword* no se puede utilizar para negar un *individual feature query*, solamente un *entire media query*. Por ejemplo:

    [css]
    @media not all and (monochrome) { ... }

Esto significa que el *Query* es evaluado de esta manera:

    [css]
    @media not (all and (monochrome)) { ... }

en vez de así:

    [css]
    @media (not all) and (monochrome) { ... }

Por ejemplo, este otro *Media Query*:

    [css]
    @media not screen and (color), print and (color)

Se evalúa así:

    [css]
    @media (not (screen and (color))), print and (color)

#### only

El *keyword* `only` previene a los navegadores que no soportan *Media Queries*:

    [html]
    <link rel="stylesheet" media="only screen and (color)" href="example.css" />

### Características de los medios

La especificación de los *Media Query* incluye una larga lista de características que podemos consultar sobre el dispositivo. En este especificación, se hace referencia a dos términos que hay que tener claros:

* *display area*: espacio disponible en la ventana del navegador para mostrar el contenido de la página web.
* *rendering sourface*: hace referencia al espacio total disponible en el dispositivo.

El listado completo de características es el siguiente:

| Característica | Definición | Tiene prefijo `min-` y `max-`|
|:---------------|:-----------|:-----------------------------|
| `width`        | El ancho del área de visualización (`display area`) | Sí |
| `height`       | El alto del área de visualización (`display area`) | Sí |
| `device-width` | El ancho total del dispositivo (`rendering sourface`) | Sí |
| `device-height` | El alto total del dispositivo (`rendering sourface`) | Sí |
| `orientation` | Acepta los valores `portrait` o `landscape` | No |
| `aspect-ratio` | Relación de aspecto entre el ancho y alto del área de visualización | Sí |
| `device-aspect-ratio` | Relación de aspecto entre el ancho y alto del dispositivo | Sí |
| `color` | El número de `bits` de profundidad de color | Sí |
| `color-index` | El número de entradas en la tabla de colores del dispositivo | Sí |
| `monocrome` | El número de `bits` de profundidad de color, en dispotivos monocromáticos | Sí |
| `resolution` | Densidad de `pixels` en el dispositivo, medido en `dpi` | Sí |

Una de las ventajas es que podemos encadenar múltiples condiciones en el `media query`, utilizando la palabra reservada `and`:

    [css]
    @media screen and (min-device-width: 480px) and (orientation:landscape)
    {
      ...
    }

## Viewport

La etiqueta `meta` para el `viewport` fue introducida por Apple en Safari para móviles en el año 2007, para ayudar a los desarrolladores a mejorar la presentación de sus aplicaciones web en un iPhone.

La etiqueta viewport nos permite definir el ancho, alto y escala del área usada por el navegador para mostrar contenido. Al fijar el ancho o alto del viewport, podemos usar un número fijo de pixeles (ej: `320px`, `480px`, etc) o usar dos constantes, `device-width` y `device-height` respectivamente. Se considera una buena práctica configurar el viewport con algunas de estas dos constantes, en lugar de utilizar un ancho o alto fijo. Muchos desarrolladores caen en el error de configurar el `viewport` con un `width` de `320px`, siendo este el ancho del iPhone.

A continuación la configuración más común de una etiqueta `meta`:

    [html]
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

Las propiedades a tener en cuenta son las siguientes:

* `width`: controla el ancho del área de visualización. Puede ser inicializado a un número concreto de pixels, como `width=600` o con el valor especial `device-width`, que indica el ancho total del dispositivo, en pixels en una escala del 100%.
* `initial-scale`: controla el nivel de zoom inicial al cargarse la página. Las propiedades `maximum-scale`, `minimum-scale`, y `user-scalable` controlan como el usuario puede realizar zoom sobre la página.

A pesar de haber sido introducido por Apple, esta propiedad ha sido ampliamente adoptada por el resto de navegadores móviles, convirtiéndose en un estándar *de facto*.