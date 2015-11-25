<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hotelalpi
 */

get_header(); ?>
	
	<div class="page">
		<div class="container section">
			<div class="row">
				<div class="col-md-12 page-head text-center">
					
					<h1><?php the_title(); ?></h1>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php the_content(); ?>
		
					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
