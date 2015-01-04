# Codificación de caracteres

Existen **caracteres** que se utilizan habitualmente en los textos que no se pueden incluir directamente en las páginas web o que pueden darnos problemas. Estos son:

- Los caracteres que utiliza el lenguaje **HTML** para definir sus etiquetas.
- Los caracteres **propios de idiomas que no son el inglés**.

Para los caracteres propios del lenguaje HTML existen algunas expresiones o **entidades HTML** que los sustituyen:

| Entidad | Caracter    |
| ------: | :---------- |
| `&lt;`  | < |
| `&gt;`  | > |
| `&amp;` | & |
| `&quot;`| " |
| `&nbsp;`| espacio en blanco |
| `&apos;`| ' |

En cuanto a los caracteres propios de idiomas diferentes al inglés, cuando todos los procesos involucrados (entorno de desarrollo, servidor web y navegador) utilizan la misma codificación de caracteres (por ejemplo, **UTF-8**), el texto se verá correctamente en el navegador. Pero si la codificación cambia sin realizar una conversión correcta, el navegador mostrará caracteres extraños.

La solución más correcta y sencilla es sustituir estos caracteres potencialmente problemáticos por su **entidad HTML**, ya que si se utilizan las entidades HTML en vez de los caracteres problemáticos, es indiferente pasar de una codificación de caracteres a otra diferente.

| Entidad     | Caracter    |
| ----------: | :---------- |
| `&ntilde;`  | ñ |
| `&Ntilde;`  | Ñ |
| `&aacute;`  | á |
| `&eacute;`  | é |
| `&iacute;`  | í |
| `&oacute;`  | ó |
| `&uacute;`  | ú |
| `&Aacute;`  | Á |
| `&Eacute;`  | É |
| `&Iacute;`  | Í |
| `&Oacute;`  | Ó |
| `&Uacute;`  | Ú |
| `&euro;`    | € |

Puedes consultar la tabla completa de entidades HTML en Wikipedia: [http://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references](http://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references)
