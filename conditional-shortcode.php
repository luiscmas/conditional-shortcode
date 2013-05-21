<?php
/*
 Plugin Name: Conditional Shorcode
Plugin URI: https://github.com/luiscmas/conditional-shortcode
Version: 0.1
Author: Luis Mas
Author URI: http://www.it2b.es/
Description: Provides a shortcode that prints a text depending on 3 values
Text Domain: conditional-shortocode
Domain Path: /languages
License: GPL2
*/
	
/**
* Shortcode: gracias_por_donar
*
* @param array $atts Shortcode attributes
* @return string Output html depending on value of amt request parameter
*/
function shortcode_gracias($atts) {
	extract(shortcode_atts(array(
	    'texto0' => false,
		'texto1' => 'Definir texto del primer valor con la clave texto1',
		'texto2' => 'Definir texto del segundo valor con la clave texto2',
		'texto3' => 'Definir texto del tercer valor con la clave texto3',
		'importe1' => 20,
		'importe2' => 30,
		'importe3' => 40,
		'get' => 'amt'
	), $atts));
	$importe = floatval(($_REQUEST[$get]));
	$importe1 = intval($importe1);
	$importe2 = intval($importe2);
	$importe3 = intval($importe3);
	
	if ($importe < $importe1 and $texto0) {
		echo $texto0;
	} elseif ($importe >= $importe1 and $importe < $importe2) {
        echo $texto1;
    } elseif ($importe >= $importe2 and $importe < $importe3) {
        echo $texto2;
    } else {
		echo $texto3;
	}
}
add_shortcode('gracias_por_donar', 'shortcode_gracias');

?>