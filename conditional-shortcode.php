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
function conditional_shortcode($atts) {
	extract(shortcode_atts(array(
		'text0' => false,
		'text1' => esc_html__('Definir texto del primer valor con la clave text1','conditional-shortcode'),
		'text2' => esc_html__('Definir texto del segundo valor con la clave text2','conditional-shortcode'),
		'text3' => esc_html__('Definir texto del tercer valor con la clave text3','conditional-shortcode'),
		'range1' => 0,
		'range2' => 0,
		'range3' => 0,
		'get' => 'amt'
	), $atts));
	$qty = floatval($_REQUEST[$get]);
	$range1 = intval($range1);
	$range2 = intval($range2);
	$range3 = intval($range3);
	
	if ($qty < $range1 and $text0) {
		echo $text0;
	} elseif ($qty >= $range1 and $qty < $range2) {
		echo $text1;
	} elseif ($qty >= $range2 and $qty < $range3) {
    	echo $text2;
    } elseif ($qty >= $range3) {
    	echo $text3;
    }
}
add_shortcode('gracias_por_donar', 'conditional_shortcode');
?>