# Etiquetas, atributos y elementos

Las **etiquetas** son la estructura básica del HTML. Estas etiquetas o *tags* se componen y contienen otras propiedades, como son los **atributos** y el **contenido**.

**HTML** define un total de 91 etiquetas, de las cuales 10 se consideran obsoletas. Sin embargo, una etiqueta por sí sola a veces no contiene la suficiente información para estar completamente definida. Para ello contamos con los **atributos**: pares *nombre-valor* separados por "=" y escritos en la etiqueta inicial de un elemento después del nombre del elemento. El valor puede estar encerrado entre "comillas dobles" o 'simples'. Existen, también, algunos atributos que afectan al elemento por su presencia en la etiqueta de inicio, como puede ser el atributo `ismap` para el elemento `<img>`.

Esta sería la **estructura general de una línea de código en lenguaje HTML**:

```html
<tag attribute1="value1" attribute2="value2">content</tag>```

O lo que es lo mismo, con un ejemplo:

```html
<a href="http://www.enlace.com" target="_blank">Ejemplo de enlace</a>```

Donde:

- `<a>` es la etiqueta o *tag* inicial y `</a>` la etiqueta de cierre.
- `href` y `target` son los atributos.
- `http://www.enlace.com` y `_blank` son las variables.
- `Ejemplo de enlace` es el contenido.

Aunque también existen elementos vacíos que no necesitan *tag* de cierre, cuya estructura sería ésta:

```html
<tag attribute1="value1" attribute2="value2" />```

Estos elementos vacíos no constan de contenido, como por ejemplo, los *tags* `<br>` o `<img>`.
