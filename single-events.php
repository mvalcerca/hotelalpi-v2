<?php get_header(); ?>

	<div class="post-view">
      
      <div class="parallax">
        
          <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--back">
              <div class="title"><?php the_title(); ?></div>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <img src="<?php echo $image[0]; ?>" class="featured-img" alt="">
            </div>
          </div>
          
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
         
        </div>
      
    </div>

<?php get_footer(); ?>