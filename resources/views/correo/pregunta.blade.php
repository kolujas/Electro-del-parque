<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pregunta de {{$data->correo}}</title>
</head>
<body>

<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse; background-color: #ecf0f1">
	<tr>
		<td style="background-color: #f8f8f8; text-align: center;">
			<div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
				<h2 style="color: #616161;margin:0 0 7px;">{{ $data->correo }} (Suscriptor: {{$data->suscriptor}}) quiere preguntarte</h2>
				<p style="margin:2rem;font-size: 1rem;min-height:100px;background-color: #eeeeee;padding: 1rem;">{{ $data->descripcion }}</p>
				<div style="width: 100%; text-align: center">
					<a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white;     background-color: #E2686D"target="_blank" href="http://www.mutualcoop.org.ar">Ir a la página</a>
				</div>
			</div>
			<p style="background-color: #e2686d;color: #ffffff;padding: 2rem;font-size: 1.1rem;/* font-size:12px; */text-align:center;margin:30px 0 0;">© Derecho Cooperativo y Mutual. Todos los Derechos Reservados. Desarrollado por Digitalo</p>
		</td>
	</tr>
</table>

</body>
</html>