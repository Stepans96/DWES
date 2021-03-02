<?php

require "gestionLibros.php";

$gestion = new gestionLibros();

/**
*
* Función que realiza las sugerencias de títulos de libros y autores contra la base de datos, mediante la llamada a la función sugerenciaAutores() de la clase gestionLibros().  
* @param $apellidos recibe un valor correspondiente al apellido del autor
* @return $sugerencia en esta variable se cargan los datos de las sugerencias, que se correspnden con un array asociativo.
*
*/
function sugerencias_autor($name){

  global $gestion;

  $sugerencia = $gestion->sugerenciaAutores($name);

  return $sugerencia;

}


if (isset($_GET["name"]))
{
  $valor = sugerencias_autor($_GET["name"]);
}

echo $valor;

?>