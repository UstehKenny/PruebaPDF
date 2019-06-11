<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validacion</title>
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
.f{
    background-color: #2A4EDF;
    color: white; 
}
.n{
    border: 0px solid white;
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
.small{
	width: 20%;
}
</style>
<body>
<div style="height: 90%">
	<div height="10%">
		<table style="width: 100%" align="center" id="encabezado" height="5%">
			<tr id="normal">
				<td rowspan="2" width="10%" id="normal"><br>
					<img src="img/m.png" alt="" align="right" height="100">
				</td>
				<td rowspan="2" align="center" id="normal">
			        FACULTAD DE INGENIERÍA<br>
			        CENTRO DE DOCENCIA "Ing. Gilberto Borja Navarrete"<br>
			        REPORTE DE EVALUACIÓN GLOBAL DEL CURSO<br>
			        Código: 2730-CDD-IC.Fo-03
				</td>
				<td align="center" width="15%" id="normal">Ver: 7.1</td> 
			</tr>
			<tr id="normal">
				<td align="center" width="15%" id="normal">
                Emisión de formato<br>
					fecha
				</td>
			</tr>
		</table>
        <br>
        <div align="center">
            <div style="float: left; width: 100%; font-size: 22px;">Nombre del curso</div>
            <div style="float: right; width: 15%">semestre</div>
            <div style="clear: both"></div>
            <hr>
        </div>
    </div>
    <div>
        <table width="100%">
            <tr>
                <th>1. DATOS GENERALES DEL CURSO</th>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">a) Instructor</td>
                <td class="n">{nombre}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">b) Fecha de impartición</td>
                <td class="n">{fecha}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n" >e) Capacidad</td>
                <td class="n">{núm}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">c) Horario</td>
                <td class="n">{hora}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n">f) Total de horas</td>
                <td class="n">{núm}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">d) Lugar</td>
                <td class="n">{place}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n">g) Horas-participantes-curso</td>
                <td class="n">{núm}</td>
            </tr>     
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>2. REGISTRO DE PARTICIPANTES</th>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">a) Inscritos</td>
                <td class="n">{num}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n" >c) Acreditaron</td>
                <td class="n">{núm}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">b) Asistieron</td>
                <td class="n">{hora}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n">d) Formato de evaluación</td>
                <td class="n">{núm}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>3. FACTOR DE OCUPACIÓN</th>
                <td class="n">{num}</td>
                <th>4. FACTOR DE RECOMENDACIÓN</th>
                <td class="n">{num}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>5. FACTOR DE ACREDITACIÓN</th>
                <td class="n">{num}</td>
                <th>6. FACTOR DE CALIDAD</th>
                <td class="n">{num}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>7. FACTOR DE DESEMPEÑO INSTRUCTORES</th>
                <td class="n">{num}</td>
                <th width="15%">8. JUICIO SUMARIO a)</th>
                <td class="n">{/}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>8. JUICIO SUMARIO  CURSO b)</th>
                <td class="n">{num}</td>
                <td class="n">{/}</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>9. RECOMENDACIONES</th>
            </tr>
            <tr><td class="n">{recomendaciones}</td></tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>10. ÁREAS SOLICITADAS</th>
                <th>DP: </th>
                <td class="n">{num}</td>
                <th>DH: </th>
                <td class="n">{num}</td>
                <th>CO: </th>
                <td class="n">{num}</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>11. TEMÁTICA SOLICITADAS</th>
            </tr>
            <tr><td class="n">{temas}</td></tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>12. HORARIOS SOLICITADOS</th>
            </tr>
            <tr>
                <th class="f">Horario Semestral</th>
                <th class="f">Horario intersemestral</th>
            </tr>
            <tr>
                <td class="n">{horario}</td>
                <td class="n">{horario}</td>
            </tr>
        </table>
    </div>


</div>

</body>
</html>