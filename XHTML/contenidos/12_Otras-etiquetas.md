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

    [html]
    <!-- Inicio del menú -->
    <div id="menu">
    <ul>
      <li>...</li>
      <li>...</li>
      <li>...</li>
      <li>...</li>
    </ul>
    <!-- Fin del menú -->
    <!-- Inicio de la publicidad -->
    <div id="publicidad"> ... </div>
    <!-- Fin de la publicidad -->

Los **comentarios de HTML** puede ocupar tantas líneas como sea necesario. Sin embargo, los comentarios no se pueden anidar, es decir, no se puede incluir un comentario dentro de otro comentario.

## JavaScript

Como ya se explicó en los capítulos anteriores, la __etiqueta `<script>`__ se utiliza para enlazar **archivos JavaScript externos** y para incluir **bloques de código JavaScript en las páginas**. Sin embargo, algunos navegadores no disponen de soporte completo de JavaScript, otros navegadores permiten bloquearlo parcialmente e incluso algunos usuarios bloquean completamente el uso de JavaScript porque creen que así navegan de forma más segura.

Si JavaScript está bloqueado o deshabilitado y la página web requiere su uso para un correcto funcionamiento, es habitual incluir un mensaje de aviso al usuario indicándole que debería activar JavaScript para disfrutar completamente de la página.

El siguiente ejemplo muestra una misma página web que requiere JavaScript tanto cuando se accede con JavaScript activado y como cuando se accede con JavaScript completamente desactivado.

![Ejemplo de página compleja con JavaScript activado](cap12/javascript.png)

![Ejemplo de página compleja con JavaScript desactivado](cap12/nojavascript.png)

HTML define la etiqueta `<noscript>` para incluir un mensaje que los navegadores muestran cuando JavaScript se encuentra bloqueado o deshabilitado.

| Etiqueta              | `<noscript>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Define un mensaje alternativo que se muestra al usuario cuando su navegador no soporta la ejecución de scripts. De esta forma, incluir un mensaje de aviso que solamente sea visible en los navegadores que tienen bloqueado JavaScript es tan sencillo como incluir la etiqueta `<noscript>` dentro del `<body>` |

    [html]
    <head> ... </head>
    <body>
        <noscript>
          <p>Bienvenido a Mi Sitio</p>
          <p>La página que estás viendo requiere para su funcionamiento
          el uso de JavaScript. Si lo has deshabilitado intencionadamente,
          por favor vuelve a activarlo.</p>
        </noscript>
    </body>