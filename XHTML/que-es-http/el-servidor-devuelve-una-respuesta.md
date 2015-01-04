# El servidor devuelve una respuesta

Una vez que el servidor ha recibido la petición, sabe exactamente qué recurso necesita el cliente (via URI) y qué es lo que el cliente quiere hacer con ese recurso (via método HTTP).

Traducido a HTTP, la respuesta enviada al navegador será algo como esto:

```http
HTTP/1.1 200 OK
Date: Sun, 01 Dec 2013 18:17:45 GMT
Server: Apache/2.2.22 (Ubuntu)
Content-Type: text/html

<html>
  	<!-- ... -->
</html>```


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
