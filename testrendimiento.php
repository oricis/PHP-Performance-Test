<?php
/*
 * testrendimiento.php
 * Prueba de rendimiento usando objetos ---> Calcula tiempo medio y memoria utilizada
 * Copyright 2014 Moisés Alcocer <m_alc1@hotmail.com>
 */


//Clase de testeo
final class TestRendimiento {
	
	/************************************/
	/*** Declaración de propiedades *****/
    	private static $clase  = "Helper TestRendimiento";
		private static $num_metodo_testeado = 1;

    /************************************/
	/*** Delaración de métodos	*********/

    /*** Métodos públicos *************/

        /**
         * Realiza test de uso de memoria y tiempo de ejecución sobre los métodos pasados
         * @param  array	$objeto_metodos ---> Array con los objetos y métodos a ejecutar
         * @param  boolean	$demorar 		---> Indica si se usara el método ciclos_de_demora()
         * @param  int		$cantidad_test  ---> Número de test a realizar para obtener una média
         */
        public static function test($objeto_metodos=NULL, $demorar=FALSE, $cantidad_test=100) {
            print(self::$clase . " / test() <br><br>");

            if ($objeto_metodos && is_array($objeto_metodos)) {
				echo '<meta charset="UTF8">';
				
				//Se van a tomar mediciones
				$array_tiempo  = array();
				$array_memoria = array();
				
				$cont = 0;
				while ($cont < $cantidad_test) {
					foreach ($objeto_metodos as $z => $xxx) {
						$tiempo_inicio = microtime(true);

						// Método a testear
						$xxx;

						if ($demorar)
							self::ciclos_de_demora();
							
						$tiempo_final = microtime(true);

						$tiempo  = ($tiempo_final - $tiempo_inicio) / 1000;
						$memoria = memory_get_usage();

						$array_tiempo[$z][$cont]  = $tiempo;
						$array_memoria[$z][$cont] = $memoria;
					} //foreach
					
					$cont++;
				}
				
				//Se han rellenado los arrais con las mediciones, se muestra resultado
				$metodos_testeados = count($objeto_metodos); //Número de métodos testeados que se deben mostrar

				$cont = 0;
				while ($cont < $metodos_testeados) {
					self::ver_resultados($array_tiempo[$cont], $array_memoria[$cont], $cantidad_test);
					$cont++;
				}
            }
            
			return FALSE;
		} //function test()


    /*** Métodos privados *************/

		//Ejecuta una instruccion para que el tiempo medido sea mayor
		private static function ciclos_de_demora($numero_ciclos=1000) {
			
			$x = 0;
			for ($i=0; $i<$numero_ciclos; $i++) {
				$x++;
			}
			
			for ($i=0; $i<$numero_ciclos; $i++) {
				$x--;
			}
		}
		
		//Calcula las medias y muestra resultado
		private static function ver_resultados($array_tiempo=NULL, $array_memoria=NULL, $cantidad_test=NULL) {
			if ($array_tiempo && $array_memoria && $cantidad_test) {
				$media_tiempo  = array_sum($array_tiempo)   / $cantidad_test;
				$media_memoria = (array_sum($array_memoria) / $cantidad_test) / 1024; //En kb
				
				echo "Método testeado número: " . self::$num_metodo_testeado . "<br>";
				echo "Tiempo empleado: {$media_tiempo} milisegundos.<br>";
				echo "Memoria empleada: {$media_memoria} kb.<hr>";
				
				self::$num_metodo_testeado++;
			}
		}
		
} //class

							
					