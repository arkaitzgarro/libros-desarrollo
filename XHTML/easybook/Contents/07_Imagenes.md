# Imágenes y objetos

## Imágenes

Las imágenes son **uno de los elementos más importantes** de las páginas web. Podríamos decir que existen dos tipos de imagen, las imágenes de **contenido** de una web, que proporcionan y complementan la información y otras imágenes (pequeños iconos en listas, fondos de página, etc.) que aunque también se pueden incluir en el código HTML mediante la etiqueta `<img>` que explicaremos a continuación, es más correcto emplear hojas de estilo **CSS** para mostrarlas.

La etiqueta `<img>` tiene varios atributos:

| Etiqueta              | `<img>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `src="url"` Indica la URL de la imagen que se muestra.<br /> `alt="texto"` Descripción corta de la imagen<br /> `longdesc="url"` Indica una URL en la que puede encontrarse una descripción más detallada de la imagen. Se emplea con las imágenes complejas que necesitan mucha información para ser descritas<br /> `name="texto"` Nombre del elemento imagen<br /> `height="unidad_de_medida"` Indica la altura con la que se debe mostrar la imagen (no es obligatorio que coincida con la altura original de la imagen)<br /> `width="unidad_de_medida"` Indica la anchura con la que se debe mostrar la imagen (no es obligatorio que coincida con la anchura original de la imagen) |
| **Tipo de elemento**  | En línea y etiqueta vacía |
| **Descripción**       | Se emplea para incluir imágenes en los documentos |

De todos estos atributos, solamente hay dos requeridos, que son `src` y `alt`, que proporcionan la información suficiente para establecer la URL de la imagen y describir su contenido mediante un texto breve (menos de 1024 caracteres).

Aunque `<img>` es una etiqueta vacía (por lo que no necesita etiqueta de cierre), lo más correcto (y válido para una página XHTML) sería incluir `/>` al final de ésta, ya que de esta manera se considera una etiqueta cerrada.

En teoría no existe ninguna restricción sobre el **formato gráfico** de la imagen. No obstante, la recomendación es utilizar uno de los tres siguientes formatos gráficos que entienden todos los navegadores modernos: **GIF, JPG y PNG**. El formato PNG presenta el inconveniente de que los navegadores obsoletos como Internet Explorer 6 no muestran correctamente las imágenes con transparencias de 24 bits.

Un ejemplo sencillo para incluir una imagen sería:

    [html]
    <img src="/imagenes/logotipo.gif" alt="Logotipo" />

En este ejemplo, encontramos que la imagen `logotipo.gif` se encuentra en el directorio `(/imagenes/)`. Se trata de una estrategia habitual en la mayoría de sitios web: guardar todas las imágenes de contenido en un directorio especial independiente del resto de contenidos HTML. Además, el directorio siempre suele llamarse de la misma manera: *imagenes* o *images* en inglés.

Los atributos `width` y `height` se utilizan para indicar la anchura y altura con la que se muestran las imágenes. Como ya hemos comentado, HTML estructura de forma correcta los contenidos de la página y CSS define el aspecto gráfico con el que se muestran los contenidos. Por esta razón, la anchura y la altura con la que se muestra una imagen es parte de su aspecto gráfico, por lo que debería ser propio de **CSS** y no de **HTML**.

Sin embargo, en la práctica no es viable establecer la anchura y altura de todas las imágenes de contenidos mediante CSS. Si el sitio web dispone de muchas imágenes, la sobrecarga de estilos diferentes que debería definir CSS sería contraproducente. Por este motivo, los atributos `width` y `height` son la **excepción** a la norma de que el **código HTML** no haga referencia al aspecto de los contenidos.

    [html]
    <img src="/imagenes/f01.jpg" alt="Fotografía 1" width="200" height="350" />
    <img src="/imagenes/f02.jpg" alt="Fotografía 2" width="330" height="220" />

Si el valor del atributo `width` o `height` se indica mediante un número entero, el navegador supone que hace referencia a la unidad de medida pixel. Por tanto, en el ejemplo anterior, la primera foto se muestra con una anchura de 200 pixel y una altura de 350 pixel.

También es posible indicar la anchura y altura en forma de porcentaje. En este caso, el porcentaje hace referencia a la altura/anchura del elemento en el que está contenida la imagen. Si la imagen no se encuentra dentro de ningún otro elemento, hace referencia a la anchura/altura total de la página.

    [html]
    <div>
        <img src="/imagenes/f01.jpg" alt="Fotografía 1" width="30%" />
    </div>

El ejemplo anterior mezcla los dos tipos de medidas que se pueden utilizar, para indicar que la foto tiene una anchura igual al 30% de la anchura del elemento `<div>` que la contiene y una altura de 350 pixel.

La **anchura/altura** con la que se muestra una imagen no tiene que coincidir obligatoriamente con la anchura/altura real de la imagen. Sin embargo, cuando estos valores no coinciden, las imágenes se muestran deformadas. Si solamente se establece la altura o anchura de la imagen, el navegador calcula la el otro valor necesario para que se mantenga la proporción de la imagen.

<div class="exercise">
  <p class="title">Ejercicio 10</p>
</div>

[Ver enunciado](#ej10)

## Mapas

Aunque el uso de los **mapas de imagen** se ha reducido mucho en los últimos años, aún se utilizan en algunos sitios especializados. La mayoría de mapas se realiza hoy en día mediante *Flash*, aunque algunos sitios siguen recurriendo a los mapas de imagen.

Un **mapa de imagen** permite definir diferentes zonas *"pinchables"* dentro de una imagen. El usuario puede pinchar sobre cada una de las zonas definidas y cada una de ellas puede apuntar a una **URL diferente**. Una imagen que muestre un mapa de todos los continentes puede definir una zona diferente para cada continente. De esta forma, el usuario puede pinchar sobre la zona correspondiente a cada continente.

Las zonas o regiones que se pueden definir en una imagen se crean mediante rectángulos, círculos y polígonos. Para crear un mapa de imagen, en primer lugar se inserta la imagen original mediante la etiqueta `<img>`. A continuación, se utiliza la etiqueta `<map>` para definir las zonas o regiones de la imagen. Cada zona se define mediante la etiqueta `<area>`.

| Etiqueta              | `<map>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `name="texto"` Nombre que identifica de forma única al mapa definido (es obligatorio indicar un nombre único) |
| **Tipo de elemento**  | En bloque y en línea |
| **Descripción**       | Se emplea para definir mapas de imagen |

| Etiqueta              | `<area>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos y foco |
| **Atributos propios** | `href="url"` URL a la que se accede al pinchar sobre el área <br /> `nohref="nohref"` Se emplea para las áreas que no son seleccionables <br /> `shape="default | rect | circle | poly"` Indica el tipo de área que se define (toda la imagen, rectangular, circular o poligonal) <br /> `coords="lista de números"` Se trata de una lista de números separados por comas que representan las coordenadas del área.<br />Rectangular = X1,Y1,X2,Y2 (coordenadas X e Y del vértice superior izquierdo y coordenadas X e Y del vértice inferior derecho)<br /> Circular = X1,Y1,R (coordenadas X e Y del centro y radio del círculo) <br />Poligonal = X1,Y1,X2,Y2,...,XnYn (coordenadas de los vértices del polígono. Si las últimas coordenadas no son iguales que las primeras, se cierra automáticamente el polígono uniendo ambos vértices) |
| **Tipo de elemento**  | Etiqueta vacía |
| **Descripción**       | Se emplea para definir las distintas áreas que forman un mapa de imagen |

Si una imagen utiliza un mapa de imagen, se debe indicar mediante el atributo `usemap`. El valor del atributo debe ser el nombre del mapa de imagen definido en otra parte del mismo documento HTML:

    [html]
    <img src="mapa_mundo.gif" usemap="#continentes" />
    ...
    <map name="continentes">
        ...
    </map>

Las áreas se definen mediante el atributo `shape` que indica el tipo de área y `coords` que es una lista de coordenadas cuyo significado depende del tipo de área definido. El enlace de cada área se define mediante el atributo `href`, con la misma sintaxis y significado que para los enlaces normales.

El siguiente ejemplo muestra una imagen sencilla que contiene cuatro figuras geométricas:

![Mapa imagen](cap07/ejemplo_mapa_imagen.png)

Utilizando un círculo, dos rectángulos y un polígono se pueden definir fácilmente cuatro zonas *pinchables* en la imagen mediante el siguiente código HTML:

    [html]
    <img src="imagen.gif" usemap="#mapa_zonas" />
    <map name="mapa_zonas">
        <area shape="rect" coords="20,25,84,113"
            href="rectangulo.html" />
        <area shape="polygon" coords="90,25,162,26,163,96,89,25,90,24"
            href="triangulo.html" />
        <area shape="circle" coords="130,114,29"
            href="circulo.html" />
        <area shape="rect" coords="19,156,170,211"
            href="mailto:rectangulo@direccion.com" />
        <area shape="default" nohref="nohref" />
    </map>

## Objetos

Además de las imágenes, HTML permite incluir en las páginas web otros elementos mucho más complejos, como **applets de Java** y **vídeos en formato QuickTime o Flash**. La mayoría de este tipo de contenidos no los interpreta el navegador directamente, sino que hace uso de pequeños programas llamados _**plugins**_ y que se encargan de tratar con este tipo de elementos complejos.

La etiqueta `<object>` es la que permite *"embeber"* o incluir en las páginas HTML cualquier tipo de contenido complejo:

| Etiqueta              | `<object>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `data="url"` Indica la URL de los datos que utiliza el objeto <br /> `classid, codebase, codetype` Información específica que depende del tipo de objeto <br /> `type` Indica el tipo de contenido de los datos <br /> `height="unidad_de_medida"` Indica la altura con la que se debe mostrar el objeto <br /> `width="unidad_de_medida"` Indica la anchura con la que se debe mostrar el objeto |
| **Tipo de elemento**  | En bloque y en línea |
| **Descripción**       | Se emplea para embeber objetos en los documentos |

Los posibles valores de `type` están estandarizados y coinciden con los del atributo `type` de la etiqueta `<a>` que explicamos anteriormente.

El propio estándar de HTML incluye ejemplos de uso de esta etiqueta. Incluir un vídeo en formato MPEG:

    [html]
    <object data="PlanetaTierra.mpeg" type="application/mpeg" />

También se pueden incluir varias versiones alternativas de un mismo contenido. Así, si el navegador no es capaz de interpretar el formato por defecto, puede optar por cualquiera de los otros formatos alternativos:

    [html]
    <object title="La Tierra vista desde el espacio"
        classid="http://www.observer.mars/TheEarth.py">
        <!-- Formato alternativo en forma de vídeo -->
        <object data="PlanetaTierra.mpeg" type="application/mpeg">
            <!-- Otro formato alternativo mediante una imagen GIF -->
            <object data="PlanetaTierra.gif" type="image/gif">
                <!-- Si el navegador no soporta ningún formato,
                    se muestra el siguiente texto -->
                La <strong>Tierra</strong> vista desde el espacio.
            </object>
        </object>
    </object>

A los objetos también se les puede pasar información adicional en forma de parámetros mediante la etiqueta `<param>`:

| Etiqueta              | `<param>`    |
| --------------------: | :------------- |
| **Atributos comunes** | id |
| **Atributos propios** | `name="texto"` Indica el nombre del parámetro <br /> `value="texto"` Indica el valor del parámetro |
| **Tipo de elemento**  | Etiqueta vacía |
| **Descripción**       | Se emplea para indicar el valor de los parámetros del objeto |

Las etiquetas `<param>` siempre se incluyen en el interior de las etiquetas `<object>`:

    [html]
    <object data="..." type="...">
        <param name="parametro1" value="40" />
        <param name="parametro2" value="20" />
        <param name="parametro3" value="texto de prueba" />
    </object>

Uno de los principales inconvenientes de `<object>` es la forma de incluir vídeos en formato *Flash* en las páginas HTML. Si se utiliza el siguiente código:

    [html]
    <object data="nombre_video.swf" type="application/x-shockwave-flash">
    </object>

El elemento anterior es correcto desde el punto de vista técnico, pero provoca que algunos navegadores como Internet Explorer no visualicen el vídeo hasta que se ha descargado completamente. Si se trata de un vídeo largo, esta solución no es válida para el usuario.

Por este motivo, se utiliza una solución alternativa para incluir vídeos *Flash* en las páginas HTML: el uso de la etiqueta `<embed>`. Pero aunque esta solución funciona correctamente, no se trata de una solución válida desde el punto de vista del **estándar de XHTML**, por lo que las páginas que incluyan esta solución no pasarán correctamente el proceso de validación.

| Etiqueta              | `<embed>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `src="url"` Indica la URL del archivo u objeto que se incluye en la página <br /> `type="tipo_de_contenido"` Indica el tipo de contenido del objeto (*flash*, quicktime, java, etc.) <br /> `height="unidad_de_medida"` Indica la altura con la que se debe mostrar el objeto <br /> `width="unidad_de_medida"` Indica la anchura con la que se debe mostrar el objeto |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para embeber objetos en los documentos |

Este es el motivo por el que los sitios web más populares de vídeos en formato Flash proporcionan un código similar al siguiente para incluir sus vídeos en las páginas HTML:

    [html]
    <object width="425" height="350">
        <param name="movie" value="http://www.youtube.com/v/MsH0rBWCYjs">
        </param>
        <param name="wmode" value="transparent"></param>
        <embed src="http://www.youtube.com/v/MsH0rBWCYjs"
            type="application/x-shockwave-flash" wmode="transparent"
            width="425" height="350"></embed>
    </object>

Una vez más, se debe tener en cuenta que la solución anterior de utilizar la etiqueta `<embed>` es correcta desde el punto de vista del usuario (no tiene que esperar a que el vídeo se descargue completamente para poder verlo) pero **no es una solución técnicamente válida**, ya que la etiqueta `<embed>` no es parte del estándar XHTML.
