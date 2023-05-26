<?php
/**
 * Header Navigation Template
 * 
 * @package WPixel
 */

 $menu_class = \WPIXEL_THEME\Inc\Menus::get_instance();
 $header_menu_id = $menu_class->get_menu_id( 'wpixel-header-menu' );

 $header_menus = wp_get_nav_menu_items( $header_menu_id );

 ?>
 
<!-- <a class="navbar-brand d-block d-sm-block d-md-none text-center pt-4" href="index.html">
	<img src="images/logos/CineclubblancoCortoP.svg" alt="" width="65" height="auto">
</a> -->
<nav class="navbar navbar-expand-md navbar-dark d-none d-md-block">
	<div class="container">
			
			<!-- <a class="navbar-brand d-none d-md-block me-5" href="index.html">
				<img src="images/logos/CineclubblancoLargocompleto.svg" alt="" width="155" height="auto">
			</a> -->

			<?php
 			if ( function_exists( 'the_custom_logo')){ 
	 			the_custom_logo();
 			}
 			?>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<?php
				if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
				?>
				<ul class="navbar-nav">
					<?php
						foreach ( $header_menus as $menu_item ) {
							if ( ! $menu_item->menu_item_parent ) {
								$child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
								$has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items ); 
								
								if ( ! $has_children ) {
									?>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
											<?php echo esc_html( $menu_item->title ); ?>
										</a>
									</li>
									<?php
								} else {
									?>
									<li class="nav-item dropdown">
										<a class="nav-link active dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" aria-current="page" id="navbarDropdownMenuLink" role="button"
											 data-bs-toggle="dropdown" aria-expanded="false"
											 target="<?php echo esc_attr( $link_target ); ?>"
											 title="<?php echo esc_attr( $menu_item->title );  ?>">>
											<?php echo esc_html( $menu_item->title ); ?>
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<?php
												foreach ( $child_menu_items as $child_menu_item ) {
													?>
														<a class="dropdown-item" 
															href="<?php echo esc_url( $child_menu_item->url ); ?>">
																<?php echo esc_html( $child_menu_item->title ); ?>
														</a>
													<?php
												}
												?>
										</ul>
									</li>
									<?php
								}
								?>
									<?php
							 }
							}
							 ?>
				</ul>
				<?php
				}
				?>
			</div>
	</div>
</nav>