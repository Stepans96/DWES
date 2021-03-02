<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script>
			//Función que llama a la función de sugerencias de la api y devulve el resultado en el campo de sugerencias
			$(document).ready(function(){
			    $("#texto").keyup(function(){
			        //$("#sugerencias").load("http://localhost/dwes/tarea9/api.php?name=" + $("#texto").val());
			        $("#sugerencias").load("http://stepans.byethost14.com/tarea9/api.php?name=" + $("#texto").val());
			    });
			});
		</script>
	</head>
	<body>
		<h1>DWES: Tarea 9</h1>
		<p><b>Búsqueda de autores y sus libros:</b></p>
		<form method="GET"> 
			Nombre del autor: <input type="text" id="texto">
		</form>
		<p><b>Sugerencias:</b><br><span id="sugerencias" style="color: #0080FF;"></span></p>
	</body>
</html>

