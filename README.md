# PROYECTO FINAL: LELÚ CAFÉ

Hace algunos meses estuve trabajando en un café que queda en Providencia, y vi la necesidad que tenian de tener un sitio para que contribuyera con la difusión del mismo café como para ser más eficientes al momento de atender sus clientes.
En este café, que abre de lunes a sábado, se preparan almuerzos diarios que consisten en colaciones donde todos los días va variando su menú. Además preparan postres, muffins, tortas y kuchenes. Las tortas se pueden mandar a pedir a gusto del cliente, y se retiran en local.

A partir de esto, intenté unir esas 3 cossas que me parecían importantes:

1. Difusión tanto como para saber donde está ubicado, sus redes sociales y número de teléfono. Y además como plan de hacerse cercanos al público, crear un espacio de blog donde exponer recetas y tips de cocina
2. Un espacio donde exponer el menú del día
3. Un sistema donde se puedan acoger pedidos

Y así es como hice el sitio, donde sus páginas son las siguientes:

* __Index__: lugar donde hay un carrusel de promociones de sus productos
* __Sobre nosotros__: espacio para mostrar la historia del lugar y donde se exponen fotografias de los espacios
* __Menú del día__: es la página donde se expone el menú diario (mediante custom post y advanced custom post) y es la parte de la web que tiene más complijidad ya que tiene 3 situaciones dependiendo de la fecha en que se consulte la pagina y si esta coincide con la fecha en que se crea. Si alguien consulta la página un día domingo, aquí aparecerá que el café está cerrado y que no hay menu. Si alguien consulta la pagina en los días que abre pero aún no se ha escrito el menú dentro del administrador de wordpress, aparecerá que el menú no está listo y que se debe volver más tarde. Y por último, si la fecha de publicación coincide con la fecha en que el usuario consulta la pagina se mostrará el menú del día y su precio.
* __Pedidos__: es la sección donde hay un bloque de información contando lo que se puede pedir y los precios de los distintos tamaños de las tortas, a su lado está un formulario creado con Contact Form 7 en el cual, al momento de hacer clickr, llega un email del cafe al cliente especificando el pedido y a la vez como respaldo al email del café para que el administrador a cargo de la web haga efectivo el ingreso del pedido
* __Blog__: lugar donde se publican noticias, recetas y tips de cocina

***

### DATOS WP ADMIN
ADMIN: __lelu__
PASSWORD: __administrador123__

***