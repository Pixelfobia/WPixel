<?php
/**
 * Template for entry footer
 * 
 * @package WPixel
 */

 $the_post_id = get_the_ID();
 $article_terms = wp_get_post_terms( get_the_ID(), [ 'category', 'post_tag' ] );
 
 if ( empty( $article_terms ) || ! is_array( $article_terms ) ) {
	 return;
 }
 ?>

 <div class="entry-footer mt-4">
	<?php
		foreach ( $article_terms as $key => $article_term ) {
			?>
				<a class="text-secondary" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
					<button class="btn border border-secondary mb-2 mr-2">
						<?php echo esc_html( $article_term->name ); ?>
					</button>
				</a>
			<?php
		}
	?>
 </div> <!-- .entry-footer -->