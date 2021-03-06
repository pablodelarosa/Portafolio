<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portafolio
 */

get_header(); ?>

	<div id="primary" class="content-area column row">
		<main id="main" class="site-main" role="main">

			<div class="row">

				<div class="small-12 large-8 column">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'case-study' );
							the_post_navigation(
								array (
									'prev_text' => __( '<span class="button-left round">Previous</span>'),
									'next_text' => __( '<span class="button round">Next</span>')
								)
							); 

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) : 
							comments_template(); 
						endif;

					endwhile; // End of the loop.
					?>

				</div>

				<div class="small-12 large-4 column">
					<!-- future sidebar -->
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
