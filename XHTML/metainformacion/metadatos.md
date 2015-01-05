# Metadatos

Una de las partes más importantes de la metainformación de la página son los **metadatos**, que permiten incluir cualquier información relevante sobre la propia página.

La especificación oficial de HTML no define la lista de metadatos que se pueden incluir, por lo que las páginas tienen **libertad absoluta** para definir los metadatos que consideren adecuados. La etiqueta empleada para la definición de los metadatos es `<meta>`.

| Etiqueta              | `<meta>`    |
| --------------------: | :------------- |
| **Atributos comunes** | internacionalización |
| **Atributos propios** | `name="texto"` El nombre de la propiedad que se define (no existe una lista oficial de propiedades)<br />`content="texto"` El valor de la propiedad definida (no existe una lista de valores permitidos)<br />`http-equiv="texto"` En ocasiones, reemplaza al atributo `name` y lo emplean los servidores para adaptar sus respuestas al documento<br />`scheme="texto"` Indica el esquema que se debe emplear para interpretar el valor de la propiedad |
| **Tipo de elemento**  | - |
| **Descripción**       | Permite definir el valor de los metadatos que forman la metainformación del documento |

Los metadatos habituales utilizan solamente los atributos `name` y `content` para definir el nombre y el valor del metadato:

```html
<meta name="autor" content="Juan Pérez" />```

No obstante, algunas etiquetas `<meta>` muy utilizadas hacen uso del atributo `http-equiv`. Este atributo se utiliza para indicar que el valor establecido por este metadato puede ser utilizado por el servidor al entregar la página al navegador del usuario. El siguiente metadato indica al servidor que el contenido de la página es código HTML y su codificación de caracteres es `UTF-8`:

```html
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />```

El atributo `scheme` no suele utilizarse, aunque permite proporcionar información de contexto para que el navegador interprete correctamente el valor del metadato. En el siguiente ejemplo, el atributo `scheme` indica al navegador que el valor del metadato hace referencia al `código ISBN`:

```html
<meta scheme="ISBN" name="identificador" content="789-1392349610">```

Aunque no existe una lista oficial con los metadatos que se pueden definir, algunos de ellos se utilizan en tantas páginas que se han convertido prácticamente en un estándar. A continuación se muestran los metadatos más utilizados:

Definir el autor del documento:

```html
<meta name="author" content="Juan Pérez" />```


Definir el programa con el que se ha creado el documento:

```html
<meta name="generator" content="WordPress 2.8.4" />```

Definir la codificación de caracteres del documento:

```html
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />```

Definir el copyright del documento:

```html
<meta name="copyright" content="www.arkaitzgarro.com" />```

Definir el comportamiento de los buscadores:

```html
<meta name="robots" content="index, follow" />```

Definir las palabras clave que definen el contenido del documento:

```html
<meta name="keywords" content="diseño, css, hojas de estilos, web, html" />```

Definir una breve descripción del sitio:

```html
<meta name="description" content="Artículos sobre diseño web, usabilidad y accesibilidad" />```

La etiqueta que define la codificación de los caracteres (`http-equiv="Content-Type"`) se emplea prácticamente en todas las páginas y las etiquetas que definen la descripción (`description`) y las palabras clave (`keywords`) también son muy utilizadas.
