<html>
<head>
	
</head>	
<body>
	<?
	
	$cont=10;
	while ( $cont<= 10) {
		# code...
		$cont++;
		echo $cont."<br>";

	}
	echo "<br>";
	
	$cont=10;	
	do{
		$cont++;
		echo $cont."<br>";
	}
	while ($cont < 10); {
		# code...
		echo "<br>";
	}

	for ($i=1; $i <10 ; $i++) { 
		# code...
		echo $i."<br>";
	}

	$array = array('Lunes','Martes','Miercoles','Jueves', 'Viernes' );
	foreach ($array as $value) {
		# code...
		echo $value."<br>";
	}

	foreach ($array as $key => $value) {
		# code...
		echo $value.'-'.$key."<br>";
	}
	?>
</body>
</html>
