<?php 

/* 
Plugin Name: Red Lemon Hide Order Meta from WC Emails
URI: https://redlemon.gr/plugins/ 
Description: A plugin to hide order meta from all Woocommerce Emails.
Version: 1.0.0 
Requires at least: 6.0 
Author: Red Lemon 
Author URI: https://redlemon.gr/ 
Text Domain: redlemon 
 */

add_filter('woocommerce_email_order_meta_keys', '__return_empty_array'); 
