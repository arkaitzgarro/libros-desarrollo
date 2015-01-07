# Módulo *Color*

La especificación oficial y el estado actual de desarrollo del módulo *Color* en CSS 3 puede consultarse en [http://www.w3.org/TR/css3-color/](http://www.w3.org/TR/css3-color/).

La propiedad de CSS `color` denota un color en el espacio de color sRGB. Un color puede ser descrito utilizando una *keyword*, el sistema de coordenadas cúbicas RGB o el sistema de coordenadas cilíndricas HSL. Hay que tener en cuenta que la lista de valores de color aceptados se ha ampliado en la evolución de la especificación, que culmina con los colores CSS 3.

Aunque los valores de color CSS están definidos con precisión, pueden aparecer de manera distina en diferentes dispositivos. La mayoría de ellos no están calibrados, y algunos navegadores no soportan los distintos perfiles de color.

## Propiedad *opacity*

Una de las características más esperadas de CSS 3 ha sido `opacity`. Gracias a esta propiedad, podemos definir el grado de transparencia de un elemento.

| Propiedad             | `opacity`    |
| --------------------: | :------------- |
| **Valores** | &lt;alphavalue&gt; \| inherit |
| **Se aplica a** | Todos los elementos. |
| **Valor inicial**  | 1 |
| **Descripción**       | Especifica la transparencia de un elemento. |

![Ejemplo de transparencia aplicada a un elemento](cap09/opacity.png)

## Función *rgba()*

Los colores pueden ser definidos gracias al modelo *Red-Green-Blue-alpha (RGBa)* utilizando la notación funcional `rgba()`. **RGBa** extiende el modelo de color RGB para incluir el canal alfa, lo que permite la especificación de la transparencia de un color. `a` significa `opacity: 0.0=transparent; 1.0=opaque;`.

    [css]
    rgba(255,0,0,0.1)    /* 10% opaque red */
    rgba(255,0,0,0.4)    /* 40% opaque red */
    rgba(255,0,0,0.7)    /* 70% opaque red */
    rgba(255,0,0,  1)    /* full opaque red */

## Función *hsl()*

Los colores también se puede definir gracias el modelo *Hue-Saturation-Lightness (HSL)* utilizando la notación funcional `hsl()`. La ventaja de **HSL** sobre RGB es que es más intuitivo; se pueden "adivinar" los colores que se quieren, y después ajustarlos. También es más sencillo para crear conjuntos de colores combinados (manteniendo el mismo tono y variando la luminosidad/oscuridad y saturación).

*Hue* (tono) es representado como un ángulo del círculo de color. Este ángulo viene dado como un `<number>` sin unidades. Por definición `red=0=360` y los otros colores se extienden alrededor del círculo, por lo tanto `green=120`, `blue=240`, etc.

La saturación y la luminosidad son representados como porcentajes. `100%` es saturación completa y `0%` es escala de grises. `100%` en la luminosidad es blanco, `0%` es negro y `50%` es "normal".

    [css]
    hsl(0,  100%,50%)    /* red */
    hsl(30, 100%,50%)
    hsl(60, 100%,50%)
    hsl(90, 100%,50%)
    hsl(120,100%,50%)    /* green */
    hsl(150,100%,50%)
    hsl(180,100%,50%)
    hsl(210,100%,50%)
    hsl(240,100%,50%)    /* blue */
    hsl(270,100%,50%)
    hsl(300,100%,50%)
    hsl(330,100%,50%)
    hsl(360,100%,50%)    /* red */
    
    hsl(120,100%,25%)    /* dark green */
    hsl(120,100%,50%)    /* green */
    hsl(120,100%,75%)    /* light green */
    
    hsl(120,100%,50%)    /* green */
    hsl(120, 67%,50%)
    hsl(120, 33%,50%)
    hsl(120,  0%,50%)
    
    hsl(120, 60%,70%)    /* pastel green */

## Función *hsla()*

Los colores pueden definirse también utilizando la función `hsla()`. **HSLa** extiende el modelo de color HSL visto anteriormente para incluir el canal alfa, lo que permite definir la opacidad del color. `a` significa `opacity: 0.0=transparent; 1.0=opaque;`.

    [css]
    hsla(240,100%,50%,0.05)   /* 5% opaque blue */
    hsla(240,100%,50%, 0.4)   /* 40% opaque blue */
    hsla(240,100%,50%, 0.7)   /* 70% opaque blue */
    hsla(240,100%,50%,   1)   /* full opaque blue */