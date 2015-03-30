<?php

class FanopiaBackend {
	
	public function __construct() {
		
		add_action( 'admin_menu', array( $this, 'register_my_custom_menu_page' ) );
	}
	
	public function register_my_custom_menu_page(){
   		add_menu_page( 'Fanopia', 'Fanopia', 'manage_options', 'fanopia_main', array( $this, 'mainPage' ) , plugins_url( 'myplugin/images/icon.png' ), 6);
		add_submenu_page( 'fanopia_main', 'Fanopia - Header and Footer', 'Header And Footer', 'manage_options', 'fanopia_header_footer', array($this, 'headerFooterPage') );
	}
	
	public function mainPage() {
		
		include(FANOPIA_DIRECTORY . '/backend_templates/main.php' );
	}
	
	public function headerFooterPage() {
		include(FANOPIA_DIRECTORY . '/backend_templates/header_footer.php' );
	}
}


