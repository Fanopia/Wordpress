<script type="text/javascript">
	
	var fanopia_id = '<?php echo get_option( 'fanopia_site_id' , '' ); ?>'; 
	
	(function() { 
		var fanopia = document.createElement('script'); fanopia.type = 'text/javascript'; fanopia.async = true; 
		fanopia.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widgets.fanopia.com/engage'; 
		var fanopias = document.getElementsByTagName('script')[0]; fanopias.parentNode.insertBefore(fanopia, fanopias);
	})();  
</script>