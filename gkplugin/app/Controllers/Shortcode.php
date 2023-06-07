<?php

namespace TP\app\Controllers;

class Shortcode
{
    function demo_shortcode()
    {
        //to show the view page
        if(file_exists(TP_PLUGIN_PATH . '/app/Views/form.php')) 
        {
            ob_start();
            include (TP_PLUGIN_PATH . '/app/Views/form.php');
            return ob_get_clean();
        } 
        else 
        {
            wp_die('Error during showing the view page of shortcode');
        }
        
    }

}

?>