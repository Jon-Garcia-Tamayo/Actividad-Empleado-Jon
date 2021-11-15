<?php
	include "views/vista_resultado.php";
	include "Empleado.php";
	
	$empleado = new Empleado("Lola", "Etxegaray", "14-78451589-75");
	$empleadoDos = new Empleado("Maria", "Behobide", "18-56895475-56");
	
	echo $empleado->mostrar() . "<br>";	
	echo $empleadoDos->mostrar();
?>
