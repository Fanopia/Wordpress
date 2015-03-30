<h1>Welcome To Fanopia</h1>

<p>Are you ready to start building your community!</p>

<form method="post">
	<?php
	if($_POST) {
		update_option( 'fanopia_site_id', $_POST['site_id']);
	}
	?>
	<label>Site ID</label>
	<input type="text" name="site_id" value="<?php echo get_option( 'fanopia_site_id' , '' ); ?>" />
	
	<input type="submit" value="Enter Site ID" />
</form>