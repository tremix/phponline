<html>
	<head></head>
<body>
	<?
		if (checkdate(6, 8, 2014)) {
			# code...
			echo "La Fecha es Correcta";
		}else{
			echo "La Fecha no es Correcta";
		}

		echo "<p>".date("Y-m")."</p>";

		echo "<p>".date("l")."</p>";

		$array = array('DOMINGO','LUNES', 'MARTES', 'MIERCOLES','JUEVES', 'VIERNES','SABADO');

		echo "<p>".$array[date("w")]."<p>";

		$hoy=getdate();
		print_r('<p>'.$hoy[mon]."</p>")
	?>

</body>
</html>
