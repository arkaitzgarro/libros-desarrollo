# Enlaces básicos

Son los creados mediante el *tag* `<a>`:

| Etiqueta              | `<a>`    |
| --------------------: | :------------- |
| **Atributos comunes** | básicos, internacionalización, eventos, foco |
| **Atributos propios** | `name="texto"` Permite nombrar al enlace para que se pueda acceder desde otros enlaces<br /> `href="url"` Indica la URL del recurso que se quiere enlazar |
| **Tipo de elemento**  | En línea |
| **Descripción**       | Se emplea para enlazar todo tipo de recursos |

Un ejemplo de **código HTML** con la etiqueta `<a>` sería:

```html
<a href="http://www.google.com">Enlace básico a una web</a>```

Este enlace apunta a una web, en concreto, a la página principal de Google. Pero de la misma manera, podríamos enlazarlo con una imagen, un documento, etc., ya que el atributo `href` puede apuntar a cualquier tipo de recurso al que pueda acceder el navegador.

Por ejemplo:

```html
<a href="http://www.ejemplo.com/imagen.jpg">Enlace básico a una imagen</a>```

o

```html
<a href="http://www.ejemplo.com/informe.pdf">Enlace básico a un archivo pdf</a>```

El atributo `name` permite definir enlaces dentro de una misma página web. Esto es muy útil cuando se trata de documentos largos divididos en secciones.

Por ejemplo, si creas el "enlace vacío"

```html
<a name="inicio"></a>```

y en otro lugar de la página creas el enlace

```html
<a href="#inicio">Volver al inicio de la página</a>```

al pinchar en éste, el navegador accede a la página apuntada por la URL y baja directamente a la sección cuyo nombre se indica después del símbolo `#`.
Los enlaces directos a secciones también funcionan con el atributo `id` de cualquier elemento.
