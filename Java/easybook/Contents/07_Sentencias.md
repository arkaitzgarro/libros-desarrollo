# Otras sentencias

## Sentencia break

La sentencia `break` puede encontrarse en sentencias switch o en bucles. Al ejecutarse, deja el ámbito de la sentencia en la que se encuentra y pasa a la siguiente sentencia.
Puede emplearse con etiquetas, especificando sobre qué sentencia se aplica si hay varias anidadas.

    [java]
    etiqueta: sentencia;
    break [etiqueta];

En la siguiente figura se muestra el diagrama de flujo de un bucle while que contiene una sentencia `break`:

![Diagrama de flujo de un bucle `while` que incluye una sentencia `break`](cap07/bucle-while.png)

##  Sentencia continue

La sentencia `continue` se emplea sólo en bucles. Al ejecutarse la iteración en la que se encuentra, el bucle finaliza y se inicia la siguiente. También puede emplearse con etiquetas, especificando sobre que sentencia se aplica si hay varias anidadas.

    [java]
    etiqueta: sentencia;
    continue [etiqueta];

En la siguiente figura se muestra el diagrama de flujo de un bucle while que contiene una sentencia continue:

![Diagrama de flujo de un bucle `while` que incluye una sentencia `continue`](cap07/bucle-while2.png)

Ejemplo de utilización combinada de `break` y `continue` con y sin etiquetas:

    [java]
    uno: for( ... ; ... ; ... ) {
        dos: for( ... ; ... ; ... ) {
            // Grupo de sentencias A 
            sentenciasA; 
            continue; // sigue en el bucle interno
            // Grupo de sentencias B 
            sentenciasB; 
            continue uno;
            // sigue en el principal 
            // Grupo de sentencias C 
            sentenciasC; 
            break uno;
            // sale del principal 
            // Grupo de sentencias D 
            sentenciasD; 
        }
    }

## Tratamiento de excepciones

Una excepción es una situación anómala a la que llega la ejecución de un programa. Estas situaciones anómalas pueden ser el intento de abrir un fichero que no existe, la división por cero o el acceso a un objeto no inicializado.

Java proporciona un mecanismo para detectar y solucionar las excepciones que se puede llegar a producir durante la ejecución de un programa. En Java estamos obligados a tratar las excepciones cuando se producen, bien gestionándolas directamente o bien desentendiéndonos de ellas, pero hasta esto último debemos hacerlo explicitamente.

En Java existen dos grandes tipos de excepciones: los Errores y las Excepciones propiamente dichas:

* Los Errores son situaciones irrecuperables, por ejemplo fallos de la máquina vitual. Ante ellos no hay más alternativa que cerrar la aplicación, y no estamos obligados a gestionarlas.
* Las excepciones son situaciones anómales ante las cuales bien debemos reaccionar o bien nos desentendemos explítamente. Cuando una excepción se produce se acompaña de toda la información relevante para que podamos gestionarla.

Un caso particular son las excepciones que derivan de `RuntimeException`, como por ejemplo `NullPointerException`.

Para gestionar una excepción debe emplearse una sentencia `try`. La sintaxis de la sentencia se muestra a continuación:

    [java]
    try {
        sentencia_1;
        sentencia_2;
        ...
    }  catch (ClaseExcepcion objetoExcepcion) {
        sentencia_a;
        sentencia_b;
        ...
    } catch(IOException e) {
       //Aquí tratamos otro tipo de expeción
    } finally {
        //Aquí realizamos las tareas comunes.
    }

La sentencia comienza por la palabra reservada `try` seguida de una o más sentencias agrupadas entre paréntesis. Dichas sentencias son las que, en principio, pueden dar lugar a una excepción durante su ejecución. La clase `Exception`, que incluye todos los tipos de excepciones de interés, recoge cualquier excepción generada por el bloque `try`. Por ejemplo, determinados métodos como `readLine` generan una excepción si se produce un problema con la entrada o salida de datos. En este caso, se necesita recoger las excepciones de tipo `IOException`. La ejecución de otros metódos, como parseInt, genera un error si la cadena dada como parámetro no puede convertirse en un entero. En este caso, la excepción es de tipo `NumberFormatException`.

A continuación aparece una o más clausulas `catch` que son las *manejadoras* de las excepciones. En cada una de ellas, se necesita especificar lo que hacer cuando ocurre una excepción en particular. Esta parte del código sólo se ejecuta si se ha producido una excepción.

En Java existen muchos tipos de excepciones estándar. Algunas de las excepciones más comunes se muestran en la siguiente tabla.

![Excepciones y significados](cap07/excepciones.png)

Como hemos comentado antes, no es necesario que tratemos las excepciones, pero si no lo vamos a hacer, debemos indicarlo explicitamente. El modo de hacerlo es indicando que el método dentro del cual se puede lanzar una excepción a su vez la *relanza*, como en el siguiente ejemplo:

    [java]
    void metodoLanzador(int a) throws IOException, ClassNotFoundException {...}

### Creación de excepciones propias.

Para crear una excepción propia basta extender la clase Exception o la excepción más adecuada, y en el constructor de la clase llamar a la clase padre con el mensaje que se desee mostrar cuando se produzca la excepción.

Para lanzar una excepción explicitamente, utilizamos la palabra reservada `throw` e indicamos en la declaración del método que puede lanzar la excepción deseada. En el siguiente código se muestra un ejemplo.

    [java]
    public class MiExcepcion extends Excepcion {
        public MiExcepcion() {
            super("Texto de la excepcion");
        }
    }
    
    public class LanzaExcepcion {
        public void metodo() throws MiExcepcion {
            //...
            if(a < b) throw new MiExcepcion();
            //...
        }
    }
    
    public class OtraClase {
        public void metodo() {
            LanzaExcepcion le = new LanzaExcepcion();
            try {
                le.metodo();
            } catch (MiExcepcion e) {
                System.err.println(e.getMessage());
            }
        }
    }

## Operaciones de entrada y salida de datos

Como se ha mostrado en el ejemplo anterior las operaciones de entrada y salida de datos en un programa se llevan a cabo utilizando el paquete `java.io`. La sentencia import `java.io.*`; da acceso a la librería de Java necesaria para cualquier operación de este tipo. Los canales o dispositivos predefinidos para realizar entradas o salidas de datos son los siguientes:

* `System.in`:entrada estándar
* `System.out`:salida estándar
* `System.err`:salida de errores

Los métodos `print` y `println` se emplean para la salida de datos en formato de concatenación de `Strings`. El método `readLine` facilita una forma sencilla para realizar la entrada de datos mediante un objeto `String`. Este objeto toma el valor de la cadena de caracteres que acaben en un final de línea o en un final de archivo. Para poder emplear el método `readLine` es necesario construir un objeto `BufferedReader` sobre un objeto `InputStreamReader`, que a su vez se crea a partir de `System.in`.