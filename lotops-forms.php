<?php
/**
 * Plugin Name: LoTops Forms
 * Plugin URI: http://app.lotops.com
 * Description: Easy website contact forms that automatically update your LoTops CRM.
 * Version: 1.1
 * Author: LoTops
 * Author URI: https://lotops.com
 */

function lotops_leads_form()
{
	wp_register_style('lotops-style', plugins_url('lotops-forms', __FILE__));
    wp_enqueue_style('lotops-style');

	echo "<form action='https://app.lotops.com/ajax/wpform.php' method='post' id='LoTops-Forms'>";
	echo "<input type='text' name='first' placeholder='First Name'></br>";
	echo "<input type='text' name='last'  placeholder='Last Name'></br>";
	echo "<input type='text' name='email' placeholder='Valid E-Mail'></br>";
	echo "<input type='text' name='phone' placeholder='Phone Number'></br>";
	echo "<textarea rows='3' name='backg' placeholder='Comment'></textarea></br>";
	echo "<input type='submit' value='Contact Us'>";
	echo "</form>";
}

add_shortcode( 'lotops_leads_form', 'lotops_leads_form' );
