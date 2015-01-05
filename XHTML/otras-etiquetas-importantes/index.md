# Otras etiquetas importantes

## Comentarios

Al igual que la mayoría de lenguajes de marcado, HTML permite incluir **comentarios dentro de su código** para añadir **información que no se debe mostrar por pantalla**.

Normalmente, los diseñadores y programadores incluyen comentarios para marcar el comienzo y el final de las secciones de las páginas, para incluir avisos y notas para otros diseñadores o para incluir explicaciones sobre la forma en la que se ha creado el código HTML.

Aunque los comentarios no se muestran por pantalla y por tanto son invisibles para los usuarios, **sí que se descargan con el código HTML de la página**. Por este motivo, nunca debe incluirse información sensible o confidencial en los comentarios.

La sintaxis de los comentarios es la siguiente:

- Apertura del comentario: `<!--`
- Contenido del comentario: `(cualquier texto)`
- Cierre del comentario: `-->`

El siguiente ejemplo muestra el uso de los comentarios HTML para indicar el comienzo y final de cada sección. Recuerda que los comentarios no se muestran por pantalla y que no influyen en la forma en la que se ven las páginas:

```html
<!-- Inicio del menú -->
<div id="menu">
  <ul>
    <li>...</li>
    <li>...</li>
    <li>...</li>
    <li>...</li>
  </ul>
</div>
<!-- /Fin del menú -->
<!-- Inicio de la publicidad -->
<div id="publicidad"> ... </div>
<!-- /Fin de la publicidad -->```

Los **comentarios de HTML** puede ocupar tantas líneas como sea necesario. Sin embargo, los comentarios no se pueden anidar, es decir, no se puede incluir un comentario dentro de otro comentario.
