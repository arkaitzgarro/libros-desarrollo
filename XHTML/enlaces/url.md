# URL

Para poder comprender el funcionamiento y creación de los **enlaces**, es importante conocer y dominar el concepto de **URL**. El acrónimo **URL** *(Uniform Resource Locator)* es un localizador de recursos uniformes y hace referencia a un único identificador de cada recurso en Internet. Esta secuencia de caracteres nombra recursos en Internet para su localización o identificación.

La URL de un recurso tiene dos objetivos principales:

- **Identificar** de forma única a ese recurso: cada página en Internet tiene un nombre único, lo que posibilita la creación de enlaces que apunten de forma inequívoca a una página determinada.

- **Localizar** de forma eficiente ese recurso.

El **formato general** de una URL es:  `esquema://máquina/directorio/archivo`

Por ejemplo: `http://www.arkaitzgarro.com/xhtml/capitulo-5.html`

Cuyas partes son:

| Protocolo | Dominio                | Ruta          |
| :-------: | :--------------------: |:------------: |
| `http://` | `www.arkaitzgarro.com` | `/xhtml/capitulo-5.html`  |
| Mecanismo que debe utilizar el navegador para acceder a ese recurso| Nombre del dominio, hace referencia a una dirección I.P. | Recurso específico al que se quiere acceder  |

También podemos encontrar URL más complejas como:

`http://www.arkaitzgarro.com/xhtml/capitulo-5.html?page=5#url`

Donde además de las partes anteriores encontramos:

- `?page=5` **Consulta**: Información adicional para acceder al recurso. Comienza con el caracter `?` seguido de una sucesión de palabras y/o números separados por `=` y `&`.
- `#url` **Sección**: el navegador se posiciona en dicha sección de la página. Comienza con el caracter `#`.

### Codificación de caracteres en las URL

Al igual que en el texto, las URL también presentan problemas con algunos caracteres, por lo que se utiliza una **codificación de caracteres** que asegura su correcto funcionamiento.

| Caracter<br />original | Caracter<br />codificado | Caracter<br />original | Caracter<br />codificado |
| :--: | :--: | :--: | :--: |
| /  | %2F | ñ  | %F1 |
| :  | %3A | á  | %E1 |
| =  | %3D | é  | %E9 |
| "  | %22 | í  | %ED |
| '  | %60 | ó  | %F3 |
| (espacio en blanco) | %20 | ú | %2F |
| ?  | %3F | ç  | %FA |
| @  | %40 | Ñ  | %D1 |
| &  | %26 | Á  | %C1 |
| \  | %5C | É  | %C9 |
| ~  | %7E | Í  | %CD |
| #  | %23 | Ó  | %D3 |
|   || Ú  | %DA |
|   || Ç  | %C7 |

### URL completas, relativas y absolutas

Dentro de una página web podemos encontrar decenas de **enlaces** y éstos pueden ser de diferentes tipos. Como principal distinción encontramos URL completas, absolutas y relativas:

- **URL completas**: `http://www.dominio.com/directorio/recurso`
Incluyen todas las partes de la URL (protocolo, dominio y ruta) y no se necesita más información para obtener el recurso enlazado.
El enlace está completamente definido.

- **URL absolutas**: `/directorio/recurso`
Se parte de la base que el recurso al que queremos llegar esta en el mismo servidor del que partimos.

- **URL relativas**: `../recurso`
Son URL incompletas, prescinden de algunas partes de las URL para hacerlas más breves (de la parte del protocolo, del nombre del servidor e incluso de parte o toda la ruta del recurso enlazado). Por esto, es necesario tener información adicional, es decir, se debe conocer la URL del origen del enlace.
Es una versión abreviada de una URL absoluta.

Dentro de las **URL relativas**, existen distintos tipos:

- El origen y el destino del enlace se encuentran en el **mismo directorio**:

| Elemento        | Valor   |
| ------------:   | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - mismo directorio |
| URL Completa    | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina2.html` |
| URL Relativa    | `pagina2.html` |

- El destino del enlace se encuentra **en un nivel superior**:

| Elemento        | Valor   |
| --------------: | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - directorio superior llamado `ruta2` |
| URL Completa    | `http://www.ejemplo.com/ruta1/ruta2/pagina2.html` |
| URL Relativa    | `../pagina2.html` |

Si el destino se encuentra **dos niveles por encima**, se debe incluir ../ dos veces seguidas: `../../pagina2.html`

Y si el destino está en **otro directorio**, llamado por ejemplo `ruta4` que se encuentra en la **raíz del servidor**, la URL relativa sería: `../../../ruta4/pagina2.html`

- El destino del enlace se encuentra **en un nivel inferior**:

| Elemento        | Valor   |
| --------------: | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - directorio inferior llamado `ruta4` |
| URL Completa    | `http://www.ejemplo.com/ruta1/ruta2/ruta3/ruta4/pagina2.html` |
| URL Relativa    | `ruta4/pagina2.html` |

También se pueden indicar varios directorios seguidos: `ruta4/ruta5/ruta6/pagina2.html`

- El destino del enlace se encuentra **en algún lugar en la raíz del servidor**:

| Elemento        | Valor   |
| --------------: | :------ |
| Página origen   | `http://www.ejemplo.com/ruta1/ruta2/ruta3/pagina1.html` |
| Página enlazada | `pagina2.html` - directorio en la raíz del servidor `ruta7` |
| URL Completa    | `http://www.ejemplo.com/ruta7/pagina2.html` |
| URL Relativa    | `/ruta7/pagina2.html` |

Cuando la URL relativa comienza por /, el navegador considera que es la **ruta completa comenzando desde la raíz del servidor**, por lo que sólo le añade el protocolo y el nombre del servidor origen.
