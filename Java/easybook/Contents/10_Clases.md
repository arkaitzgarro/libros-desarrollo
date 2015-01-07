# Clases estándar de Java (I)

Uno de los puntos fuertes de Java es la gran cantidad de clases **predefinidas** que posee. Dichas clases pueden ser utilizadas por los programadores sin necesidad de *reinventar la rueda*. En este capítulo se presentan algunas de las clases predefinidas de Java que se suelen utilizar más en la construcción de programas.

## Clases contenedoras o wrappers

En Java existen una serie de clases predefinidas equivalentes a los tipos primitivos denominadas *wrappers*, clases contenedoras o envoltorios. Como muestra la siguiente tabla el identificador de cada una de estas clases es el mismo que el del tipo primitivo correspondiente pero con la letra inicial en mayúsculas (salvo `int` - `Integer` y `char` - `Character`). Cada una de estas clases declaran un conjunto de métodos de gran utilidad.

![Tipos primitivos y clases contenedoras correspondientes](cap10/tipos-primitivos.png)

El uso de estas clases puede ser especialmente interesante para realizar determinadas operaciones mediante los métodos que implementan. En la siguiente sección se analiza el uso de la clase `Character`.

## Objetos de la clase `Character`

La clase predefinida `Character` permite trabajar con instancias a las que se les puede asociar un único carácter Unicode. Esta clase incluye un conjunto de métodos que facilitan la manipulación de datos de tipo primitivo `char`.

![Métodos de la clase `Character`](cap10/character.jpg)

El siguiente código muestra como crear referencias e instancias de la clase `Character`:

    [java]
    Character a1; 
    a1 = new Character('A');
    Character a2 = new Character('B');

![Otros métodos de la clase `Character`](cap10/character2.png)

## Objetos de la clase `String`

`String` es una clase predefinida y especial de Java definida en la librería o paquete `java.lang` y orientada a manejar cadenas constantes de caracteres. Una instancia de la clase `String` es inmutable, es decir, una vez que se ha creado y se le ha asignado un valor, éste no puede modificarse (añadiendo, eliminando o cambiando caracteres). El siguiente código muestra diferentes ejemplos de creación de referencias e instancias de la clase `String`:

    [java]
    String cortesia = new String("Buenos dias"); 
    // O bien, al ser una clase muy habitual en la forma abreviada:
    String saludo = "Hola"; 
    // O tambien: 
    String despedida; 
    despedida = "Adios";

Como se ha visto anteriormente, las constantes de la clase `String` o cadenas literales se indican entre comillas dobles. Estas comillas no se consideran parte de la cadena.

![Representacion gráfica de los objetos de la clase `String` en memoria](cap10/string.png)

## Operaciones con instancias de la clase `String`

Al ser un objeto, una instancia de la clase `String` no sigue las normas de manipulación de los datos de tipo primitivo con excepción del operador concatenación. El operador + realiza una concatenación cuando, al menos, un operando es un `String`. El otro operando puede ser de un tipo primitivo. El resultado es una nueva instancia de tipo `String`. Por ejemplo:

    [java]
    "casa" + "blanca"   // Genera "casablanca"
    "capitulo" + 5      // Genera "indice5"
    5 + "capitulo"      // Genera "5capitulo"
    "x" + 2 + 3         // Genera "x23"
    2 + 3 + "x"         // Genera "5x": cuidado con la prioridad de los operadores
    2 + (3 + "x")       // Genera "23x"

También puede emplearse el operador `+=`, de forma que la sentencia `a+=b` es equivalente a la sentencia `a = a+b`.

La comparación de dos objetos `String` no se realiza con el operador igualdad (`==`), ya que se compararían las referencias, sino que se realiza con el método `equals`, de forma que `cadena1.equals(cadena2)` devuelve `true` si `cadena1` y `cadena2` hacen referencia a un mismo valor. Los métodos más importantes de la clase `String` se resumen en la siguiente tabla.

![Métodos de la clase `String`](cap10/string2.png)

Para visualizar por pantalla el contenido de un objeto `String` pueden emplearse los métodos `print` y `println` de la clase estándar `System.out`.

    [java]
    if (saludo.equals(despedida))
        System.out.println(saludo);
    else
        System.out.println(despedida);

La longitud de una cadena puede obtenerse con el método `length` perteneciente a la clase `String` que devuelve un valor entero que indica el número de caracteres que componen la cadena:

    [java]
    String despedida = "Adios"; 
    int longitud = despedida.length(); // longitud toma el valor 5
    longitud = "Hasta luego".length(); // longitud toma el valor 11

Una cadena de longitud igual a `0`, que no contiene ningún carácter, se denomina cadena vacía y se representa como "". Por otro lado, el método `charAt` devuelve el carácter cuya posición indica el parámetro de la llamada, teniendo en cuenta que las posiciones se indican con valores enteros y que el `0` corresponde al primer carácter de la cadena.

    [java]
    char c = despedida.charAt(2); // c toma el valor 'i'

![Posiciones correspondientes a los caracteres que componen una cadena](cap10/caracteres.png)

## Otros métodos para trabajar con objetos de la clase `String`

El método `substring`, con los parámetros enteros `inicio` y `fin`, devuelve una nueva subcadena contenida en la de origen. Si sólo se le indica el primer parámetro, devuelve la cadena a partir del carácter indicado hasta el final de la cadena original. Por ejemplo:

    [java]
    String despedida = "Adios";
     String s1 = despedida.substring(1,3); // s1 toma el valor "di"
    String s2 = despedida.substring(1);   // s2 toma el valor "dios"

El listado compelto de métodos disponibles para la clase `String`, puede encontrarse en la API oficial de Java [http://docs.oracle.com/javase/7/docs/api/java/lang/String.html](http://docs.oracle.com/javase/7/docs/api/java/lang/String.html).