# Introducción

Responsive Web Design (o diseño web adaptativo) se trata de una técnica de diseño y desarrollo web por el que se consigue que un único sitio se adapte perfectamente a todos los dispositivos que puedan consumirlo, desde ordenadores de escritorio a netbooks, tablets, teléfonos móviles, televisores, etc. En definitiva, se trata de construir una única web para que se vea correctamente y aproveche las particularidades de todo dispositivo que hoy exista, o pueda existir en el futuro, independientemente de la pantalla en la que se muestre.

Tanto la idea y como el propósito del diseño web adaptativo fueron previamente discutidos y descritos por el consorcio W3C en julio de 2008 en su recomendación [*Mobile Web Best Practices*](http://arborwebsolutions.com/articles/responsive-design-is-an-official-w3c-recommendation) bajo el subtítulo One Web. Dicha recomendación, aunque específica para dispositivos móviles, puntualiza que está hecha en el contexto de "[One Web](http://www.w3.org/TR/mobile-bp/#OneWeb)", y que por lo tanto engloba no solo la experiencia de navegación en dispositivos móviles sino también en dispositivos de mayor resolución de pantalla como dispositivos de sobremesa. El concepto de "One Web" hace referencia a la idea de construir una Web para todos (Web for All) y accesible desde cualquier tipo de dispositivo (Web on Everything). Hoy en día, la variedad de dispositivos existente en el mercado ha provocado que la información disponible no sea accesible desde todos los dispositivos, o bien es accesible pero la experiencia de navegación es muy pobre.

## Ventajas

Las ventajas de utilizar un diseño web adaptativo son más que evidentes:

* Con **una sola versión** en HTML y CSS se cubren todas las resoluciones de pantalla, es decir, el sitio web creado estará optimizado para todo tipo de dispositivos: PCs, tabletas, teléfonos móviles, etc. Esto mejora la experiencia de usuario a diferencia de lo que ocurre, por ejemplo, con sitios web de ancho fijo cuando se acceden desde dispositivos móviles.
* **Reducción de costos**. Se reducen los costes ya que hasta hoy se debe hacer un portal para la Web y otro para dispositivos móviles. Esto origina mayores costos de creación y mantenimiento de la información.
* **Eficiencia en la actualización**. El sitio solo se debe actualizar una vez y se ve reflejada en todas las plataformas. Cuando tenemos los portales independientes para Web y Mobile se debe realizar la actualización dos veces lo que crea la necesidad de mayor cantidad de recursos y posibilidad de error.
* Desde el punto de vista de la **optimización de motores de búsqueda**, sólo aparecería una URL en los resultados de búsqueda, con lo cual se ahorran redirecciones y los fallos que se derivan de éstas. También se evitarían errores al acceder al sitio web en concreto desde los llamados *social links*, es decir, desde enlaces que los usuarios comparten en medios sociales tales como Facebook, Twitter, etc y que pueden acabar en error dependiendo de qué enlace se copió (desde qué dispositivo se copió) y desde qué dispositivo se accede.

## Ejemplos de sitios creados aplicando RWD

En un artículo llamado: [Responsive Web Design: 50 Examples and Best Practices](http://designmodo.com/responsive-design-examples/) muestra excelentes ejemplos de la aplicación de esta tecnología. Aquí una pequeña muestra de alguno de ellos:

[Boston Globe](http://www.bostonglobe.com/)

![Diario Boston Globe utilizando un diseño adaptativo](cap01/boston-responsive.png)

[Food Sense](http://foodsense.is/)

![La web Food Sense utilizando un diseño adaptativo](cap01/food-sense-responsive.png)

[Deren keskin](http://www.deren.me/)

![La web Deren keskin utilizando un diseño adaptativo](cap01/deren-responsive.png)

## Los ingredientes

Los elementos básicos necesarios para contruir un diseño adaptativo, son al menos los tres siguientes:

* Una estructura flexible, basada en rejilla.
* Imágenes y multimedia flexible.
* *Media queries*, como parte de la especificación de CSS 3.

En los próximos capítulos crearemos un diseño adaptativo que se comporte de manera diferente según el dispositivo a través del cual se accede a la web, y las *necesidades* del usuario.