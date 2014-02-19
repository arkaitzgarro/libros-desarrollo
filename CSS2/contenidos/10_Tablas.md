# Tablas

## Estilos básicos

Cuando se aplican bordes a las celdas de una tabla, el aspecto por defecto con el que se muestra en un navegador es el siguiente:

![Aspecto por defecto de los bordes de una tabla](cap10/bordes_tabla.png)

El código HTML y CSS del ejemplo anterior se muestra a continuación:

    [css]
    .normal {
      width: 250px;
      border: 1px solid #000;
    }
    
    .normal th, .normal td {
      border: 1px solid #000;
    }

    [html]
    <table class="normal" summary="Tabla genérica">
      <tr>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
        <th scope="col">D</th>
        <th scope="col">E</th>
      </tr>
      ...
    </table>

El estándar CSS 2.1 define dos modelos diferentes para el tratamiento de los bordes de las celdas. La propiedad que permite seleccionar el modelo de bordes es `border-collapse`:

| Propiedad             | `border-collapse`    |
| --------------------: | :------------- |
| **Valores** | collapse \| separate \| inherit |
| **Se aplica a** | Todas las tablas |
| **Valor inicial**  | separate |
| **Descripción**       | Define el mecanismo de fusión de los bordes de las celdas adyacentes de una tabla |

El modelo `collapse` fusiona de forma automática los bordes de las celdas adyacentes, mientras que el modelo `separate` fuerza a que cada celda muestre sus cuatro bordes. Por defecto, los navegadores utilizan el modelo `separate`, tal y como se puede comprobar en el ejemplo anterior.

En general, los diseñadores prefieren el modelo `collapse` porque estéticamente resulta más atractivo y más parecido a las tablas de datos tradicionales. El ejemplo anterior se puede rehacer para mostrar la tabla con bordes sencillos y sin separación entre celdas:

![Ejemplo de propiedad border-collapse](cap10/border-collapse.png)

El código CSS completo del ejemplo anterior se muestra a continuación:

    [css]
    .normal {
      width: 250px;
      border: 1px solid #000;
      border-collapse: collapse;
    }
    
    .normal th, .normal td {
      border: 1px solid #000;
    }

    [html]
    <table class="normal" summary="Tabla genérica">
      <tr>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
        <th scope="col">D</th>
        <th scope="col">E</th>
      </tr>
      ...
    </table>

Aunque parece sencillo, el mecanismo que utiliza el modelo `collapse` es muy complejo, ya que cuando los bordes que se fusionan no son exactamente iguales, debe tener en cuenta la anchura de cada borde, su estilo y el tipo de celda que contiene el borde (columna, fila, grupo de filas, grupo de columnas) para determinar la prioridad de cada borde.

Si se opta por el modelo `separate` (que es el que se aplica si no se indica lo contrario) se puede utilizar la propiedad `border-spacing` para controlar la separación entre los bordes de cada celda.

| Propiedad             | `border-spacing`    |
| --------------------: | :------------- |
| **Valores** | unidad de medida \| inherit |
| **Se aplica a** | Todas las tablas |
| **Valor inicial**  | 0 |
| **Descripción**       | Establece la separación entre los bordes de las celdas adyacentes de una tabla |

Si solamente se indica como valor una medida, se asigna ese valor como separación horizontal y vertical. Si se indican dos medidas, la primera es la separación horizontal y la segunda es la separación vertical entre celdas.

La propiedad `border-spacing` sólo controla la separación entre celdas y por tanto, no se puede utilizar para modificar el tipo de modelo de bordes que se utiliza. En concreto, si se establece un valor igual a `0` para la separación entre los bordes de las celdas, el resultado es muy diferente al modelo `collapse`:

![Ejemplo de propiedad border-spacing](cap10/border-spacing.png)

En la tabla del ejemplo anterior, se ha establecido la propiedad `border-spacing: 0`, por lo que el navegador no introduce ninguna separación entre los bordes de las celdas. Además, como no se ha establecido de forma explícita ningún modelo de bordes, el navegador utiliza el modelo `separate`.

El resultado es que `border-spacing: 0` muestra los bordes con una anchura doble, ya que en realidad se trata de dos bordes iguales sin separación entre ellos. Por tanto, las diferencias visuales con el modelo `border-collapse: collapse` son muy evidentes.

## Estilos avanzados

CSS define otras propiedades específicas para el control del aspecto de las tablas. Una de ellas es el tratamiento que reciben las celdas vacías de una tabla, que se controla mediante la propiedad `empty-cells`. Esta propiedad sólo se aplica cuando el modelo de bordes de la tabla es de tipo `separate`.

| Propiedad             | `empty-cells`    |
| --------------------: | :------------- |
| **Valores** | show \| hide \| inherit |
| **Se aplica a** | Celdas de una tabla |
| **Valor inicial**  | show |
| **Descripción**       | Define el mecanismo utilizado para el tratamiento de las celdas vacías de una tabla |

El valor `hide` indica que las celdas vacías no se deben mostrar. Una celda vacía es aquella que no tiene ningún contenido, ni siquiera un espacio en blanco o un `&nbsp;`.

La siguiente imagen muestra las diferencias entre una tabla normal y una tabla con la propiedad `empty-cells: hide`:

![Ejemplo de propiedad empty-cells](cap10/empty-cells.png)

Desafortunadamente, Internet Explorer 6 y las versiones anteriores no interpretan correctamente esta propiedad y muestran el ejemplo anterior de la siguiente manera:

![Internet Explorer no soporta la propiedad empty-cells](cap10/empty-cells2.png)

Por otra parte, el título de las tablas se establece mediante el elemento `<caption>`, que por defecto se muestra encima de los contenidos de la tabla. La propiedad `caption-side` permite controlar la posición del título de la tabla.

| Propiedad             | `caption-side`    |
| --------------------: | :------------- |
| **Valores** | top \| bottom \| inherit |
| **Se aplica a** | Los elementos caption |
| **Valor inicial**  | top |
| **Descripción**       | Establece la posición del título de la tabla |

El valor `bottom` indica que el título de la tabla se debe mostrar debajo de los contenidos de la tabla. Si también se quiere modificar la alineación horizontal del título, debe utilizarse la propiedad `text-align`.

A continuación se muestra el código HTML y CSS de un ejemplo sencillo de uso de la propiedad `caption-side`:

    [css]
    .especial {
      caption-side: bottom;
    }

    [html]
    <table class="especial" summary="Tabla genérica">
      <caption>Tabla 2.- Título especial</caption>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
      </tr>
      ...
    </table>

La siguiente imagen muestra el resultado de visualizar el ejemplo anterior en cualquier navegador:

![Ejemplo de propiedad caption-side](cap10/firefox.png)


<div class="exercise">
  <p class="title">Ejercicio 11</p>
</div>

[Ver enunciado](#ej11)