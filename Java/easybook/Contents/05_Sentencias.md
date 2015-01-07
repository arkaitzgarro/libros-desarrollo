# Sentencias condicionales

## Sentencias de control del flujo de un programa

Cuando se escribe un programa, se introduce la secuencia de sentencias dentro de un archivo. Sin sentencias de control del flujo, el intérprete ejecuta las sentencias conforme aparecen en el programa de principio a fin. Las sentencias de control de flujo se emplean en los programas para ejecutar sentencias condicionalmente, repetir un conjunto de sentencias o, en general, cambiar el flujo secuencial de ejecución. Las sentencias selectivas o condicionales se verán en este capítulo y las sentencias repetitivas en el siguiente.

## Sentencia if-else

Es una bifurcación o sentencia condicional de una o dos ramas. La sentencia de control evalúa la condición lógica o booleana. Si esta condición es cierta entonces se ejecuta la sentencia o sentencias (1) que se encuentra a continuacion. En caso contrario, se ejecuta la sentencia (2) que sigue a `else` (si ésta existe). La sentencia puede constar opcionalmente de una o dos ramas con sus correspondientes sentencias.

Sintaxis:

    [java]
    if (expresionLogica) {
        sentencia_1; 
    }

o bien (con dos ramas):

    [java]
    if (expresionLogica) {
        sentencia_1;
    } else {
        sentencia_2;
    }

La `expresionLogica` debe ir entre paréntesis. Las llaves sólo son obligatorias si las sentencias (1) ó (2) son compuestas (las llaves sirven para agrupar varias sentencias simples).

La parte `else` y la sentencia posterior entre llaves no son obligatorias. En este caso quedaría una sentencia selectiva con una rama.

![Flujograma de la sentencia if. Con una rama (a la izquierda) y con dos ramas (a la derecha)](cap05/sentencia-if.png)

Un ejemplo muy sencillo que muestra este tipo de sentencia es el siguiente:

    [java]
    // Codigo autoexplicativo
    if (a>b) {
        System.out.println("a es mayor que b"); 
    }  else { 
        System.out.println("a no es mayor que b");
    }

Todo programa o aplicación independiente de Java debe declarar un método principal con la siguiente cabecera:

    [java]
    public static void main (String [] args)

Esta declaración indica que al método `main` se le transfiere un vector de cadenas, `args`, (*array* de *strings*). Este vector contiene todos los parámetros o argumentos indicados en la línea de comandos al realizar la ejecución del intérprete de Java seguido del nombre de la clase a ejecutar. El primer elemento de este vector es args[0]. El tamaño del vector podría determinarse añadiendo .length a su identificador. Como el índice del primer elemento del vector es 0, si el tamaño del vector es n, entonces el último elemento del vector tiene índice n-1. En el ejemplo anterior de ejecución del programa, args[0] vale "4".