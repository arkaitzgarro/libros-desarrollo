# Introducción

Este capítulo pretende ser una rápida introducción a la programación en Java. En primer lugar muestra lo que es Java, sus características y las herramientas que están ligadas a él y, a continuación, enseña cómo compilar y ejecutar algunos programas sencillos escritos en Java. La tecnología Java es tanto una plataforma como un lenguaje de programación. En los capítulos posteriores se trata de dar una visión más detallada de la sintaxis del lenguaje de programación Java.

## El lenguaje de Programación Java

El lenguaje de programación Java, fue diseñado por la compañía Sun Microsystems Inc, con el propósito de crear un lenguaje que pudiera funcionar en sistemas de ordenadores heterogéneos (redes de computadoras formadas por más de un tipo de ordenador, ya sean PC compatibles, Macintosh o estaciones de trabajo que empleen diferentes sistemas operativos como Windows, OS/2 o Unix), y que fuera independiente de la plataforma en la que se vaya a ejecutar. Esto significa que un programa de Java puede ejecutarse en cualquier máquina o plataforma.

Su origen se remonta a la creación de un lenguaje de programación para el desarrollo de aplicaciones para electrodomésticos y otros aparatos electrónicos de consumo por parte de una empresa filial de Sun, llamada FirstPerson en 1991. Su creador, **James Gosling**, lo bautizó como *Oak*. Al abandonarse este proyecto, el lenguaje se modificó, al igual que su nombre y se orientó al desarrollo de aplicaciones para la red. En septiembre de 1995 aparece el primer *Kit de Desarrollo de Java* (JDK). A principios de 1997 se presenta la primera revisión de Java (la versión 1.1) y a finales de 1998 surge la versión 1.2 (Java 2) que introdujo modificaciones bastante significativos. En octubre de 2004 se hace pública la versión Java 1.5 (Java 5) incluyendo innovaciones muy importantes en la plataforma.

## Características del lenguaje

Según la propia Sun Microsystems, el lenguaje Java muestra las siguientes características generales:

* **Sencillo**. Elimina la complejidad de los lenguajes como C y da paso al contexto de los lenguajes modernos orientados a objetos. Aunque la sintaxis de Java es muy similar a C y C++, que son lenguajes a los que una gran mayoría de programadores están acostumbrados a emplear.
* **Orientado a Objetos**. La filosofía de programación orientada a objetos es diferente a la programación convencional (*imperativa o procedural*). Su nivel de abstracción facilita la creación y mantenimiento de programas. Existen muchas referencias que dan una introducción a esta forma de programar.
* **Independiente** a la arquitectura y portable. Al compilar un programa en Java, el código resultante es un tipo de código binario conocido como Java bytecodes. Este código es interpretado por diferentes computadoras de igual manera, por lo que únicamente hay que implementar un intérprete para cada plataforma. De esa manera Java logra ser un lenguaje que no depende de una arquitectura de ordenador específica. Como el código compilado de Java es interpretado, un programa compilado de Java puede ser utilizado por cualquier computadora que tenga implementado el intérprete de Java.
* **Robusto**. Java simplifica la gestión de la memoria dinámica. Por ejemplo, ya no es necesario la liberación explícita, el intérprete de Java lo lleva acabo automáticamente cuando detecta que una variable dinámica ya no es usada por el programa. Por otra parte, impide que un puntero Java apunte a una dirección de memoria no válida, los punteros (referencias) Java son seguros y deterministas: o bien apuntan a un elemento correctamente alojado en memoria o bien tienen el valor nulo. Finalmente el acceso a la memoria es supervisado por el intérprete de tal manera que no es posible acceder a zonas de memoria no autorizadas sin provocar un error. Por ejemplo, no es posible escribir fuera de los límites de un vector.
* **Seguro**. El sistema de Java tiene ciertas políticas que evitan que se puedan codificar virus con este lenguaje. Existen muchas restricciones, especialmente para los denominados *applets*, que limitan lo que se puede y no puede hacer con los recursos críticos de una computadora.
* **Multitarea**. Un lenguaje que soporta múltiples threads, hilos o tareas, es un lenguaje que puede ejecutar diferentes líneas de código al mismo tiempo. El soporte y la programación de hilos en Java está integrado en la propia sintaxis del lenguaje.
* **Dinámico**. En Java no es necesario cargar completamente el programa en memoria sino que las clases compiladas pueden ser cargadas bajo demanda en tiempo de ejecución (dynamic binding). Esto proceso permite la carga de código bajo demanda.

## Mecanismo de creación de un programa de Java

En este aspecto la principal originalidad de Java estriba en que es a la vez compilado e interpretado. Con el compilador de Java, el programa fuente con extensión `.java` es traducido a un lenguaje intermedio o pseudo-código (no es código máquina) llamado Java *bytecodes* generándose un programa *compilado* almacenado en un archivo con extensión `.class` . Este archivo puede ser posteriormente interpretado y ejecutado por el intérprete de Java (lo que se conoce como la Máquina Virtual Java o *Java Virtual Machine*). Por eso Java es multi-plataforma, ya que existe un intérprete para cada máquina diferente. Por tanto, la compilación se produce una vez y la interpretación cada vez que el programa se ejecuta. Este proceso se esquematiza en la siguiente figura.

![Esquema del proceso de creación de un programa con Java](cap01/programa-con-java.png)

Actualmente las máquinas virtuales modernas realizan una compilación JIT (*Just In Time*) en donde el *bytecode* no es interpretado sino que se compila directamente a código máquina en tiempo de ejecución de acuerdo con la arquitectura (procesador y sistema operativo) en la que se ejecuta la máquina virtual. Esto permite conseguir velocidades de ejecución similares al C. En la práctica las máquinas virtuales suelen utilizar técnicas mixtas de interpretación/compilación JIT normalmente según la frecuencia de paso por un *bytecode* concreto.

## Ventajas en el uso de Java

Pueden destacarse las siguientes ventajas en el empleo de Java como lenguaje de programación:

* **Compatibilidad**. No es necesario modificar (reescribir) el código si se desea ejecutar el programa en otra máquina. Un único código funciona donde se tenga una Máquina Virtual de Java (ordenadores PC compatibles, Macintosh o estaciones de trabajo que empleen diferentes sistemas operativos como Windows, Mac OS X, Linux o Unix).
* **Metodología OO**. Java es un lenguaje de programación orientado a objetos, y tiene todos los beneficios que ofrece esta metodología de programación: facilita la creación, el mantenimiento y la reutilización de código.
* **Menos y mejor código**. Comparaciones de métricas de programas indican que un programa en escrito en Java es cuatro veces de menor tamaño que uno escrito en C++ y además favorece los buenos hábitos en la programación como, por ejemplo, la gestión de la memoria dinámica.
* **Gratuidad**. El kit de desarrollo Java es gratuito y puede descargarse desde la [página oficial de Java](https://www.java.com/es/download/).

## Inconvenientes del lenguaje Java

El uso de Java también tiene algunos inconvenientes o limitaciones:

* **Mayor consumo memoria**: un programa Java consume más memoria por dos razones, es necesario cargar la máquina virtual y, en general, Java necesita más memoria para alojar los elementos de un programa que un programa similar hecho en un lenguaje nativo.
* **Mayor tiempo de carga**: la carga de la máquina virtual lleva tiempo y como la carga de las clases son bajo demanda la ejecución al principio de un programa Java es relativamente lenta.
* **Integración no perfecta con el sistema operativo**: como Java y sus librerías están diseñados para ser multiplataforma la integración con el sistema operativo en forma de extensiones al mismo no es sencilla y suele necesitar extensiones nativas que rompen la portabilidad. Por otro lado exigen la presencia y carga de la máquina virtual por lo que no se suele utilizar como lenguaje para el desarrollo de elementos básicos de sistemas.
* **Es un lenguaje de programación**. El hecho de que Java sea un lenguaje de programación es otra gran limitación. Aunque sea orientado a objetos y “más sencillo” de aprender que C o C++, sigue siendo un lenguaje y por lo tanto aprenderlo no es tarea fácil. Especialmente para los programadores noveles.

## La plataforma Java

Normalmente, una plataforma es un sistema mixto que incluye el hardware y/o el entorno software en el que se ejecuta un programa. La **plataforma Java** se diferencia de la mayoría de las demás en que está formada únicamente por software que se ejecuta en cualquier otra plataforma independiente de hardware. La plataforma Java tiene dos componentes:

* El intérprete, Máquina Virtual Java ó *Java Virtual Machine (Java VM)* que ya se ha comentado anteriormente, y
* La Interfaz de Programación de Aplicaciones Java ó *Java Application Programming Interface (Java API)*.

El API de Java es una amplia colección de componentes de software que facilitan muchas necesidades de programación como puede ser código necesario para construir una interfaz de usuario (GUI). El API de Java se agrupa en librerías o paquetes (*packages*) de componentes relacionados entre sí: componentes básicos de programación, creación de *applets*, redes, internacionalización, seguridad, componentes de software, conectividad y redes, etcétera. Hay, además, extensiones estándar fuera del núcleo del API de Java que facilitan recursos para servidores, gráficos 3D, animación...

La siguiente figura esquematiza la relación entre la aplicación o applet de Java, la Máquina Virtual, el API y el hardware correspondiente.

![Esquema de la relación entre las plataformas en Java](cap01/relacion-plataformas.png)

## Instalación del Kit de Desarrollo Java

Para poder escribir un programa con Java es necesario tener instalado el Kit de Desarrollo de Java o JDK (*Java Development Kit*), también llamado Java SDK (*Software Development Kit*). El Kit de Desarrollo de Java contiene el software necesario para que los programadores compilen, depuren y ejecuten programas y *applets* escritos en Java. Tanto el software como la documentación son gratuitos según el acuerdo de la licencia de GNU.

## Ejecución del archivo de instalación

Una vez almacenado el archivo de instalación en un directorio local, se ejecuta para comenzar el proceso de instalación del SDK. La instalación se lleva a cabo con la asistencia de una secuencia de ventanas de diálogo que van presentando las distintas etapas de la instalación. En la ventana de confirmación del inicio de la instalación se pide la confirmación correspondiente al usuario, y posteriormente, el programa de instalación del SDK va pidiendo al usuario la confirmación para realizar las distintas etapas de la instalación