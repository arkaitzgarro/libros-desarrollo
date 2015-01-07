# Ejercicios de CSS 3

## Capítulo 2

### Ejercicio 1 ## {#ej01}

Dado el siguiente código HTML, y utilizando las pseudo-clases `first-child`, `first-of-type`, `nth-of-type`, `nth-last-of-type`, `last-of-type` y `last-child` conseguir el siguiente resultado:

    [html]
    <html>
    <head>
        <title>Ejercicio de pseudo-clases</title>
        <style type="text/css">
            
        </style>
    </head>
    <body>
        <ul>
            <li>Primero</li>
            <li>Segundo</li>
            <li>Tercero</li>
            <li>Cuarto</li>
            <li>Quinto</li>
        </ul>
    </body>
    </html>

![Aspecto tras aplicar los estilos utilizando las pseudo-clases](cap12/ej01.png)

## Capítulo 5

### Ejercicio 2 ## {#ej02}

Dados el siguiente código HTML y CSS base, aplicar las reglas CSS necesarias para conseguir el siguiente aspecto:

![Estado final tras aplicar los estilos de borde](cap12/ej06.png)

[Descargar los ficheros fuente](snippets/cap12/ej06.html)

### Ejercicio 3 ## {#ej03}

Dados el siguiente código HTML y CSS base, aplicar las reglas CSS necesarias para conseguir el siguiente aspecto:

![Estado final tras aplicar los estilos de sombra](cap12/ej07.png)

[Descargar los ficheros fuente](snippets/cap12/ej07.html)

### Ejercicio 4 ## {#ej04}

Dados el siguiente código HTML y CSS base, aplicar las reglas CSS necesarias para conseguir el siguiente aspecto:

![Estado final tras definir fondos múltiples](cap12/ej08.png)

[Descargar los ficheros fuente](snippets/cap12/ej08.zip)

## Capítulo 7

### Ejercicio 5 ## {#ej05}

Dados el siguiente código HTML y CSS base, aplicar las reglas CSS necesarias para conseguir el siguiente aspecto:

![Estado final tras aplicar efectos de fuentes](cap12/ej09.png)

[Descargar los ficheros fuente](snippets/cap12/ej09.html)

## Capítulo 9

### Ejercicio 6 ## {#ej06}

Dados el siguiente código HTML y CSS base, aplicar los *Media Query* necesarios para obtener el comportamiento mostrado en las imágenes.

![Aspecto de la web a pantalla completa](cap12/ej0201.png)

![Aspecto de la web en una pantalla de 1000px](cap12/ej0202.png)

![Aspecto de la web en una pantalla de 480px](cap12/ej0203.png)

[Descargar los ficheros fuente](snippets/cap12/ej02.zip)

## Capítulo 10

### Ejercicio 7 ## {#ej07}

Dados el siguiente código HTML y CSS base, crear y aplicar las siguientes transformaciones. Utilizar únicamente selectores específicos de CSS 3:

* Desplazar la primera caja 100px hacia la derecha, y 50px hacia debajo desde su posición original.
* Incrementar el tamaño de la segunda caja, haciéndola el doble de grande.
* Rotar la tercera caja en 45º, tanto desde su centro de coordenadas como desde la esquina superior izquierda.
* Crear un paralelogramo con la cuarta caja, cuyo ángulo de inclinación sea de 25º.

[Descargar los ficheros fuente](snippets/cap12/ej04.html)

## Capítulo 11

### Ejercicio 8 ## {#ej08}

Dados el siguiente código HTML y CSS base, crear las transiciones necesarias para pasar del estado inicial al final, aplicando las siguientes transformaciones:

* Rotar los elementos 270º.
* Intercambiar las posiciones de las cajas 1 y 2, 3 y 4.
* Cambiar el tamaño de `100px` a `50px`.
* Cambiar el color de fondo de azul a rojo.
* Cambiar el color del texto de negro a amarillo.
* Cambiar el tamaño de letra de `20px` a `18px`.

Utilizar en cada caso, una duración y función de tiempo diferentes.

![Estado inicial antes de la transición](cap12/ej0501.png)

![Estado final tras la transición](cap12/ej0502.png)

[Descargar los ficheros fuente](snippets/cap12/ej05.html)

## Capítulo 12

### Ejercicio 9 ## {#ej09}

Dados el siguiente código HTML y CSS base, crear las animaciones necesarias para simular un efecto de nieve. Utilizad al menos dos animaciones:

* La primera para simular la caida de los copos de nieve.
* La segunda para hacer desaparecer los copos según van llegando al suelo, utilizando la propiedad `opacity`.

La animación debe ejecutarse de manera infinita.

![Copos de nieve en movimiento](cap12/ej03.png)

[Descargar los ficheros fuente](snippets/cap12/ej03.zip)

## Ejercicios finales

### Ejercicio final 1 ## {#final01}

Dados el siguiente código HTML y CSS base, aplicar las animaciones y transformaciones necesarias para conseguir el siguiente efecto:

* Al cargarse la página, únicamente se mostrarán los recuadros con las imágenes, ocultando el título, texto, enlace a "Leer más" y el fondo naranja.
* Al pasar con el ratón sobre la imagen, debe ocurrir lo siguiente:
    * La imagen de fondo aumentará su tamaño, dando la impresión de que se acerca.
    * Se mostrará el fondo naranja, de manera progresiva.
    * El título aparecerá por la parte superior de la imagen, hasta colocarse en su lugar.
    * El párrafo aparecerá por la parte inferior de la imagen, hasta colocarse en su lugar.
    * Se mostrará el enlace "Leer más", de manera proresiva.

![Estado final tras realizar las aminaciones y transformaciones](final/final01.png)

[Descargar los ficheros fuente](snippets/final/final01.zip)

### Ejercicio final 2 ## {#final02}

Dados el siguiente código HTML y CSS base, simular el comportamiento de un reloj de aguja:

![Reloj marcando las horas, minutos y segundos](final/final02.png)

[Descargar los ficheros fuente](snippets/final/final02.zip)