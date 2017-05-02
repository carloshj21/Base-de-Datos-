<?php
	$especie=$_GET['especie'];
echo "<!DOCTYPE html>
		  <html lang='es'>
			<head>
				<meta charset='UTF-8'/>
				<title>Información de la especie</title>
				<link rel='stylesheet' type='text/css' href='../Styles/tabla.css'/>
			</head>
			<body>";
				$conn=mysqli_connect('localhost','root','','aninorte');
				$query='SELECT especies.Id,especies.nom_especie,especies.Genus,especies.nom_cientifico,
				especies.Author,especies.Rank,especies.Listing,especies.Party,especies.Listed_Under,especies.Full_Note,
				especies.All_FullNames,especies.All_ISOCodes,generos.Family,familias.Orders,ordenes.Class,clases.Phylum,
				filos.Kingdom,subespecies.nom_subespecie,distribuciones.Native_FullNames,distribuciones.Introduced,
				distribuciones.Introduced_Q,distribuciones.Reintroduced,distribuciones.Extinct,distribuciones.Extinct_Q,
				distribuciones.Uncertain FROM especies JOIN generos ON especies.Genus=generos.Genus
				JOIN familias ON generos.Family=familias.Family JOIN ordenes ON familias.Orders=ordenes.Orders 
				JOIN clases ON ordenes.Class=clases.Class JOIN filos ON clases.Phylum=filos.Phylum JOIN reino ON filos.Kingdom=reino.Kingdom
				JOIN subespecies ON especies.Id=subespecies.Id JOIN distribuciones ON especies.Id=distribuciones.Id 
				WHERE nom_especie LIKE "'.$especie.'";';
				$res=mysqli_query($conn,$query);
				$fila=mysqli_fetch_assoc($res);
echo"			<h1>".$especie."</h1>";
echo"			<table border='1'>";
				while($fila)
				{
echo"				<tr>
						<td class='head'>
							ID
						</td>
						<td class='resul'>";
echo						$fila['Id'];
echo"					</td>
					</tr>
					<tr>
						<td class='head'>
							REINO
						</td>
						<td class='resul'>";
echo						$fila['Kingdom'];
echo"					</td>
					</tr>
					<tr>
						<td class='head'>
							FILO
						</td>
						<td class='resul'>";
echo						$fila['Phylum'];
echo"					</td>
					</tr>
					<tr>
						<td class='head'>
							CLASE
						</td>
						<td class='resul'>";
echo						$fila['Class'];
echo"					</td>
					</tr>
					<tr>
						<td class='head'>
							ORDEN
						</td>
						<td class='resul'>";
echo						$fila['Orders'];
echo"					</td>
					</tr>
					<tr>
						<td class='head'>
							FAMILIA
						</td>
						<td class='resul'>";
echo						$fila['Family'];
echo"					</td>
					</tr>
					<tr>
						<td class='head'>
							GÉNERO
						</td>
						<td class='resul'>";
echo						$fila['Genus'];
echo"					</td>
					</tr>";
					if($fila['nom_subespecie']!=NULL)
					{	
echo"				<tr>
						<td class='head'>
							SUBESPECIE
						</td>
						<td class='resul'>";
echo						$fila['nom_subespecie'];
echo"					</td>
					</tr>";
					}
echo"				<tr>
						<td class='head'>
							NOMBRE CIENTÍFICO
						</td>
						<td class='resul'>";
echo						$fila['nom_cientifico'];
echo"					</td>
					</tr>";
					if($fila['Author']!=NULL)
					{
echo"				<tr>
						<td class='head'>
							AUTOR
						</td>
						<td class='resul'>";
echo						$fila['Author'];
echo"					</td>";
echo"				</tr>";
					}
echo"				<tr>";
echo"					<td class='head'>";
echo"						RANK";
echo"					</td>";
echo"					<td class='resul'>";
echo						$fila['Rank'];
echo"					</td>";
echo"				</tr>";
echo"				<tr>";
echo"					<td class='head'>";
echo"						LISTING";
echo"					</td>";
echo"					<td class='resul'>";
echo						$fila['Listing'];
echo"					</td>";
echo"				</tr>";
					if($fila['Party']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						PARTY";
echo"					</td>";
echo"					<td class='resul'>";
echo						$fila['Party'];
echo"					</td>";
echo"				</tr>";
					}
echo"				<tr>";
echo"					<td class='head'>";
echo"						LISTED UNDER";
echo"					</td>";
echo"					<td class='resul'>";
echo						$fila['Listed_Under'];
echo"					</td>";
echo"				</tr>";
					if($fila['Full_Note']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						NOTA COMPLETA";
echo"					</td>";
echo"					<td class='resul'>";
echo						$fila['Full_Note'];
echo"					</td>";
echo"				</tr>";
					}
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							TODOS LOS NOMBRES";
echo"					</td>";
echo"					<td class='resul'>";
							$cad=$fila['All_FullNames'];
							$arre=explode(',',$cad);
							foreach($arre as $val)
							{
								echo $val;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							CÓDIGOS ISO";
echo"					</td>";
echo"					<td class='resul'>";
							$cad2=$fila['All_ISOCodes'];
							$arre2=explode(',',$cad2);
							foreach($arre2 as $val2)
							{
								echo $val2;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					if($fila['Native_FullNames']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							NATIVA";
echo"					</td>";
echo"					<td class='resul'>";
							$cad3=$fila['Native_FullNames'];
							$arre3=explode(',',$cad3);
							foreach($arre3 as $val3)
							{
								echo $val3;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
					if($fila['Introduced']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							INTRODUCIDA";
echo"					</td>";
echo"					<td class='resul'>";
							$cad4=$fila['Introduced'];
							$arre4=explode(',',$cad4);
							foreach($arre4 as $val4)
							{
								echo $val4;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
					if($fila['Introduced_Q']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							INTRODUCIDA(?)";
echo"					</td>";
echo"					<td class='resul'>";
							$cad5=$fila['Introduced_Q'];
							$arre5=explode(',',$cad5);
							foreach($arre5 as $val5)
							{
								echo $val5;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
					if($fila['Reintroduced']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							REINTRODUCIDA";
echo"					</td>";
echo"					<td class='resul'>";
							$cad6=$fila['Reintroduced'];
							$arre6=explode(',',$cad6);
							foreach($arre6 as $val6)
							{
								echo $val6;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
					if($fila['Extinct']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							EXTINTA";
echo"					</td>";
echo"					<td class='resul'>";
							$cad7=$fila['Extinct'];
							$arre7=explode(',',$cad7);
							foreach($arre7 as $val7)
							{
								echo $val7;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
					if($fila['Extinct_Q']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							EXTINTA(?)";
echo"					</td>";
echo"					<td class='resul'>";
							$cad8=$fila['Extinct_Q'];
							$arre8=explode(',',$cad8);
							foreach($arre8 as $val8)
							{
								echo $val8;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
					if($fila['Uncertain']!=NULL)
					{
echo"				<tr>";
echo"					<td class='head'>";
echo"						DISTRIBUCIÓN:
							INCIERTA";
echo"					</td>";
echo"					<td class='resul'>";
							$cad9=$fila['Uncertain'];
							$arre9=explode(',',$cad9);
							foreach($arre9 as $val9)
							{
								echo $val9;
								echo"<br/>";
							}
echo"					</td>";
echo"				</tr>";
					}
echo"				<tr class='blank'>";
echo"					<td>";
echo						" ";
echo"					</td>";
echo"				</tr>";
					$fila=mysqli_fetch_assoc($res);
				}
echo"			</table>";
echo"			<br/><br/><br/><br/><br/>";
echo"			<div>";
echo"				<b><a href='busqueda.php'>Probar con otra especie</a></b>";
echo"				<br/><br/><br/>";
echo"				<b><a href='inianimales.php'>Página principal</a></b>";
echo"			</div>";
echo"		</body>
		  </html>";
?>