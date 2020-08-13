<?php
function rem_adminbar() {
	add_filter('show_admin_bar', '__return_false');
}
?>