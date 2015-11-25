<?php /* Template Name: Gallery Page */ ?>
<?php get_header(); ?>
	
	<div class="page" style="background-color: black;">
		<div class="container section">
			<div class="row">
				<div class="col-md-12 page-head text-center">
					
					<h1 style="color: #FFF;"><?php the_title(); ?></h1>
					
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
