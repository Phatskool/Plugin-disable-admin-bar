<?php
/*
Plugin Name: Yiannis Disable Admin Bar
Plugin URI: 
Description: Disable Top Admin Bar When Logged on Frontend
Version: 1.0
Author: Yiannis
Author URI: 
*/
// Eksw oi filoi pou prospa8oun na doun ti selida auth apeu8eias apo link
if(!defined('ABSPATH')){
  exit;
}
// Fortwnw thn Klash
require_once(plugin_dir_path(__FILE__).'includes/disable-adminbar-class.php');
?>