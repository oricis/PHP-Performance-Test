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