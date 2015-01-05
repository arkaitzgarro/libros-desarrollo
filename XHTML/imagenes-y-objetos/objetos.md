# Objetos

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

```html
<object data="PlanetaTierra.mpeg" type="application/mpeg" />```


También se pueden incluir varias versiones alternativas de un mismo contenido. Así, si el navegador no es capaz de interpretar el formato por defecto, puede optar por cualquiera de los otros formatos alternativos:

```html
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
</object>```


A los objetos también se les puede pasar información adicional en forma de parámetros mediante la etiqueta `<param>`:

| Etiqueta              | `<param>`    |
| --------------------: | :------------- |
| **Atributos comunes** | id |
| **Atributos propios** | `name="texto"` Indica el nombre del parámetro <br /> `value="texto"` Indica el valor del parámetro |
| **Tipo de elemento**  | Etiqueta vacía |
| **Descripción**       | Se emplea para indicar el valor de los parámetros del objeto |

Las etiquetas `<param>` siempre se incluyen en el interior de las etiquetas `<object>`:

```html
<object data="..." type="...">
    <param name="parametro1" value="40" />
    <param name="parametro2" value="20" />
    <param name="parametro3" value="texto de prueba" />
</object>```


Uno de los principales inconvenientes de `<object>` es la forma de incluir vídeos en formato *Flash* en las páginas HTML. Si se utiliza el siguiente código:

```html
<object data="nombre_video.swf" type="application/x-shockwave-flash">
</object>```


El elemento anterior es correcto desde el punto de vista técnico, pero provoca que algunos navegadores como Internet Explorer no visualicen el vídeo hasta que se ha descargado completamente. Si se trata de un vídeo largo, esta solución no es válida para el usuario.

Por este motivo, se utiliza una solución alternativa para incluir vídeos *Flash* en las páginas HTML: el uso de la etiqueta `<embed>`. Pero aunque esta solución funciona correctamente, no se trata de una solución válida desde el punto de vista del **estándar de XHTML**, por lo que las páginas que incluyan esta solución no pasarán correctamente el proceso de validación.

| Etiqueta              | `<embed>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `src="url"` Indica la URL del archivo u objeto que se incluye en la página <br /> `type="tipo_de_contenido"` Indica el tipo de contenido del objeto (*flash*, quicktime, java, etc.) <br /> `height="unidad_de_medida"` Indica la altura con la que se debe mostrar el objeto <br /> `width="unidad_de_medida"` Indica la anchura con la que se debe mostrar el objeto |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para embeber objetos en los documentos |

Este es el motivo por el que los sitios web más populares de vídeos en formato Flash proporcionan un código similar al siguiente para incluir sus vídeos en las páginas HTML:

```html
<object width="425" height="350">
    <param name="movie" value="http://www.youtube.com/v/MsH0rBWCYjs">
    </param>
    <param name="wmode" value="transparent"></param>
    <embed src="http://www.youtube.com/v/MsH0rBWCYjs"
        type="application/x-shockwave-flash" wmode="transparent"
        width="425" height="350"></embed>
</object>```


Una vez más, se debe tener en cuenta que la solución anterior de utilizar la etiqueta `<embed>` es correcta desde el punto de vista del usuario (no tiene que esperar a que el vídeo se descargue completamente para poder verlo) pero **no es una solución técnicamente válida**, ya que la etiqueta `<embed>` no es parte del estándar XHTML.
