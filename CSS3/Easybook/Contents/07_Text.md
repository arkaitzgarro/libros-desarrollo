# Módulo *Text*

La especificación oficial y el estado actual de desarrollo del módulo *Text* en CSS 3 puede consultarse en [http://www.w3.org/TR/css3-text/](http://www.w3.org/TR/css3-text/).

CSS 3 ha añadido nuevas funcionalidades relacionadas con el texto, realizando un importante avance en este sentido y facilitando la creación de efecto de texto, sin necesidad de recurrir a complejas soluciones.

## Sombra en textos

Finalmente se ha añadido la posibilidad de crear sombras en los textos del documentos, eliminando la necesidad de crear estos textos en una herramienta externa (como Photoshop o Gimp), he incluyendolos posteriormente como una imagen en el documento, lo que perjudicaba directamente el contenido.

| Propiedad             | `text-shadow`    |
| --------------------: | :------------- |
| **Valores** | none | [ &lt;length&gt;{2,3} && &lt;color&gt;? ]# |
| **Se aplica a** | Todos los elementos. |
| **Valor inicial**  | none |
| **Descripción**       | Especifica una sombra para el texto. |

Esta propiedad acepta una lista de valores separados por comas que serán aplicados al texto. Las diferentes sombras son aplicadas de arriba hacia debajo, es decir, la primera sombra de la lista está sobre las demás.

Los valores de la sombra son interpretados de la siguiente manera:

* El primer valor indica la separación horizontal de la sombra. Un valor positivo desplaza la sombra hacia la derecha de la caja, mientras que un valor negativo la desplazará hacia la izquierda.
* El segundo valor indica la separación vertical de la sombra. Un valor positivo desplaza la sombra debajo de la caja, mientras que un valor negativo la desplazará hacia arriba.
* El tercer valor es la difusión de la sombra. Si el valor es `0` (no se aceptan valores negativos) la sombra será muy nítida. Para valores mayores que `0`, la sombra se va difuminando.

Algunos ejemplos:

<div class="example">
<div class="example4">
<h3 class="example4a">Ejemplo de texto sin sombra</h3>
<h3 class="example4b">Ejemplo de texto con sombra</h3>
</div>
</div>

    [css]
    h3 {color: white; text-shadow: 0.1em 0.1em 0.2em black; }

<div class="example">
<div class="example5">
<h3 class="example5">I wish wish wish…</h3>
</div>
</div>

    [css]
    h3 {text-shadow: 0.2em 0.5em 0.1em #600,
                    -0.3em 0.1em 0.1em #060,
                     0.4em -0.3em 0.1em #006}

<div class="example">
<div class="example6">
<h3 class="example6a">I, Augustus (you know who)</h3>

<h3 class="example6b">That's extra, of course</h3>
</div>
</div>

    [css]
    h3 {text-shadow: -1px -1px white, 1px 1px #333}
    h3 {text-shadow: 1px 1px white, -1px -1px #444}

## Fuentes web

Hasta la introducción de esta nueva característica en CSS 3, a la hora de escoger una fuente para ser utilizada en un documento HTML, nos encontrábamos con la limitación de que el usuario tuviera ese tipo de letra instalada en su ordenador, porque de no ser así, los textos se mostrarían con otras tipografías, distintas a las que habíamos elegido (las definidas como `fallback` o la fuente por defecto del navegador). Es por ello que el abanico de fuentes que podíamos utilizar, estaba  reducido a las típicas Arial, Verdana, Times New Roman o Sans.

La regla `@font-face` permite enlazar fuentes en línea que van a ser utilizadas en páginas web. La descripción de la fuente, define la localización física de la fuente (local o externa), así como las características de dicha fuente. Es posible declarar tantas reglas `@font-face` como fuentes sean necesarias utilizar.

Su sintaxis es la siguiente:

    [css]
    @font-face {
      [font-family: <family-name>;]?
      [src: [ <uri> [format(<string>#)]? | <font-face-name> ]#;]?
      [unicode-range: <urange>#;]?
      [font-variant: <font-variant>;]?
      [font-feature-settings: normal|<feature-tag-value>#;]?
      [font-stretch: <font-stretch>;]?
      [font-weight: <weight>];
      [font-style: <style>];
    }

Donde:

* `<family-name>`: especifica el nombre de la fuente que se utilizará.
* `<uri>`: URL para de la ubicación remota de la fuente, o nombre de la fuente en el ordenador del autor ("FontName")
* `<font-variant>`: variante de una fuente anterior.
* `<font-stretch>`: especifica la anchura de la fuente.
* `<weight>`: especifica el peso de la fuente (`light`, `normal`, `bold` ...)
* `<style>`: especifica el estilo de la fuente (`normal`, `italic` o `oblique`)

Un ejemplo sencillo:

<div id="preview-font_face">
<p>Los usuarios que accedan con un navegador que cumpla con el estándar, verán este texto con la fuente Delicious, <em>y esta parte con Delicious Bold</em>.</p>
</div>

Dependiendo del tipo de navegador con el que se acceda a nuestra web, éste acepta un tipo concreto de fuente. Los tipos existentes son los siquientes:

| String                | Formato de fuente    | Extensión |
| --------------------- | -------------------- | --------- |
| **"woff"** | [WOFF (Web Open Font Format)](http://www.w3.org/TR/WOFF/) | .woff |
| **"truetype"** | [TrueType](http://www.microsoft.com/typography/otspec/default.htm) | .ttf |
| **"opentype"** | [OpenType](http://www.microsoft.com/typography/otspec/default.htm) | .ttf, .otf |
| **"embedded-opentype"** | [Embedded OpenType](http://www.w3.org/Submission/2008/SUBM-EOT-20080305/) | .eot |
| **"svg"** | [SVG Font](http://www.w3.org/TR/SVG/fonts.html) | .svg |

Un ejemplo de utilización de varios orígenes de fuentes es el siguiente:

    [css]
    @font-face {
        font-family: 'ITCAvantGardeStd-Bk';
        src: url('fonts/ITCAvantGardeStd-Bold.eot') format('eot'),
             url('fonts/ITCAvantGardeStd-Bold.woff') format('woff'),
             url('fonts/ITCAvantGardeStd-Bold.ttf') format('truetype'),
             url('fonts/ITCAvantGardeStd-Bold.svg') format('svg');
        font-weight: bold;
        font-style: normal;
    }

<div class="exercise">
  <p class="title">Ejercicio 5</p>
</div>

[Ver enunciado](#ej05)