# Imágenes

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

```html
<img src="/imagenes/logotipo.gif" alt="Logotipo" />```


En este ejemplo, encontramos que la imagen `logotipo.gif` se encuentra en el directorio `(/imagenes/)`. Se trata de una estrategia habitual en la mayoría de sitios web: guardar todas las imágenes de contenido en un directorio especial independiente del resto de contenidos HTML. Además, el directorio siempre suele llamarse de la misma manera: *imagenes* o *images* en inglés.

Los atributos `width` y `height` se utilizan para indicar la anchura y altura con la que se muestran las imágenes. Como ya hemos comentado, HTML estructura de forma correcta los contenidos de la página y CSS define el aspecto gráfico con el que se muestran los contenidos. Por esta razón, la anchura y la altura con la que se muestra una imagen es parte de su aspecto gráfico, por lo que debería ser propio de **CSS** y no de **HTML**.

Sin embargo, en la práctica no es viable establecer la anchura y altura de todas las imágenes de contenidos mediante CSS. Si el sitio web dispone de muchas imágenes, la sobrecarga de estilos diferentes que debería definir CSS sería contraproducente. Por este motivo, los atributos `width` y `height` son la **excepción** a la norma de que el **código HTML** no haga referencia al aspecto de los contenidos.

```html
<img src="/imagenes/f01.jpg" alt="Fotografía 1" width="200" height="350" />
<img src="/imagenes/f02.jpg" alt="Fotografía 2" width="330" height="220" />```


Si el valor del atributo `width` o `height` se indica mediante un número entero, el navegador supone que hace referencia a la unidad de medida pixel. Por tanto, en el ejemplo anterior, la primera foto se muestra con una anchura de 200 pixel y una altura de 350 pixel.

También es posible indicar la anchura y altura en forma de porcentaje. En este caso, el porcentaje hace referencia a la altura/anchura del elemento en el que está contenida la imagen. Si la imagen no se encuentra dentro de ningún otro elemento, hace referencia a la anchura/altura total de la página.

```html
<div>
    <img src="/imagenes/f01.jpg" alt="Fotografía 1" width="30%" />
</div>```


El ejemplo anterior mezcla los dos tipos de medidas que se pueden utilizar, para indicar que la foto tiene una anchura igual al 30% de la anchura del elemento `<div>` que la contiene y una altura de 350 pixel.

La **anchura/altura** con la que se muestra una imagen no tiene que coincidir obligatoriamente con la anchura/altura real de la imagen. Sin embargo, cuando estos valores no coinciden, las imágenes se muestran deformadas. Si solamente se establece la altura o anchura de la imagen, el navegador calcula la el otro valor necesario para que se mantenga la proporción de la imagen.

<div class="exercise">
  <p class="title">Ejercicio 10</p>
</div>

[Ver enunciado](#ej10)
