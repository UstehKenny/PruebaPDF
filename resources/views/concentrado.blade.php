<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Concentrado</title>
</head>
<style>
    div.container {
        text-align:center;
    }
html{
	width:100%;
}
body {
  font-family: Arial, Helvetica, Sans-serif;
  align-items: center;
  font-size: 18px;
}
.contenido{
	font-size: 12px; 
}
.encabezado{
	font-size: 20px;
}

</style>

<body>
<div style="height: 90%">
	<div height="10%">
		<div align="center" class="encabezado">
			UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO
		</div>
		
			<table style="width: 100%" align="center" id="encabezado" height="5%">
				<tr id="normal">
					<td  width="10%" id="normal">
						<img src="http://www.ingenieria.unam.mx/nuestra_facultad/images/institucionales/escudo_fi_color.png" alt="" align="right" height="120">
					</td>
					<td  align="center" class="encabezado">
						FACULTAD DE INGENIERÍA<br/>
						Secretaría de Apoyo a la Docencia<br/>
						CENTRO DE DOCENCIA <br/>
						"Ing. Gilberto Borja Navarrete"<br>
					</td>
					<td align="center" width="15%" id="normal">
						<img src="http://www.centrodedocencia.unam.mx/images/logos/logo_cdd_2.png" alt="" align="right" height="120">
					</td> 
				</tr>
			</table>
        <br>
			<table>
				<div align="center">
					<div style="float: left; width: 100%; font-size: 22px;">{Semestre}</div>
					<div style="float: right; width: 5%;height: 10%; font-size: 12px;">Máx Min</div>
					<div style="float: right; width: 45%;">h</div>
					<br>
					<hr>
				</div>
			</table>
	</div>

	<div class="contenido">
		<table style="width: 100%">
			<td WIDTH="60">{MENSAJE}</td>
			<td WIDTH="70">{Nombre de los cursos a impartir}</td>
			<td WIDTH="80">{Nombre de los instructores}</td>
			<td WIDTH="53">{Fecha Inicio/Fin}</td>
			<td WIDTH="30">{Horarios}</td>
			<td WIDTH="45">{Lugar donde se impartirán los cursos}</td>
			<td WIDTH="5">{Cupo}</td>
		</table>
	</div>
</div>
</body>
</html>