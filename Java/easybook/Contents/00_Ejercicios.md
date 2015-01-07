# Ejercicios

## Capítulo 4 Variables y operadores

### Ejercicio 1 ## {#ej01}

Crear dos variables de cualquiera de los tipos básicos, dar un valor a la primera y a continuación asigne la segunda a la primera. Imprimir por pantalla las dos variables. Cambiar el valor de la segunda variable y volver a imprimir las variables por pantalla. ¿Qué es lo que ocurre?

### Ejercicio 2 ## {#ej02}

A partir de una variable num1 con valor inicial 12 y una variable num2 con valor inicial 4, crear nuevas variables que almacenen el resultado de realizar la suma, resta, multiplicación, división y resto de num1 y num2. Mostrar el valor de las nuevas variables por pantalla.

### Ejercicio 3 ## {#ej03}

Construir un programa que, dado el radio de una esfera, calcule y devuelva por pantalla el valor de la superficie y el volumen de la esfera correspondiente. Para obtener el valor de PI, utilizar la variable estática `Math.PI`.

Volumen esfera = (4/3)*PI*R3

Superficie esfera = 4*PI*R2

### Ejercicio 4 ## {#ej04}

Construir un programa que dado el peso (en kilogramos) y la altura de una persona (en metros) calcule y muestre por pantalla su Indice de Masa Corporal (IMS) o índice de Quetelet. Este índice pretende determinar el intervalo de peso más saludable que puede tener una persona. El valor de este índice se calcula mediante la siguiente expresión:

`IMS = peso/altura2 `

Se suele establecer un intervalo de 18 a 25 como saludable en personas adultas. Para la realización de ejercicios, en los que el usuario deba introducir datos por teclado, es posible utilizar las siguientes instrucciones para leer los datos por teclado:

    [java]
    Scanner entrada = new Scanner(System.in);
    int num = entrada.nextInt();

## Capítulo 5 Sentencias condicionales

### Ejercicio 5 ## {#ej05}

Definir dos variables num1 y num2 e implementar un programa que asigne un valor a cada una, y obtenga el mayor de los dos, mostrando el resultado por pantalla.

### Ejercicio 6 ## {#ej06}

Construir un programa que calcule el índice de masa corporal de una persona (IMC = peso [kg] / altura2[m]) e indique el estado en el que se encuentra esa persona en función del valor de IMC:

| Valor de IMC              | Diagnóstico    |
| --------------------: | :------------- |
| < 16 | Criterio de ingreso en hospital |
| de 16 a 17 |  Infrapeso |
| de 17 a 18 |  Bajo peso
| de 18 a 25 |  Peso normal (saludable)
| de 25 a 30 |  Sobrepeso
| de 30 a 35 |  Sobrepeso crónico
| de 35 a 40 |  Obesidad premórbida
| > 40 |    Obesidad mórbida

Nota 1: se recomienda el empleo de sentencias `if–else` anidadas.

Nota 2: Los operando (peso y altura) deben ser introducidos por teclado por el usuario.

### Ejercicio 7 ## {#ej07}

Construir un programa que simule el funcionamiento de una calculadora que puede realizar las cuatro operaciones aritméticas básicas (suma, resta, producto y división) con valores numéricos enteros. El usuario debe especificar la operación con el primer carácter del primer parámetro de la línea de comandos: S o s para la suma, R o r para la resta, P, p, M o m para el producto y D o d para la división. Los valores de los operandos se deben indicar en el segundo y tercer parámetros.

## Capítulo 6 Bucles

### Ejercicio 8 ## {#ej08}

Construir un programa que visualice por pantalla todos los caracteres correspondientes a letras minúsculas.

### Ejercicio 9 ## {#ej09}

Construir un programa que calcule el factorial de un valor numérico introducido como parámetro o argumento en la línea de comandos.

### Ejercicio 10 ## {#ej10}

Construir un programa en el que, utilizando un bucle `for`, se escriba por pantalla una tabla de conversión de grados Fahrenheit a Celsius, para los valores de 0 hasta 300 grados, en intervalos de 20. La regla de conversión es la siguiente:

`ªC = (5/9)(ºF - 32)`

### Ejercicio 11 ## {#ej11}

Definir un array bidimensional para representar una agenda semanal, donde se contemplen los 7 días de la semana y las 24 horas de cada día. Utilizar bucles for anidados para inicializar la agenda a: "No tengo planes.". Añadir "planes" a la agenda y mostrar el resultado por pantalla.

### Ejercicio 12 ## {#ej12}

Implementar un programa en el que, utilizando un bucle `while`, se escriban por pantalla los 51 primeros números de la sucesión de Fibonacci, definida por recurrencia como sigue:

    [java]
    f0 = 0
    f1 = 1
    fn+2 = fn+1 + fn

### Ejercicio 13 ## {#ej13}

Construir un programa en el que se pida al usuario dos números enteros positivos, n y m, y usando un bucle `for`, escriba el valor de n elevado a m.

### Ejercicio 14 ## {#ej14}

Construir un programa en el que se pida al usuario un número entero positivo n (validar que lo sea), y usando un bucle `while`, escriba por pantalla el valor del factorial de n.

### Ejercicio 15 ## {#ej15}

Construir un programa que simule el juego de la adivinanza de un número. El ordenador debe generar un número aleatorio entre 1 y 100 y el usuario tiene cinco oportunidades para acertarlo. Después de cada intento el programa debe indicarle al usuario si el número introducido por él es mayor, menor o igual al número a adivinar, y el número de intentos restantes.

Nota: para generar el valor aleatorio puede emplearse la sentencia:

    [java]
    int x  = (int) (100*Math.random()+1);

## Capítulo 7 Arrays

### Ejercicio 16 ## {#ej16}

Construir un programa que pida al usuario una serie de números enteros, los almacene en un array, y obtenga el máximo y el mínimo de los valores almacenados.

### Ejercicio 17 ## {#ej17}

Construir un programa que pida al usuario una serie de números enteros, los almacene en un array, e indique en pantalla si dicho array es capicúa, es decir, si la secuencia de sus elementos es igual vista de delante hacia atrás y de detrás hacia delante.

### Ejercicio 18 ## {#ej18}

Construir un programa que pida al usuario dos vectores de números enteros v1 y v2, y que construya un nuevo vector del resultado de "concatenar" los vectores v1 y v2. Es decir, colocar los elementos de v2 a continuación de los de v1 y, finalmente, mostrar el resultado de la concatenación por pantalla.

### Ejercicio 19 ## {#ej19}

Construir un programa que pida al usuario dos vectores de números enteros v1 y v2, y que construya un nuevo vector v que almacene la suma de ambos vectores. El nuevo vector se ha de ajustar al vector más largo proporcionado por el usuario. Finalmente, mostrar el resultado por pantalla.

Por ejemplo, la suma de los vectores [1, 2, 3] y [1, 2, 3, 4, 5] es [2, 4, 6, 4, 5]

## Capítulo 8 Funciones

### Ejercicio 20 ## {#ej20}

Crear una función que tome dos parámetros numéricos y calcule el máximo de los dos números. Crear una nueva función con el mismo nombre, que tome tres parámetros, y calcule el máximo de los tres números. Esta segunda función debe hacer uso de la primera.

### Ejercicio 21 ## {#ej21}

Crear una función que tome como parámetro un número e indique si es primo o no.

### Ejercicio 22 ## {#ej22}

Crear una función que tome como parámetro un número y devuelve un array con el número de divisores primos que tiene. Recomendación: crear una nueva función o utilizar la anterior que indique si un número es primo o no.

### Ejercicio 23 ## {#ej23}

Crear una función que convierte de grados Fahrenheit a Celsius.

`ºC = (5/9)(ºF - 32)`

## Capítulo 11 Clases estándar

### Ejercicio 24 ## {#ej24}

Verificar si una cadena de texto almacenada en una variable nif, es un NIF correcto o no. Si lo es, se mostrará por consola su parte numérica; si no lo es se mostrará el mensaje "NIF no valido". Se tendrá en cuenta lo siguiente:

* Suponer que los NIFs tienen 8 dígitos y, a continuación, una letra (no importa que sea mayúscula o minúscula).

Recomendaciones:

* Usar el método length() de java.lang.String para conocer el número de caracteres de una cadena de texto.
* Usar el método estático isLetter(char c) de java.lang.Character para comprobar que un carácter es una letra.
* Usar el método estático isDigit(char c) de java.lang.Character para comprobar que un carácter es un dígito.
* Usar el método substring(int inicio, int fin) de java.lang.String para obtener la parte numérica del NIF.

## Capítulo 15 POO

### Ejercicio 25 ## {#ej25}

Construir una clase `Complejo` con dos atributos:

* `pReal`: parte real de tipo double
* `pImag`: parte imaginaria también de tipo double

y tres métodos:

* `void asignar(double x, double y)`
* `void sumar(Complejo b)`
* `void imprimir`

y construir una clase `PruebaComplejo` que contenga un método principal que trabaje con instancias de la clase `Complejo`. 

### Ejercicio 26 ## {#ej26}

Construir una clase `Racional` que permita representar y manipular números racionales. Un número racional permite representar la relación a/b entre dos números enteros siendo a el numerador y b el denominador (distinto de cero). Se deben implementar los siguientes métodos para la clase `Racional`:

* `void asignaNumerador(int x)`
* `void asignaDenominador(int y)`
* `void imprimir()`
* `String toString()`
* `Racional suma(Racional b)`
* `Racional resta(Racional b)`
* `Racional producto(Racional b)`
* `Racional division(Racional b)`
* `boolean esIgual(Racional b)`

### Ejercicio 27 ## {#ej27}

Implementar una clase `Punto` cuyos datos miembros sean las coordenadas de un punto del plano. Estos datos han de ser privados. Para esta clase se piden los siguientes métodos y constructores:

* El constructor `Punto()` recibe como argumento dos números reales, `a` y `b`, y construye un nuevo punto de la clase `Punto` cuyas coordenadas son `a` y `b`.
* Los métodos de acceso `getX()` y `getY()`, sin argumentos, que devuelven las coordenadas de un objeto `Punto`.
* Los métodos modificadores `setX()` y `setY()`, que reciben un argumento y modifican el valor de la correspondiente coordenada de un objeto `Punto`.
* El método `igual()`, que comprueba si un objeto de la clase `Punto` es igual a otro dado que se pasa como argumento.
* El método `distancia()`, sin argumentos, que calcula la distancia de un objeto de la clase `Punto` al origen de coordenadas.
* El método `distancia()`, que calcula la distancia de un objeto de la clase `Punto` a otro que se proporciona como argumento.

### Ejercicio 28 ## {#ej28}

Implementar una clase `Cuenta` que represente una cuenta bancaria y permita realizar operaciones como ingresar y retirar dinero, así como realizar una transferencia de una cuenta a otra. Se pide:

* Definir los atributos y métodos necesarios para realizar las operaciones.
* Implementar los métodos. Los métodos deben actualizar el estado de los atributos y mostrar un mensaje indicando que la operación se ha realizado de manera correcta.
* Crear un programa en Java que cree un par de objetos de tipo Cuenta y realice operaciones con ellos.

## Capítulo 16 Herencia

### Ejercicio 29 ## {#ej29}

En una tienda se venden 2 tipos de ordenadores: portátiles y de sobremesa. Ambos tipos de ordenadores se caracterizan por su código y por su precio. Además, cada uno tiene un eslogan que es: "Ideal para sus viajes" en el caso de los portátiles y "Es el que más pesa, pero el que menos cuesta" para el caso de los ordenadores de sobremesa. Además, los ordenadores portátiles tienen un atributo peso, y los de sobremesa la descripción del tipo de torre. Se pide:

* Definir e implementar los atributos y métodos de cada una de las clases, así como la relación entre ellos.
* Crear un programa en Java que cree un par de objetos de tipo `Ordenador` y `Portatil` y realice operaciones con ellos.

### Ejercicio 30 ## {#ej30}

Desarrollar una clase `Empresa` cuyos datos miembro sean un nombre, un tamaño y un array de empleados (la clase `Empleado` se pide en el siguiente ejercicio). El tamaño de la empresa es inmutable. Para esta clase se piden los siguientes constructores y métodos:

* El constructor `Empresa()` que recibe como argumentos una cadena de texto nombre y un valor entero tamaño, y construye un nuevo objeto de la clase `Empresa`. El tamaño del array de empleados viene dado por el valor de la variable tamaño.
* Los métodos de acceso `getNombre()` y `getTamaño()`, devuelven respectivamente el nombre y el tamaño de la empresa.
* El método de acceso `getEmpleado()`, que recibe como argumento un número entero menor que el tamaño de la empresa, y devuelve el correspondiente campo del array de empleados.
* El método `despideEmpleado()`, que recibe como argumento un número entero menor que el tamaño de la empresa, y asigna null al correspondiente campo del array de empleados.

### Ejercicio 31 ## {#ej31}

Desarrollar una clase `Empleado` cuyos datos miembro sean una empresa, un nombre, un sueldo y un número de empleado. Estos datos han de ser protegidos (protected). Además, el número de empleado y la empresa son inmutables. Para esta clase se piden los siguientes constructores y métodos:

* El constructor `Empleado()` que recibe como argumentos una referencia a un objeto `Empresa`, una cadena de texto nombre y un valor entero sueldo. El número de empleado se crea de manera única por cada empleado de la empresa, utilizando para ello una variable contador perteneciente a la clase `Empresa`.
* El constructor protegido `Empleado()`, que recibe como argumentos una referencia a un objeto `Empresa`, una cadena de texto nombre, un valor entero sueldo y un número de empleado.
* Los métodos de acceso `getNombre()`, `getSueldo()` y `getNumEmpleado()`.
* Los métodos modificadores `setNombre()` y `setSueldo()`.
* El método de impresión por pantalla `toString()`, que devuelva una cadena con el número, nombre y sueldo del empleado.
* El método aumentar sueldo, que recibe como argumento un número entero N y modifica el sueldo aumentándolo un N%. Éste método no puede ser modificado por clases derivadas.
* El método `despedir()`, que elimina el empleado actual de la empresa donde trabaja.

### Ejercicio 32 ## {#ej32}

Añadir a la clase `Empresa` el método `nuevoEmpleado()`, que recibe como argumentos una cadena de texto nombre y un valor entero sueldo. Éste método, crea un nuevo empleado asociado a la empresa. Utilizamos el número de empleado como índice del array de empleados de la empresa.

### Ejercicio 33 ## {#ej33}

Desarrollar una clase `Ejecutivo` derivada de la clase `Empleado`, con un atributo adicional llamado presupuesto. Para esta clase se piden los siguientes constructores y métodos.

* El constructor `Ejecutivo()` que recibe como argumentos una referencia a un objeto `Empresa`, una cadena de texto nombre y un valor entero sueldo.
* El constructor `Ejecutivo()` que recibe como argumentos una referencia a un objeto `Empresa`, una cadena de texto nombre, un valor entero sueldo y un número de empleado.
* El método de acceso `getPresupuesto()`, que devuelve el valor del campo presupuesto.
* El método modificador `asignaPresupuesto()`, que recibe como argumento un valor entero y modifica el valor del atributo presupuesto.
* Redefinir el método `toString()` para que indique que el empleado es un ejecutivo.
* Añadir a la clase `Empleado` un método `ascender()`, que crea un nuevo objeto `Ejecutivo` con los datos del objeto `Empleado` actual, y cambia la referencia en el array de personal de la empresa a la que pertenece dicho objeto.

### Ejercicio 34 ## {#ej34}

Desarrollar una clase `Producto` cuyos datos miembro sean una cadena de texto identificación y un valor real precioBase. Ambos datos de tipo protegido. Para esta clase se piden los siguientes constructores y métodos:

* El constructor `Producto()` recibe como parámetros una cadena de texto de identificación y un valor real precioBase.
* Los métodos de acceso `getIdentificacion()` y `getPrecioBase()` y los métodos modificadores `setIdentificacion()` y `setPrecioBase()`.
* El método `toString()`, que dado un producto con identificación "RJ45" y precio base 10,50 devuelva la cadena: "RJ45 (10,45)"

### Ejercicio 35 ## {#ej35}

Desarrollar una clase `ProductoInventariado` derivada de la clase `Producto` anterior, con dos campos enteros adicionales cantidad y beneficio. Ambos atributos de tipo protegido. Para esta clase se piden los siguientes constructores y métodos:

* El constructor `ProductoInventariado()` recibe como argumentos una cadena de texto de identificación y un valor real precioBase y dos enteros cantidad y beneficio, y construye un nuevo objeto utilizando el constructor de la clase base.
* Los métodos de acceso `getCantidad()` y `getBeneficio()` y los métodos modificadores `setCantidad()` y `setBeneficio()`.
* El método `precioFinal()`, que devuelve el precio final de un producto determinado, calculado a partir del precio base y aplicándole el beneficio.
* El método `toString()`, que dado un producto inventariado con identificación "RJ45", cuyo precio base es 10,50 , su cantidad es 10 y su beneficio 13, devuelva la cadena: 10 RJ45 (10,45)(+13%)

### Ejercicio 36 ## {#ej36}

Desarrollar una clase `Tienda` cuyos datos miembro son una cadena de texto nombre, un valor entero inmutable maxProducto que indica el número máximo de productos distintos que puede tener la tienda, un array que contiene un inventario de objetos de tipo `ProductoInventariado`, un valor entero ultimaEntrada que indica la primera posición libre del array y un valor real caja que almacena el dinero del que dispone la tienda.

Para esta clase se piden los siguientes constructores y métodos:

* El constructor `Tienda()`, que recibe como argumentos una cadena de texto nombre, un valor entero maxProducto y un valor real caja.
* El método `buscaProducto()`, que recibe como argumento una cadena de texto id, y devuelve el índice del array inventario en el que se encuentra un producto cuyo identificador coincide con id, si es que existe, o el valor de ultimaEntrada en caso contrario.
* El método `añadirProducto()`, que recibe como argumento un identificador de producto id, un precio base p, una cantidad c y un beneficio b y lo añade al inventario. Si el producto ya estaba en el inventario, entonces sólo hay que modificar los datos relativos al precio base, cantidad y beneficio. * * Si el producto no está en el inventario entonces hay que añadirlo. En cualquier caso, solo se podrá añadir un producto si el coste total (cantidad x precio base) es menor o igual que el dinero disponible en la tienda, el cual ha de ser disminuido de manera adecuada. Si en el inventario no hay sitio para el producto, o no hay dinero suficiente para adquirirlo, se muestra un mensaje informativo.
* El método `venderProducto()`, que recibe como parámetro un identificador id y una cantidad c, y si el producto existe en el inventario con una cantidad mayor o igual que c, entonces disminuye en c unidades la cantidad del producto y modifica adecuadamente la caja. Si la tienda se queda sin unidades del producto id, entonces hay que modificar adecuadamente el array inventario y el valor de ultimaEntrada para evitar huecos vacíos.

## Capítulo 18 Interfaces

### Ejercicio 37 ## {#ej37}

Desarrollar una interfaz `Vehiculo` que declare los métodos `factura()`, `hayPlaza()`, `aparca()` y `setTiempo()`, tales que:

* `factura()` proporciona el importe a pagar por estacionar un Vehiculo durante un tiempo determinado en el parking.
* `hayPlaza()` recibe como argumento una referencia a un objeto Parking y determina si hay sitio en dicho parking para estacionar un Vehiculo.
* `aparca()` recibe como argumento una referencia a un objeto Parking y estaciona un Vehiculo en dicho parking.
* `setTiempo()` recibe como argumento un entero y establece ese entero como tiempo de estancia del Vehiculo en el Parking.

### Ejercicio 38 ## {#ej38}

Desarrollar una clase `VehiculoCliente` implementando la interfaz `Vehiculo`, cuyos datos miembro son una cadena de texto matricula y un valor entero tiempo. La cadena de texto matricula no puede ser modificada. El valor entero tiempo almacena el número de minutos que el vehículo está en el parking.
Para esta clase se piden los siguientes constructores y métodos:

* El constructor `VehiculoCliente`, que recibe como argumento un identificador de vehículo. El valor inicial de tiempo es 0.
* El método `setTiempo()`, que modifica el campo de tiempo.
* El método `factura()`, que determina lo que tiene que pagar un objeto del tipo `VehiculoCliente` por su estancia en el parking. El coste de la estancia es de 25€ el día completo y 1,2€ la hora.
* El método `hayPlaza()`, que recibe como argumento una referencia a un objeto `Parking` y determina si hay una plaza en dicho parking para estacionar un objeto de tipo VehiculoCliente.
* El método `aparca()`, que recibe como argumento una referencia a un objeto `Parking` y estaciona un `VehiculoCliente` en dicho parking.