# Tablas

Desde sus primeras versiones, HTML incluyó el soporte para crear tablas de datos en las páginas web. Además de ser sencillo, el **modelo definido por HTML** es muy flexible y bastante completo.

Las **tablas en HTML** utilizan los mismos conceptos de filas, columnas, cabeceras y títulos que los que se utilizan en cualquier otro entorno y pueden contener elementos simples, agrupaciones de filas y de columnas, cabeceras y pies de tabla, subdivisiones, cabeceras múltiples y otros elementos complejos.

![Partes que componen una tabla compleja](imagenes/cap08/estructura_tabla.png)

El problema de las tablas es que no siempre se utilizan adecuadamente. Aunque parezca obvio, las tablas se deben utilizar para mostrar información tabular.

Hasta hace algún tiempo, las tablas también se utilizaban para definir la estructura de las páginas web y aunque hoy en día hay diseñadores que siguen utilizando este método, se trata de una técnica poco recomendable ya que se complica en exceso el código HTML. La solución correcta para definir la **estructura de las páginas** consiste en la utilización de hojas de estilos **CSS**.

## Tablas básicas

Las tablas más sencillas de HTML se definen con tres etiquetas: `<table>` para crear la tabla, `<tr>` para crear cada fila y `<td>` para crear cada columna.

Un ejemplo de **código HTML** con una tabla sencilla sería:

    [html]
    <html>
        <head>
            <title>Ejemplo de tabla sencilla</title>
        </head>
        <body>
            <h1>Listado de cursos</h1>
            <table>
            <tr>
              <td><strong>Curso</strong></td>
              <td><strong>Horas</strong></td>
              <td><strong>Horario</strong></td>
            </tr>
            <tr>
              <td>CSS</td>
              <td>20</td>
              <td>16:00 - 20:00</td>
            </tr>
            <tr>
              <td>HTML</td>
              <td>20</td>
              <td>16:00 - 20:00</td>
            </tr>
            <tr>
              <td>Dreamweaver</td>
              <td>60</td>
              <td>16:00 - 20:00</td>
            </tr>
            </table>
        </body>
    </html>

Y un navegador lo visualizaría de esta manera:

![Ejemplo de tabla sencilla creada con las etiquetas table, tr y td](imagenes/cap08/tabla_sencilla.png)

La etiqueta `<table>` encierra todas las **filas y columnas de la tabla**. Las etiquetas `<tr>` (*table row*) definen cada fila de la tabla y encierran todas las columnas. Por último, la etiqueta `<td>` (*table data cell*) define cada una de las columnas de las filas (aunque realmente HTML no define columnas sino celdas de datos).

Al definir una tabla, se debe pensar en primer lugar en las filas que la forman y a continuación en las columnas. El motivo es que **HTML** procesa primero las filas y por eso las etiquetas `<tr>` aparecen antes que las etiquetas `<td>`.

| Etiqueta              | `<table>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `summary="texto"` Permite describir el contenido de la tabla (lo utilizan los buscadores y las personas discapacitadas) |
| **Tipo de elemento**  | Tabla |
| **Descripción**       | Se emplea para definir tablas de datos |

| Etiqueta              | `<tr>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | Fila de tabla |
| **Descripción**       | Se emplea para definir cada fila de las tablas de datos |

| Etiqueta              | `<td>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización y eventos |
| **Atributos propios** | `abbr="texto"` Permite describir el contenido de la celda (empleado sobre todo en los navegadores utilizados por personas discapacitadas)<br />`headers="lista_de_id"` Indica las celdas que actúan como cabeceras para esta celda (los títulos de las columnas y filas). Se indica como una lista de valores del atributo "id" de celdas<br />`scope="col, row, colgroup, rowgroup"` Indica las celdas para las que esta celda será su cabecera<br />`colspan="numero"` Número de columnas que ocupa esta celda<br />`rowspan="numero"` Número de filas que ocupa esta celda |
| **Tipo de elemento**  | Celda de tabla |
| **Descripción**       | Se emplea para definir cada una de las celdas que forman las filas de una tabla, es decir, las columnas de la tabla |

De todos los **atributos** disponibles para las celdas, los más utilizados son `rowspan` y `colspan`, que se emplean para construir tablas complejas como las que se ven más adelante. Entre los demás atributos, sólo se utiliza de forma habitual el atributo `scope`, sobre todo con las celdas de cabecera que se ven a continuación.

Normalmente, algunas de las celdas de la tabla se utilizan como **cabecera** de las demás celdas de la fila o de la columna. Para esto, HTML define la etiqueta `<th>` (*table header cell*) para indicar que una celda es cabecera de otras.

| Etiqueta              | `<th>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | `abbr="texto"` Permite describir el contenido de la celda (empleado sobre todo en los navegadores utilizados por personas discapacitadas)<br />`headers="lista_de_id"` Indica las celdas que actúan como cabeceras para esta celda (los títulos de las columnas y filas). Se indica como una lista de valores del atributo `id` de celdas<br />`scope="col, row, colgroup, rowgroup"` Indica las celdas para las que esta celda será su cabecera <br />`colspan="numero"` Número de columnas que ocupa esta celda<br />`rowspan="numero"` Número de filas que ocupa esta celda |
| **Tipo de elemento**  | Celda de tabla |
| **Descripción**       | Se emplea para definir las celdas que son cabecera de una fila o de una columna de la tabla |

Los **atributos** de la etiqueta `<th>` son idénticos que los atributos definidos para la etiqueta `<td>`. En este caso, el atributo más utilizado es `scope`, que permite indicar si la celda es cabecera de la fila o de la columna (`<th scope="row">` y `<th scope="col">` respectivamente).

Por otra parte, HTML define la etiqueta `<caption>` para establecer la leyenda o título de una tabla. La etiqueta debe colocarse inmediatamente después de la etiqueta `<table>` y cada tabla sólo puede incluir una etiqueta `<caption>`.

| Etiqueta              | `<caption>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En línea |
| **Descripción**       | Se emplea para definir la leyenda o título de una tabla |

Las tablas complejas suelen disponer de una estructura irregular que junta varias columnas para formar una columna ancha o une varias filas para formar una fila más alta que las demás. Para fusionar filas o columnas, se utilizan los atributos `rowspan` y `colspan` respectivamente.

Un ejemplo de **código HTML** y una tabla compleja que ha fusionado dos columnas simples para formar una columna más ancha sería:

    [html]
    <table>
    <tr>
      <td colspan="2">A</td>
    </tr>
    <tr>
      <td>B</td>
      <td>C</td>
    </tr>
    </table>

Y un navegador lo visualizaría de esta manera:

![Ejemplo sencillo de fusión de columnas](imagenes/cap08/tabla_fusion_columnas.png)

La primera fila de la tabla está formada sólo por una columna, mientras que la segunda fila está formada por dos columnas. En principio, podría pensarse en utilizar el siguiente código HTML para definir la tabla:

    [html]
    <table>
    <tr>
      <td>A</td>
    </tr>
    <tr>
      <td>B</td>
      <td>C</td>
    </tr>
    </table>

Sin embargo, si se utiliza el código anterior, el navegador visualiza de forma incorrecta la tabla, ya que las tablas en HTML deben disponer de una **estructura regular**. Por lo tanto, si se quieren mostrar menos columnas en una fila, se fusionan mediante el atributo `colspan`, que indica el número de columnas simples que va a ocupar una determinada celda.

En el ejemplo anterior, la celda de la primera fila debe ocupar el espacio de dos columnas simples, por lo que el código HTML debe ser `<td colspan="2">A</td>`.

Un ejemplo de **código HTML** y na tabla HTML que fusiona filas sería:

    [html]
    <table>
    <tr>
      <td>A</td>
      <td rowspan="2">B</td>
    </tr>
    <tr>
      <td>C</td>
    </tr>
    </table>

Y un navegador lo visualizaría de esta manera:

![Ejemplo sencillo de fusión de filas](imagenes/cap08/tabla_fusion_filas.png)

De forma análoga a la **fusión** de columnas del ejemplo anterior, la fusión de filas debe indicarse de forma especial. Como las tablas HTML tienen que ser regulares, todas las columnas deben tener el mismo número de filas. Así, si en el ejemplo anterior se utilizara el siguiente código,

    [html]
    <table>
    <tr>
      <td>A</td>
      <td>B</td>
    </tr>
    <tr>
      <td>C</td>
    </tr>
    </table>

la tabla anterior no se visualizaría correctamente. Como la segunda columna de la tabla ocupa el espacio de las dos filas, el código HTML debe indicar claramente que esa celda va a ocupar dos filas, de manera que todas las columnas de la tabla cuenten con el mismo número de filas.

Utilizando los atributos `rowspan` y `colspan`, es posible diseñar tablas tan complejas como las que se muestran en los siguientes ejemplos.

Ejemplo de fusión de múltiples columnas:

![Ejemplo complejo de fusión de columnas](imagenes/cap08/tabla_fusion_columnas_complejo.png)

El **código HTML** necesario para fusionar las columnas de la tabla anterior sería:

    [html]
    <html>
        <head>
            <title>Ejemplo de columnas fusionadas</title>
        </head>
        <body>
            <h1>Fusión de columnas</h1>
            <table>
            <tr>
              <td colspan="3">A</td>
              <td>B</td>
            </tr>
            <tr>
              <td>C</td>
              <td colspan="2">D</td>
              <td>E</td>
            </tr>
            <tr>
              <td colspan="4">F</td>
            </tr>
            <tr>
              <td>G</td>
              <td>H</td>
              <td>I</td>
              <td>J</td>
            </tr>
            </table>
        </body>
    </html>

Ejemplo de fusión de múltiples filas:

![Ejemplo complejo de fusión de filas](imagenes/cap08/tabla_fusion_filas_complejo.png)

El **código HTML** necesario para fusionar las filas de la tabla anterior sería:

    [html]
    <html>
        <head>
            <title>Ejemplo de filas fusionadas</title>
        </head>
        <body>
            <h1>Fusión de filas</h1>
            <table>
              <tr>
                <td>A</td>
                <td>B</td>
                <td rowspan="3">C</td>
                <td>D</td>
              </tr>
              <tr>
                <td rowspan="2">E</td>
                <td>F</td>
                <td rowspan="3">G</td>
              </tr>
              <tr>
                <td>H</td>
              </tr>
              <tr>
                <td>I</td>
                <td>J</td>
                <td>K</td>
              </tr>
            </table>
        </body>
    </html>

## Tablas avanzadas

Algunas **tablas complejas** están formadas por más elementos que filas y celdas de datos. Así, es común que las tablas más avanzadas dispongan de una **sección de cabecera, una sección de pie y varias secciones de datos**. Además, también es posible agrupar varias columnas de forma lógica para poder aplicar estilos similares a un determinado grupo de columnas.

Un ejemplo clásico de tablas avanzadas es el de las tablas utilizadas en **contabilidad**, como por ejemplo la tabla que muestra el balance de una empresa:

![Ejemplo de tabla compleja correspondiente al balance de una empresa](imagenes/cap08/tabla_balance.png)

Las partes que componen las tablas complejas se definen mediante las etiquetas `<thead>`, `<tbody>` y `<tfoot>`. La cabecera de la tabla se define con la etiqueta `<thead>`, el pie de la tabla se define mediante `<tfoot>` y cada sección de datos se define con una etiqueta `<tbody>`.

| Etiqueta              | `<thead>` `<tbody>` `<tfoot>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplean para agrupar varias filas en una cabecera (*thead*) un pie (*tfoot*) o una sección (*tbody*) de una tabla |

Cada tabla puede contener solamente una cabecera y un pie, pero puede incluir un número ilimitado de secciones. Si se define una cabecera y/o un pie, las etiquetas `<thead>` y/o `<tfoot>` deben colocarse inmediatamente antes que cualquier etiqueta `<tbody>`.

Un ejemplo de **código HTML** con las etiquetas `<thead>`, `<tbody>` y `<tfoot>` sería:

    [html]
    <html>
        <head>
            <title>Ejemplo de tabla avanzada</title>
        </head>
        <body>
          <h3>Análisis de ventas</h3>
          <table summary="Análisis de ventas anuales">
            <caption>Análisis de ventas anuales</caption>
            <thead>
              <tr>
                <th rowspan="2" scope="col">AÑO</th>
                <th colspan="4" scope="col">Expansión de ventas</th>
              </tr>
              <tr>
                <th scope="col">Producto A</th>
                <th scope="col">Producto B</th>
                <th scope="col">Producto C</th>
                <th scope="col">Producto D</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th rowspan="2" scope="col">AÑO</th>
                <th scope="col">Producto A</th>
                <th scope="col">Producto B</th>
                <th scope="col">Producto C</th>
                <th scope="col">Producto D</th>
              </tr>
              <tr>
                <th colspan="4" scope="col">Expansión de ventas</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <th scope="row">N-3</th>
                <td>-</td><td>-</td><td>-</td><td>-</td>
              </tr>
              <tr>
                <th scope="row">N-2</th>
                <td>3</td><td>5</td><td>8</td><td>4</td>
              </tr>
              <tr>
                <th scope="row">N-1</th>
                <td>4</td><td>4</td><td>7</td><td>3</td>
              </tr>
              <tr>
                <th scope="row">N</th>
                <td>5</td><td>7</td><td>6</td><td>2</td>
              </tr>
            </tbody>
          </table>
        </body>
    </html>

Y un navegador lo visualizaría de esta manera:

![Ejemplo de tabla avanzada con cabecera, pie y secciones](imagenes/cap08/tabla_avanzada.png)

Aunque al principio resulta extraño, el elemento `<tfoot>` siempre se escribe antes que cualquier elemento `<tbody>` en el código HTML. De hecho, si la etiqueta `<tfoot>` aparece después de un elemento `<tbody>`, la página no se considera válida.

Esta etiqueta `<tbody>` permite realizar agrupaciones de filas, pero en ocasiones se necesitan agrupar columnas. Aunque su uso no es muy común, HTML define dos **etiquetas similares para agrupar columnas**: `<col>` y `<colgroup>`.

La etiqueta `<col>` se utiliza para asignar los mismos atributos a varias columnas de forma simultánea. De esta forma, la etiqueta `<col>` no agrupa columnas, sino que sólo asigna atributos comunes a varias columnas.

Un ejemplo de **código HTML** con la etiqueta `<col>` sería:

    [html]
    <table summary="Análisis de ventas anuales">
      <caption>Análisis de ventas anuales</caption>
      <col style="width:10%;" />
      <col style="width:30%;" />
      <thead>
        <tr>
          <th scope="col">AÑO</th>
          <th scope="col">Producto A</th>
          <th scope="col">Producto B</th>
          <th scope="col">Producto C</th>
          <th scope="col">Producto D</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">N-3</th>
          <td>-</td><td>-</td><td>-</td><td>-</td>
        </tr>
        <tr>
          <th scope="row">N-2</th>
          <td>3</td><td>5</td><td>8</td><td>4</td>
        </tr>
        <tr>
          <th scope="row">N-1</th>
          <td>4</td><td>4</td><td>7</td><td>3</td>
        </tr>
        <tr>
          <th scope="row">N</th>
          <td>5</td><td>7</td><td>6</td><td>2</td>
        </tr>
      </tbody>
    </table>

Y un navegador lo visualizaría de esta manera:

![Ejemplo de tabla avanzada que usa la etiqueta col](imagenes/cap08/tabla_avanzada_col.png)

Por otra parte, la etiqueta `<colgroup>` se emplea para agrupar de forma estructural varias columnas de la tabla. La forma habitual de indicar el número de columnas que abarca la agrupación es utilizar el atributo `span`, que establece el número de columnas de cada agrupación.

Un ejemplo de **código HTML** con la etiqueta `<colgroup>` sería:

    [html]
    <table summary="Análisis de ventas anuales">
      <caption>Análisis de ventas anuales</caption>
      <colgroup span="1" style="color:red;" />
      <colgroup span="3" style="color:blue;" />
      <thead>
        <tr>
          <th scope="col">AÑO</th>
          <th scope="col">Producto A</th>
          <th scope="col">Producto B</th>
          <th scope="col">Producto C</th>
          <th scope="col">Producto D</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">N-3</th>
          <td>-</td><td>-</td><td>-</td><td>-</td>
        </tr>
        <tr>
          <th scope="row">N-2</th>
          <td>3</td><td>5</td><td>8</td><td>4</td>
        </tr>
        <tr>
          <th scope="row">N-1</th>
          <td>4</td><td>4</td><td>7</td><td>3</td>
        </tr>
        <tr>
          <th scope="row">N</th>
          <td>5</td><td>7</td><td>6</td><td>2</td>
        </tr>
      </tbody>
    </table>

Y un navegador lo visualizaría de esta manera:

![Ejemplo de tabla avanzada que usa la etiqueta colgroup](imagenes/cap08/tabla_avanzada_colgroup.png)

El uso de las etiquetas `<col>` y `<colgroup>` no está muy extendido, ya que la mayoría de navegadores no soportan muchas de sus funcionalidades.

<div class="exercise">
  <p class="title">Ejercicio 11</p>
</div>

[Ver enunciado](#ej11)

<div class="exercise">
  <p class="title">Ejercicio 12</p>
</div>

[Ver enunciado](#ej12)

<div class="exercise">
  <p class="title">Ejercicio 13</p>
</div>

[Ver enunciado](#ej13)