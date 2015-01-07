# Módulo *Transforms*

La especificación oficial y el estado actual de desarrollo del módulo *Transforms* en CSS 3 puede consultarse en [http://www.w3.org/TR/css3-transforms/](http://www.w3.org/TR/css3-transforms/).

Al modificar el espacio de coordenadas, las transformaciones CSS permiten **cambiar la posición del contenido** afectado sin interrumpir el flujo normal del resto de cajas. Se llevan a cabo mediante un conjunto de propiedades CSS que permiten aplicar transformaciones lineales afines a los elementos HTML. Estas transformaciones incluyen la **rotación, inclinación, escala y traslación** tanto en el plano como en un espacio tridimensional.

## Propiedades principales

Se utilizan **dos propiedades** principales para definir las transformaciones CSS: `transform` y `transform-origin`.

* `transform-origin`: especifica la posición de origen de la transformación. Por defecto se encuentra en el centro del elemento (como si definiésemos el punto en `50%` `50%`), pero se puede definir cualquier otro punto. Es utilizado por varias transformaciones, como rotación, escala o inclinación, que necesitan un punto inicial como parámetro.
* `transform`: especifica las transformaciones a aplicar al elemento. Se trata de una lista de funciones de transformación separadas por espacios, que se aplican una detrás de otra.

Las siguientes propiedades adicionales, añaden control adicional a las transformaciones, permitiendo incluso realizar transformaciones 3D:

* `perspective`: permite cambiar la perspectiva de los elementos y transmitir la sensación de encontrarse en un entorno en tres dimensiones.
* `perspective-origin`: especifica la posición de origen de la perspectiva.
* `transform-style`: permite a los elementos transformados en 3D y a sus descendientes también transformados en 3D, compartir un espacio 3D común.

## Funciones de transformación 2D

A continuación, se muestra el listado completo de funciones de transformación 2D disponibles en CSS 3:

* `translate(<translation-value>[, <translation-value>])`: aplica una traslación 2D especificada por el vector `[tx, ty]`. Si no se indica el valor `ty`, su valor es 0.
    * `translateX(<translation-value>)`: aplica una traslación 2D en el eje `x`.
    * `translateY(<translation-value>)`: aplica una traslación 2D en el eje `y`.
* `scale(<number>[, <number>])`: aplica una operación de escalado del elementos especificada por el vector `[sx, sy]`. Si no se indica el valor `sy`, su valor es igual a `sx`.
    * `scaleX(<number>)`: aplica una operación de escalado utilizando el vector de escalado `[sx, 1]`.
    * `scaleY(<number>)`: aplica una operación de escalado utilizando el vector de escalado `[1, sy]`.
* `rotate(<angle>)`: aplica una operación de rotación especificada por los ángulos del parámetro, y tomando como origen de la roptación el punto definido por `transform-origin`.
* `skew(<angle>[, <angle>])`: aplica una operación de inclinación especificada por el vector `[ax, ay]`. Si no se indica el valor de `ay`, su valor es 0.
    * `skewX(<angle>)`: aplica una operación de inclinación en el eje `x`.
    * `skewY(<angle>)`: aplica una operación de inclinación en el eje `y`.

## Ejemplos

### Rotación

En este ejemplo se crea un `iframe` que permite utilizar la página principal de Google, rotada 90 grados desde su esquina inferior izquierda.

    [css]
    div {
        transform: rotate(90deg);
        transform-origin: bottom left;
    }

    [html]
    <div>
        <iframe src="http://www.google.com/" width="500" height="600"></iframe>
    </div>

### Inclinación y traslación

En este ejemplo se crea un `iframe` que permite utiliza la página principal de Google, inclinada 10 grados y trasladada 150 pixels en el eje X.

    [css]
    div {
        transform: skewx(10deg) translatex(150px);
        transform-origin: bottom left;
    }

    [html]
    <div>
        <iframe src="http://www.google.com/" width="600" height="500"></iframe>
    </div>

## Propiedades 3D

La realización de transformaciones CSS en el espacio es algo más complejo. Hay que empezar configurando el espacio 3D, dándole un punto de vista. Después, hay que configurar cómo se comportarán los elementos 2D en ese espacio tridimensional.

### La creación de un punto de vista (o perspectiva)

El primer elemento a configurar es la perspectiva. La perspectiva es lo que da la impresión de tres dimensiones. Cuánto más lejos del espectador se encuentran los elementos, más pequeños se nos muestran.

Cuán rápido estos elementos reducen su tamaño es definido por la propiedad `perspective`. Cuanto más pequeño es su valor, más profunda es la perspectiva.

![Profundidad de la perspectiva](cap05/perspective.png)

El segundo elemento a configurar es la posición del espectador, con la propiedad `perspective-origin`. Por defecto, la perspectiva se centra en el espectador, lo cual no siempre es lo adecuado.

![Posición del espectador](cap05/perspective-origin.png)

Una vez realizado esto, se puede trabajar sobre el elemento en el espacio 3D.

<div class="exercise">
  <p class="title">Ejercicio 7</p>
</div>

[Ver enunciado](#ej07)