<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hoja Inscripción</title>
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
  font-size: 15px;
}
#mayusculas{
	text-transform: uppercase;
}
#h4 {
    margin:15px 60px 15px;
 
   
}
#renglonDoble, #mayusculas{
	 border: 1px solid white;
}
#normal, td,#encabezado{
	
  border: 1px solid #000;
  border-spacing: 0;
}
#encabezado{
	/*padding: 10px;*/
}

</style>
<body>
<div style="height: 90%">
	<div height="10%">
		<table style="width: 100%" align="center" id="encabezado" height="5%">
			<tr id="normal">
				<td rowspan="2" width="10%" id="normal">
					<img src="img/m.png" alt="" align="right" height="100">
				</td>
				<td rowspan="2" align="center" id="normal">
			        FACULTAD DE INGENIERÍA<br/>
			        CENTRO DE DOCENCIA 
			        "Ing. Gilberto Borja Navarrete"<br/>
			        HOJA DE INSCRIPCIÓN A CURSOS<br/>
			        Código: 2730-CDD-IC.Fo-06
				</td>
				<td align="center" width="15%" id="normal">Ver: 6.0</td> 
			</tr>
			<tr id="normal">
				<td align="center" width="15%" id="normal">Emision de formato<br/>
					{{$fecha}}
				</td>
			</tr>
		</table>
	</div>
	
<div width="80%" id="h4">
	
	Coordinación &nbsp;&nbsp;&nbsp;&nbsp; 
	<u>{{$coordinacion->nombre_coordinacion}}</u><br/>
	<table id="renglonDoble" style="width: 85%">
		<tr >
			<td id="renglonDoble" width="10%">Instructor: </td>
			<td id="mayusculas" width="30%">{{ $profesor->apellido_paterno}} {{ $profesor->apellido_materno}} {{$profesor->nombres  }}</td>
			<td id="renglonDoble">CURSO&nbsp;&nbsp;&nbsp;&nbsp; <u>{{ $cursoCatalogo->nombre_curso}}</u></td>
		</tr>
	</table> 
	<!--bases de datos-->
	<br>
	Fechas 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<u>{{$curso->fecha_inicio}} {{$curso->fecha_fin}}</u><br>
	Sede&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
	<u>{{$salon->sede}} - {{$salon->ubicacion}}</u>
	<br>
	<table id="renglonDoble" style="width: 85%">
		<tr >
			<td id="renglonDoble" width="40%">Horario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<u>{{$curso->hora_inicio}} - {{$curso->hora_fin}}</u></td>
			<td id="renglonDoble">Fechas de impartición: {{$curso->dias_semana}}</td>
		</tr>
	</table>
	
	Número total de horas que abarca el curso<br>
	Número total de participantes
</div>
<table align="center" style="width: 100%" id="normal">
	<tr align="center" id="normal">
		<td id="normal" width="25%"><b>Nombre del participante</b></td>
		<td id="normal" width="13%"><b>RFC</b></td>
		<td id="normal" width="15%"><b>División o Dependencia</b></td>
		<td id="normal" width="10%"><b>Teléfono</b></td>
		<td id="normal"><b>Correo electrónico</b></td>
		<td id="normal"><b>Nombramiento<br>
			(Categoría o nivel)</b></td>
		<td id="normal" width="10%"><b>Asistencia Confirmada</b></td>
	</tr>
	<?php
		for ($i = 1; $i <= 20; $i++) {
    	print("<tr>
			<td>$i.</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>");
		}
	?>
</table>
</div>

</body>
</html>