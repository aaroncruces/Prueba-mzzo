
# PokeDesk

## Descripción del problema

Emprenderé una búsqueda para capturar pokemones,
pero antes necesito recopilar información acerca de ellos.
necesito capturar los primero 100 pokemon
 
### Para ello requerimos: 

1. Se debe realizar el diseño de un base de datos capaz de almacenar los datos correspondientes a los primeros 100 pokemon.

2.  Realizar un procedimiento que consulte el api https://pokeapi.co/ y almacenar en nuestra base de datos local los datos correspondientes a tales pokemon experiencia base, altura, peso y habilidades la base de datos debe estar correctamente normalizada estos datos deben estar actualizados ya que las habilidades  de los pokémon pueden cambiar requerimos se cree un comando artisan que realice la actualización de los datos de los pokemon

3. React requiero una pantalla responsive donde se listen los primeros 100 pokemon a las izquierda  , y pueda filtrar por su nombre (con fotos). y a la derecha un pequeño
recuadro que muestra (detalle del pokemon ) la información que necesito es imagen, experiencia base, altura, peso y habilidades.
(el detalle de cada pokémon deba cambiar a medida que seleccione otro). 
Tal pantalla la consulta principal debe ir a la api de https://pokeapi.co/ y solo si esta presenta algún error o si cambia su url ,realizaremos la consulta
a nuestra base de datos que tiene los datos de solo los primeros 100 consideraciones importantes :
tal pantalla debe esta página con 10 resultados.

### Debe Usar:

1. Laravel 8.
2. Mysql 8.
3. React.
4. Git.

Debe disponilizarnos en el ambiente git, y las especificaciones en Readme.

## Resolución del problema

1. El diagrama de la base de datos se encuentra en [erd.svg](erd.svg)**