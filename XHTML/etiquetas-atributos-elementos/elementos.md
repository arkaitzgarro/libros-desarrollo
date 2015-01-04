# Elementos

Además de etiquetas y atributos, HTML define el término **elemento** para referirse a las partes que componen los documentos HTML. Como ya hemos mencionado antes, la estructura general de una línea de código en lenguaje HTML sería ésta:

```html
<tag attribute1="value1" attribute2="value2">content</tag>```


El lenguaje HTML clasifica a todos los elementos en dos grupos: **elementos en línea** o *inline elements* y **elementos en bloque** o *block elements*.

La diferencia entre ambos viene dada por el **modelo de contenido**, por el **formato** y la **dirección**. La principal diferencia entre los dos tipos de elementos es la forma en la que ocupan el espacio disponible en la página: los **elementos en bloque** siempre empiezan en una nueva línea y ocupan todo el espacio disponible hasta el final de la línea, mientras que los **elementos en línea** sólo ocupan el espacio necesario para mostrar sus contenidos.

## Elementos en línea (definidos por HTML)

| Atributos   | Descripción    |
| ----------: | :------------- |
| `a`         |  Define un anchor (anclaje o hipervínculo) |
| `abbr`      |  Marca las abreviaturas del texto y proporciona el significado de esas abreviaturas |
| `acronym`   |  Marca las siglas o acrónimos del texto y proporciona el significado de esas siglas |
| `b`         |  Indica que el texto debe ser representado e  *bold* (o negrita) |
| `basefont`  |  Permite cambiar algunas propiedades del texto |
| `bdo`       |  Anulación del algoritmo bidireccional (en referencia a la dirección de la escritura) |
| `big`       |  Muestra el texto marcado con un tamaño de fuente más grande |
| `br`        |  *line break* - ruptura (o salto) de línea |
| `cite`      |  Se emplea para marcar una cita o una referencia a otras fuentes |
| `code`      |  Delimita el texto considerado un fragmento de código fuente |
| `dfn`       |  Marca las definiciones de ciertos términos y proporciona el significado de éstos |
| `em`        |  *emphasis* – énfasis |
| `font`      |  Indica el tamaño, color, o fuente del texto que contiene |
| `i`         |  Muestra el texto marcado con un estilo en *cursiva* o itálica |
| `img`       |  Imagen |
| `input`     |  Posibilita y define la introducción de datos en el formulario |
| `kbd`       |  Indicar al usuario el texto que debe introducir |
| `label`     |  Asocia un rótulo o etiqueta a un campo de un formulario |
| `q`         |  *short quotations* - cita corta |
| `s`         |  *strike-through* - tachado |
| `samp`      |  Sirve identificar una muestra de los caracteres que forman la salida o el resultado de algún proceso  |
| `select`    |  Crea un contenedor mediante el cual el usuario puede seleccionar de una lista de opciones |
| `small`     |  Aplica al texto marcado un tamaño de fuente más pequeño |
| `span`      |  Es un contenedor genérico en línea. Sirve para para aplicar estilo al texto o agrupar elementos en línea |
| `strike`    |  Muestra el texto tachado con una linea horizontal |
| `strong`    |  Marca con especial énfasis las partes más importantes de un texto |
| `sub`       |  Crea un subíndice posicionando el texto marcado por debajo de la linea |
| `sup`       |  Crea un superíndice posicionando el texto marcado por encima de la linea |
| `textarea`  |  Crea un control de entrada de texto multilínea |
| `tt`        |  Representa como texto de teletipo o ancho fijo |
| `u`         |  Muestra el texto subrayado |
| `var`       |  Marca variables de programas y similares |

## Elementos en bloque (definidos por HTML)

| Atributos                          | Descripción    |
| ---------------------------------: | :------------- |
| `address`                          |  Contiene la información de contacto con los autores del documento |
| `blockquote`                       |  Indica que el texto que encierra es una cita textual de otro texto externos |
| `center`                           |  Crea una caja en bloque con el contenido centrado |
| `dir`                              |  Crea listas multicolumna de directorios |
| `div`                              |  Es un elemento en bloque genérico y sirve para crear secciones o agrupar contenidos |
| `dl`                               |  Crea una lista de definiciones |
| `fieldset`                         |  Permite organizar en grupos los campos de un formulario |
| `form`                             |  Actúa como contenedor de controles. Representa un formulario |
| `h1`, `h2`, `h3`, `h4`, `h5`, `h6` |  Crea un encabezado o título de primer, segundo, tercer, cuarto, quinto o sexto nivel para una sección del documento respectivamente |
| `hr`                               |  Crea una linea de separación horizontal |
| `isindex`                          |  Crea un control de entrada de texto de una línea |
| `menu`                             |  Crea un menú |
| `noframes`                         |  (sin marcos) - aporta contenidos alternativos a los marcos |
| `nos-cript`                        |  Contenedor de contenido alternativo para la representación no basada en *scripts*|
| `ol`                               |  Crea una lista ordenada |
| `p`                                |  Párrafo |
| `pre`                              |  Permite que el texto conserve el formato y sea mostrado tal cual |
| `table`                            |  Tabla |
| `ul`                               |  Crea una lista no ordenada |


## Más elementos considerados en bloque

| Atributos     | Descripción    |
| -------------:| :------------- |
| `dd`          |  Descripción de una definición |
| `dt`          |  Término definido |
| `frame-set`   |  Subdivisión en ventanas |
| `li`          |  Objeto de lista |
| `tbody`       |  Cuerpo de tabla |
| `td`          |  Celda de datos de una tabla |
| `tfoot`       |  Pie de tabla |
| `th`          |  Celda de encabezado de tabla  |
| `thead`       |  Cabecera de tabla |
| `tr`          |  Fila de una tabla |

## Elementos que pueden ser en línea y en bloque

| Atributos         | Descripción    |
| -----------------:| :------------- |
| `button`          |  Botón |
| `del`             |  Texto borrado |
| `iframe`          |  Subventana en línea |
| `ins`             |  Texto insertado |
| `map`             |  Mapa de imágenes en el lado del cliente |
| `object`          |  Objeto genérico incluído |
| `script`          |  Sentencias de *script* |

<div class="exercise">
  <p class="title">Ejercicio 1</p>
</div>

[Ver enunciado](#ej01)
