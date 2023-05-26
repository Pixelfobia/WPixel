<?php
/**
 * Template for entry content
 * 
 * 
 *  To be used inside WordPress The Loop.
 * 
 * @package WPixel
 */	
 
 ?>

 <div class="entry-content">
	<?php
	if ( is_single() ) {
		the_content(
			sprintf(
				wp_kses(
					__( 'Continua leyendo %s <span class="meta-nav">&rarr;</span>', 'wpixel' ),
					[
						'span' => [
							'class' => []
						]
					]
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
			wp_link_pages(
				[
					'before' => '<div class="page-links">' . esc_html__( 'Paginas:', 'wpixel' ),
					'after'  => '</div>',
				]
				);
		} else {
				wpixel_the_excerpt( 200 );
				echo wpixel_excerpt_more();
		}
	?>
 </div>