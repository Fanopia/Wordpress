<?php
/*
Plugin Name: Fanopia - Building Communities
Plugin URI: http://www.fanopia.com/
Description: Seemlessly intergrate your site with Fanopia and start building communities
Version: .01
Author: Fanopia - DevinDixon
Author URI: http://www.fanopia.com
License: MIT
*/

DEFINE('FANOPIA_DIRECTORY', plugin_dir_path( __FILE__ ));

include('backend.php');
include('frontend.php');

$fanopia_backend = new FanopiaBackend();

$fanopia_frontend = new FanopiaFrontend();
