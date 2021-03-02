<?php
	
	class gestionLibros{

		/**
		*
		* Función que realiza la conexión con la base de datos.
		* @return null si hay un error.
		* @return $mysqli objeto de conexión con la base de datos.
		*
		*/
		public function conexion(){

			//$mysqli = new mysqli("localhost", "stepans", "stepans", "libros");
			$mysqli = new mysqli("sql103.byethost14.com", "b14_27148045", "stepans", "b14_27148045_libros");
			
			if ($mysqli->connect_errno)
			{
				return null;
			}
			else
			{
				$mysqli->set_charset("utf8");
				return $mysqli;
			}
		}
	

//-------------------------------------------------------------------------------------------

		/**
		*
		* Función que consulta las sgierencias de autores pasandole el nombre del autor.
		* @param $name nombre o apellido del autor. 
		* @return $salida devuelve un array asociativo de los autores y libros sugeridos
		* 
		*/
		public function sugerenciaAutores($name)
		{
			$mysqli=$this->conexion();

			$sql = "SELECT titulo,nombre,apellidos FROM autor a JOIN libro l ON (a.id=l.id_autor) WHERE nombre LIKE '%$name%' OR apellidos LIKE '%$name%'";
		
			$resultset = $mysqli->query($sql);

			$salida ="";
		
			if (($resultset = $mysqli->query($sql)) && (!$mysqli->error))
		    {
				while($fila = $resultset->fetch_assoc())
				{
					$salida = $salida . "<br>". $fila["titulo"]. " -- " . $fila["nombre"] . ", " . $fila["apellidos"];
				}
			}

			return $salida;
		}
	}

?>