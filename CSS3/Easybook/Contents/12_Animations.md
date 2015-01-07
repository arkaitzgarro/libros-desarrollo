# Módulo *Animations*

La especificación oficial y el estado actual de desarrollo del módulo *Animations* en CSS 3 puede consultarse en [http://www.w3.org/TR/css3-animations/](http://www.w3.org/TR/css3-animations/).

Las **animaciones CSS 3** hacen posible animar transiciones de una configuración de estilo de CSS a otra. Las animaciones constan de dos componentes: un estilo que describe la animación CSS y un conjunto de fotogramas que indican el comienzo y final de la animación, así como los posibles puntos de ruta intermedios durante la animación.

Hay tres **ventajas clave** en las animaciones CSS sobre las técnicas de animación tradicionales ejecutadas a través de *scripts*:

* Son fáciles de usar para las animaciones simples; puedes crearlas sin tener la necesidad de conocer el funcionamiento de JavaScript.

* Las animaciones funcionan bien, incluso bajo carga de sistema medio. Las animaciones simples pueden, a menudo, ejecutarse de manera pobre en JavaScript (a menos que estén bien hechas). El motor de renderizado puede no reproducir ciertos fotogramas y utilizar otras técnicas para mantener el reproducción lo más suave posible.

* Dejar al navegador controlar la secuencia de animación permite a éste optimizar el rendimiento y la eficiencia a través de, por ejemplo, la reducción de la frecuencia de actualización de las animaciones en ejecución en pestañas que no están visibles en ese momento.

## Configuración

Para crear una **secuencia de animación CSS**, se requiere dar estilo al elemento que se quiere animar con la **propiedad de animación** o sus **sub-propiedades**. Esto permite configurar los tiempos y duración de la animación, así como otros detalles de cómo la secuencia de animación debe progresar. Esto, sin embargo, no configura la apariencia real de la animación, que se establece utilizando los **`keyframes`** explicados en el apartado siguiente.

Las **sub-propiedades** de la propiedad animación son:

* `animation-delay`: configura el retraso entre lo que tarda el elemento en cargarse y el comienzo de la secuencia de animación.
* `animation-direction`: configura si la animación debe alternar dirección en cada reproducción a través de la secuencia o volver al punto de inicio y repetirse.
* `animation-duration`: configura el tiempo que tarda la animación en completar un ciclo.
* `animation-iteration-count`: configura el número de veces que la animación debe repetirse, puede establecerse el valor `infinite` para repetir la animación de forma indefinida.
* `animation-name`: especifica el nombre de los `keyframes` que describen los fotogramas de la animación.
* `animation-play-state`: permite pausar y reanudar la secuencia de animación.
* `animation-timing-function`: configura los tiempos de la animación; esto es, cómo la animación transiciona a través de los fotogramas mediante el establecimiento de curvas de aceleración.
* `animation-fill-mode`: configura qué valores son aplicados por la animación antes y después de que ésta es ejecutada.

## *keyframes*

Una vez que se han configurado los tiempos de la animación, es necesario definir la **apariencia** de ésta. Esto se realiza mediante el establecimiento de **dos o más fotogramas**, definidos por los `keyframes`. Cada fotograma describe cómo el elemento animado debe ejecutarse en un momento dado durante la secuencia de animación.

Dado que los tiempos de la animación son definidos en el estilo CSS que configura la animación, `keyframes` utiliza un **porcentaje** para indicar el momento de la secuencia de animación en el que tienen lugar. **0%** indica el primer momento de la secuencia de animación, mientras que **100%** indica el estado final de ésta. Debido a que estos dos momentos son tan importantes, tienen dos alias especiales: `from` y `to`. Ambos son opcionales. Si `from/0%` o `to/100%` no son especificados, el navegador inicia o finaliza la animación utilizando los valores calculados de todos los atributos.

Se pueden incluir opcionalmente **fotogramas adicionales** que describen los pasos intermedios desde el punto de partida hasta el punto final de la animación.

La sintaxis de la regla `keyframe` es la siguiente:

    [css]
    @keyframes <identifier> {
      [ [ from | to | <percentage> ] [, from | to | <percentage> ]* block ]*
    }

## Ejemplos

### Creación de textos en movimiento

Este sencillo ejemplo da estilo al elemento `<h1>` para que el texto se dezlice desde el borde derecho de la ventana del navegador.

    [css]
    h1 {
        animation-duration: 3s;
        animation-name: slidein;
    }
    
    @keyframes slidein {
        from {
            margin-left: 100%;
            width: 300%
        }
        
        to {
            margin-left: 0%;
            width: 100%;
        }
    }

El estilo dado al elemento `<h1>`, en este caso, especifica que la animación debe esperar 3 segundos para ejecutarse de principio a fin, utilizando la propiedad `animation-duration`, y que el valor de los `keyframes` que definen los fotogramas para la secuencia de animación es `slidein`.

Si quisiésemos dar un estilo personalizado al elemento `<h1>` para que apareciera en navegadores que no soportan animaciones CSS, deberíamos incluirlo aquí también. Sin embargo, en este caso, no queremos ningún estilo personalizado además del efecto de animación.

Los fotogramas son definidos utilizando los `keyframes`. En este caso, sólamente tenemos dos fotogramas. El primero se ejecuta en el 0% (utilizando el alias `from`). Además, aquí configuramos que el margen izquierdo del elemento se ejecute al 100% (esto es, en el extremos derecho del elemento contenedor), y que la anchura del elemento sea 300% (o tres veces la anchura del elemento contenedor). Esto provoca que el primer fotograma de la animación tenga el encabezado fijado en el borde derecho de la ventana del navegador.

El segundo (y final) fotograma se ejecuta al 100% (utilizando el alias `to`). El margen izquierdo se establece en 0% y el ancho del elemento en 100%. Esto hace que el encabezado finalice su animación a ras del borde izquierdo del área de contenido.

#### Añadir otro fotograma

Añadamos ahora otro fotograma al ejemplo de animación anterior. Digamos que queremos que la fuente del encabezado aumente a medida que se mueve de derecha a izquierda por un tiempo, y después disminuya de nuevo hasta su tamaño original. Es tan sencillo como añadir este fotograma:

    [css]
    75% {
        font-size: 300%;
        margin-left: 25%;
        width: 150%;
    }

Esto indica al navegador que al 75% del "camino" de la secuencia de animación, la cabecera debe tener su margen izquierdo al 25% y la anchura al 150%.

#### Hacer que se repita

Para hacer que la animación se repita por sí sola, simplemente hay que utilizar la propiedad `animation-iteration-count` para indicar cuántas veces tiene ésta que repetirse. En este caso, utilizaremos `infinite` para que la animación se repita de forma indefinida:

    [css]
    h1 {
        animation-duration: 3s;
        animation-name: slidein;
        animation-iteration-count: infinite;
    }

#### Hacer que se mueva hacia atrás y adelante

El ejemplo anterior hacía que la animación se repitiera, pero el hecho de que la animación salte de nuevo al comienzo es algo que resulta extraño. Lo que realmente queremos es que se mueve hacia atrás y adelante de la pantalla. Esto se logra fácilmente estableciendo la propiedad `animation-direction` con el valor `alternate`:

    [css]
    h1 {
        animation-duration: 3s;
        animation-name: slidein;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

#### Utilizar eventos de animación

Se puede obtener un control adicional sobre las animaciones - así como información útil sobre éstas -, mediante el uso de eventos de animación. Estos eventos, representados por el objeto `AnimationEvent`, pueden ser utilizados para detectar cuándo comienzan las animaciones, terminan o inician una nueva iteración. Cada evento incluye el momento en el que se produjo, así como el nombre de la animación que desencadenó el evento.

Nosotros modificaremos el texto desizante del ejemplo anterior para emitir información sobre cada evento de animación cuando se produce y así poder echar un vistazo a cómo funcionan.

##### Añadir los detectores de eventos de animación

Usaremos código JavaScript para "escuchar" los tres posibles eventos de animación. La función `setup()` configura los detectores de eventos:

    [javascript]
    function setup() {
        var e = document.getElementById("watchme");
        e.addEventListener("animationstart", listener, false);
        e.addEventListener("animationend", listener, false);
        e.addEventListener("animationiteration", listener, false);

        var e = document.getElementById("watchme");
        e.className = "slidein";
    }

Este es un código bastante estándar; se puede obtener más información sobre cómo funciona en la documentación de `element.addEventListener()`. Lo último que la función `setup()` realiza aquí es establecer la `class` sobre el elemento que estamos animando a `slidein`; hacemos esto para iniciar la animación.

¿Por qué? Porque el evento `animationstart` se ejecuta en cuanto la animación se inicia, y en nuestro caso, esto sucede antes de ejecutar el código. Así que iniciaremos la animación nosotros mismos.

##### Recepción de los eventos

Los eventos se "entregan" con la función `listener()`, que se muestra a continuación:

    [javascript]
    function listener(e) {
        var l = document.createElement("li");
        switch(e.type) {
            case "animationstart":
                l.innerHTML = "Started: elapsed time is " + e.elapsedTime;
                break;
            case "animationend":
                l.innerHTML = "Ended: elapsed time is " + e.elapsedTime;
                break;
            case "animationiteration":
                l.innerHTML = "New loop started at time " + e.elapsedTime;
                break;
        }
        document.getElementById("output").appendChild(l);
    }

Este código también es muy sencillo. Simplemente "mira" al `event.type` para determinar qué tipo de evento de animación se produce, y a continuación añade una nota apropiada al `<ul>` (lista no ordenada) que estamos usando para registrar estos eventos.

La salida, cuando todo está dicho y hecho, se vería algo así:

* Iniciado: el tiempo transcurrido es 0
* Nuevo ciclo comenzó en el momento 3.01200008392334
* Nuevo ciclo comenzó en el momento 6.00600004196167
* Finalizado: tiempo transcurrido es 9.234000205993652

Hay que tener en cuenta que los tiempos están muy cerca entre sí, y que no se muestran exactamente igual que los establecidos cuando la animación fue configurada. También hay que saber que después de la iteración final de la animación, el evento `animationiteration` no se envía; en su lugar se envía el evento `animationend`.

<div class="exercise">
  <p class="title">Ejercicio 9</p>
</div>

[Ver enunciado](#ej09)