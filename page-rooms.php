<?php /* Template Name: Rooms Page */ ?>
<?php get_header(); ?>
<div class="rooms page">
		<div class="container section">
			<div class="row">
				<div class="col-md-12 text-center page-head">
					<h1><?php the_title(); ?></h1>
					<?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
				</div>
			</div>
      
      <div class="row divider">
        <div class="col-md-5">
          <hr>
        </div>
        <div class="col-md-2 image">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/alpi-letters.png" alt="">
        </div>
        <div class="col-md-5">
          <hr>
        </div>
      </div>
      

      <div class="section">
        <?php
          // Ottiene tutti i post dal database della tipologia EVENTO;
          $args = array( 'post_type' => 'rooms' );
          $events = new WP_Query( $args );
      
          while ( $events->have_posts() ) : $events->the_post();
          $term = get_field('tipologia');
      
        ?>
        <?php if(get_field('large')){ ?>
          <div class="room full grow" onclick="location.href='<?php echo get_permalink(); ?>'">
        <?php }else{ ?>
          <div class="room grow" onclick="location.href='<?php echo get_permalink(); ?>'">
        <?php } ?>
          <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
          <div class="room-details">
            <span class="title"><?php the_title(); ?></span>
            <div class="sub">
              <?php the_field('sottotitolo'); ?>
            </div>
          </div>
        </div>
        
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
      
		</div>
    
    <div class="container">
      <div class="row divider">
        <div class="col-md-5">
          <hr>
        </div>
        <div class="col-md-2 image">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/alpi-letters.png" alt="">
        </div>
        <div class="col-md-5">
          <hr>
        </div>
      </div>
    </div>
    
    <div class="container section">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2><?php the_field('cta_title'); ?> <br><small><?php the_field('cta_sub'); ?></small></h2>
        </div>
      </div>
    </div>
	</div>
<?php get_footer(); ?>