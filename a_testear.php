<?php


//Clase con métodos a probar
	class X {
				
			public function conIfElse($cad='hola') {
					//echo '<b>Probando con if elseif else</b><br>';
					
					$x = 'x';
					$y = NULL;
					$z = 12344;
					$a = 'xs';
					$b = FALSE;
					$c = time();
					$res_1 = 'encontrada coincidencia en 1';
					$res_2 = 'encontrada coincidencia en 2';
					$res_3 = 'encontrada coincidencia en 3';
					$res_4 = 'encontrada coincidencia en 4';
					$res_5 = 'encontrada coincidencia en 5';
					$res_6 = 'encontrada coincidencia en 6';
					
					if ($cad===$x) {
						(int)$res_1;
						
					} elseif ($cad===$y) {
						(int)$res_2;
						
					} elseif ($cad===$z) {
						(int)$res_3;
					
					} elseif ($cad===$a) {
						(int)$res_4;
						
					} elseif ($cad===$b) {
						(int)$res_5;
						
					} elseif ($cad===$c) {
						(int)$res_6;	
						
					} else
						(int)'no encontrada coincidencia';
			}

			public function conSwitch($cad='hola') {
					//echo '<b>Probando con switch</b><br>';
					
					$x = 'x';
					$y = NULL;
					$z = 12344;
					$a = 'xs';
					$b = FALSE;
					$c = time();
					$res_1 = 'encontrada coincidencia en 1';
					$res_2 = 'encontrada coincidencia en 2';
					$res_3 = 'encontrada coincidencia en 3';
					$res_4 = 'encontrada coincidencia en 4';
					$res_5 = 'encontrada coincidencia en 5';
					$res_6 = 'encontrada coincidencia en 6';
					
					switch($cad) {
						case $x: (int)$res_1; break;
						case $y: (int)$res_2; break;
						case $z: (int)$res_3; break;
						case $a: (int)$res_1; break;
						case $b: (int)$res_2; break;
						case $c: (int)$res_3; break;
						default:
							(int)'no encontrada coincidencia'; break;
					}
			}

			public static function usoIfElse($cad='hola') {
					//echo '<b>Probando con if elseif else</b><br>';
					
					$x = 'x';
					$y = NULL;
					$z = 12344;
					$a = 'xs';
					$b = FALSE;
					$c = time();
					$res_1 = 'encontrada coincidencia en 1';
					$res_2 = 'encontrada coincidencia en 2';
					$res_3 = 'encontrada coincidencia en 3';
					$res_4 = 'encontrada coincidencia en 4';
					$res_5 = 'encontrada coincidencia en 5';
					$res_6 = 'encontrada coincidencia en 6';
					
					if ($cad===$x) {
						(int)$res_1;
						
					} elseif ($cad===$y) {
						(int)$res_2;
						
					} elseif ($cad===$z) {
						(int)$res_3;
					
					} elseif ($cad===$a) {
						(int)$res_4;
						
					} elseif ($cad===$b) {
						(int)$res_5;
						
					} elseif ($cad===$c) {
						(int)$res_6;	
						
					} else
						(int)'no encontrada coincidencia';
			}

			public static function usoSwitch($cad='hola') {
					//echo '<b>Probando con switch</b><br>';
					
					$x = 'x';
					$y = NULL;
					$z = 12344;
					$a = 'xs';
					$b = FALSE;
					$c = time();
					$res_1 = 'encontrada coincidencia en 1';
					$res_2 = 'encontrada coincidencia en 2';
					$res_3 = 'encontrada coincidencia en 3';
					$res_4 = 'encontrada coincidencia en 4';
					$res_5 = 'encontrada coincidencia en 5';
					$res_6 = 'encontrada coincidencia en 6';
					
					switch($cad) {
						case $x: (int)$res_1; break;
						case $y: (int)$res_2; break;
						case $z: (int)$res_3; break;
						case $a: (int)$res_1; break;
						case $b: (int)$res_2; break;
						case $c: (int)$res_3; break;
						default:
							(int)'no encontrada coincidencia'; break;
					}
			}

	} //class
	
	function conIfElse($cad='hola') {
					//echo '<b>Probando con if elseif else</b><br>';
					
					$x = 'x';
					$y = NULL;
					$z = 12344;
					$a = 'xs';
					$b = FALSE;
					$c = time();
					$res_1 = 'encontrada coincidencia en 1';
					$res_2 = 'encontrada coincidencia en 2';
					$res_3 = 'encontrada coincidencia en 3';
					$res_4 = 'encontrada coincidencia en 4';
					$res_5 = 'encontrada coincidencia en 5';
					$res_6 = 'encontrada coincidencia en 6';
					
					if ($cad===$x) {
						(int)$res_1;
						
					} elseif ($cad===$y) {
						(int)$res_2;
						
					} elseif ($cad===$z) {
						(int)$res_3;
					
					} elseif ($cad===$a) {
						(int)$res_4;
						
					} elseif ($cad===$b) {
						(int)$res_5;
						
					} elseif ($cad===$c) {
						(int)$res_6;	
						
					} else
						(int)'no encontrada coincidencia';
	}

	function conSwitch($cad='hola') {
					//echo '<b>Probando con switch</b><br>';
					
					$x = 'x';
					$y = NULL;
					$z = 12344;
					$a = 'xs';
					$b = FALSE;
					$c = time();
					$res_1 = 'encontrada coincidencia en 1';
					$res_2 = 'encontrada coincidencia en 2';
					$res_3 = 'encontrada coincidencia en 3';
					$res_4 = 'encontrada coincidencia en 4';
					$res_5 = 'encontrada coincidencia en 5';
					$res_6 = 'encontrada coincidencia en 6';
					
					switch($cad) {
						case $x: (int)$res_1; break;
						case $y: (int)$res_2; break;
						case $z: (int)$res_3; break;
						case $a: (int)$res_1; break;
						case $b: (int)$res_2; break;
						case $c: (int)$res_3; break;
						default:
							(int)'no encontrada coincidencia'; break;
					}
	}
	

/* Resultados de ejecutar los métodos y funciones de este fichero:

		Helper Rendimiento / test() 

		Método testeado número: 1
		Tiempo empleado: 5.1975250244141E-10 milisegundos.
		Memoria empleada: 315.640859375 kb.

		Método testeado número: 2
		Tiempo empleado: 3.8385391235352E-10 milisegundos.
		Memoria empleada: 315.932734375 kb.

		Método testeado número: 3
		Tiempo empleado: 4.4584274291992E-10 milisegundos.
		Memoria empleada: 316.223203125 kb.

		Método testeado número: 4
		Tiempo empleado: 5.7458877563477E-10 milisegundos.
		Memoria empleada: 316.513515625 kb.

		Método testeado número: 5
		Tiempo empleado: 3.5524368286133E-10 milisegundos.
		Memoria empleada: 316.803984375 kb.

		Método testeado número: 6
		Tiempo empleado: 4.5299530029297E-10 milisegundos.
		Memoria empleada: 317.094296875 kb.

*/
