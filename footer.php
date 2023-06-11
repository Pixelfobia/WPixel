<?php
/**
 * Footer Template
 * 
 * @package WPixel
 */
?>
<footer id="site-footer" class="bg-light p-4">
	<div class="container color-gray">
		<div class="row">
			<section class="col-lg-4 col-md-6 col-sm-12">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nobis accusantium itaque voluptatem non, quaerat maiores ipsa maxime reiciendis sint. Quo reiciendis debitis quisquam necessitatibus fuga ratione officiis quaerat itaque!
			</section>
			<section class="col-lg-4 col-md-6 col-sm-12">
				<?php 
	 				if ( is_active_sidebar( 'sidebar-2' ) ) {
				?>
				<aside>
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</aside>
				<?php } ?>
			</section>
			<section class="col-lg-4 col-md-6 col-sm-12">
				<ul class="d-flex">
					<li class="list-unstyled">
						<a href="https://facebook.com" title="facebook">
							<svg width="50"><use href="#icon-facebook"></use></svg>
						</a>
					</li>
					<li class="list-unstyled">
						<a href="https://twitter.com" title="twitter">
							<svg width="50"><use href="#icon-twitter"></use></svg>
						</a>
					</li>
					<li class="list-unstyled">
						<a href="https://linkedin.com" title="linkedin">
							<svg width="50"><use href="#icon-linkedin"></use></svg>
						</a>
					</li>
				</ul>
			</section>
		</div>
	</div>

</footer>
	</div>
</div>

<?php 
// if ( is_active_sidebar( 'sidebar-1' ) ) {
get_template_part( 'template-parts/content', 'svgs' );
wp_footer(); 
?>
</body>
</html>