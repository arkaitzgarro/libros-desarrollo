# Módulo *Media Queries*

La especificación oficial y el estado actual de desarrollo del módulo *Media Queries* en CSS 3 puede consultarse en [http://www.w3.org/TR/css3-mediaqueries/](http://www.w3.org/TR/css3-mediaqueries/).

Un __*Media Query*__ consiste en realizar una consulta sobre un tipo de medio y al menos una expresión que limita el alcance de las hojas de estilo en función a características del dispositivo, como pueden ser el ancho, alto o color. Añadidos a CSS 3, los *Media Queries* permiten que la presentación del contenido se adapte a un rango específico de dispositivos sin tener que cambiar el contenido en sí.

## Sintaxis

Los *Media Queries* pueden contener una o más expresiones, expresadas como funciones multimedia, que devuelven *true* o *false*. El resultado del *query* o consulta devuelve *true* si el *media type* especificado en el *Media Query* coincide con el tipo de dispositivo en que el documento está siendo mostrado y todas las expresiones en el *Media Query* devuelven *true*.

Cuando un *Media Query* devuelve *true*, la correspondiente hoja de estilo es aplicada, siguiendo las reglas habituales de CSS. Las hojas de estilo con *Media Queries* adjuntos a los *tags* `<link>` se descargan siempre, incluso si sus *Media Queries* resultan *false* (sin embargo, en este caso, no se aplicarán).

## Operadores lógicos o *logical operators*

Se pueden crear *Media Queries* complejos utilizando operadores lógicos, incluyendo `not`, `and` y `only`. El operador `and` es usado para combinar múltiples características en un sólo *Media Query*, requiriendo que cada función devuelva *true* para que el *Query* también lo sea. El operador `not` se utiliza para negar un *Media Query* completo y el operador `only` se usa para aplicar un estilo sólo si el *Query* completo es correcto.

Además, se pueden combinar múltiples *Media Queries* separados por comas en una lista; si alguno de los *Queries* devuelve *true, toda la consulta devolverá *true*. Esto es equivalente a un operador `or`.

### and

El keyword `and` se usa para combinar múltiples características, así como combinar éstos con tipos de medios. Un *Media Query* básico sería:

    [css]
    @media (min-width: 700px) { ... }

Sin embargo, si quisiéramos que esto sólo se aplicara si la pantalla está en modo apaisado, se usaría el operador `and`:

    [css]
    @media (min-width: 700px) and (orientation: landscape) { ... }

Si además, sólo quisiéramos que esto se aplicara si el dispositivo fuera un *media type TV*:

    [css]
    @media tv and (min-width: 700px) and (orientation: landscape) { ... }

### comma-separated lists

Cuando se utilizan las listas separadas por comas en los *Media Queries*, si algunas de las *Media Queries* devuelven *true*, los estilos se aplican al documento. Cada *Media Query* separado por comas en la lista se trata como un *Query* individual, y cualquier operador aplicado a un *Media Query* no afecta a los demás. Esto significa que los *Media Queries* separados por comas puede dirigirse a diferentes *media features, types* o *states*.

Por ejemplo, si quisiéramos aplicar un conjunto de estilos si el dispositivo de visualización tiene un mínimo de 700px o está en modo apaisado:

    [css]
    @media (min-width: 700px), handheld and (orientation: landscape) { ... }

### not

La *keyword* `not` se aplica al *Media Query* en su totalidad y devuelve *true* si el *Media Query* devuelve *false* (como `monochrome` en una pantalla a color). Este *keyword* no se puede utilizar para negar una característica en concreto, sino la consulta completa. Por ejemplo:

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

### only

El *keyword* `only` previene a los navegadores que no soportan *Media Queries*:

    [html]
    <link rel="stylesheet" media="only screen and (color)"
        href="example.css" />

<div class="exercise">
  <p class="title">Ejercicio 6</p>
</div>

[Ver enunciado](#ej06)