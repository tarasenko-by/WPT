<?php
/**
 * Sidebar (sidebar.php)
 * @package WordPress
 * @subpackage Antares
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) {?>
	<aside class="col-md-3 hidden-xs hidden-sm sidebar">
		<?php dynamic_sidebar('sidebar');?>
	</aside>
<?php } ?>
