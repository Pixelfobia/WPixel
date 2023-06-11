<?php
/**
 * Template for displaying search forms in WPixel
 * 
 * @package WPixel
 */
?>

<form role="search" method="get" class="form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'wpixel' ); ?></span>
	<input class="form-control mr-sm-2" type="search" placeholder="<?php echo esc_attr_x( 'Buscar película &hellip;', 'placeholder', 'wpixel' ); ?>" value="<?php the_search_query(); ?>" aria-label="Search" name="s">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo esc_html_x( 'Search', 'submit button', 'wpixel' ); ?></button>
</form><!-- .search-form -->