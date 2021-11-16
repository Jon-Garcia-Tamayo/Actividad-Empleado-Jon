<?php
	include "views/vista_resultado.php";
	include "class/Empleado.php";
	include "class/EmpleadoPlantilla.php";
	include "class/EmpleadoComision.php";
	include "class/PruebaPolimorf.php";

	/*$empleado = new Empleado("Lola", "Etxegaray", "14-78451589-75");
	$empleadoDos = new Empleado("Maria", "Behobide", "18-56895475-56");*/

	$empleado = new EmpleadoPlantilla("Jon", "Garcia", "10-84347345-43", 1500, 140);
	$empleadoDos = new EmpleadoPorComision("Maria", "Behobide", "18-56895475-56", 1, 5, 1000);

	echo $empleado->mostrar();
	echo $empleadoDos->mostrar();

	echo PruebaPolimorf::calcular($empleado);

?>
