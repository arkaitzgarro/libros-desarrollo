# Enlaces avanzados

La definición anterior del *tag* `<a>` no es su definición completa, ya que dispone de otros atributos específicos también muy importantes que nos servirán para crear enlaces muchos más complejos. Estos **atributos específicos**, además de `name="texto"` y `href="url"` son:

- `hreflang="codigo"` Indica el idioma y la variación idiomática en función del país del recurso enlazado que se establece a través de unos códigos estandarizados de dos letras. Algunos de ellos son:

| Código   | Idioma - Variación |
| -------: | :----------------- |
| `en`     | Inglés |
| `en-AU`  | Inglés - Australia |
| `en-US`  | Inglés - EE.UU. |
| `es`     | Español |
| `es-AR`  | Español - Argentina |
| `es-ES`  | Español - España |
| `es-MX`  | Español - México |

La lista completa de códigos se define en el [estándar ISO 639](http://xml.coverpages.org/iso639a.html).

- `type="tipo"` Da información al navegador acerca del tipo de contenido que se enlaza. Se indica mediante una cadena de texto cuyos posibles valores también están estandarizados. Algunos de los más utilizados son `"text/html"` (páginas HTML), `"image/png"` (imágenes con formato PNG) o `"text/css"` (hojas de estilo CSS).

La lista completa de tipos de contenido se define en los [estándares RFC 2045 y RFC 2046](http://www.iana.org/assignments/media-types).

Los atributos `rel` y `rev` describen la relación que la página actual tiene con la página a la que se enlaza.

- `rel="tipo"` Describe la relación del documento actual con el recurso enlazado.

- `rev="tipo"` Describe la relación del recurso enlazado con el documento actual.

Los tipos de relación pueden ser muy variados, como por ejemplo `alternate` (indica que es una versión alternativa al documento actual), `stylesheet` (indica que se ha enlazado una hoja de estilos) o `start` (indica que se trata del primer documento de una colección de documentos).

La lista completa de tipos de relaciones se define en en la [especificación oficial de HTML](http://www.w3.org/TR/1999/REC-html401-19991224/types.html#type-links).

- `charset="tipo"` Describe la codificación del recurso enlazado.

Los valores que se pueden utilizar también están estandarizados y las codificaciones más utilizadas son `UTF-8` y `ISO-8859-1`, aunque existen decenas de códigos definidos.

Aquí encontramos una [lista completa de codificaciones](http://www.iana.org/assignments/character-sets/character-sets.xml).

Un ejemplo de código HTML con un enlace avanzado sería:

```html
<a href="http://www.google.com" hreflang="en"
    type="text/html" charset="UTF-8">Página principal de Google</a>```

