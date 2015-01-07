# Validación

La **validación** es el proceso que asegura que un **documento** escrito en un determinado lenguaje (por ejemplo XHTML) **cumple con las normas y restricciones de ese lenguaje**. Las normas y restricciones de los documentos escritos en XML (y en sus lenguajes derivados, como XHTML) se definen en el **DTD** o *Document Type Definition* ("Definición del Tipo de Documento").

El concepto de validación es objeto de controversia en el ámbito del diseño web. Por una parte, la validación **no es obligatoria** y las páginas web se pueden ver bien sin que sean válidas. Por otra parte, una página válida es **más correcta** que otra página que no lo sea, ya que cumple con las normas y restricciones impuestas por XHTML.

Debido a esto, algunos diseñadores consideran que se da demasiada importancia a la validación de las páginas y a la creación de páginas válidas. El resto de diseñadores argumentan que si la especificación de XHTML impone una serie de normas y restricciones, lo más correcto es que las páginas web las cumplan, aunque no sea obligatorio.

En cualquier caso, el proceso de validación consiste en **probar página a página si su código HTML pasa la prueba de validación**. Los validadores son las herramientas que se utilizan para validar cada página. Algunos editores de páginas web incluyen sus propios validadores y el organismo **W3C** ha creado una herramienta gratuita para la validación de las páginas.

En las próximas secciones de este capítulo se muestran las diferentes herramientas de validación disponibles para validar las páginas web.

## Validador del W3C

La validación de las páginas web no requiere el uso de editores avanzados como Dreamweaver, ya que el organismo W3C ha creado una herramienta que se puede utilizar gratuitamente a través de Internet: [http://validator.w3.org/](http://validator.w3.org/)

![Validador W3C](cap13/w3c.png)

Aunque la herramienta sólo está disponible en inglés, su uso es muy intuitivo:

* `Validate by URI`, permite escribir la URL de la página que se quiere validar. Esta opción es la más sencilla para validar las páginas que ya están publicadas en Internet.
* `Validate by File Upload`, muestra un formulario mediante el que se puede subir el archivo HTML correspondiente a la página que se quiere validar. Esta opción es la mejor para validar las páginas web que has desarrollado y que aún no has publicado en Internet.
* `Validate by Direct Input`, permite validar código HTML de forma directa. Se trata de la opción más rápida para validar trozos o páginas HTML completas. Esta opción es la mejor cuando estás desarrollando las páginas y quieres asegurarte que el código sea válido.

La siguiente imagen muestra el **resultado de la validación** de la página principal de Google realizada mediante la opción Validate by URI:

![Resultado de validar www.google.com](cap13/w3c_google.png)

Si la página no pasa correctamente la prueba de validación, se muestra el listado completo de fallos junto con la ayuda necesaria para resolver cada uno de los errores.

Como se observa en la imagen anterior, incluso una página tan sencilla como la portada de Google contiene decenas de errores que impiden considerarla válida. Por lo tanto, la página principal de Google no es una página válida, aunque eso no impide que se vea bien en todos los navegadores y que los usuarios la consideren correcta.