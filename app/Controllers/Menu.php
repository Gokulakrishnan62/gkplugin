<?php

namespace TP\app\Controllers;

class Menu
{
	
	
	function my_menu() 
	{
		add_menu_page(
			__( ' Menu Page'),
			'testing',
			'manage_options',
			'slug',
			array($this,"menu_page"),
			'',
			95
		);
	}

    function  menu_page()
	{

		if(file_exists(TP_PLUGIN_PATH . '/app/Views/menu_page.php')) 
        {
			include (TP_PLUGIN_PATH . '/app/Views/menu_page.php');
        } 
        else 
        {
            wp_die('Error during show the menu page');
        }
		
		
		
	}
}


