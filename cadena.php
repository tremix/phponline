<html>
	<head></head>
<body>
	<?
		$cadena="<p>nunca \mas";
		echo stripslashes($cadena);
		echo "<br>";

		$cadena="<p>- esto es -<p>";
		echo urlencode($cadena);
		echo urldecode($cadena);
	
		echo nl2br("Esto es una \nPrueba");

		$nombre="Juan  ";
		$apellido="Fernandez";
		echo "<p>".$nombre.$apellido."<br>";
		echo "<p>".chop($nombre).$apellido."<br>";

		ltrim($cadena);

		trim($cadena);

		$nombre="Juan  ";
		$apellido="Fernández";
		echo "<p>".$nombre.$apellido."<br>";
		echo "<p>".strtoupper($nombre)."<br>";
		echo "<p>".strtolower($apellido)."<br>";
		echo "<p>".ucfirst($apellido)."<br>";
		echo "<p>".ucwords("juan ferNandez")."<br>";
		echo "<p>".strlen($apellido)."letras tiene".$apellido."</p>";
		echo "<p>".strrev($apellido)."<p>";
		echo "<p>".chr(105)."<p>";
		echo "<p>".ord(105)."<p>";

		$apellido=strtr($apellido, "áéíóúñ", "aeioun");
		print("<p>$apellido")

	?>

</body>
</html>
