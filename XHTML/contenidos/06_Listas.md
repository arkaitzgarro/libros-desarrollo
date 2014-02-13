# Listas

Las listas son otro de los elementos **HTML** más comunes. Este lenguaje incorpora unas listas con viñetas sencillas o también letras o números. Dentro de una lista de puede incluir cualquiera de los elementos HTML, y éstas a su vez pueden incluirse dentro de formularios, tablas, etc.

Las listas ofrecen la posibilidad de presentar información de una manera útil, simple y fácilmente comprensible. No sólo para ordenarla sino también para jerarquizarla, o numerarla.

El **lenguaje HTML** define **tres tipos** diferentes de listas para agrupar los elementos: **listas no ordenadas** (colección simple de elementos en la que no importa su orden), **listas ordenadas** (similar a la anterior, pero los elementos están numerados y por tanto, importa su orden) y **listas de definición** (un conjunto de términos y definiciones similar a un diccionario).
Además, podemos anidar varias listas a otras y de diferentes tipos sin restricciones.


## Listas no ordenadas

Estas listas son las más utilizadas. Se componen de elementos relacionados entre sí pero para los que no se indica un orden. Las **listas no ordenadas** van dentro de las etiquetas `<ul>`…`</ul>` y cada punto que queramos añadir dentro de las etiquetas `<li>`…`</li>`.

| Etiqueta              | `<ul>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir listas no ordenadas |

| Etiqueta              | `<li>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir los elementos de las listas (ordenadas y no ordenadas) |

El navegador por defecto muestra los elementos de la lista tabulados y con una pequeña **viñeta** formada por un círculo negro. Esto puede cambiarse mediante el atributo `type`, el cual indica cómo debe ser representado la viñeta o numeración en una lista, aunque su uso está desaconsejado. La mejor opción es la modificándolo con las hojas de estilo **CSS**.

Un ejemplo de **código HTML** con las etiquetas `<ul>` y `<li>` sería:

    [html]
    <html>
        <head>
            <title>Lista no ordenada</title>
        </head>
        <body>
            <h1>Menú</h1>
            <ul>
                <li>Inicio</li>
                <li>Noticias</li>
                <li>Artículos</li>
                <li>Contacto</li>
            </ul>
        </body>
    </html>

Que un navegador visualizaría de esta manera:

![Ejemplo lista no ordenada](cap06/lista_no_ordenada.png)

## Listas ordenadas

Estas listas son iguales que las anteriores, salvo por que en este caso los elementos relacionados se muestran siguiendo **un orden determinado**.

El uso de esta lista es el más adecuado cuando existe una mayor **importancia en el orden** de los elementos (índice de un libro, instrucciones, etc.), ya que los símbolos que preceden a los elementos serán números y éstos se irán generando automáticamente por orden.

Las **listas ordenadas** van dentro de las etiquetas `<ol>`…`</ol>` y cada punto que queramos añadir dentro de las etiquetas `<li>`…`</li>`.

| Etiqueta              | `<ol>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir listas ordenadas |

De la misma manera que en las listas no ordenadas, el navegador por defecto muestra los elementos de la lista tabulados y con una consecución de numeración arábiga. Esto puede cambiarse mediante el atributo `type` pero, como ya hemos comentado, no sería correcto; se debe modificar con las hojas de estilo **CSS**. También se puede modificar el primer número con el que queremos que comience la lista (si nos interesa que comience con un número distinto al 1).

Un ejemplo de **código HTML** con las etiquetas `<ol>` y `<li>` sería:

    [html]
    <html>
        <head>
            <title>Lista ordenada</title>
        </head>
        <body>
            <h1>Instrucciones</h1>
            <ol>
                <li>Enchufar correctamente</li>
                <li>Comprobar conexiones</li>
                <li>Encender el aparato</li>
            </ol>
        </body>
    </html>

Que un navegador visualizaría de esta manera:

![Ejemplo lista ordenada](cap06/lista_ordenada.png)

## Listas de definiciones

Estas **listas** son las menos utilizadas, su funcionamiento es similar al de un **diccionario**, ya que cada elemento de la lista está formado por términos y definiciones.

Éstas se componen de tres etiquetas:

- `<dl>` “definiton list” - entre ella y su cierre va a ir una definición.
- `<dt>` “definition term” - entre ella y su cierre irá el término que vamos a definir.
- `<dd>` “definition description” - entre ella y su cierre irá la definición en cuestión.

| Etiqueta              | `<dl>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir listas de definición |

| Etiqueta              | `<dt>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir los términos de los elementos de una lista de definición |

| Etiqueta              | `<dd>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para indicar las definiciones de los elementos de una lista de definición |


Aunque no es habitual, cada término puede tener asociada más de una definición y cada definición puede tener asociados varios términos.

Un ejemplo de **código HTML** con estas tres etiquetas sería:

    [html]
    <html>
        <head>
            <title>Lista de definición</title>
        </head>
        <body>
            <h1>Metalenguajes</h1>
            <dl>
            <dt>SGML</dt>
                <dd>Metalenguaje para la definición de otros
                    lenguajes de marcado</dd>
            <dt>XML</dt>
                <dd>Lenguaje basado en SGML y que se emplea para
                    describir datos</dd>
            <dt>RSS</dt>
            <dt>GML</dt>
            <dt>XHTML</dt>
            <dt>SVG</dt>
            <dt>XUL</dt>
                <dd>Lenguajes derivados de XML para determinadas
                    aplicaciones</dd>
            </dl>
        </body>
    </html>

Que un navegador visualizaría de esta manera:

![Ejemplo lista definiciones](cap06/lista_de_definicion.png)

## Listas anidadas

Como ya hemos mencionado, podemos anidar varias listas a otras y crear así listas compuestas a nuestro gusto.

Un ejemplo de **código HTML** de una lista anidada sería:

    [html]
    <html>
        <head>
            <title>Lista anidada</title>
        </head>
        <body>
            <ol>
                <li>HTTP es simple</li>
                <li>Solicitudes entre cliente y servidor
                    <dl>
                        <dt>Paso 1</dt>
                            <dd>El ciente manda una petición</dd>
                       <dt>Paso 2</dt>
                            <dd>El servidor devuelve una respuesta</dd>
                    </dl>
                </li>
                <li>¿Qué es HTML?
                    <ul>
                        <li>Es un lenguaje de marcas</li>
                        <li>Se usa para la elaboración de páginas web</li>
                        <li>Es un estándar reconocido mundialmente
                            <ul>
                                <li>Sus normas vienen dadas por el
                                World Wide Web Consortium o W3C</li>
                            </ul>
                        </li>
                    </ul>
                </li>
             </ol>
        </body>
    </html>

Que un navegador visualizaría de esta manera:

![Ejemplo lista anidada](cap06/lista_anidada.png)

<div class="exercise">
  <p class="title">Ejercicio 8</p>
</div>

[Ver enunciado](#ej08)

<div class="exercise">
  <p class="title">Ejercicio 9</p>
</div>

[Ver enunciado](#ej09)