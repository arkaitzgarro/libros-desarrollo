# Listas de definiciones

Estas **listas** son las menos utilizadas, su funcionamiento es similar al de un **diccionario**, ya que cada elemento de la lista está formado por términos y definiciones.

Éstas se componen de tres etiquetas:

- `<dl>` “definiton list” - entre ella y su cierre va a ir una definición.
- `<dt>` “definition term” - entre ella y su cierre irá el término que vamos a definir.
- `<dd>` “definition description” - entre ella y su cierre irá la definición en cuestión.

| Etiqueta              | `<dl>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir listas de definición |

| Etiqueta              | `<dt>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para definir los términos de los elementos de una lista de definición |

| Etiqueta              | `<dd>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos |
| **Atributos propios** | - |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Se emplea para indicar las definiciones de los elementos de una lista de definición |


Aunque no es habitual, cada término puede tener asociada más de una definición y cada definición puede tener asociados varios términos.

Un ejemplo de **código HTML** con estas tres etiquetas sería:

```html
<html>
    <head>
        <title>Lista de definición</title>
    </head>
    <body>
        <h1>Metalenguajes</h1>
        <dl>
        <dt>SGML</dt>
            <dd>Metalenguaje para la definición de otros
                lenguajes de marcado</dd>
        <dt>XML</dt>
            <dd>Lenguaje basado en SGML y que se emplea para
                describir datos</dd>
        <dt>RSS</dt>
        <dt>GML</dt>
        <dt>XHTML</dt>
        <dt>SVG</dt>
        <dt>XUL</dt>
            <dd>Lenguajes derivados de XML para determinadas
                aplicaciones</dd>
        </dl>
    </body>
</html>```


Que un navegador visualizaría de esta manera:

![Ejemplo lista definiciones](../assets/chapter06/lista_de_definicion.png)
