# Módulo *Multi-column Layout*

La especificación oficial y el estado actual de desarrollo del módulo *Multi-column Layout* en CSS 3 puede consultarse en [http://www.w3.org/TR/css3-multicol/](http://www.w3.org/TR/css3-multicol/).

La propiedad `multi-column` permite crear estructuras multicolumna con nuestros textos de dos maneras diferentes: definiendo el número de columnas (con la propiedad `column-count`), o definiendo un ancho para dichas columnas (con la propiedad `column-width`). Es posible especificar el espacio entre columnas con la propiedad `column-gap`.

Un ejemplo de estructura multicolumna utilizando la propiedad `column-count`:

    [css]
    div { column-count:2; }

<div style="-webkit-column-count:2;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum</div>

Un ejemplo de estructura multicolumna utilizando la propiedad `column-width`:

    [css]
    div { column-width:10em; }

<div style="-webkit-column-width:10em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum</div>

## Propiedad *shorthand*

Como los valores de las propiedades anteriores no se superponen, a menudo es conveniente utilizar la propiedad *shorthand* `columns`.

| Propiedad             | `columns`    |
| --------------------: | :------------- |
| **Valores** | &lt;column-width&gt; || &lt;column-count&gt; |
| **Se aplica a** | Todos los elementos de bloque (excepto tablas), celdas de tabla y elementos inline-block. |
| **Valor inicial**  | none |
| **Descripción**       | Especifica el número de columnas y/o ancho de las mismas. |

## Equilibro de altura

La especificación de CSS3 requiere que la **alturas de las columnas** sea equilibrada. Esto es, el navegador automáticamente establece el máximo de altura de la columna de manera que las alturas de los contenidos de las columnas sean aproximadamente iguales.

Sin embargo, en algunas situaciones, es util establecer explícitamente el máximo de altura. Si la altura está limmitada mediante las propiedades CSS `height` o `max-height` en un bloque multi-columna, cada columna puede "crecer" hasta la máxima altura y no más allá antes de añadir una nueva columna.

## Espacios entre columnas

Siempre existe un espacio entre columnas. El espacio recomendado es `1em`. Este tamaño puede ser cambiado aplicando la propiedad `column-gap`.

| Propiedad             | `column-gap`    |
| --------------------: | :------------- |
| **Valores** | &lt;length&gt; \| normal |
| **Se aplica a** | Elementos multi-columna |
| **Valor inicial**  | normal |
| **Descripción**       | Especifica el espacio entre columnas |

## Trazos entre columnas

En el espacio que existe entre las columnas, es posible dibujar un trazo, como si de un borde se tratara.

| Propiedad             | `column-rule`    |
| --------------------: | :------------- |
| **Valores** | &lt;column-rule-width&gt; || &lt;column-rule-style&gt; || [ &lt;column-rule-color&gt; | transparent ] |
| **Se aplica a** | Elementos multi-columna |
| **Valor inicial**  | transparent |
| **Descripción**       | Especifica el trazo a dibujar en el espacio entre columnas. |

<div style="-webkit-column-count:3; -webkit-column-rule: 1px dotted black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum</div>

## Texto sobre columnas

Es posible mostrar un elemento, inicialmente incluido en el texto formateado en columnas, para que ocupe el ancho completo de las columnas, utilizando la propiedad `column-span`.

| Propiedad             | `column-span`    |
| --------------------: | :------------- |
| **Valores** | none \| all ] |
| **Se aplica a** | Elementos de bloque, excepto los flotantes y los definidos con posición absoluta. |
| **Valor inicial**  | none |
| **Descripción**       | Especifica cuantas columnas ocupa el elemento. |

<div style="-webkit-column-count:3; -webkit-column-rule: 1px dotted black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
<h2 style="-webkit-column-span: all;">Loren ipsum</h2>quis nostrud exercitation ullamco laboris nisi ut aliquip
ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum</div>