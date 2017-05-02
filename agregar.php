<?php
$arch2=fopen('../txt/filo.txt','r');
$strfilo=fread($arch2,filesize("../txt/filo.txt"));
$arrafilo=explode(",",$strfilo);
$arch3=fopen('../txt/clase.txt','r');
$strclase=fread($arch3,filesize("../txt/clase.txt"));
$arraclase=explode(",",$strclase);
$arch4=fopen('../txt/orden.txt','r');
$strorden=fread($arch4,filesize("../txt/orden.txt"));
$arraorden=explode(",",$strorden);
$arch5=fopen('../txt/familia.txt','r');
$strfamilia=fread($arch5,filesize("../txt/familia.txt"));
$arrafamilia=explode(",",$strfamilia);
$arch6=fopen('../txt/genero.txt','r');
$strgenero=fread($arch6,filesize("../txt/genero.txt"));
$arragenero=explode(",",$strgenero);
echo "<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='utf-8'/>
					<title>Portada</title>
					<link rel='stylesheet' type='text/css' href='../styles/agregar.css'/>
				</head>
				<body>";
echo				"<h1 class='stroke'>REGISTRO DE NUEVA ESPECIE</h1>
					<form method='post' action='agregar2.php'>
						<caption>ESCOGE LAS CATEGORIAS</caption></br><caption>(*) campos obligatorios</caption>";			
echo 					"<center><table border='2' style='background-color:black;'>
							<tr>
								<th>Phylum*</th>
								<th>Class*</th>
								<th>Order*</th>
								<th>Family*</th>
								<th>Genus*</th>
							</tr>
							<tr>";
echo							"<td><center><select name=filo>";
									for($i=0;$i<6;$i++)
echo									"<option value=".$arrafilo[$i].">".$arrafilo[$i]."</option>";
echo							"</select></center></td>";
echo							"<td><center><select name=clase>";
									for($i=0;$i<14;$i++)
echo									"<option value=".$arraclase[$i].">".$arraclase[$i]."</option>";
echo							"</select></center></td>";
echo							"<td><center><select name=orden>";
									for($i=0;$i<55;$i++)
echo									"<option value=".$arraorden[$i].">".$arraorden[$i]."</option>";
echo							"</select></center></td>";
echo							"<td><center><select name=familia>";
									for($i=0;$i<140;$i++)
echo									"<option value=".$arrafamilia[$i].">".$arrafamilia[$i]."</option>";
echo							"</select></center></td>";
echo							"<td><center><select name=genero>";
									for($i=0;$i<456;$i++)
echo									"<option value=".$arragenero[$i].">".$arragenero[$i]."</option>";
echo							"</select></center></td>";
echo						"</tr>
							<tr>
								<th>Specie*</th>
								<th>Subspecie</th>
								<th>Scientific Name*</th>
								<th>Rank*</th>
								<th>Listing*</th
							</tr>
							<tr>
								<td><center><input type='text' name='nomspecie' size='13' maxlength='40'/></center></td>
								<td><center><input type='text' name='nomsubspecie' size='13' maxlength='40'/></center></td>
								<td><center><input type='text' name='nomcientifico' size='16' maxlength='40'/></center></td>
								<td><center><select name='rank'><option value='specie'>Specie</option><option value='subspecie'>Subspecie</option></select></center></td>
								<td><center><select name='listing'><option value='I'>I</option><option value='II'>II</option><option value='III'>III</option><option value='IV'>IV</option></select></center></td>
							</tr>
							<tr>
								<th>Party</th>
								<th>Listed Under*</th>
								<th>Full Note</th>
								<th>All_DistributionFullNames*</th>
								<th>All_DistributionISOCodes*</th>
							</tr>
							<tr>
								<td><center><input type='text' name='party' size='2' maxlength='15'></center></td>
								<td><center><input type='text' name='listedu' size='10' maxlength='35'></center></td>
								<td><center><input type='text' name='fullnote' size='10' maxlength='310'></center></td>
								<td><center><input type='text' name='distributionnames' size='10' maxlength='2100'></center></td>
								<td><center><input type='text' name='isocodes' size='10' maxlength='600'></center></td>
							</tr>
							<tr>
								<th>NativeDistributionFullNames</th>
								<th>Introduced_Distribution</th>
								<th>Introduced(?)_Distribution</th>
								<th>Reintroduced_Distribution</th>
								<th>Extinct_Distribution</th>
							</tr>
							<tr>
								<td><center><input type='text' name='nativenames' size='10' maxlength='2000'></center></td>
								<td><center><input type='text' name='introduceddistribution' size='10' maxlength='2000'></center></td>
								<td><center><input type='text' name='introducedqdistribution' size='10' maxlength='500'></center></td>
								<td><center><input type='text' name='reintroduceddistribution' size='10' maxlength='600'></center></td>
								<td><center><input type='text' name='extinctdistribution' size='10' maxlength='400'></center></td>
							</tr>
							<tr>
								<th>Extinct(?)_Distribution</th>
								<th>Distribution_Uncertain</th>
								<th>Uncertain</th>
								<th colspan='2'>Autor(es)*</th>
							</tr>
								<td><center><input type='text' name='extinctqdistribution' size='10' maxlength='400'></center></td>
								<td><center><input type='text' name='distributionuncertain' size='10' maxlength='400'></center></td>
								<td><center><input type='text' name='uncertain' size='10' maxlength='400'></center></td>
								<td colspan='2'><center><input type='text' name='autor' size='50' maxlength='75' placeholder='Ej. LeSueur, 1818 / (Forbes & Richardson, 1905)'></center></td>
							<tr>
								<td colspan='5'><center><input type='submit' value='Enviar Registro'></center></center></td>
							</tr>
						</table></center></br>
					</form>";
echo                "</p><h2 class='stroke'>By: Team noobs</h2>";
echo 			"</body>
			</html>";
?>