# Constructores

Aunque en un principio pueda parecer lo contrario, un *constructor* **no** es en realidad un método estrictamente hablando. Un constructor es un elemento de una clase cuyo identificador coincide con el de la clase correspondiente y que tiene por objetivo obligar a y controlar cómo se inicializa una instancia de una determinada clase, ya que el lenguaje Java no permite que las variables miembro de una nueva instancia queden sin inicializar. Además, a diferencia de los métodos, los constructores sólo se emplean cuando se quiere crear una nueva instancia.

## Constructores

Por defecto toda clase tiene un constructor sin parámetros cuyo identificador coincide con el de la clase y que, al ejecutarse, inicializa el valor de cada atributo de la nueva instancia: los atributos de tipo primitivo se inicializan a `0` o `false`, mientras que los atributos de tipo *objeto* (referencia) se inicializan a `null`.

En el ejemplo de la clase `PruebaPrecio`, que utiliza una instancia de la clase `Precio`, la llamada al constructor se produce en la sentencia `p = new Precio();`. Mientras que la ejecución de `new` genera una nueva instancia y devuelve su dirección de memoria, la ejecución del constructor `Precio()` inicializa los valores de los atributos.

    [java]
    public class PruebaPrecio {
        public static void main(String [] args) {
            Precio p;            // Crea una referencia de la clase Precio 
            p = new Precio();   // Crea el objeto de la clase Precio y realiza
                                // una llamada al metodo constructor
        }
    }

![Resultado de la ejecución del constructor: inicialización de los atributos del nuevo objeto](cap13/constructor.png)

## Declaración de un constructor

La declaración de un constructor diferente del constructor por defecto, obliga a que se le asigne el mismo identificador que la clase y que no se indique de forma explícita un tipo de valor de retorno. La existencia o no de parámetros es opcional. Por otro lado, la *sobrecarga* permite que puedan declararse varios constructores (con el mismo identificador que el de la clase), siempre y cuando tengan un tipo y/o número de parámetros distinto. Por ejemplo, para la clase `Fecha` se declaran dos constructores, el primero sin parámetros (por lo tanto se redefine el constructor por defecto) y el segundo con tres parámetros:

    [java]
    /** 
     * Declaracion de la clase Fecha 
     */
    public class Fecha {
        // Atributos o variables miembro
        private int dia;
         private int mes; 
        private int anho;
        
        /**
         * Constructor 1 
         * Asigna los valores 1, 1 y 2000 a los atributos
         * dia, mes y anho respectivamente 
         */
        public Fecha() {
            this.dia = 1;
            this.mes = 1;
            this.anho = 2000;
        }
        
        /**
         * Constructor 2 
         * @param ndia el dia del mes a almacenar
         * @param nmes el mes del anho a almacenar
         * @param nanho el anho a almacenar 
         */
        public Fecha(int dia, int mes, int anho) {
            this.dia = dia;
            this.mes = mes;
            this.anho = anho;
        }
        
        public String toString() { 
            return this.dia + "/" + this.mes + "/" + this.anho;
        }
    }

La *sobrecarga* permite que puedan declararse varios constructores (con el mismo identificador que el de la clase), siempre y cuando tengan un tipo y/o número de parámetros distinto. Para probar el código anterior, se construye el siguiente programa:

    [java]
    /** 
     * Ejemplo de uso de la clase Fecha
     */
    public class PruebaFecha { 
        public static void main (String [] args) {
            Fecha origen = new Fecha(); 
            Fecha actual = new Fecha(16,2,2009);
            
            System.out.println("Primera fecha: " + origen.toString());
            System.out.println("Segunda fecha: " + actual.toString());
        }
    }

![Resultado de la ejecución de los respectivos constructores para las nuevas instancias referenciadas por `origen` y `actual`](cap13/constructores-instancias.png)

El código anterior puede compilarse y ejecutarse, mostrando la siguiente salida por pantalla:

    [bash]
    $>javac PruebaFecha.java
    Primera fecha: 1/1/2000
    Segunda fecha: 16/2/2009

**Importante**: una vez construido un constructor ya no se puede emplear el constructor por defecto sin parámetros. Si se desea trabajar con él, es necesario declararlo explícitamente.