<?php


//Reporte de errores
error_reporting(E_ALL);
ini_set("display_errors", 1);


//Incluir los ficheros
require_once 'a_testear.php';       //Fichero con clase y funciones a testear
require_once 'testrendimiento.php'; //Clase de testeo


//Ejecutar los test
	$x = new X(); //app/testing

	
	TestRendimiento::test(array($x->conIfElse(), 	//Prueba con instancia
							$x->conSwitch(),
							X::usoIfElse(), 	//Prueba métodos estáticos
							X::usoSwitch(),
							conIfElse(), 		//Prueba de funciones
							conSwitch()));