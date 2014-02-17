# Estructura y layout

Los capítulos anteriores muestran las decenas de etiquetas XHTML disponibles para marcar y estructurar cada elemento individual de las páginas web: tablas, listas, enlaces, párrafos, imágenes, etc. Aunque combinando esas etiquetas es posible crear cualquier página web, no es posible hacer que las páginas muestren **estructuras complejas**.

La mayoría de **páginas HTML** disponen de estructuras complejas formadas por varias columnas de contenidos y otro tipo de divisiones. Utilizando exclusivamente HTML no es posible crear estas estructuras complejas, ya que es imprescindible emplear las **hojas de estilos CSS**.

No obstante, los estilos de CSS necesitan la ayuda de HTML/XHTML para crear los diseños más avanzados. En concreto, el código HTML se encarga de **agrupar** los elementos de la página en diferentes divisiones en función de su finalidad: la zona de la cabecera de la página, la zona de contenidos, una zona lateral para el menú y otras secciones menores, la zona del pie de página, etc.

La siguiente imagen muestra algunas de las zonas definidas en la página principal del sitio [www.alistapart.com](www.alistapart.com):

![Ejemplo de página compleja estructurada con etiquetas div](imagenes/cap10/estructura.png)

Para agrupar los elementos que forman cada zona o división de la página se utiliza la etiqueta `<div>`:

| Etiqueta              | `<div>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Agrupa elementos de bloque |

El nombre de la etiqueta `div` tiene su origen en la palabra división, ya que esta etiqueta define zonas o divisiones dentro de una página HTML. En cualquier caso, casi todos los diseñadores web utilizan la palabra "capa" para referirse a una "división". Aunque se trata de un error grave (las capas se crean mediante una propiedad de CSS llamada `z-index`) es preferible seguir llamando "capas" a las zonas definidas con la etiqueta `<div>` para poder entenderse con el resto de diseñadores.

Las páginas web complejas que están bien diseñadas utilizan decenas de etiquetas `<div>`. Con mucha diferencia, los atributos más utilizados con esta etiqueta son `id` (para identificar la capa de forma única) y `class` (para aplicar a la capa estilos CSS).

No se va a profundizar en el proceso de diseñar una página web mediante `<div>`, ya que no es posible diseñar una página web compleja utilizando elementos `<div>` sin utilizar hojas de estilos CSS.

Por último, si observas el código HTML de algunas páginas web complejas, verás que la mayoría utilizan los mismos nombres para identificar sus divisiones. Los nombres más comunes, y sus equivalentes en inglés, se muestran a continuación:

* `contenedor (wrapper)` suele encerrar la mayor parte de los contenidos de la página y se emplea para definir las características básicas de la página: su anchura, sus bordes, imágenes laterales, si se centra o no respecto de la ventana del navegador, etc.
* `cabecera (header)` que incluye todos los elementos invariantes de la parte superior de la página (logotipo, imagen o banner, cuadro de búsqueda superior, etc.)
* `contenido (content)` engloba el contenido principal del sitio (la zona de noticias, la zona de artículos, la zona de productos, etc. dependiendo del tipo de sitio web)
* `menu (menu)` se emplea para agrupar todos los elementos del menú lateral de navegación de la página
* `pie (footer)` que incluye todos los elementos invariantes de la parte inferior de la página (aviso de copyright, política de privacidad, términos de uso, etc.)
* `lateral (sidebar)` se emplea para agrupar los elementos de las columnas laterales y secundarias de la página.

De esta forma, el esqueleto de una página HTML compleja suele ser similar al siguiente:

    [html]
    ...
    <div id="contenedor">
      <div id="cabecera">
        ...
      </div>
      <div id="contenido">
        <div id="menu">
          ..
        </div>
        ...
      </div>
      <div id="pie">
        ...
      </div>
    </div>
    ...

El equivalente para las páginas en inglés sería el siguiente:

    [html]
    ...
    <div id="wrapper">
      <div id="header">
        ...
      </div>
      <div id="content">
        <div id="menu">
          ..
        </div>
        ...
      </div>
      <div id="footer">
        ...
      </div>
    </div>