# Tipos de métodos

Un método es una abstracción de una operación que puede hacer o realizarse con un objeto. Una clase puede declarar cualquier número de métodos que lleven a cabo operaciones de lo más variado con los objetos. En esta sección los métodos se clasifican en dos grupos: los métodos *de instancia* y los métodos *de clase*.

## Métodos de instancia

Las clases pueden incluir en su declaración muchos métodos o no declarar ninguno. Los métodos pueden clasificarse en métodos *de instancia* y métodos *de clase*.

Los *métodos de instancia* operan sobre las variables de instancia de los objetos pero también tienen acceso a las variables de clase. La sintaxis de llamada a un método de instancia es:

    [java]
    // Llamada tipica a un metodo de instancia
    idReferencia.idMetodo(parametros);

Todas las instancias de una clase comparten la misma implementación para un método de instancia. La instancia que hace la llamada al método es siempre un parámetro o argumento implícito. Dentro de un método de instancia, el identificador de una variable de instancia hace referencia al atributo de la instancia concreta que hace la llamada al método (suponiendo que el identificador del atributo no ha sido *ocultado* por el de un parámetro).

En el ejemplo anterior en la declaración de la clase `CuentaBancaria`, los métodos `saldo` y `transferencia` son métodos de instancia.

    [java]
    public double saldo() {
        return this.saldo;
    } 
    
    public void transferencia( CuentaBancaria origen ) {
       this.saldo += origen.saldo;
       origen.saldo = 0;
    }

Ejemplos de llamada a estos métodos dentro de `PruebaCuentaBancaria`:

    [java]
    CuentaBancaria c1 = new CuentaBancaria(); 
    CuentaBancaria c2 = new CuentaBancaria(20.0);
    
    c1.transferencia(c2); 
    System.out.println("Cuenta con: " + c1.saldo() + " euros");

## Métodos de clase

En principio, los *métodos de clase* no operan sobre las variables de instancia de los objetos. Los *métodos de clase* pueden trabajar con las **variables de clase** pero no pueden acceder a las variables de instancia declaradas dentro de la clase, a no ser que se crea una nueva instancia y se acceda a las variables de instancia a través del nuevo objeto. Los métodos de clase también pueden ser llamados precediendolos con el identificador de la clase, sin necesidad de utilizar el de una instancia.

    [java]
    IdClase.idMetodo(parametros); // Llamada tipica a un metodo de clase

La palabra `static` determina la declaración de un método de clase. Por defecto, si no se indica la palabra `static`, el método declarado se considera un método de instancia.

En el ejemplo anterior en la declaración de la clase `CuentaBancaria`, el método `incCuentas` es un método de clase.

    [java]
    public static void incCuentas () {
        totalCuentas++;
    }

Un ejemplo de llamada a este método dentro de `PruebaCuentaBancaria` sería:

    [java]
    CuentaBancaria.incCuentas();

Las diferencias entre los métodos de instancia y los de clase se resumen aquí:

![Diferencias entre los métodos de instancia y los métodos de clase](cap14/instancia-clase.png)

Los métodos de clase o *estáticos* se pueden considerar equivalentes a las rutinas (globales) de otros lenguajes de programación como Pascal o C. Como ejemplos típicos de métodos estáticos pueden indicarse los métodos de Java correspondientes a las funciones matemáticas `sin, cos, exp, pow`... de la clase `java.lang.Math`. Las llamadas a estos métodos se realizan anteponiendo el identificador de la clase `Math` al identificador del método: `Math.sin(angulo)`...

![Métodos estáticos de la clase `Math`](cap14/math.png)