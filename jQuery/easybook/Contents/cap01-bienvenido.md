# Introducción

jQuery se está convirtiendo rápidamente en una herramienta que todo desarrollador de interfaces web debería de conocer. El propósito de este libro es proveer un resumen de la biblioteca, de tal forma que para cuando lo haya terminado de leer, será capaz de realizar tareas básicas utilizando jQuery y tendrá una sólida base para continuar el aprendizaje.

## Software

Para trabajar con los contenidos del libro, necesitará las siguientes herramientas:

* [Navegador web Chrome](www.google.com/chrome?hl=es)
* Un editor de texto plano (como [Notepad++](http://notepad-plus-plus.org/download/v5.9.8.html)/[Sublime Text 2](http://www.sublimetext.com/2), [gedit](http://www.icewalkers.com/Linux/Software/56260/gEdit.html)/[Kate](http://linux.softpedia.com/get/Text-Editing-Processing/Others/Kate-2317.shtml) o [TextMate](http://textmate.en.softonic.com/mac))
* Para las secciones dedicadas a Ajax: Un servidor local (como [WAMP](http://www.wampserver.com/en/download.php) o [MAMP](http://www.mamp.info/en/index.html)) o un cliente FTP/SSH (como [FileZilla](http://filezilla-project.org/)) para acceder a un servidor remoto.

## Añadir JavaScript a una Página

Existen dos formas de insertar código JavaScript dentro de una página: escribiendo código en la misma (en ingles inline) o a través de un archivo externo utilizando la etiqueta script. El orden en el cual se incluye el código es importante: un código que depende de otro debe ser incluido después del que referencia (Ejemplo: Si la función B depende de A, el orden debe ser A,B y no B,A).

Para mejorar el rendimiento de la página, el código JavaScript debe ser incluido al final del HTML. Además, cuando se trabaja en un ambiente de producción con múltiples archivos JavaScript, éstos deben ser combinados en un solo archivo.

**Ejemplo de código JavaScript en línea**

    [javascript]
    <script>
    console.log('hello');
    </script>

**Ejemplo de inclusión de un archivo externo JavaScript**

    [javascript]
    <script src='/js/jquery.js'></script>

## Depuración del Código JavaScript

La utilización de una herramienta de depuración es esencial para trabajar con JavaScript. Firefox provee un depurador a través de la extensión Firebug; mientras que [Safari](http://www.apple.com/es/safari/download/) y [Chrome](http://www.google.es/chrome/) ya traen uno integrado.

Cada depurador ofrece:

* Un editor multi-linea para experimentar con JavaScript;
* Un inspector para revisar el código generado en la página;
* Un visualizador de red o recursos, para examinar las peticiones que se realizan.

Cuando usted este escribiendo código JavaScript, podrá utilizar alguno de los siguientes métodos para enviar mensajes a la consola del depurador:

* `console.log()` para enviar y registrar mensajes generales;
* `console.dir()` para registrar un objeto y visualizar sus propiedades;
* `console.warn()` para registrar mensajes de alerta;
* `console.error()` para registrar mensajes de error;

Existen otros métodos para utilizar desde la consola, pero estos pueden variar según el navegador. La consola además provee la posibilidad de establecer puntos de interrupción y observar expresiones en el código con el fin de facilitar su depuración.

## Ejercicios

La mayoría de los capítulos concluyen con uno o más ejercicios. En algunos, podrá trabajar directamente con Firebug o la consola de Safari y Chrome; en otros deberá escribir código JavaScript luego de incluir la biblioteca jQuery en el documento.

Aún así, para completar ciertos ejercicios, necesitará consultar la documentación oficial de jQuery. Aprender a encontrar respuestas, es una parte importante del proceso de aprendizaje.

Estas son algunas sugerencias para hacer frente a los problemas:

* En primer lugar, asegúrese de entender bien el problema que está tratando de resolver.
* Luego, averigüe a qué elementos tendrá que acceder con el fin de resolver el problema, y determine cómo accederlos. Puede utilizar Firebug para verificar que esta obteniendo el resultado esperado.
* Finalmente, averigüe qué necesita hacer con esos elementos para resolver el problema. Puede ser útil, antes de comenzar, escribir comentarios explicando lo que va a realizar.

No tenga miedo de cometer errores. Tampoco trate en el primer intento escribir de forma perfecta su código. Cometer errores y experimentar con soluciones es parte del proceso de aprendizaje y le ayudará a que sea un mejor desarrollador.

Puede descargar el código fuente utilizado en los ejercicios [aquí](snippets/Ejercicios.zip).

## Convenciones Utilizadas en el Libro

Existen una serie de convenciones utilizadas en el libro:

Los métodos que pueden ser llamados desde el objeto jQuery, serán referenciados como `$.fn.nombreDelMetodo`. Los métodos que existen en el espacio de nombres (en inglés *namespace*) de jQuery pero que no pueden ser llamados desde el objeto jQuery serán referenciados como `$.nombreDelMetodo`. Si esto no significa mucho para usted, no se preocupe — será más claro a medida que vaya progresando en el libro.

**Ejemplo de un código**

    [javascript]
    // el código de ejemplo aparecerá de esta forma

*Las anotaciones aparecerán de esta forma.*

> **Nota**
>
> Las notas sobre algún tema aparecerán de esta forma.

## Material de Referencia

Existe una gran cantidad de artículos que se ocupan de algún aspecto de jQuery. Algunos son excelentes pero otros, francamente, son erróneos. Cuando lea un artículo sobre jQuery, este seguro que se está abarcando la misma versión de la biblioteca que está utilizando, y resístase a la tentación de copiar y pegar el código — tómese un tiempo para poder entenderlo.

A continuación se listan una serie de excelentes recursos para utilizar durante el aprendizaje. El más importante de todos es el código fuente de jQuery, el cual contiene (en su formato sin comprimir) una completa documentación a través de comentarios. La biblioteca no es una caja negra — el entendimiento de ella irá incrementándose exponencialmente si la revisa de vez en cuando — y es muy recomendable que la guarde en los favoritos de su navegador para tenerla como guía de referencia.

* [El código fuente de jQuery](http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js)
* [Documentación de jQuery](http://api.jquery.com)
* [Foro de jQuery](http://forum.jquery.com/)
* [Favoritos en Delicious](http://delicious.com/rdmey/jquery-class)
* [Canal IRC #jquery en Freenode](http://docs.jquery.com/Discussion#Chat_.2F_IRC_Channel)