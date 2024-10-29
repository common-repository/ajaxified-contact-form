<?php
/**
 * Plugin Name: Ajaxified Contact Form Widget
 * Plugin URI: http://tcss.co.in/ajaxified-contact-form-widget
 * Description: This widget can be used in your wordpress site to send contact form. Users will be able to contact you through this form dynamically. It's a simple Ajax Powered contact form
 * Version: 0.1.0
 * Author: gsjha
 * Author URI: http://gsjha.com
 * License: GPL2
 */

function add_scripts(){
	wp_enqueue_script('ajaxified-contact-form-widget-scripts',plugins_url().'/ajaxified-contact-form-widget/js/ajaxified-contact-form-widget.js',array('jquery'),'1.0.0',false);
}
add_action('wp_enqueue_scripts','add_scripts');

include('class.ajaxified-contact-form-widget.php');

function register_ajaxified_contact_form_widget() {
	register_widget('Ajaxified_Contact_Form_Widget');
}
add_action('widgets_init','register_ajaxified_contact_form_widget');

?>