<html>
<head>
	
</head>	
<body>
	<?
	$var=1;
	if ($var==10) {
		# code...
		echo "OK";
	}else{
		echo "No OK<br>";
	}

	switch ($var) {
		case 5:
			# code...
			echo "5";
			break;
		
		case 10:
			# code...
			echo "6";
			break;

		case 15:
			# code...
			echo "15";
			break;

		default:
			# code...
			echo "ninguno";
			break;
	}
	$cont=1;
	while ( $cont<= 10) {
		# code...
		$cont++;
		echo $cont."<br>";

	}

	?>

</body>
</html>
