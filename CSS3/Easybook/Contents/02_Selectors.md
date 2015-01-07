# Módulo *Selectors*

La versión actual de CSS 3 incluye todos los selectores de CSS 2.1 y añade otras decenas de selectores, pseudo-clases y pseudo-elementos. La lista provisional de novedades y su explicación detallada se puede encontrar en el [módulo de selectores de CSS 3](http://www.w3.org/TR/css3-selectors/).

En primer lugar, CSS 3 añade tres nuevos selectores de atributos:

* `elemento[atributo^="valor"]`, selecciona todos los elementos que disponen de ese atributo y cuyo valor comienza exactamente por la cadena de texto indicada.
* `elemento[atributo$="valor"]`, selecciona todos los elementos que disponen de ese atributo y cuyo valor termina exactamente por la cadena de texto indicada.
* `elemento[atributo*="valor"]`, selecciona todos los elementos que disponen de ese atributo y cuyo valor contiene la cadena de texto indicada.

De esta forma, se pueden crear reglas CSS tan avazadas como las siguientes:

    [css]
    /* Selecciona todos los enlaces que apuntan a una dirección de correo
        electrónico */
    a[href^="mailto:"] { ... }
    
    /* Selecciona todos los enlaces que apuntan a una página HTML */
    a[href$=".html"] { ... }
    
    /* Selecciona todos los títulos h1 cuyo atributo title contenga la palabra
        "capítulo" */
    h1[title*="capítulo"] { ... }

Otro de los nuevos selectores de CSS 3 es el "*selector general de elementos hermanos*", que generaliza el selector adyacente de CSS 2.1. Su sintaxis es `elemento1 ~ elemento2` y selecciona el `elemento2` que es hermano de `elemento1` y se encuentra detrás en el código HTML. En el selector adyacente la condición adicional era que los dos elementos debían estar uno detrás de otro en el código HTML, mientras que ahora la única condición es que uno esté detrás de otro.

Si se considera el siguiente ejemplo:

    [css]
    h1 + h2 { ... }  /* selector adyacente */
    h1 ~ h2 { ... }  /* selector general de hermanos */

    [html]
    <h1>...</h1>
    <h2>...</h2>
    <p>...</p>
    <div>
      <h2>...</h2>
    </div>
    <h2>...</h2>

El primer selector (`h1 + h2`) sólo selecciona el primer elemento `<h2>` de la página, ya que es el único que cumple que es hermano de `<h1>` y se encuentra justo detrás en el código HTML. Por su parte, el segundo selector (`h1 ~ h2`) selecciona todos los elementos `<h2>` de la página salvo el segundo. Aunque el segundo `<h2>` se encuentra detrás de `<h1>` en el código HTML, no son elementos hermanos porque no tienen el mismo elemento padre.

Los pseudo-elementos de CSS 2.1 se mantienen en CSS 3, pero cambia su sintaxis y ahora se utilizan :: en vez de : delante del nombre de cada pseudo-elemento:

* `::first-line`, selecciona la primera línea del texto de un elemento.
* `::first-letter`, selecciona la primera letra del texto de un elemento.
* `::before`, selecciona la parte anterior al contenido de un elemento para insertar nuevo contenido generado.
* `::after`, selecciona la parte posterior al contenido de un elemento para insertar nuevo contenido generado.

CSS 3 añade además un nuevo pseudo-elemento:

* `::selection`, selecciona el texto que ha seleccionado un usuario con su ratón o teclado.

Las mayores novedades de CSS 3 se producen en las pseudo-clases, ya que se añaden 12 nuevas, entre las cuales se encuentran:

* `elemento:nth-child(numero)`, selecciona el elemento indicado pero con la condición de que sea el hijo enésimo de su padre. Este selector es útil para seleccionar el segundo párrafo de un elemento, el quinto elemento de una lista, etc.
* `elemento:nth-last-child(numero)`, idéntico al anterior pero el número indicado se empieza a contar desde el último hijo.
* `elemento:empty`, selecciona el elemento indicado pero con la condición de que no tenga ningún hijo. La condición implica que tampoco puede tener ningún contenido de texto.
* `elemento:first-child` y `elemento:last-child`, seleccionan los elementos indicados pero con la condición de que sean respectivamente los primeros o últimos hijos de su elemento padre.
* `elemento:nth-of-type(numero)`, selecciona el elemento indicado pero con la condición de que sea el enésimo elemento hermano de ese tipo.
* `elemento:nth-last-of-type(numero)`, idéntico al anterior pero el número indicado se empieza a contar desde el último hijo.

Algunas pseudo-clases como :nth-child(numero) permiten el uso de expresiones complejas para realizar selecciones avanzadas:

    [css]
    /* selecciona todos los elementos impares de una lista */
    li:nth-child(2n+1) { ... }
    /* selecciona todos los elementos pares de una lista */
    li:nth-child(2n)   { ... }
    
    /* Las siguientes reglas alternan cuatro estilos diferentes para los
        párrafos */
    p:nth-child(4n+1) { ... }
    p:nth-child(4n+2) { ... }
    p:nth-child(4n+3) { ... }
    p:nth-child(4n+4) { ... }

Empleando la pseudo-clase `:nth-of-type(numero)` se pueden crear reglas CSS que alternen la posición de las imágenes en función de la posición de la imagen anterior:

    [css]
    img:nth-of-type(2n+1) { float: right; }
    img:nth-of-type(2n)   { float: left;  }

Otro de los nuevos selectores que incluirá CSS 3 es `:not()`, que se puede utilizar para seleccionar todos los elementos que no cumplen con la condición de un selector:

    [css]
    /* selecciona todos los elementos de la página que no sean párrafos */
    :not(p) { ... }
    /* selecciona cualquier elemento cuyo atributo id no sea "especial" */
    :not(#especial) { ... }

Aunque todavía faltan muchos años hasta que la versión CSS 3 sustituya a la actual versión CSS 2.1, la mayoría de los navegadores incluyen soporte para varios o casi todos los selectores de CSS 3.

<div class="exercise">
  <p class="title">Ejercicio 1</p>
</div>

[Ver enunciado](#ej01)

## Prefijos específicos de navegadores

Los prefijos específicos de navegador son una manera que tienen los distintos navegadores de añadir o probar nuevas funcionalidades de CSS. Son utilizados para añadir funcionalidades específicas que no forman parte de la especificación oficial o para añadir futuras funcionalidades que no han sido implemetadas del todo. Su formato es el siguiente:

    [css]
    selector {
        -prefix-property: value;
    }

Los prefijos para los distintos navegadores son los siguientes:

* `-webkit-`: Android, Chrome, iOS, Safari
* `-moz-`: Firefox
* `-ms-`: Internet Explorer
* `-o-`: Opera

Por ejemplo, para añadir una transición CSS 3 a un elemento, debemos utilizar la propiedad `transition` con los siguientes prefijos:

    [css]
    -webkit-transition: all 4s ease;
    -moz-transition: all 4s ease;
    -ms-transition: all 4s ease;
    -o-transition: all 4s ease;
    transition: all 4s ease;

Estos prefijos pretenden ser temporales hasta que el navegador implemente completamente la funcionalidad o forme parte del estándar oficialmente. Los navegadores que utilicen prefijos para ciertas propiedades, las tendrán en cuenta e ignorarán el resto, y los que no hagan uso de ellas tendrán en cuenta la última regla indicada.