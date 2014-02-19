# Otros

## Versión para imprimir

La mayoría de sitios web de calidad ofrecen al usuario la posibilidad de imprimir sus contenidos mediante una versión específica para impresora de cada página.

Estas versiones optimizadas para impresora eliminan los contenidos superfluos, modifican o eliminan las imágenes y colores de fondo y sobre todo, optimizan los contenidos de texto para facilitar su lectura.

CSS simplifica al máximo la creación de una versión para imprimir gracias al concepto de los medios CSS. Como se sabe, los estilos CSS que se aplican a los contenidos pueden variar en función del medio a través del que se acceden (pantalla, televisor, móvil, impresora, etc.)

De esta forma, realizar una versión para imprimir de una página HTML es tan sencillo como crear unas cuantas reglas CSS que optimicen sus contenidos para conseguir la mejor impresión.

El sitio web A List Apart es un excelente ejemplo de cómo los sitios web de calidad crean versiones específicas para impresora de las páginas web originales. Cuando se visualiza un artículo de ese sitio web en una pantalla normal, su aspecto es el siguiente:

![Aspecto de un artículo de A List Apart como se ve en la pantalla](cap12/aspecto_pantalla.png)

Además de sus contenidos, las páginas de los artículos muestran el logotipo del sitio, el menú principal de navegación y una barra lateral con varias utilidades como un buscador.

Sin embargo, cuando se imprime la página del mismo artículo, su aspecto es el que muestra la siguiente imagen:

![specto de un artículo de A List Apart como se ve cuando se imprime](cap12/aspecto_impresion.png)

La página impresa elimina todos los contenidos superfluos como los menús de navegación, el buscador y el formulario para añadir comentarios en el artículo. Además, modifica la estructura de la página para que la zona de contenidos ocupe toda la anchura de la página y el espacio se aproveche mejor.

Crear una versión para imprimir similar a la mostrada en el ejemplo anterior es una tarea que no lleva más de unos pocos minutos.

Las reglas CSS de la versión para imprimir se aplican solamente al medio print. Por lo tanto, en primer lugar se crea una nueva hoja de estilos y al enlazarla se especifica que sólo debe aplicarse en las impresoras:

    [html]
    <link rel="stylesheet" type="text/css" href="/css/imprimir.css" media="print" />

Normalmente, las hojas de estilos para la pantalla se aplican a todos los medios (por utilizar el valor `media="all"` al enlazarla o por no indicar ningún valor en el atributo `media`). Por este motivo, cuando se imprime una página se aplican los mismos estilos que se aplican al visualizarla en la pantalla.

Aprovechando este comportamiento, las hojas de estilos para impresoras son muy sencillas, ya que sólo deben modificar algunos estilos aplicados en el resto de hojas de estilos.

Por este motivo, normalmente las hojas de estilos para impresora se construyen siguiendo los pasos que se muestran a continuación:

1) Ocultar los elementos que no se van a imprimir:

    [css]
    #cabecera, #menu, #lateral, #comentarios {
      display: none !important;
    }

Los bloques (normalmente encerrados en elementos de tipo `<div>`) que no se van a imprimir se ocultan con la propiedad `display` y su valor `none`. La palabra clave `!important` aumenta la prioridad de esta regla CSS y más adelante se explica su significado.

2) Corregir la estructura de la página:

    [css]
    body, #contenido, #principal, #pie {
      float: none !important;
      width: auto !important;
      margin:  0 !important;
      padding: 0 !important;
    }

Normalmente, las páginas web complejas están formadas por varias columnas posicionadas mediante la propiedad `float`. Si al imprimir la página se eliminan las columnas laterales, es conveniente reajustar la anchura y el posicionamiento de la zona de contenidos y de otras zonas que sí se van a imprimir.

3) Modificar los colores y tipos de letra:

    [css]
    body {
        color: #000; font: 100%/150% Georgia, "Times New Roman", Times, serif;
    }

Aunque el uso de impresoras en color es mayoritario, suele ser conveniente imprimir todo el texto de las páginas de color negro, para ahorrar costes y para aumentar el contraste cuando se imprime sobre hojas de color blanco. También suele ser conveniente modificar el tipo de letra y escoger uno que facilite al máximo la lectura del texto.

### Imprimiendo los enlaces

Uno de los principales problemas de las páginas HTML impresas es la pérdida de toda la información relativa a los enlaces. En principio, imprimir los enlaces de una página es absurdo porque no se pueden utilizar en el medio impreso.

Sin embargo, lo que puede ser realmente útil es mostrar al lado de un enlace la dirección a la que apunta. De esta forma, al imprimir la página no se pierde la información relativa a los enlaces.

CSS incluye una propiedad llamada `content` que permite crear nuevos contenidos de texto para añadirlos a la página HTML. Si se combina la propiedad `content` y el pseudo-elemento `:after`, es posible insertar de forma dinámica la dirección a la que apunta un enlace justo después de su texto:

    [css]
    a:after {
      content: " (" attr(href) ") ";
    }

El código CSS anterior añade después de cada enlace de la página un texto formado por la dirección a la que apunta el enlace mostrada entre paréntesis. Si se quiere añadir las direcciones antes de cada enlace, se puede utilizar el pseudo-elemento :before:

    [css]
    a:before {
      content: " (" attr(href) ") ";
    }

## Hacks y filtros

Los diferentes navegadores y las diferentes versiones de cada navegador incluyen defectos y carencias en su implementación del estándar CSS 2.1. Algunos navegadores no soportan ciertas propiedades, otros las soportan a medias y otros ignoran el estándar e incorporan su propio comportamiento.

De esta forma, diseñar una página compleja que presente un aspecto homogéneo en varios navegadores y varias versiones diferentes de cada navegador es una tarea que requiere mucho esfuerzo. Para facilitar la creación de hojas de estilos homogéneas, se han introducido los filtros y los hacks.

A pesar de que utilizar filtros y hacks es una solución poco ortodoxa, en ocasiones es la única forma de conseguir que una página web muestre un aspecto idéntico en cualquier navegador.

En primer lugar, los filtros permiten definir u ocultar ciertas reglas CSS para algunos navegadores específicos. Los filtros se definen aprovechando los errores de algunos navegadores (sobre todo los antiguos) a la hora de procesar las hojas de estilos.

Un caso especial de filtro son los comentarios condicionales, que es un mecanismo propietario del navegador Internet Explorer. Los comentarios condicionales permiten incluir hojas de estilos o definir reglas CSS específicamente para una versión de Internet Explorer.

El siguiente ejemplo carga la hoja de estilos `basico_ie.css solamente para los navegadores de tipo Internet Explorer:

    [html]
    <!--[if IE]>
      <style type="text/css">
        @import ("basico_ie.css");
      </style>
    <![endif]-->

Los navegadores que no son Internet Explorer ignoran las reglas CSS anteriores ya que interpretan el código anterior como un comentario de HTML (gracias a los caracteres `<!--` y -->`) mientras que los navegadores de la familia Internet Explorer lo interpretan como una instrucción propia y válida.

El filtro `[if IE]` indica que esos estilos CSS sólo deben tenerse en cuenta si el navegador es cualquier versión de Internet Explorer. Utilizando comentarios condicionales, también es posible incluir reglas CSS para versiones específicas de Internet Explorer:

    [html]
    <!--[if gte IE 6]>
      <style type="text/css">
        @import ("basico_ie6.css");
      </style>
    <![endif]-->

El anterior ejemplo solamente carga la hoja de estilos `basico_ie6.css` si el navegador es la versión 6 o superior de Internet Explorer, ya que `gte` se interpreta como "greater than or equal" ("igual o mayor que"). Otros valores disponibles son `gt` ("greater than" o "mayor que"), `lt` ("less than" o "menor que") y `lte` ("less than or equal" o "igual o menor que").

    [html]
    <!--[if gt IE 7]>
      Mayor que Internet Explorer 7
    <![endif]-->
    
    <!--[if gte IE 7]>
      Mayor o igual que Internet Explorer 7
    <![endif]-->
    
    <!--[if lt IE 8]>
      Menor que Internet Explorer 8
    <![endif]-->
    
    <!--[if lte IE 7]>
      Igual o menor que Internet Explorer 7
    <![endif]-->

Una de las mejores listas actualizadas con todos los filtros disponibles para los navegadores de los diferentes sistemas operativos se puede encontrar en [http://centricle.com/ref/css/filters/](http://centricle.com/ref/css/filters/).

Por otra parte, los hacks permiten forzar el comportamiento de un navegador para que se comporte tal y como se espera. Se trata de una forma poco elegante de crear las hojas de estilos y los hacks se pueden considerar pequeños parches y chapuzas que permiten que la hoja de estilos completa se muestre tal y como se espera.

Una de las mejores listas actualizadas con los hacks más útiles para varios navegadores de diferentes sistemas operativos se puede encontrar en: [http://css-discuss.incutio.com/?page=CssHack](http://css-discuss.incutio.com/?page=CssHack)

## Prioridad de las declaraciones CSS

Además de las hojas de estilos definidas por los diseñadores, los navegadores aplican a cada página otras dos hojas de estilos: la del navegador y la del usuario.

La hoja de estilos del navegador es la primera que se aplica y se utiliza para establecer el estilo inicial por defecto a todos los elementos HTML (tamaños de letra iniciales, decoración del texto, márgenes entre elementos, etc.)

Además de la hoja de estilos del navegador, cada usuario puede crear su propia hoja de estilos y aplicarla automáticamente a todas las páginas que visite con su navegador. Se trata de una opción muy útil para personas discapacitadas visualmente, ya que pueden aumentar el contraste y el tamaño del texto de todas las páginas para facilitar su lectura.

La forma en la que se indica la hoja de estilo del usuario es diferente en cada navegador. A continuación se muestra cómo se hace en los navegadores más populares:

**Internet Explorer**

1. Pincha sobre el menú `Herramientas` y después sobre la opción `Opciones de Internet`

2. En la pestaña `General` que se muestra, pulsa sobre el botón `Accesibilidad` que se encuentra dentro de la sección `Apariencia`

3. En la nueva ventana que aparece, activa la opción `Formatear los documentos con mi hoja de estilos` y selecciónala pulsando sobre el botón `Examinar…`

4. Pulsa `Aceptar` hasta volver al navegador

**Firefox**

1. Guarda tu hoja de estilos en un archivo llamado `userContent.css`

2. Entra en el directorio de tu perfil de usuario de Firefox. En los sistemas operativos Windows este directorio se encuentra normalmente en `C:\Documents and Settings\[tu_usuario_de_windows]\Datos de programa\Mozilla\Firefox\Profiles\[cadena_aleatoria_de_letras_y_numeros].default`

3. Copia la hoja de estilos `userContent.css` en el directorio `chrome` de tu perfil

4. Reinicia el navegador para que se apliquen los cambios

**Safari**

1. Pincha sobre el menú `Editar` y después sobre la opción `Preferencias`

2. Selecciona la sección `Avanzado`

3. Pincha sobre la lista desplegable llamada `Hoja de estilos` y selecciona la opción `Otra…`

4. En la ventana que aparece, selecciona tu hoja de estilos

**Opera**

1. Pincha sobre el menú `Herramientas` y después sobre la opción `Preferencias`

2. Selecciona la pestaña `Avanzado` y pulsa sobre el botón `Opciones de estilo…`

3. Pulsa sobre el botón `Seleccionar…` para seleccionar la hoja de estilos

4. Pulsa `Aceptar` hasta volver al navegador

El orden normal en el que se aplican las hojas de estilo es el siguiente:

![Orden en el que se aplican las diferentes hojas de estilos](cap12/orden.png)

Por tanto, las reglas que menos prioridad tienen son las del CSS por defecto de los navegadores, ya que son las primeras que se aplican. A continuación se aplican las reglas definidas por los usuarios y por último se aplican las reglas CSS definidas por el diseñador, que por tanto son las que más prioridad tienen.

Además de estas hojas de estilos, CSS define la palabra reservada `!important` para controlar la prioridad de las declaraciones de las diferentes hojas de estilos.

Si a una declaración CSS se le añade la palabra reservada `!important`, se aumenta su prioridad. El siguiente ejemplo muestra el uso de `!important`:

    [css]
    p {
      color: red !important;
      color: blue;
    }

Si la primera declaración no tuviera añadido el valor `!important, el color de los párrafos sería azul, ya que en el caso de declaraciones de la misma importancia, prevalece la indicada en último lugar.

Sin embargo, como la primera declaración se ha marcado como de alta prioridad (gracias al valor `!important`), el color de los párrafos será el rojo.

El valor `!important` no sólo afecta a las declaraciones simples, sino que varía la prioridad de las hojas de estilo. Cuando se indican declaraciones de alta prioridad, el orden en el que se aplican las hojas de estilo es el siguiente:

![Orden en el que se aplican las diferentes hojas de estilos cuando se utiliza la palabra resevada important](cap12/orden2.png)

Los estilos del usuario marcados como `!important` tienen más prioridad que los estilos marcados como `!important` en la hoja de estilos del diseñador. De esta forma, ninguna página web puede sobreescribir o redefinir ninguna propiedad de alta prioridad establecida por el usuario.

Si se aplica el valor `!important` a una propiedad de tipo *"shorthand"*, se interpreta como si se hubiera aplicado el valor `!important` a cada una de las propiedades individuales.