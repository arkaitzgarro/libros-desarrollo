# Estructura de rejilla flexible

Los diseños basados en rejilla han sido utilizados ampliamente en sectores como el diseño gráfico, pero tardaron en ser adoptados por la web. Estos diseños consisten en una serie de columnas que permiten ordenar y estructurar los contenidos (texto, imágenes, media...) de una manera ordenada y uniforme. Una estructura clásica de rejilla es la que se muestra en la siguiente imagen:

![Estructura de rejilla utilizada para tipografía](cap02/simple-grid.png)

Se pueden observar claramente las líneas verticales y horizontales utilizadas para posicionar los elementos en el lienzo, así como los márgenes que separan los distintos elementos. De esta manera tan simple, es posible crear diseños con un aspecto visual uniforme.

## Crear una rejilla flexible

Mientras que los `media query` ofrecen la potencia real para desarrollar un sitio web adaptativo, es posible ahorrar trabajo y código utilizando una aproximación en base a rejillas flexibles. Utilizando este tipo de rejillas, podemos asegurar que el sitio web se redimensiona en función del espacio disponible, sin la necesidad de utilizar `media query`. Posteriormente es posible utilizar `media query` si es necesario realizar cambios significativos en la estructura de la web.

Vamos a ver cinco componentes que nos permitirán construir una rejilla flexible, y cómo utilizarlas:

* Fuentes flexibles
* Contenedores flexibles
* Márgenes flexibles
* Rellenos flexibles
* Imágenes flexibles

### Fuentes flexibles

El método tradicional utilizado para dar estilo a las fuentes es utilizar pixels. Esto da un control exacto a los diseñadores a la hora de definir su tamaño, pero lo ideal es comenzar a pesar de manera proporcional. Utiliza valores proporcionales a la hora de definir los tamaños del texto, nos ahorrará mucho tiempo y líneas de código en nuestros `media query`. Si deseamos aumentar o reducir el tamaño de nuestro texto, con indicar el tamaño de letra del elemento padre sería suficiente, ya que el resto de elementos se verían afectados de manera inmediata.

La manera correcta de conseguir este comportamiento es utilizar medidas basadas en `em`. Además, debemos aplicar una regla muy sencilla para calcular el tamaño de letra concreto para cada caso:

`target ÷ context = result`

Donde **target** es el tamaño de fuente que queremos mostrar y `context` es el tamaño de fuente base de nuestro navegador (generalmente son `16px` para la mayoría de navegadores).

Así pues, si deseamos mostrar un texto con un tamaño de `32px`, su tamaño en `em` se calcularía de la siguiente manera:

`32px ÷ 16px = 2`

Al utilizar esta fórmula, lo normal es obtener un número con mucho decimales. Lo ideal es mantener estos decimales, ya que el navegador es capaz de interpretarlos y siempre será mucho más preciso que no disponer de ellos. Además, es recomendable indicar el cálculo realizado junto a la regla de CSS, como referencia a futuro y en caso de necesitar cambiarlo.

    [css]
    font-size: 2em /* 32px/16px */

### Contenedores flexibles

La magia de la fórmula anterior es que no sólo se puede aplicar a tamaños de fuente, sino que funciona correctamente para crear la estructura de una web a través de etiquetas `div`.

Utilicemos como ejemplo el tema [Genesis](http://my.studiopress.com/themes/genesis/) de Wordpress. En la siguiente imagen se puede ver que se ha optado por un diseño de `960px`de ancho, dividido en una cabecera con dos contenedores y un cuerpo con tres contenedores, ambos separados por un espacio de `20px`.

![Estructura del tema Genesis](cap02/genesis.png)

Este es el HTML correspondiente a la estructura:

    [html]
    <div id="wrap">
        <div id="header">
            <div id="title-area"></div>
            <div class="widget-area"></div>
        </div>
        <div id="inner">
            <div id="content-sidebar-wrap">
                <div id="content"></div>
                <div id="sidebar"></div>
            <div id="sidebar-alt">
        </div>
    </div>

Y la el código CSS base de la estructura:

    [css]
    #wrap {
        width: 960px;
    }
    
    #header {
        width: 960px;
    }
    
    #title-area {
        width: 400px;
    }
    
    #header .widget-area {
        width: 540px;
    }
    
    #inner {
        width: 960px;
    }
    
    #content-sidebar-wrap {
        width: 790px;
    }
    
    #content {
        width: 470px;
    }
    
    #sidebar {
        width: 300px;
    }
    
    #sidebar-alt {
        width: 150px;
    }

Conociendo los valores objetivo, la primera tarea es establecer nuestro **ancho base**. Esta medida hace referencia al ancho que hemos definido a nuestro layout sin aplicar ningún diseño adaptativo. Como medida general, suele adoptarse como ancho base un 90% del área visible de la pantalla, lo que permite seguir manteniendo toda la estructura y contenidos de la web siempre visibles.

A la hora de aplicar la fórmula, la única diferencia es que en este caso no vamos a hacer uso de la unida de medida `em`, sino de porcentajes, por lo que debemos multiplicar el resultados por 100. Si aplicamos la fórmula a la estructura anterior, el resultado sería el siguiente:

    [css]
    #wrap {
        width: 90%;
        max-width: 960px;
    }
    
    #header {
        width: 100%; /* 960px/960 */
    }
    
    #title-area {
        width: 41.666667% /* 400px/960 */;
    }
    
    #header .widget-area {
        width: 56.25% /* 540px/960 */;
    }
    
    #inner {
        width: 100% /* 960px/960 */;
    }
    
    #content-sidebar-wrap {
        width: 82.291667% /* 790px/960 */;
    }
    
    #content {
        width: 48.958333% /* 470px/960 */;
    }
    
    #sidebar {
        width: 31.25% /* 300px/960 */;
    }
    
    #sidebar-alt {
        width: 15.625% /* 150px/960 */;
    }

![Resultado de aplicar contenedores flexibles](cap02/flexible-grid.png)

Ahora que tenemos nuestros contenedores flexibles, el siguiente paso es obtener el mismo comportamiento para los márgenes y rellenos.

### Márgenes flexibles

Para determinar la medida de los márgenes, vamos a utilizar la anchura del elemento contenedor. Tomemos como ejemplo la barra lateral. En este caso, el margen lateral izquierdo está definido a `25px`, mientras que el ancho del contenedor es de `150px`. Por lo tanto, la manera de calcular el nuevo margen es dividir el `25px` (`target`) entre 150px (`context`), dando como resultado `16.666667%`

    [css]
    .widget-area ul {
        margin: 10px 0 0 25px;
    }
    
    .widget-area ul {
        margin: 10px 0 0 16.666667%;
    }

### Rellenos flexibles

En este caso, el comportamiento es exactamente igual al utilizado para calcular la media de los márgenes. Dividimos el relleno actual, `10px`, entre la anchura del elemento contenedor `300px`, dando como resultado un relleno del 3.33333%.

    [css]
    .enews p {
        padding: 5px 10px 0;
    }
    
    .enews p {
        padding: 5px 3.33333% 0;
    }

### Imágenes flexibles

El último punto a tener en cuenta es el comportamiento de las imágenes. Por suerte, este es el caso más sencillo. Es suficiente con definir el ancho máximo de las imágenes al `100%` (todo el ancho de su contenedor).

    [css]
    img {
        max-width: 100%;
    }