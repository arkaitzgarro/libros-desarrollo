# Desarrollo adaptativo

Hasta ahora, hemos definido todas las herramientas necesarias para crear estructuras adaptativas: diseños basados en rejillas flexibles, estrategias para incorporar elementos multimedia y la potencia de los *Media Query* para adaptar el contenido a nuestras necesidades. Vemos como incorporar estas técnicas a la hora de desarrollar un sitio web adaptativo.

## La importancia del contexto

Un diseño adaptativo, implementado de una manera correcta, puede dar a los usuarios de la web, un alto nivel de continuidad entre los diferentes *contextos*. Esto es así, porque de la manera más simple, un diseño adaptativo es capaz de mostrar un documento HTML correctamente en una infinidad de dispositivos, gracias a una estructura flexible y los *Media Query* que aseguran un diseño portable y accesible en la manera de lo posible.

De alguna manera, es posible identificar el *contexto* en el que se visita una web, a partir del dispositivo utilizado. De este contexto, podemos definir un tipo de usuario y sus objetivos. En otras palabras, un usuario móvil quiere un acceso rápido a la información y realizar diferentes tareas a las que realizaría sentado en su sofá con su portátil. En este caso, el tiempo y el ancho de banda están en extremos totalmente opuestos.

Por otra parte, si las prioridades y los objetivos del usuario varían según el *contexto*, entonces puede que disponer de un único documento HTML pueda suponer un problema, dependiendo de la manera en la que se encuentre estructurada la información.

De todas formas, es complicado suponer el *contexto* del usuario únicamente por el tipo de dispositivo, ya que efectivamente, es solamente eso: **una suposición**. ¿Cómo diferenciar, si mi navegación *móvil* se realiza desde la entrada del metro o desde el sofá de mi casa? ¿Es posible por tanto suponer un *contexto*?

Por lo tanto, no podemos inferir el *contexto* del usuario en base a su dispositivo. Así mismo, las palabras *mobile* o *desktop* no definen el comportamiento en la que los usuarios acceden a la web: un portátil puede ser un dispositivo móvil (por ejemplo en un tren), al igual que un *smartphone* o *tablet* puede estar fijo en un lugar. El desarrollo adaptativo no pretende ser un reemplazo de los actuales sitios móviles, sino que forma parte de una estrategia de desarrollo, donde se pretende evaluar si efectivamente es necesario separar totalmente la experiencia móvil o tiene más sentido mostrar la información de una manera adaptativa.

![¿Es posible realizar una versión adaptativa del New York Times?](cap04/newyorktimes_browser.png)

## Hacia un flujo de trabajo adaptativo

Una de las primeras preguntas (si no lo primer) que debemos hacernos, a la hora de plantearnos un diseño adaptativo es la siguiente: **¿En qué medida este contenido o funcionalidad beneficia o aporta valor a nuestros usuarios?** De hecho, esto es algo que deberíamos preguntar **siempre** para cualquier tipo de proyecto, sea web o no.

Si partimos de un planteamiento *mobile first*, hay que asegurarse que la información que mostramos, y las funcionalidades que implementamos sean importantes para el usuario, ya que no hay espacio suficiente para todo. Hay que darse cuenta de lo que realmente importa. Diseñar partiendo de este paradigma, nos obliga a concentrarnos en lo realmente importante.

> If you design mobile first, you create agreement on what matters most. You can then apply the same rationale to the desktop/laptop version of the web site. We agreed that this was the most important set of features and content for our customers and business; why should that change with more screen space? <cite>Luke Wroblewski</cite>

En otras palabras, diseñar desde un inicio pensando en dispositivos móviles puede enriquecer la experiencia de los usuarios, proporcionando un elemento que normalmente se pasa por alto: enfocarnos en lo realmente importante. Esto no quiere decir que los diseños sean simples, faltos de contenidos o funcionalidades, sino que debemos concentrarnos en lo realmente importante.

## Puntos de ruptura

El siguiente paso es identificar el número de diseños diferentes que vamos crear, para acomodarnos a los distintos tamaños de dispositivos. La siguiente tabla muestra los anchos más comunes a la hora de identificar los puntos de ruptura:

| Punto&nbsp;de&nbsp;ruptura | Dispositivo objetivo |
| ----- | -------------------- |
| `320 pixels` | Para dispositivos pequeños como teléfonos, en disposición vertical |
| `480 pixels` | Para dispositivos pequeños como teléfonos, en disposición horizontal |
| `600 pixels` | Para tabletas de menor tamaño, como Amazon Kindle (`600×800`), en disposición vertical |
| `768 pixels` | Para tabletas de unas 10", como el iPad (`768x1024`), en disposición vertical |
| `1024 pixels` | Para tabletas de unas 10", como el iPad (`768x1024`), y pequeños portátiles o *netbooks*, en disposición horizontal |
| `1200 pixels` | Para pantallas panorámicas, en portátiles o dispositivos de escritorio |
| `1600 pixels` | Para pantallas panorámicas, en portátiles o dispositivos de escritorio |

## Desarrollo iterativo

De manera tradicional, el desarrollo web (y en general, el desarrollo de software) ha seguido las siguientes fases para la construcción de un sitio web:

* Una fase de planteamiento inicial, donde se capturan los requisitos que debe cumplir la solución final, se plantea la estructura de contenidos y se realizan *mocksups* que serán la base del diseño.
* En la fase de diseño, los *mockups* se convierten en pantallas utilizando una herramienta del tipo *Photoshop* o *Fireworks*. Estas pantallas deben ser aprobadas por el cliente antes de seguir adelante.
* Finalmente, una vez que lo diseños se encuentran aprobados, pasan al equipos de desarrollo para crear las páginas estáticas en HTML.

En un desarrollo adaptativo, este proceso puede resultar muy pesado y costoso. Cuando diseñamos una página, lo ideal sería diseñar también el aspecto de esta página en los distintos dispositivos, lo que supondría realizar tantos diseños como puntos de ruptura existan. Si tenemos que repetir este proceso con quince o cincuenta páginas, simplemente deja de ser viable.

En este punto, una posible mejora puede ser combinar el equipo de diseño y el de desarrollo, para que, partiendo de un diseño fijo y único, discutir de manera conjunta cómo el diseño se va a acomodar a las distintas resoluciones, y las implicaciones que puede tener a la hora de implementarlo. De esta manera, rápidamente surgen preguntas del tipo: ¿Cómo va a funcionar esta galería de imágenes en un dispositivo táctil? ¿De qué manera se va a mostrar este elemento emergente? ¿Qué pasa si no disponemos de JavaScript en el dispositivo?

De esta manera podemos comenzar a construir prototipos con un diseño flexible, escalable en los distintos dispositivos, de una manera muy ágil, implicando a ambos equipos.

## Desarrollo adaptativo, de manera responsable

Durante el ciclo de diseño/desarrollo, las páginas son constantemente refinadas mientras las construimos, con el objetivo de hacerlas totalmente adaptativas. Hemos convertido una página estática, diseñada para mostrarse de la misma manera en todos los dispositivos, en un diseño fluido al que hemos aplicado *Media Queries* para mostrarse correctamente en los diferentes dispositivos. En este último caso, tenemos la posibilidad de incluir en nuestra página un *polyfill* para hacer funcionar correctamente esto *Media Query* en navegadores que no lo soportan, como Internet Explorer 7 u 8: [respond.js](https://github.com/scottjehl/Respond)

¿Qué ocurre si el navegador no soporta `@media` y no tiene activado JavaScript? Pues que simplemente se mostrará la página con su diseño original, a tamaño completo.

Otro problema añadido, al aplicar un diseño adaptativo, es el que se muestra a continuación:

    [css]
    .blog {
        background: #F8F5F2 url("img/blog-bg.png") repeat-y;
    }
    
    @media screen and (max-width: 768px) {
        .blog {
            background: #F8F5F2 url("img/noise.gif");
        }
    }

En este caso, primero aplicamos una imagen de fondo `blog-bg.png` al elemento `.blog`. Después, para dispositivos con una pantalla más pequeña, reemplazamos esa imagen por una simple imagen GIF. El problema, es que en este tipo de dispositivos se descargan ambas imágenes, afectando directamente a la cantidad de información descargada a través de la red.

### Estrategia "Mobile First"

Hablando en términos generales, el diseño adaptativo hace referencia a comenzar con una *resolución de referencia*, y utilizar los *Media Query* para adaptar el diseño a otros contextos. Una estrategia más responsable para diseños adaptativos es pensar primero en dispositivos móviles, en lugar de un contexto de escritorio. Esto es, comenzamos definiendo una estructura para dispositivos más pequeños, y posteriormente utilizamos los *Media Query* para escalar el diseño a mayores resoluciones.

Un ejemplo de esta estrategia, es la web de [Ethan Marcotte](http://ethanmarcotte.com/). Por defecto, el contenido es mostrado de una manera lineal, pensado especialmente para dispositivos móviles.

![Aspecto de la web de Ethan Marcotte en dispositivos móviles](cap05/ethan_01.png)

A medida que el espacio disponible aumenta, se muestra el diseño completo. La estructura se vuelve más compleja, con *assets* más pesados.

![Aspecto completo de la web de Ethan Marcotte](cap05/ethan_02.png)

A pesar de esta estrategia, el diseño sigue siendo totalmente adaptativo, y utiliza las técnicas que hemos visto en anteriores capítulos: la estructura está basada en una rejilla flexible y las imágenes se muestran correctamente en cualquier resolución. Per ha diferencia de la estrategia tradicional, se utiliza la propiedad `min-width` para escalar y diseñar la web. La estructura básica de la hoja de estilos es la siguiente:

    [css]
    /* Default, linear layout */
    .page {
        margin: 0 auto;
        max-width: 700px;
        width: 93%;
    }
    
    /* Small screen! */
    @media screen and (min-width: 600px) { ... }
    
    /* "Desktop" */
    @media screen and (min-width: 860px) { ... }
    
    /* IT'S OVER 9000 */
    @media screen and (min-width: 1200px) { ... }

### Cargar el contenido de manera perezosa (pero inteligente)

Pongamos como ejemplo que tenemos una galería de imágenes en nuestra web, que funciona como un carrusel utilizando JQuery. En este caso, si el navegador no dispone de Javascript, tendremos una lista de imáges, una sobre otra. Si alguien visita la web con JavaScript desactivado, la experiencia será bastante negativa.

La solución a este problema es cargar únicamente el contenido extra de la página a través de JavaScript. Para ello, la primera tarea a realizar es eliminar todas las imágenes excepto la primera de ellas, que es la que siempre se mostrará:

    [html]
    <div class="slides">
        <div class="figure">
          <b><img src="img/slide-robot.jpg" alt="" /></b>
          <div class="figcaption">...</div>
        </div><!-- /end .figure -->
    </div><!-- /end .slides -->

El siguiente paso es crear una nueva página HTML que contenga las imágenes restantes:

    [html]
    <div class="figure">
        <b><img src="img/slide-tin.jpg" alt="" /></b>
        <div class="figcaption">...</div>
    </div><!-- /end .figure -->
    <div class="figure">
        <b><img src="img/slide-statue.jpg" alt="" /></b>
        <div class="figcaption">...</div>
        ...
    </div><!-- /end .figure -->

 Éste no es un documento HTML válido, ni pretende serlo, ya que vamos a cargarlo a través de JavaScript para insertarlo en nuestra página actual.

    [javascript]
    $(document).ready(function() {
      $.get("slides.html", function(data) {
        var sNav = [
          '<ul class="slide-nav">',
          '<li><a class="prev" href= »
            "#welcome-slides">Previous</a></li>',
          '<li><a class="next" href="#welcome-slides"> »
            Next</a></li>',
          '</ul>'
    ].join("");
        $(".welcome .slides")
          .append(data)
          .wrapInner('<div class="slidewrap"> »
            <div id="welcome-slides" class="slider"> »
            </div></div>')
          .find(".slidewrap")
    }); });

Y esto es todo. Si el navegador soporta JavaScript, se cargarán el resto de las imágenes, y se creará el carrusel. En caso de no disponer de JavaScript, simplemente se mostrará la imagen principal.

### Otras posibles mejoras

Es posible restringir, desde JavaScript, las funcionalidades del documento en función del contexto, haciendo el `script` dependiente de la resolución.

    [javascript]
    if (screen.width > 480) {
        $(document).ready(function() { ... });
    }

Estra instrución en JavaScript equivale a un *media query* `min-width: 480px `: si el ancho de la pantalla es menor a `480px`, el `script` no se ejecutará.