<?php
/**
 * Template for displaying search forms in Foodconnection
 *
 * @package WordPress
 * @subpackage Food_Connection
 * @since Foodconnection 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<div class="form-group">
		<span class="icon icon-search"></span>
		<input name="s" type="text" value="<?php echo get_search_query(); ?>" class="form-control" placeholder="Tìm Kiếm...">
	</div>
</form>
