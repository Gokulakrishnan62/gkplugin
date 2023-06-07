<?php
/**
 * my plugin
 *
 * Plugin Name: Test-plugin
 * Plugin URI:  https://www.google.com/
 * Description: plugin created for testing
 * Version:     1.0.0
 * Author:      Gokulakrishnan
 * Author URI:  https://www.google.com/
 * License:     GPLv2 or later
 * License URI: https://www.google.com/
 * Text Domain: Testing
 * Domain Path: /languages
 * Requires at least: 4.9

 */

 

defined('ABSPATH') or exit;



defined('TP_PLUGIN_FILE') or define('TP_PLUGIN_FILE', __FILE__);
defined('TP_PLUGIN_PATH') or define('TP_PLUGIN_PATH', plugin_dir_path(__FILE__));

//autoload files
if(file_exists(TP_PLUGIN_PATH . '/vendor/autoload.php')) 
{
    require TP_PLUGIN_PATH . '/vendor/autoload.php';
} 
else 
{
    wp_die('Error during autoload');
}


// calling Route
if (class_exists('TP\app\Route')) 
{
    $route = new TP\app\Route();
    $route->hook();
} 
else 
{
    wp_die('Error during calling route');
}







    
 