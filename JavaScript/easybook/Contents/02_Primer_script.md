# El primer script

A continuación, se muestra un primer script sencillo pero completo:

    [html]
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>El primer script</title>
    
        <script type="text/javascript">
          alert("Hola Mundo!");
        </script>
    </head>
    
    <body>
        <p>Esta página contiene el primer script</p>
    </body>
    </html>

En este ejemplo, el script se incluye como un bloque de código dentro de una página XHTML. Por tanto, en primer lugar se debe crear una página XHTML correcta que incluya la declaración del `DOCTYPE`, el atributo `xmlns`, las secciones `<head>` y `<body>`, la etiqueta `<title>`, etc.

Aunque el código del script se puede incluir en cualquier parte de la página, se recomienda incluirlo en la cabecera del documento, es decir, dentro de la etiqueta `<head>`.

A continuación, el código JavaScript se debe incluir entre las etiquetas `<script>`...`</script>`. Además, para que la página sea válida, es necesario definir el atributo `type` de la etiqueta `<script>`. Técnicamente, el atributo `type` se corresponde con "el tipo MIME", que es un estándar para identificar los diferentes tipos de contenidos. El "tipo MIME" correcto para JavaScript es `text/javascript`.

Una vez definida la zona en la que se incluirá el script, se escriben todas las sentencias que forman la aplicación. Este primer ejemplo es tan sencillo que solamente incluye una sentencia: `alert("Hola Mundo!");`.

La instrucción `alert()` es una de las utilidades que incluye JavaScript y permite mostrar un mensaje en la pantalla del usuario. Si se visualiza la página web de este primer script en cualquier navegador, automáticamente se mostrará una ventana con el mensaje `"Hola Mundo!"`.

A continuación se muestra el resultado de ejecutar el script:

![Mensaje mostrado con `alert()`](cap02/Safari.png)

<div class="exercise">
  <p class="title">Ejercicio 1</p>
</div>

[Ver enunciado](#ej01)