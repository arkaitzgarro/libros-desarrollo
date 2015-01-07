# Herencia

## Definición de herencia

La herencia es una propiedad que permite la declaración de nuevas clases a partir de otras ya existentes. Esto proporciona una de las ventajas principales de la Programación Orientada a Objetos: la reutilización de código previamente desarrollado ya que permite a una clase más específica incorporar la estructura y comportamiento de una clase más general.

Cuando una clase B se construye a partir de otra A mediante la herencia, la clase B hereda todos los atributos, métodos y clases internas de la clase A. Además la clase B puede redefinir los componentes heredados y añadir atributos, métodos y clases internas específicas.

Para indicar que la clase B (clase *descendiente, derivada, hija o subclase*) hereda de la clase A (clase *ascendiente, heredada, padre, base o superclase*) se emplea la palabra reservada **extends** en la cabecera de la declaración de la clase descendiente. La sintaxis es la siguiente:

    [java]
    public class ClaseB extends ClaseA { 
        // Declaracion de atributos y metodos especificos de ClaseB
        // y/o redeclaracion de componentes heredados
    }

Por ejemplo, a partir de la clase `Precio`:

    [java]
    /** 
     * Ejemplo de declaracion de la clase Precio
     */
    public class Precio { 
        // Variable de instancia
        public double euros; 
    
        // Metodos publicos
        public double da() {
            return this.euros;
        }
    
        public void pone(double x) {
            this.euros = x;
        }
    }

se construye la clase `Producto` como descendiente de la clase `Precio` de la siguiente forma:

    [java]
    /** 
     * Ejemplo de declaracion de la clase Producto
     * clase producto desciende de Precio
     */
    public class Producto extends Precio {
        // Variable de instancia 
        public int codigo; 
    
        // Metodos publicos
        public int daCodigo() {
            return this.codigo;
        }
    
         public void asignaCodigo(int x) {
            this.codigo=x;
        }
    
        public void asignaProducto(int cod, double p) {
            this.asignaCodigo(cod); 
            this.pone(p);
        }
    
         public String toString() {
            return "Codigo: " + codigo + " ; precio: " + euros + " euros";
        }
    }

La clase `PruebaClaseProducto` trabaja con dos instancias de la clase `Producto`:

    [java]
    /**
     *  Demostracion de la clase Producto 
     */ 
    public class PruebaClaseProducto { 
        public static void main (String [] args){ 
            Producto p = new Producto();
            p.asignaProducto(200201, 15.8);
            System.out.println(p.toString());
    
            Producto q = new Producto();
            q.asignaCodigo(200202);
            q.pone(34.3);
            System.out.println(q.toString()); 
        }
    }  

Durante la ejecución del código anterior, se generan las instancias, referenciadas por `p` y `q`, cada una de las cuales está compuesta por dos atributos: `euros`, variable de instancia heredada de la clase `Precio` y `codigo`, variable de instancia específica de la clase `Producto`.

![Representación grafica de las instancias de la clase `Producto`](cap16/producto.png)

Por otro lado, la ejecución de `PruebaClaseProducto` produce la siguiente salida por pantalla:

    [bash]
    $>javac PruebaClaseProducto.java
    $>java PruebaClaseProducto Codigo: 200201 ; precio: 15.8 euros
    Codigo: 200202 ; precio: 34.3 euros

## Jerarquía de clases

Java permite múltiples niveles de herencia pero no la herencia *multiple*, es decir una clase sólo puede heredar directamente de una clase ascendiente. Por otro lado, una clase puede ser ascendiente de tantas clases descendiente como se desee (*un unico padre, multitud de hijos*). En la siguiente figura se muestra gráficamente un ejemplo de jerarquía entre diferentes clases relacionadas mediante la herencia.

![Representación de una jerarquía de clases relacionadas mediante la herencia](cap16/jerarquia.png)

## Redefinición de elementos heredados

Como se ha comentado anteriormente la clase descendiente puede añadir sus propios atributos y métodos pero también puede sustituir u ocultar los heredados. En concreto:

* Se puede declarar un nuevo **atributo** con el mismo identificador que uno heredado, quedando este atributo **oculto**. Esta técnica no es recomendable.
* Se puede declarar un nuevo **método de instancia** con la misma cabecera que el de la clase ascendiente, lo que supone su **sobreescritura**. Por lo tanto, la sobreescritura o redefinición consiste en que métodos adicionales declarados en la clase descendiente con el mismo nombre, tipo de dato devuelto y número y tipo de parámetros sustituyen a los heredados.
* Se puede declarar un nuevo **método de clase** con la misma cabecera que el de la clase ascendiente, lo que hace que éste quede **oculto**. Por lo tanto, los métodos de clase o estáticos (declarados como `static`) no pueden ser redefinidos.
* Un método declarado con el modificador `final` tampoco puede ser redefinido por una clase derivada.
* Se puede declarar un **constructor** de la subclase que llame al de la superclase de forma implícita o de mediante la palabra reservada `super`.
* En general puede accederse a los métodos de la clase ascendiente que han sido redefinidos empleando la palabra reservada `super` delante del identificador del método. Este mecanismo sólo permite acceder al metodo perteneciente a la clase en el nivel inmediatamente superior de la jerarquía de clases.

## La clase `Object`

Independientemente de utilizar la palabra reservada `extends` en su declaración, todas las clases derivan de una superclase llamada `Object`. Ésta es la clase raíz de toda la jerarquía de clases de Java. El hecho de que todas las clases deriven implícitamente de la clase `Object` no se considera herencia múltiple.

![Jerarquía de clases predefinidas en Java](cap16/jerarquia2.png)

Como consecuencia de ello, todas las clases tienen algunos métodos heredados de la clase `Object`.

![Algunos de los métodos de la clase predefinida `Object`](cap16/object.png)

Es bastante frecuente tener que sobreescribir algunos de estos métodos. Por ejemplo, para verificar si dos instancias son iguales en el sentido de contener la misma información en sus atributos se debería sobreescribir el método `equals()`. El siguiente código muestra un ejemplo de módificación de la clase `Producto` para incluir una sobreescritura del método `equals()`:

    [java]
    public class Producto extends Precio {
        ...
        public boolean equals(Object a) {
            if (a instanceof Producto)
                return (codigo==a.daCodigo());
            else
                return false;
        }
    }   

También es bastante habitual sobreescribir el método `toString()`.

## Herencia y constructores

La subclase necesita normalmente que se ejecute el constructor de la superclase antes que su propio constructor para inicializar las variables de instancia heredadas. La solución consiste en utilizar la palabra reservada super seguida entre paréntesis de los parámetros correspondiente en el cuerpo del constructor de la subclase. Es decir, incluir la siguiente sentencia como primera línea de código:

    [java]
    super(argumentos opcionales);

De esta forma la implementación de un constructor de la clase descendiente sólo necesita inicializar directamente las variables de instancia no heredadas. Si no aparece como primera sentencia, el compilador inserta una llamada implícita `super()`; que inicializa las variables de instancia a cero, `false`, carácter nulo o `null` dependiendo de su tipo. Esta llamada en cadena a los constructores de las clases ascendientes llega hasta el origen de la jerarquía de clases, es decir, hasta el constructor de la clase `Object`. En cualquier caso, la creación de una nueva instancia mediante un constructor debe tener tres fases:

* Llamada al constructor de la clase ascendiente.
* Se asignan valores a los atributos.
* Se ejecuta el resto del constructor.

## Casting o moldes entre objetos con relación de herencia

El *casting* o moldeo permite el uso de un objeto de una clase en lugar de otro de otras clase con el que haya una relación de herencia. Por ejemplo:

    [java]
    Object a = new Producto();

Entonces `a` es *momentáneamente* tanto una instancia de la clase `Object` como `Producto` (hasta que más adelante se le asigne un objeto que no sea un `Producto`). A esto se le llama moldeo **implícito**.

Por otro lado, si se escribe:

    [java]
    Producto b = a;

se obtendrá un error de compilación porque el objeto referenciado por a no es considerado por el compilador como un `Producto`. Sin embargo se le puede indicar al compilador que a la referencia a se le va a asignar obligatoriamente un `Producto`.

    [java]
    Producto b = (Producto)a;

Este moldeo **explícito** introduce la verificación durante la ejecución de que a la referencia a se le ha asignado un `Producto` así que el compilador no genera un error. En el caso que durante la ejecución la referencia a no fuera a un `Producto`, se generaría una excepción. Para asegurar esta situación y evitar el error de ejecución se podría emplear el operador `instanceof`:

    [java]
    if (a instanceof Producto) {
        Producto b = (Producto)a;
    }

## Clases y métodos abstractos

Una clase *abstracta* es una clase de la que no se pueden crear instancias. Su utilidad consiste en permitir que otras clases deriven de ella. De esta forma, proporciona un modelo de referencia a seguir a la vez que una serie de métodos de utilidad general. Las clases abstractas se declaran empleando la palabra reservada `abstract` como se muestra a continuación:

    [java]
    public abstract class IdClase . . .

Una clase abstracta puede componerse de varios atributos y métodos pero debe tener, al menos, un método *abstracto* (declarado también con la palabra reservada `abstract` en la cabecera). Los métodos abstractos no se implementan en el código de la clase abstracta pero las clases descendientes de ésta han de implementarlos o volver a declararlos como abstractos (en cuyo caso la subclase también debe declararse como abstracta). En cualquier caso, ha de indicarse el tipo de dato que devuelve y el número y tipo de parámetros. La sintaxis de declaración de un método abstracto es:

    [java]
    abstract modificador tipo_retorno idClase(lista_parametros);

Si una clase tiene métodos abstractos, entonces también la clase debe declararse como abstracta. Como los métodos de clase (`static`) no pueden ser redefinidos, un método abstracto no puede ser estático. Tampoco tiene sentido que declarar constructores abstractos ya que un constructor se emplea siempre al crear una instancia (y con las clases abstractas no se crean instancias).

Ejemplo de código con la declaración de clase abstracta:

    [java]
    /**
     * Declaracion de la clase abstracta FiguraGeometrica
     */
    public abstract class FiguraGeometrica {
        // Declaracion de atributos
        private String nombre;
        
        // Declaracion de metodos
        abstract public double area();
        public figuraGeometrica (String nombreFigura ) {
            this.nombre = nombreFigura;
        }
        
        final public boolean mayorQue (FiguraGeometrica otra) {
            return this.area()>otra.area();
        }
    
        final public String toString()
            return this.nombre + " con area " + this.area();
        }
    }

Como ejemplo de utilización de  `Rectangulo` se construye a partir de la clase abstracta `FiguraGeometrica`:

    [java]
    /**
     * Ejemplo de uso de la declaracion de una clase abstracta
     * Declaracion de la clase Rectangulo
     */
    public class Rectangulo extends FiguraGeometrica {
        private double base;
        private double altura;
    
        public Rectangulo (double largo, double ancho) {
            super("Rectangulo");
            this.base = largo;
            this.altura = ancho;
        }
    
        public double area () {
            return this.base * this.altura;
        }
    }

Ejemplo de uso de la clase `Rectangulo`:

    [java]
    /**
     * Ejemplo de uso de la clase Rectangulo
     */
    public class pruebaRectangulo {
        public static void main (String [] args ) {
            Rectangulo r1;
            r1 = new Rectangulo(12.5, 23.7);
            System.out.println("Area de r1 = " + r1.area());
    
            Rectangulo r2 = new Rectangulo(8.6, 33.1);
            System.out.println("Area de r2 = " + r2.toString());
    
            if (r1.mayorQue(r2))
                System.out.println("El rectangulo de mayor area es r1");
            else
                System.out.println("El rectangulo de mayor area es r2");
        }
    }

Salida por pantalla de la ejecución del código anterior:

    [bash]
    $>java PruebaRectangulo
    Area de r1 = 296.25 
    Area de r2 = Rectangulo con area 284.66
    El rectangulo de mayor area es r1

## Clases y métodos finales

Una clase declarada con la palabra reservada `final` no puede tener clases descendientes. Por ejemplo, la clase predefinida de Java `Math` está declarada como `final`.

A modo de ejemplo, se desarrolla una clase **final** `MathBis` (de operatividad similar a la clase `Math` estándar de Java) que incluye la declaración de dos métodos que calculan y devuelven respectivamente las siguientes funciones trigonométricas:

![ ](cap16/mathbis.png)

El código fuente de la clase es:

    [java]
    /**
     * Ejemplo de declaracion de una clase final
     * Declaracion de la clase MathBis
     */
    public final class MathBis {
        public static double asinh(double x) {
            return Math.log(x+Math.sqrt(x*x+1));
        }
    
        public static double acosh(double x) {
            return Math.log(x+Math.sqrt(x*x-1));
        }
    }

Ejemplo de uso de la clase `MathBis`:

    [java]
    /**
     * Ejemplo de uso de una clase final
     * Declaracion de la clase pruebaMathBis
     */
    public class PruebaMathBis {
        public static void main (String [] args) {
            for (int i=-5; i<10; i++) {
                double x = i/5.0;
                System.out.print("Para x = " + x);
                System.out.print(": asinh(x) = " +MathBis.asinh(x));
                System.out.println(", acosh(x) = " +MathBis.acosh(x));
            }
        }
    }

Por otro lado, un método declarado como `final` no puede ser redefinido por una clase descendiente. Los métodos que son llamados desde los constructores deberían declararse como `final`, ya que si un constructor llama a un método que no lo sea, la subclase podría haberla redefinido con resultados indeseables.