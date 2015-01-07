# Ejercicios

## Capítulo 2

### Ejercicio 1 ## {#ej01}

A partir de la página web proporcionada, añadir el código JavaScript necesario para que:

* Al cargar la página, el cuadro de texto debe mostrar por defecto la URL de la propia página.
* Al pulsar el botón "Mostrar Contenidos", se debe descargar mediante peticiones AJAX el contenido correspondiente a la URL introducida por el usuario. El contenido de la respuesta recibida del servidor se debe mostrar en la zona de "Contenidos del archivo".
* En la zona "Estados de la petición" se debe mostrar en todo momento el estado en el que se encuentra la petición (No inicializada, cargando, completada, etc.)
* Mostrar el contenido de todas las cabeceras de la respuesta del servidor en la zona "Cabeceras HTTP de la respuesta del servidor".
* Mostrar el código y texto de estado de la respuesta del servidor en la zona "Código de estado".

[Descargar archivo ZIP con la página HTML](snippets/cap04/ej01.zip)

### Ejercicio 2 ## {#ej02}

La página HTML proporcionada incluye una zona llamada ticker en la que se deben mostrar noticias generadas por el servidor. Añadir el código JavaScript necesario para:

* De forma periódica cada cierto tiempo (por ejemplo cada segundo) se realiza una petición al servidor mediante AJAX y se muestra el contenido de la respuesta en la zona reservada para las noticias.
* Además del contenido enviado por el servidor, se debe mostrar la hora en la que se ha recibido la respuesta.
* Cuando se pulse el botón "Detener", la aplicación detiene las peticiones periódicas al servidor. Si se vuelve a pulsar sobre ese botón, se reanudan las peticiones periódicas.
* Añadir la lógica de los botones "Anterior" y "Siguiente", que detienen las peticiones al servidor y permiten mostrar los contenidos anteriores o posteriores al que se muestra en ese momento.
* Cuando se recibe una respuesta del servidor, se resalta visualmente la zona llamada ticker.
* Modificar la aplicación para que se reutilice continuamente el mismo objeto `XMLHttpRequest` para hacer las diferentes peticiones.

[Descargar ZIP con la página HTML y el script generaContenidos.php](snippets/cap04/ej02.zip)

### Ejercicio 3 ## {#ej03}

Un ejemplo de validación compleja es la que consiste en comprobar si un nombre de usuario escogido está libre o ya lo utiliza otro usuario. Como es una validación que requiere el uso de una base de datos muy grande, no se puede realizar en el navegador del cliente. Utilizando las técnicas mostradas anteriormente y la página web que se proporciona:

* Crear un script que compruebe con AJAX y la ayuda del servidor si el nombre escogido por el usuario está libre o no.
* El script del servidor se llama compruebaDisponibilidad.php y el parámetro que contiene el nombre se llama login.
* La respuesta del servidor es "si" o "no", en función de si el nombre de usuario está libre y se puede utilizar o ya ha sido ocupado por otro usuario.
* A partir de la respuesta del servidor, mostrar un mensaje al usuario indicando el resultado de la comprobación.

[Descargar ZIP con la página HTML y el script compruebaDisponibilidad.php](snippets/cap04/ej03.zip)

### Ejercicio 4 ## {#ej04}

Normalmente, cuando se valida la disponibilidad de un nombre de usuario, se muestra una lista de valores alternativos en el caso de que el nombre elegido no esté disponible. Modificar el ejercicio de comprobación de disponibilidad de los nombres para que permita mostrar una serie de valores alternativos devueltos por el servidor.

El script del servidor se llama `compruebaDisponibilidadXML.php` y el parámetro que contiene el nombre se llama `login`. La respuesta del servidor es un documento XML con la siguiente estructura:

Si el nombre de usuario está libre:

    [xml]
    <respuesta>
      <disponible>si</disponible>
    </respuesta>

Si el nombre de usuario está ocupado:

    [xml]
    <respuesta>
      <disponible>no</disponible>
      <alternativas>
        <login>...</login>
        <login>...</login>
        ...
        <login>...</login>
      </alternativas>
    </respuesta>

Los nombres de usuario alternativos se deben mostrar en forma de lista de elementos (`<ul></ul>`).

Modificar la lista anterior para que muestre enlaces para cada uno de los nombres alternativos. Al pinchar sobre el enlace de un nombre alternativo, se copia en el cuadro de texto del login del usuario.

[Descargar archivo ZIP con el script compruebaDisponibilidadXML.php](snippets/cap04/ej04.zip)

### Ejercicio 5 ## {#ej05}

Rehacer el ejercicio 4 para procesar respuestas del servidor en formato JSON. Los cambios producidos son:

1. El script del servidor se llama compruebaDisponibilidadJSON.php y el parámetro que contiene el nombre se llama login.
2. La respuesta del servidor es un objeto JSON con la siguiente estructura:

El nombre de usuario está libre:

    [javascript]
    { disponible: "si" }

El nombre de usuario está ocupado:

    [javascript]
    { disponible: "no", alternativas: ["...", "...", ..., "..."] }

[Descargar archivo ZIP con el script compruebaDisponibilidadJSON.php](snippets/cap04/ej05.zip)

### Ejercicio 6 ## {#ej06}

Crear un script que cargue de forma dinámica mediante AJAX la lista de provincias de un país y la lista de los municipios de cada provincia seleccionada.

1) Definir el código HTML de las dos listas desplegables vacías.
2) Cuando se cargue la página, cargar la lista de provincias en la primera lista desplegable. El script del servidor se llama `cargaProvinciasXML.php`. El formato de la respuesta es XML, con la siguiente estructura:

    [xml]
    <provincias>
      <provincia>
        <codigo>01</codigo>
        <nombre>Álava</nombre>
      </provincia>
      ...
    </provincias>

Para insertar las opciones en la lista desplegable, se pueden utilizar dos técnicas:

* Propiedad `innerHTML` de la lista y código HTML de cada etiqueta `<option>`.
* Crear elementos de tipo opción (`new Option(nombre, valor`)) y añadirlo al array `options[]` de la lista desplegable.

3) Añadir de forma semántica el evento adecuado a la lista de provincias para que cuando se seleccione una provincia, se carguen automáticamente todos sus municipios en la otra lista.
4) Cuando se seleccione una determinada provincia, se carga mediante AJAX la lista completa de municipios en la otra lista desplegable. El script del servidor se llama `cargaMunicipiosXML.php`. El parámetro que se debe enviar al servidor es el código de la provincia y el parámetro se llama `provincia`. El método que espera el servidor es POST. El formato de la respuesta es XML, con la siguiente estructura:

    [xml]
    <municipios>
      <municipio>
        <codigo>0014</codigo>
        <nombre>Alegría-Dulantzi</nombre>
      </municipio>
      ...
    </municipios>

[Descargar archivo ZIP con los scripts cargaProvinciasXML.php y cargaMunicipiosXML.php](snippets/cap04/ej06.zip)

### Ejercicio 7 ## {#ej07}

Modificar el ejercicio anterior para soportar las respuestas del servidor en formato JSON. Los cambios introducidos son los siguientes:

1) El script del servidor utilizado para cargar las provincias se llama cargaProvinciasJSON.php y la respuesta del servidor tiene el siguiente formato:

    [javascript]
    { "01": "Álava/Araba",  "02": "Albacete",  "03": "Alicante/Alacant", ...  }

2) El script del servidor utilizado para cargar los municipios se llama `cargaMunicipiosJSON.php` y la respuesta del servidor tiene el siguiente formato:

    [javascript]
    { "0014": "Alegría-Dulantzi",  "0029": "Amurrio",  ...  }

[Descargar archivo ZIP con los scripts cargaProvinciasJSON.php y cargaMunicipiosJSON.php](snippets/cap04/ej07.zip)

## Capítulo 3

### Ejercicio 8 ## {#ej08}

Se propone la construcción de un teclado virtual que permita escribir los contenidos en diversos idiomas y alfabetos. El script hace un uso intensivo de elementos de AJAX como los eventos, DOM, javascript avanzado, JSON y el objeto `XMLHttpRequest`.

Cada uno de los teclados correspondientes a un idioma se carga desde el servidor, para no sobrecargar la aplicación. El teclado de un idioma concreto está formado por varios teclados alternativos o variantes. Así, se encuentra el teclado `normal` para las teclas que se muestran inicialmente, el teclado `caps` con las teclas que se escriben al pulsar sobre la tecla `Bloq. Mayúsculas`, el teclado `shift` que contiene los símbolos que se escriben al pulsar sobre la tecla `Shift` y el teclado `altgr` que contiene los símbolos que se pueden escribir después de pulsar la tecla `Alt Gr`.

Por tanto, cada idioma tiene cuatro teclados diferentes: `normal`, `caps`, `shift` y `altgr`. Inicialmente, el script proporciona el objeto `teclados` con un elemento llamado `es` que contiene los cuatro teclados correspondientes al idioma español.

![Detalle del teclado para el idioma español y la variante "normal"](cap04/teclado-normal.png)

![Detalle del teclado para el idioma español y la variante "caps"](cap04/teclado-caps.png)

![Detalle del teclado para el idioma español y la variante "shift"](cap04/teclado-shift.png)

![Detalle del teclado para el idioma español y la variante "altgr"](cap04/teclado-altgr.png)

1. Crear una función llamada `cargaTeclado()` que muestre en cada tecla virtual el valor de la tecla correspondiente al teclado de un idioma y una variante determinados.
2. Al cargar la página, se debe ejecutar la función `cargaTeclado()`. Previamente, se debe establecer el valor inicial de dos variables globales llamadas `tecladoIdioma` y `tecladoVariante`. En la misma función `cargaTeclado()`, se debe asignar un evento a cada tecla activa para que al pulsar con el ratón sobre ella, se ejecute la función `pulsaTecla()`.
3. En la función `pulsaTecla()` se obtiene el carácter de la tecla que se ha pulsado correspondiente al teclado activo en ese momento. La tecla se añade a un array global llamado `teclasPulsadas`. Por último, desde la función `pulsaTecla()` se llama a una función `mostrarContenidos()` que actualiza el texto mostrado en el área reservada para mostrar las teclas pulsadas.
4. Añadir la lógica para tratar las "*teclas especiales*". Para ello, añadir un evento adecuado que llame a la función `pulsaTeclaEspecial()` cuando el usuario pulse sobre `Enter`, `Tabulador`, `Barra Espaciadora` y `Borrado (BackSpace)`. En cada caso, se debe añadir al array de teclas pulsadas el carácter correspondiente: `\n`, `\t`, espacio en blanco y el borrado de la última tecla pulsada.
5. Modificar la función `mostrarContenidos()` para que antes de mostrar las teclas que se han pulsado, convierta los caracteres especiales en caracteres correctos para mostrarlos en un elemento HTML: las nuevas líneas (`\n`) se transforman en `<br/>`, los espacios en blanco se transforman en `&nbsp;` y el tabulador (`\t`) se transforma en `&nbsp;&nbsp;&nbsp;&nbsp;`.
6. Cuando se pulsa la tecla `Bloq. Mayús.` o `Shift` o `Alt Gr`, se debe cambiar la variante del teclado actual. Para ello, existen las variantes `caps` para las mayúsculas, `shift` para los símbolos de la tecla `Shift` y `altgr` para los símbolos que aparecen cuando se pulsa la tecla `AltGr`. Añadir a estas teclas especiales el evento adecuado para que se ejecute la función `pulsaTeclaEspecial()` en la que se deben realizar las tareas que correspondan a cada tecla. Además, debería crearse una variable global llamada estado que almacene en todo momento el estado de pulsación de estas teclas especiales, ya que el resultado no es el mismo si se pulsa la tecla de mayúsculas estando o no estando pulsada anteriormente.
7. Una vez configurado el script básico del teclado virtual, se van a añadir los elementos relativos a la comunicación con el servidor. En primer lugar, al cargar la página se muestran en una lista desplegable todos los idiomas disponibles. El script del servidor se llama `tecladoVirtual.php` y el envío de parámetros se realiza mediante `POST`. Para cargar los idiomas disponibles, el parámetro que se debe utilizar es accion y su valor es `listaIdiomas`. La respuesta del servidor es un objeto JSON con los códigos y nombres de cada idioma, además del código del idioma que se carga al principio:

    [javascript]
    {
        idiomas: { es: "Español",
                   de: "Alemán",
                   ru: "Ruso",
                   el: "Griego",
                   ...
                 },
        defecto: "es"
    }

![Lista desplegable con los idiomas disponibles para el teclado virtual](cap04/listado-idiomas.png)

8. Cuando se cambie el idioma en la lista desplegable, se debe cargar automáticamente el teclado correspondiente a ese idioma. El primer teclado que se muestra al cargar la página es el correspondiente al idioma por defecto indicado por el servidor.

Los teclados de cada idioma con todas sus variantes también se descargan desde el servidor. El script es `tecladoVirtual.php`, en este caso la acción es `cargaTeclado` y se debe pasar otro parámetro llamado `idioma` con el código del idioma cuyo teclado se quiere cargar desde el servidor.

La respuesta del servidor es la siguiente:

    [javascript]
    {
        normal:
            ["&#x00BA;", "&#x0031;", "&#x0032;", "&#x0033;", "&#x0034;",
             "&#x0035;", "&#x0036;", ..., "&#x002E;", "&#x002D;"],
        caps:
            ["&#x00BA;", "&#x0031;", "&#x0032;", "&#x0033;", "&#x0034;",
             "&#x0035;", "&#x0036;", ..., "&#x002E;", "&#x002D;"],
        shift:
            ["&#x00AA;", "&#x0021;", "&#x0022;", "&#x0027;", "&#x0024;",
             "&#x0025;", "&#x0026;", ..., "&#x003A;", "&#x005F;"],
        altgr:
            ["&#x005C;", "&#x007C;", "&#x0040;", "&#x0023;",,, "&#x00AC;",
             ,,,,,,,,,,,,,,,, "&#x005B;","&#x005D;",,,,,,,,,,, "&#x007B;",
             "&#x007D;",,,,,,,,,,""]
    }

![Detalle del teclado para el idioma ruso y la variante "normal"](cap04/teclado-ru-normal.png)

![Detalle del teclado para el idioma griego y la variante "normal"](cap04/teclado-ru-normal.png)

Si se utiliza `net.CargadorContenidoscompleto`, puede ser útil emplear el último parámetro que indica si la petición al servidor es síncrona o asíncrona. En este caso, debería ser síncrona, ya que el resto del programa no puede seguir trabajando hasta que se haya cargado completamente el teclado solicitado.

9. Por último, se va a añadir la característica de autoguardado. Para ello, cada 30 segundos se envía el contenido del usuario al servidor para almacenarlo de forma segura. El servidor devuelve el texto que ha guardado y se muestra en la página para comprar el texto del usuario y el texto guardado. El script del servidor se llama `tecladoVirtual.php`, la acción es `guardar` y el parámetro `contenido` es el que indica el contenido creado por el usuario.
10. Se puede añadir una pequeña mejora visual al teclado virtual: existe una clase de CSS llamada `pulsada` y que se puede utilizar para resaltar de forma clara la tecla que se ha pulsado. Utilizar esa clase para iluminar durante un breve espacio de tiempo la tecla pulsada en cada momento.
11. Otras posibles mejoras: funcionamiento del teclado numérico, funcionamiento de los acentos, manejo de los LED del teclado, etc.

[Descargar archivo ZIP con la página HTML, las imágenes y el script tecladoVirtual.php](snippets/cap04/ej08.zip)

### Ejercicio 9 ## {#ej09}

A partir del formulario proporcionado, añadir la opción de autocompletar el nombre del municipio que está escribiendo el usuario. El esquema del funcionamiento propuesto es el siguiente:

1. Al cargar la página, se debe crear un elemento HTML de tipo `<div>` en el que se van a mostrar las sugerencias enviadas por el servidor. Además, se debe establecer el evento de teclado adecuado en el cuadro de texto y también se debe posicionar el cursor en ese cuadro de texto para poder escribir en el directamente.
2. Cuando se pulse una tecla sobre el cuadro de texto, se debe ejecutar la función `autocompleta()`. Desde esta función, se debe llamar a la función responsable de obtener la lista de municipios del servidor. El script se llama `autocompletaMunicipios.php`, el parámetro que se envía mediante `POST`, se llama `municipio` y debe contener la cadena de texto escrita por el usuario.

El servidor responde con un array en formato JSON con la lista de municipios cuyo nombre comienza por el texto enviado. Ejemplo de respuesta del servidor:

    [javascript]
    [ "Alegría-Dulantzi", "Amurrio", "Añana", "Aramaio", "Armiñón", ... ]

3. Una vez obtenido el array de sugerencias, se debe mostrar en forma de lista de elementos (etiqueta `<ul>` de HTML). Para transformar el array en la lista `<ul>`, modificar el `prototype` del objeto `Array` y añadir una función específica que realice la transformación.
4. Modificar la función `autocompleta()` para tener en consideración 3 teclas especiales: las flechas superior e inferior y la tecla `Enter`. Cuando se utilizan las flechas del teclado hacia arriba y hacia abajo, se van seleccionando los elementos de la lista. Cuando se pulsa el `Enter`, se selecciona el elemento copiando su valor al cuadro de texto y ocultando la lista de sugerencias.
5. Para mejorar el rendimiento de la aplicación, añadir una cache para las sugerencias. Cada vez que se recibe una lista de sugerencias del servidor, se almacena en un objeto que relaciona el texto que ha introducido el usuario y la respuesta del servidor. Ejemplo:

    [javascript]
    {
        "a":
            ["Ababuj", "Abades", "Abadía", "Abadín", "Abadiño", "Abáigar", "Abajas", "Abaltzisketa", "Abánades", "Abanilla", "Abanto y Ciérvana-Abanto Zierbena", "Abanto", "Abarán", "Abarca de Campos", "Abárzuza", "Abaurregaina/Abaurrea Alta", "Abaurrepea/Abaurrea Baja", "Abegondo", "Abejar", "Abejuela", "Abella de la Conca"],
        "al":
            ["Alacón", "Aladrén", "Alaejos", "Alagón", "Alaior", "Alájar", "Alajeró", "Alameda de Gardón (La)", "Alameda de la Sagra", "Alameda del Valle", "Alameda", "Alamedilla (La)", "Alamedilla", "Alamillo", "Alaminos", "Alamús (Els)", "Alange", "Alanís", "Alaquàs", "Alar del Rey", "Alaraz"],
        ...
    }

De esta forma, antes de realizar una petición al servidor, se comprueba si ya está disponible una lista de sugerencias para ese texto. Además, cuando se realiza una consulta al servidor, la respuesta se almacena en la cache para su posible reutilización futura.

6. Mostrar un mensaje adecuado cuando el servidor devuelva un array vacío por no haber sugerencias para el texto introducido por el usuario.

[Descargar archivo ZIP con el script autocompletaMunicipios.php](snippets/cap04/ej09.zip)