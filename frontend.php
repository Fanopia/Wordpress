<?php

class FanopiaFrontend {

	public function __construct() {

		add_action('init', array($this, 'replaceComments'));
		//add_filter('query_vars', array($this, 'getVars'));
		
		
		//add_action( 'comment_form', array($this, 'replaceComments'));
		add_action('wp_footer', array($this, 'setFooter'), 100);
		add_action('parse_request', array($this, 'parseRequest'));
		 
	}

	public function setRewriteRules() {
		add_rewrite_rule('fanopia_header.php$', 'index.php?fanopia_header=1', 'top');
	}

	public function getVars() {
		$query_vars[] = 'fanopia_header';
		return $query_vars;
	}

	public function parseRequest() {
		
		if (isset($_GET['fanopia_header'])) {
			ob_start();
			$header = get_header();
			$header = ob_get_contents();
			ob_end_clean();
			$header = str_replace('<a', '<a target="_top" ', $header);
			$header .= '</body>';
			$header .= '</html>';
			echo $header;
			exit();
		}
		else if (isset($_GET['fanopia_footer'])) {
			
			ob_start();
			wp_head();
			$header = ob_get_contents();
			ob_end_clean();
			
			ob_start();
			body_class();
			$body_class = ob_get_contents();
			ob_end_clean();
			
			ob_start();
			get_footer();
			$footer = ob_get_contents();
			ob_end_clean();
			
			$footer = str_replace('<a', '<a target="_top" ', $footer);
			
			echo '<html>';
			echo '<head>';
			echo $header;
			echo '</head>';
			echo '<body '. $body_class . '>';
			echo $footer;
			echo '</body>';
			exit();
		}
		return;
	}
	
	public function replaceComments() {
		add_action('comment_form_before',function(){
          echo '<div style="display:none;">';
      	});
		add_action('comment_form_after',function(){
          echo '</div>';
		  include(FANOPIA_DIRECTORY . '/frontend_templates/comments.php' );
      	});
	}

	public function setFooter() {
		include(FANOPIA_DIRECTORY . '/frontend_templates/script.php' );
	}

}



