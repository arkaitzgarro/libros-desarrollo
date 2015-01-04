# El cliente manda una petición

Cada conversación en la web comienza con una petición. Esta petición es un mensaje de texto creado por un cliente (navegador, app) en un formato especial conocido como HTTP.
El cliente envía esta petición a un servidor, y entonces espera la respuesta.

Una petición en lenguaje HTTP sería algo así:

```http
GET / HTTP/1.1
Host: google.com
Accept: text/html
User-Agent: Chrome/31.0.1650.57 (Macintosh; Intel Mac OS X 10_9_0)```


Este simple mensaje comunica todo lo necesario acerca de qué recurso exactamente está solicitando el cliente.

La primera línea de una petición HTTP es la más importante y contiene dos cosas:

- el **URI** (Uniform Resource Identifier)
- el **método HTTP**

El URI `(e.g. /, /contact, etc)` es la única dirección o ubicación que identifica el recurso que el cliente quiere.

El método HTTP `(e.g. GET)` define lo que quieres hacer con el recurso. Los métodos HTTP son los verbos de la petición y definen las pocas maneras comunes que pueden actuar sobre el recurso:

- `GET` Recuperar el recurso del servidor
- `POST` Crear un recurso en el servidor
- `PUT` Actualizar el recurso en el servidor
- `DELETE` Borrar el recurso del servidor

Teniendo esto en cuenta, es muy fácil imaginarse cómo debería ser una petición HTTP para eliminar una entrada específica de un blog, por ejemplo:

```http
DELETE /blog/15 HTTP/1.1```


Aunque hay nueve métodos HTTP definidos por la especificación HTTP, muchos de ellos no son muy utilizados. En realidad, muchos navegadores modernos no son compatibles con los métodos `PUT` y `DELETE`.

Además de la primera línea, una petición HTTP contiene invariablemente otras líneas de datos llamadas *request headers* o cabeceras.
Estas cabeceras pueden suministrar una amplia gama de información como el servidor *(Host)*, los formatos de respuesta que acepta el cliente *(Accept)* y la aplicación que utiliza el cliente para realizar la solicitud *(User-Agent)*.
