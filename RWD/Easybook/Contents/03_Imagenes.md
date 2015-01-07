# Imágenes flexibles

Al finalizar el capítulo anterior, hemos dado una solución genérica para que las imágenes se muestren de una manera adaptativa, pero no hemos identificado el problema anterior a la solución.

Teniendo en cuenta este pequeño bloque HTML:

    [html]
    <div class="figure">
        <p>
            <img src="robot.jpg" alt="" />
            <b class="figcaption">Lo, the robot walks</b>
        </p>
    </div>

    [css]
    .figure {
        float: right;
        margin-bottom: 0.5em;
        margin-left: 2.53164557%; /* 12px / 474px */
        width: 48.7341772%; /* 231px / 474px */
    }

El código anterior crea un bloque flotante, de ancho variable que contiene una imagen y una descripción de la misma. El problema surge cuando la imagen proporcionada supera las medidas del bloque que la contiene. La estructura no se ve afectada, y las proporciones de la columna siguen intactas, pero la imagen excede el tamaño del contenedor, produciéndose el siguiente efecto.

![La imagen excede el tamaño de su contenedor](cap03/image-width.png)

## Imágenes fluidas

La solución al problema anterior, la vimos en el capítulo anterior y es tan sencillo como aplicar la siguiente restricción a las imágenes:

    [css]
    img {
        max-width: 100%;
    }

A partir de ahora, todas las imágenes del documento ocuparán como máximo el mismo tamaño que su contenedor, independientemente de su tamaño original.

![La imagen encaja perfectamente dentro de su contenedor](cap03/image-width-02.png)

Otra buena noticia es que el navegador redimensionará nuestra imagen, manteniendo las proporciones, en la medida que su contenedor cambie de tamaño. Además, esta regla puede ser aplicada al resto de elementos multimedia:

    [css]
    img,
    embed,
    object,
    video {
        max-width: 100%;
    }

## Imágenes de fondo

En 2004, Dan Cederholm [http://bkaprt.com/rwd/18/](http://bkaprt.com/rwd/18/), publicó un magnífico artículo para conseguir un efecto de dos columnas a partir de imágenes de fondo. La técnica es realmente muy sencilla, crear una imagen con colores diferenciados que simulasen crear columnas de un mismo alto. Este efecto se consigue con una simple regla de CSS:

    [css]
    .blog {
        background: #F8F5F2 url("blog-bg.png") repeat-y 50% 0;
    }

Esta técnica funciona perfectamente, pero está pensada para estructuras de ancho fijo, por lo tanto debemos adaptarla para que funcione correctamente en nuestros diseños flexibles. De nuevo, la manera para conseguirlo es aplicar la fórmula que hemos venido utilizando hasta ahora: `target ÷ context = result`.

El primer paso es buscar el punto de transición en nuestro fondo, el `pixel` exacto donde se simula la transición entre las columnas. Vamos a suponer que el ancho inicial de nuestra columna es de `900px`, y que la separación entre las columnas se produce en el pixel `568`.

![El punto de transición entre las columnas](cap03/faux-columns-01.png)

Con estos simples datos, podemos convertir nuestro fondo fijo para que se muestre de manera adaptativa. Para ello, aplicamos la fórmula que conocemos para calcular el nuevo punto de manera relativa:

`568 ÷ 900 = 0.631111111111111`

Así pues, nuestro valor objetivo es 63.1111111111111%.

Es hora de obtener nuestra nueva imagen de fondo. Para ello, creamos una nueva imagen con un tamaño lo suficientemente ancho como para cubrir cualquier tamaño de ventana, por ejemplo `3000px`. Esto nos asegurará que el fondo se mostrará correctamente aunque el ancho de la ventana sea muy amplio.

![Nuestro lienzo base para crear la imagen de fondo](cap03/faux-columns-02.png)

Debemos calcular el nuevo punto de transición entre las columnas. Como hemos definido el ancho de nuestra imagen a `3000px`, el nuevo punto de transición es:

`3000 x 0.631111111111111 = 1893.333333333333`

Creamos las texturas necesarias para este caso, hasta y desde el punto de transición que hemos obtenido:

![Creamos las texturas de nuestro fondo](cap03/faux-columns-03.png)

Ahora que ya tenemos preparada nuestra nueva imagen de fondo, ya solo queda aplicar los estilos necesarios para mostrarla correctamente:

    [css]
    .blog {
        background: #F8F5F2 url("blog-bg.png")
            repeat-y 63.1111111111111% 0; /* 568px / 900px */
    }

Al igual que en la solución original, estamos posicionando el gráfico en la parte superior del blog y la repetimos verticalmente. La diferencia está en la nueva posición de la imagen, que hará que la imagen se muestre en su posición correcta aunque se redimensione la ventana del navegador.

### Imágenes de fondo totalmente flexibles

Realmente, la solución anterior no es del todo flexible, ya que no estamos redimensionando la imagen sino trasladándola para mostrarla correctamente. Esta solución no es válida si necesitamos una imagen de fondo que deba redimensionarse, como un logo o `sprites` que hemos utilizado en nuestros enlaces.

La solución a este problema viene dada por la propiedad `background-size` de CSS 3, la cual nos permite realmente redimensionar las imágenes de fondo.