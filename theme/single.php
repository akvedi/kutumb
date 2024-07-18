<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kutumb
 */

get_header();
?>

	<section id="primary" class="grid grid-cols-[0.9fr_0.5fr] gap-8">
		<main id="main" class=" ">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );


				if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __( 'Next Post', 'kutumb' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', 'kutumb' ) . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( 'Previous Post', 'kutumb' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Previous post:', 'kutumb' ) . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End the loop.
			endwhile;
			?>

		</main><!-- #main -->
		<aside class="">
			<div class="shadow-sm bg-white p-4 rounded-lg border-[1px] border-slate-200">
				<form action="" id="subs" class="grid">
					<label for="email">नीचे बॉक्स में अपना ईमेल डालकर Subscribe बटन दबाइये <br> और सारी जानकारियाँ  अपने ईमेल पर पाइये </label>
					<input type="email" name="email" id="email" placeholder="Your Email Please" class=" mt-2 border-2 border-blue-500 py-2 px-2 rounded-t-lg" required>
					<button type="submit"  class="bg-blue-500 py-3 text-white rounded-b-lg">🕭 Subscribe </button>
					<img src="https://sitegpt.ai/images/arrow-icon.svg" alt="" srcset="">
					<small> जल्दी से दबाइये </small>
				</form>
			</div>
			<br>
			<div class="shadow-sm bg-white p-6 rounded-b-lg">
			fdfdff
			</div>

			
		</aside>
	</section><!-- #primary -->

<?php
get_footer();
