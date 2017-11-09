<?php
/**
 * Search emplate (searchform.php)
 * @package WordPress
 * @subpackage Antares
 */
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<label class="sr-only" for="search-field">Поиск...</label>
		<input type="search" class="form-control input-sm" id="search-field" placeholder="Строка для поиска" value="<?php echo get_search_query() ?>" name="s">
	</div>
	<button type="submit" class="btn btn-default btn-sm btn-search">
		<svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg>
	</button>
</form>