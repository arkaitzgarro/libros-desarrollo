# Técnicas básicas con AJAX

## Listas desplegables encadenadas

### Contexto

Algunas aplicaciones web disponen de varias listas desplegables encadenadas. En este tipo de listas, cuando se selecciona un elemento de la primera lista desplegable, se cargan en la segunda lista unos valores que dependen del valor seleccionado en la primera lista.

El mayor inconveniente de este tipo de listas se produce cuando existen un gran número de opciones posibles. Si se considera por ejemplo el caso de una tienda, en la primera lista desplegable se pueden mostrar decenas de productos y en la segunda lista se muestran los diferentes modelos de cada producto y sus precios.

Si todos los elementos de las listas desplegables se almacenan mediante arrays de JavaScript en la propia página, los tiempos de carga se pueden disparar y hacerlo completamente inviable.

Por otra parte, se puede optar por recargar completamente la página cada vez que se selecciona un valor diferente en la primera lista desplegable. Sin embargo, recargar la página entera cada vez que se selecciona un valor, aumenta la carga en el servidor y el tiempo de espera del usuario.

Una posible solución intermedia consiste en actualizar las listas desplegables mediante AJAX. Los valores de la primera lista se incluyen en la página web y cuando se selecciona un valor de esta lista, se realiza una consulta al servidor que devuelve los valores que se deben mostrar en la otra lista desplegable.

### Solución propuesta

A continuación se muestra el esquema gráfico del funcionamiento de la solución propuesta:

![Solución propuesta para las listas encadenadas con AJAX](cap03/desplegables.png)

<div class="exercise">
  <p class="title">Ejercicio 6</p>
</div>

[Ver enunciado](#ej06)

## Teclado virtual

### Contexto

Algunas aplicaciones web multi-idioma disponen de la posibilidad de introducir información en muchos idiomas diferentes. El principal problema de estas aplicaciones es que el teclado físico que utiliza el usuario no siempre corresponde al idioma en el que se quieren introducir los contenidos.

La solución habitual de este problema consiste en mostrar un teclado virtual en la pantalla que muestre el valor correcto para cada tecla del idioma seleccionado por el usuario.

### Solución propuesta

A continuación se muestra el aspecto gráfico del teclado virtual que se va a construir mediante AJAX:

![Aspecto final del teclado virtual construido con AJAX](cap03/teclado-completo.png)

<div class="exercise">
  <p class="title">Ejercicio 8</p>
</div>

[Ver enunciado](#ej08)

## Autocompletar

### Contexto

Algunas veces, se presenta al usuario un cuadro de texto en el que tiene que introducir un valor que pertenece a un grupo muy grande de datos. Algunos casos habituales son: una dirección de correo electrónico que pertenezca a la libreta de direcciones del usuario, el nombre válido de un municipio de un país, el nombre de un empleado de una empresa grande, etc.

En la mayoría de casos, utilizar una lista desplegable que muestre todos los valores es completamente inviable, ya que pueden existir miles de posibles valores. Por otra parte, un cuadro de texto simple resulta de poca utilidad para el usuario. La solución consiste en combinar un cuadro de texto y una lista desplegable mediante AJAX.

Al usuario se le presenta un cuadro de texto simple en el que puede introducir la información. A medida que el usuario escribe en el cuadro de texto, la aplicación solicita al servidor aquellos términos que estén relacionados con lo escrito por el usuario. Cuando la aplicación recibe la respuesta del servidor, la muestra al usuario a modo de ayuda para autocompletar la información.

### Solución propuesta

A continuación se muestra la interacción del sistema de autocompletado propuesto:

![Interacción completa del usuario con el sistema de autocompletado](cap03/autocompletar.png)

