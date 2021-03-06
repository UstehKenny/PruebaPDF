<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte para instructores</title>
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
hr{
    border: 1px solid #000;
  	border-spacing: 0;
  }
#mayusculas{
	text-transform: uppercase;
}
#contenido{
    padding:15px 60px 15px;
}
#semestre{
	padding-right: 30px;
}
#renglonDoble, #mayusculas{
	 border: 1px solid white;
}
#normal{
   border-spacing: 0;
}
.encabezado{
	font-size: 25px;
}
.small{
	font-size: 12px;
}
.tabla{
	font-size: 12px;
	text-align: center;
	padding: 0px 2px;
	color: #3C3ABD;
	height: 100px;
}
</style>
<body>
<div style="height: 90%">
	<div height="10%">
		<hr>	
		<table width="100%" align="center" id="encabezado" height="5%">
			<tr id="normal">
				<td  width="10%" id="normal">
					<img src="img/magestic.jpg" alt="" align="right" height="100">
				</td>
				<td  align="center" class="encabezado">
					Participantes en Cursos
				</td>
			</tr>
		</table>
		<p align="right" id="semestre">Semestre: 2016-1</p>
		<hr>
		<table width="100%">
			<tr>
				<td>
				<b>Nombre del curso</b>
				</td>
				<td>
				<b>Nombre Completo</b>	
				</td>
				<td>
				<b>Instructor</b>	
				</td>
			</tr>
			
		</table>
		<hr>

	</div>
	<div id="cuerpo">
		<table width="100%">
			<tr>
				<td><b>Academia de Señales y Sistemas</b></td>
				<td align="right"><b>MATA HERNANDEZ GLORIA</b></td>
			</tr>
		</table>
		<table id="contenido" width="100%">
			<tr>
				<td>Fecha: 18 al 28 de enero del 2010</td>
			</tr>
			<tr>
				<td><br>Hora inicio:	11:00</td>
				<td colspan="2">No. de sesiones: 9</td>
			</tr>
			<tr>
				<td>
					Hora fin:	14:00
				</td>
			</tr>
			<tr>
				<td align="center">1</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">2</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">3</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">4</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">5</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">6</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">7</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">8</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">9</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
			<tr>
				<td align="center">10</td>
				<td align="center">ARREDONDO GARZA JOSE ANTONIO DE JESUS</td>
				<td align="center">Acreditó</td>
			</tr>
		</table>
	</div>
<a href="{{ url('/publicidad/pdf') }}" class="btn btn-info" style="text-align:right">PDF</a></td>
</body>
</html>