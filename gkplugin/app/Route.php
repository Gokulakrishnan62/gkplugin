<?php

namespace TP\app;

class Route
{
    function hook()
    {
        //adding menu
        $menu = new \TP\app\Controllers\Menu();
        add_action('admin_menu', [$menu, 'my_menu']);

        //adding shortcode
        $shortcode = new \TP\app\Controllers\Shortcode();
        add_shortcode('gk_demo_shortcode',[$shortcode, 'demo_shortcode']);
    }
}



?>