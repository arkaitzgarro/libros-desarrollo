# Clases estándar de Java (II)

Otra clase estándar muy emplea en Java es la clase *array* o *vector*. El término español *vector* para referirse a esta clase de objetos puede dar lugar a confusión ya que, como se verá más adelante, existe una clase `Vector` predefinida en Java. En este caso y sin que sirva de precedente, es conveniente emplear el término inglés *array*.

## Objetos de la clase array

Un **objeto** de la clase predefinida *array* permite representar una secuencia lineal y finita de elementos del mismo tipo. Estos elementos pueden ser de tipo primitivo o pertenecientes a otras clases. Los arrays son objetos con características propias. Además del conjunto de elementos del mismo tipo, un objeto de tipo *array* almacena en memoria una constante numérica entera que representa el número de elementos o tamaño del *array*.

La declaración de un puntero o referencia a un *array* se lleva a cabo de la siguiente manera:

    [java]
    tipoElemento [] identificadorInstancia;

Por ejemplo, la declaración de un puntero o referencia a un *array* de números enteros:

    [java]
    int [] p; // se declara el puntero o referencia del array de enteros

Como ocurre con los demás objetos, la ejecución de la sentencia anterior sólo crea la referencia del *array*, pero no el *array* en sí.

![Creación de la referencia `p`](cap11/referencia-p.png)

En la declaración del identificador de la variable tampoco se especifica el tamaño del *array* a referenciar. El tamaño del *array* se declara y establece cuando se crea la instancia *array*. La creación de un vector o *array*, una vez declarado su referencia se hace de la siguiente forma:

    [java]
    identificadorInstancia = new tipoElemento [numeroElementos];

Por ejemplo:

    [java]
    p = new int [5]; // se crea el array de 5 enteros referenciado por p

De esta manera, se reserva espacio para todos los elementos del *array*: 5 valores enteros.

![Creación del array de enteros cuya dirección de memoria es almacenada en la referencia `p`](cap11/array-enteros.png)

La creación de una referencia/puntero y del *array* de enteros al que apunta puede llevarse a cabo de forma simultánea en la misma sentencia:

    [java]
    int [] p = new int [5]; // se declara el puntero y se crea el vector

## Operaciones con arrays

Puede accederse al tamaño en el código fuente del programa mediante el **atributo** `length` que devuelve el número de elementos de un *array* (`identificadorArray.length`).

El acceso a cada elemento del *array* se realiza con el identificador de la instancia, la pareja de corchetes y su índice (un valor numérico **entero**), considerando que el primer elemento tiene índice 0:

    [java]
    // Al primer elemento del array se le asigna el valor -15
    p[0] = -15;
    // Al segundo elemento del array se le asigna el valor 26
    p[1] = 26;
    // Al tercer elemento del array se le asigna el valor 34
    p[2] = 34;

![Identificación y asignación de valores a algunos elementos del *array*](cap11/elementos-array.png)

Por lo tanto, a un *array* de n elementos le corresponde siempre un índice válido dentro del intervalo [0 ... n-1]. Un error muy común es intentar acceder al elemento de índice `n`, que no existe (se producirá un error de ejecución *out of bounds*). Para especificar el índice de un elemento pueden emplearse tanto constantes como variables de tipo entero.

Otro error es tratar de emplear el identificador del *array* como si fuera un dato de tipo primitivo. Por ejemplo, la sentencia

    [java]
    p = p + 34;

generará un error de compilación.

Se suelen emplear bucles cuando se quiere trabajar con todos los elementos de un *array*. El siguiente ejemplo muestra como trabajar con todos los elementos de dos *arrays* de números (uno de valores enteros y otro de valores reales). El segundo de ellos almacena la raiz cuadrada de los valores almacenados en el primero:

    [java]
    /** 
     * ArrayRaices: Ejemplo de uso de arrays
     */
    public class ArrayRaices { 
        public static void main (String [] args ) {
            int [] numero = new int[10]; // Array de valores enteros
            double [] raiz = new double[10]; // Array de valores reales
            
            for (int i=0; i<numero.length; i++) {
                numero[i] = i+1; 
                raiz[i] = Math.sqrt(numero[i]);
                System.out.println(numero[i] + " : " + raiz[i]);
            }
        }
    }
    

Es importante ver que el bucle `for` emplea la expresión `i<numero.length` como condición de término.

También puede llevarse a cabo la declaración e inicialización simultánea de un *array* (con los valores correspondientes separados por comas y entre llaves) en la misma sentencia de código. Por ejemplo:

    [java]
    double [] x = {1.5, 2.3, -0.6, 4.8};

Este tipo de inicialización sólo es válida en la sentencia de declaración de la referencia del *array*. El resultado de la ejecución de la sentencia anterior se muestra en la siguiente figura.

![Creación de la referencia, del array de números reales e inicialización de los valores de sus elementos al ejecutarse una única sentencia](cap11/referencia-array.png)

## Array de objetos

El uso de vectores no tiene por qué restringirse a elementos de tipo primitivo. Por ejemplo, pueden crearse sendas referencias a *arrays* de referencias de la clase `precio` (tal y como se declaró esta clase en un ejemplo anterior) o de la clase `String`:

    [java]
    precio [] catalogo; catalogo = new precio [5]; catalogo[0] = new precio();
    // Creacion de la referencia // Creación del array de referencias // Creación del primer elemento/instancia precio

El resultado de la ejecución de las sentencias anteriores se muestra en la siguiente figura. Primero se crea la referencia al array de punteros, luego se crea el array de punteros y, finalmente, se crea la instancia de la clase precio y se almacena su dirección de memoria en el primer elemento del array de punteros.

![Creación de la referencia, del *array* de referencias y de la instancia de la clase precio referenciada por el primer elemento del *array*](cap11/referencia-array2.png)

En el caso de trabajar con un *array* de `String` entonces podrían emplearse las siguientes sentencias:

    [java]
    String [] Tabla;            // Creacion de la referencia 
    Tabla = new String [10];    // Creación del array de referencias 
    Tabla[0] = new String();    // Creación del primer elemento/instancia String

En el siguiente código se muestra un ejemplo de cómo trabajar con el *array* de objetos de la clase `precio`:

    [java]
    /**
     * ArrayPrecios: Ejemplo de uso de arrays de objetos
     */
    public class ArrayPrecios { 
        public static void main (String [] args) {
            Precio [] catalogo; // Creacion de la referencia 
            catalogo = new Precio [5]; // Creacion array de referencias precio
            
            for (int i=0; i<catalogo.length; i++) { 
                catalogo[i] = new precio(); // Creacion del elemento i-esimo
                catalogo[i].pone(10*Math.random());
                System.out.println("Producto "+ i + " : " + catalogo[i].da());
            }
            
            // Busqueda del maximo precio 
            double maximo=catalogo[0].da(); 
            for (int i=1; i<catalogo.length; i++) {
                if (maximo<catalogo[i].da())
                    maximo=catalogo[i].da();
            }
             System.out.println("El mas caro vale "+ maximo +" euros");
        }
    }

## Arrays multidimensionales

En Java también se puede trabajar con arrays multidimensionales, llamados comúnmente matrices. Por ejemplo, la declaración de un puntero a una matriz bidimensional de números enteros se puede realizar de la siguiente manera incluyendo un par de corchetes adicionales en la declararación de la referencia:

![Creación de la referencia `m`](cap11/referencia-m.png)

La creación de la matriz (una vez declarado su puntero) puede hacerse según muestra la siguiente sentencia:

    [java]
    m = new int [5][4]; // Crea una matriz para almacenar 5 x 4 enteros

En este caso se indican en el par de cochetes adicional el número de elementos según la segunda dimensión. El resultado de la ejecución de la sentencia anterior se muestra en la siguiente figura.

![Creación de un array bidimensional de 5 x 4 enteros](cap11/array-bidimensional.png)

La ejecución del código anterior reserva espacio en memoria durante la ejecución del programa para una matriz de 5 x 8 valores numéricos enteros. En realidad se reserva espacio en memoria para un array de cinco punteros que, a su vez, almacenan la dirección de memoria de otros tantos arrays de cuatro números enteros. Para referenciar a cada uno de los elementos de los arrays de enteros es necesario utilizar el identificador del puntero seguido de los correspondientes índices entre corchetes. Por ejemplo, como en las siguientes sentencias:

    [java]
    m[0][0] = 34;
    m[0][1] = 46;
    m[0][2] = 13;
    m[0][3] = -8;
    m[1][0] = 5;
    m[1][1] = 56;
    m[1][2] = -3;

Por otro lado, también puede llevarse a cabo la declaración de la referencia, creación del array multidimensional e inicialización simultánea de sus elementos. Por ejemplo, la siguiente sentencia genera una matriz 2 x 3 de números enteros:

    [java]
    // Matriz de dos filas y tres columnas 
    int [][] a = { {1, 2, 3}, {4, 5, 6} }; 
    // Por ejemplo, el elemento a[1][0] contiene el valor 4

![Creación de un array bidimensional de 2 x 3 números enteros e inicialización de sus elementos](cap11/array-bidimensional2.png)

El número de elementos de los *arrays* referenciados puede especificarse para cada uno de ellos y ser diferente entre sí. Por ejemplo, la ejecución de la sentencia:

    [java]
    int [][] b = { {1, 2, 3}, {4, 5, 6, 7}, {8, 9} };

genera la estructura de datos representada en la siguiente figura. En dicha estructura no existen, por ejemplo, los elementos `b[0][3]` ni `b[2][2]`.

![Creación de un array bidimensional no rectangular](cap11/array-bidimensional3.png)

En Java es posible trabajar con estructuras de tipo *array* con más de dos dimensiones añadiendo simplemente los índices (y corchetes o llaves) que sean necesarios. Por ejemplo, la siguiente sentencia crea una matriz tridimensional 2 x 2 x 3 de números enteros:

    [java]
    int [][][] c = { { {1, 2, 3}, {4, 5, 6} }, { {7, 8, 9}, {10, 11, 12} } }

El número de pares de **corchetes** en el término de la izquierda y de **niveles de llaves** en el término de la derecha debe coincidir e indica el de dimensiones de la matriz. En principio, en Java no hay límite para el número de dimensiones que pueden utilizarse en una matriz.