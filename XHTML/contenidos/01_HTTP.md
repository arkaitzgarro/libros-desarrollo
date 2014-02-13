# ¿Qué es HTTP?

## HTTP es simple

**HTTP** (Hypertext Transfer Protocol) es un conjunto de reglas acordadas para transferir texto con atributos propios de Internet, que permite a dos máquinas comunicarse entre sí.

Se trata de un protocolo de transferencia de texto que opera a través de solicitudes entre un **cliente** y un **servidor**.
HTTP es el término utilizado para describir este sencillo lenguaje basado en texto. No importa cómo se desarrolle, el objetivo del servidor será siempre entender y devolver respuestas de texto sencillo.

Es también uno de los protocolos que cierra la brecha entre los grupos de creación de redes y desarrollo de aplicaciones, ya que contiene información que es utilizada por los dos en la entrega y el desarrollo de aplicaciones basadas en web.

![Proceso de una petición web](imagenes/cap01/http.png)

## Paso 1: el cliente manda una Petición

Cada conversación en la web comienza con una petición. Esta petición es un mensaje de texto creado por un cliente (navegador, app) en un formato especial conocido como HTTP.
El cliente envía esta petición a un servidor, y entonces espera la respuesta.

Una petición en lenguaje HTTP sería algo así:

	GET / HTTP/1.1
	Host: google.com
	Accept: text/html
	User-Agent: Chrome/31.0.1650.57 (Macintosh; Intel Mac OS X 10_9_0)

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

	DELETE /blog/15 HTTP/1.1

Aunque hay nueve métodos HTTP definidos por la especificación HTTP, muchos de ellos no son muy utilizados. En realidad, muchos navegadores modernos no son compatibles con los métodos `PUT` y `DELETE`.

Además de la primera línea, una petición HTTP contiene invariablemente otras líneas de datos llamadas *request headers* o cabeceras.
Estas cabeceras pueden suministrar una amplia gama de información como el servidor *(Host)*, los formatos de respuesta que acepta el cliente *(Accept)* y la aplicación que utiliza el cliente para realizar la solicitud *(User-Agent)*.

## Paso 2: el servidor devuelve una Respuesta

Una vez que el servidor ha recibido la petición, sabe exactamente qué recurso necesita el cliente (via URI) y qué es lo que el cliente quiere hacer con ese recurso (via método HTTP).

Traducido a HTTP, la respuesta enviada al navegador será algo como esto:

	HTTP/1.1 200 OK
	Date: Sun, 01 Dec 2013 18:17:45 GMT
	Server: Apache/2.2.22 (Ubuntu)
	Content-Type: text/html

	<html>
  		<!-- ... -->
	</html>

La respuesta HTTP contiene el recurso solicitado (el contenido HTML en este caso), así como otra información acerca de la respuesta.
La primera línea es especialmente importante y contiene el código de estado de respuesta HTTP (200 en este caso).
El código de estado comunica el resultado global de la solicitud.
Existen diferentes códigos de estado que nos indican éxito, error o que el cliente necesita hacer algo (e.g. redirigir a otra página). Los códigos de estado más comunes son:

- `200 OK`. Indica éxito.
- `304 Not Modified`. Esto muestra que el recurso en cuestión no ha cambiado y que el navegador debe cargarlo desde su caché.
- `404 Not Found`. Esto sugiere que el recurso no se encuentra en el servidor.
- `401 Authorization Required`. Esto indica que el recurso está protegido y quiere unos credenciales válidos antes de que el servidor pueda conceder el acceso.
- `500 Internal Error`. Esto significa que el servidor ha tenido un problema procesando la petición.

Al igual que la petición, una respuesta HTTP contiene piezas de información adicionales conocidas como cabeceras HTTP o *headers*. Por ejemplo, una importante cabecera de respuesta HTTP es *Content-Type*. El cuerpo o *body* de un mismo recurso puede ser devuelto en múltiples formatos diferentes como HTML, XML o JSON y la cabecera *Content-Type* utiliza *Internet Media Types* como texto/html para decirle al cliente qué formato está devolviendo.
