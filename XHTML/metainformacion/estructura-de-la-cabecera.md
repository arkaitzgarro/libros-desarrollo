# Estructura de la cabecera

Como ya se explicó anteriormente, las páginas XHTML se dividen en dos partes denominadas cabecera y cuerpo. La sección de la cabecera está formada por todas las etiquetas encerradas por la etiqueta `<head>`:

| Etiqueta              | `<head>`    |
| --------------------: | :------------- |
| **Atributos comunes** | internacionalización |
| **Atributos propios** | `profile="url"` Especifica la URL del perfil o perfiles que utilizan los metadatos<br />`lang="codigo"` Especifica el idioma principal de los contenidos de la página |
| **Tipo de elemento**  | En bloque |
| **Descripción**       | Define la cabecera del documento HTML |

La cabecera típica de una página HTML completa presenta la siguiente estructura:

```html
<head>
    <!-- Zona de etiquetas META -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Zona de título -->
    <title>El título del documento</title>
    <!-- Zona de recursos enlazados (CSS, RSS, JavaScript) -->
    <link rel="stylesheet" href="#" type="text/css" media="screen" />
    <link rel="stylesheet" href="#" type="text/css" media="print" />
    <link rel="alternate" type="application/rss+xml"
          title="RSS 2.0" href="#" />
      <script src="#" type="text/javascript"></script>
</head>
```

La __etiqueta `<title>`__ establece el **título** de la página. Los navegadores muestran este título como título de la propia ventana del navegador. Los buscadores utilizan este título como título de sus resultados de búsqueda.

Por tanto, el valor de `<title>` no sólo es importante para los usuarios, sino que también es importante para que los usuarios encuentren las páginas a través de los buscadores. Un error común de muchos sitios web consiste en mostrar un mismo título genérico en todas sus páginas. **Cada página debe mostrar un título corto**, adecuado, único y que describa inequívocamente los contenidos de la página.

Las páginas XHTML deben tener definido un título y sólo uno, por lo que todas las páginas web deben incluir obligatoriamente una etiqueta `<title>`, cuya definición formal se muestra a continuación:

| Etiqueta              | `<title>`    |
| --------------------: | :------------- |
| **Atributos comunes** | internacionalización |
| **Atributos propios** | `lang="codigo"` Especifica el idioma principal del título de la página |
| **Tipo de elemento**  | - |
| **Descripción**       | Define el título del documento HTML |

```html
<head profile="http://gmpg.org/xfn/11">
   ...
</head>```

El documento [http://gmpg.org/xfn/11](http://gmpg.org/xfn/11) es un perfil que define atributos adicionales para establecer la relación entre sitios web.
