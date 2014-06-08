<?php

function funcion1(){
	$varFuncion1=1;
	return $varFuncion1;
}

$var1=funcion1();
echo "<p>var1 =".$var1."y varFuncion1 =".$varFuncion1."</p>";

function funcion2(){
	global $varFuncion2;
	$varFuncion2=1;
	return $varFuncion2;
}

$var2=funcion2();
echo "<p>var2 =".$var2."y varFuncion2 =".$varFuncion2."</p>";


$var="123";

if(isset($var)){
	echo "<p>$var SI esta definida ";
}else{
	echo "<p>$var No esta definida";
}


?>
