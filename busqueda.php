<?php
echo "<!DOCTYPE html>
		  <html lang='es'>
			<head>
				<meta charset='UTF-8'/>
				<title>Búsqueda por especie</title>
				<link rel='stylesheet' type='text/css' href='../Styles/busqueda.css'/>
			</head>
			<body>";
				$conn=mysqli_connect('localhost','root','','aninorte');
				$query='SELECT DISTINCT nom_especie FROM especies';
				$res=mysqli_query($conn,$query);
				$fila=mysqli_fetch_assoc($res);
echo"			<h1>BÚSQUEDA POR ESPECIE</h1>
				<form method='GET' action='animales.php'>
					Especie a buscar:<br/><br/>
					<select name='especie'>
							<option value=' '>---------------------</option>";
						while($fila)
						{
echo"						<option value='".$fila['nom_especie']."'>".$fila['nom_especie']."</option>";
							$fila=mysqli_fetch_assoc($res);
						}
echo"				</select><br/><br/>
					<input type='submit' value='Buscar'/>
					<br/><br/><br/>
					<a href='inianimales.php'>Página principal</a>
				</form>";
echo"		</body>
		  </html>";
?>