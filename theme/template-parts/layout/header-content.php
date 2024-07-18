<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kutumb
 */

?>

<header id="masthead" class=" shadow-sm mb-8 bg-white border-b-[1px] border-slate-200">
	<div id="inside-header" class="flex justify-between py-4 px-2">
		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img width="161" height="65" src="/wp-content/uploads/2021/03/cropped-kitabirang-logo.png" alt="Kitabirang" decoding="async"></a>
			
		</div>

		<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'kutumb' ); ?>" class="flex items-center">


			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	=>	'hidden tablet:flex',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>

			<button id="mobile-menu-btn" aria-controls="mobile-menu" aria-expanded="false" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-600 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
				<span class="absolute -inset-0.5"></span>
				<span class="sr-only"><?php esc_html_e( 'Side Menu', 'kutumb' ); ?></span>
		
				<!--
					Icon when menu is closed.

					Menu open: "hidden", Menu closed: "block"
				-->
				<svg id="svgclosed" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
				<!--
					Icon when menu is open.

					Menu open: "block", Menu closed: "hidden"
				-->
				<svg id="svgopen" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>

			<div id="side-menu" class="hidden">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img width="161" height="65" src="/wp-content/uploads/2021/03/cropped-kitabirang-logo.png" alt="Kitabirang" decoding="async"></a>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu'        	 => '1070',
						'menu_id'        => 'side-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
			?>

			</div>

		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->

