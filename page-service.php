<?php /* Template Name: Service Page */ ?>
<?php get_header(); ?>

<div class="rooms page">
		<div class="container section">
			<div class="row">
				<div class="col-md-12 page-head">
					<h1><?php the_title(); ?></h1>
					<?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
				</div>
			</div>
			
			<div class="row divider margin">
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
			
			<div class="row services-square">
        
        <?php
          // Ottiene tutti i post dal database della tipologia EVENTO;
          $args = array( 'post_type' => 'services' );
          $events = new WP_Query( $args );
      
          while ( $events->have_posts() ) : $events->the_post();
        ?>
        				<div class="col-md-6">
          <div class="card service effect__hover">
            <div class="card__front">
              <?php
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
              ?>
              <img src="<?php echo $feat_image; ?>" alt="" />
              <div class="title">
							<?php the_title(); ?>
						</div>
            </div>
            <div class="card__back">
              <span class="card__text">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </span>
            </div>
          </div><!-- /card -->
				</div><!-- /md-6 -->
        <?php endwhile; ?>

        
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
          <h2><?php _e("Abbiamo preso in prestito ciò che alcuni clienti hanno scritto di noi", "hotelalpi"); ?> <br><small><?php _e("confermerai o smentirai ? Ti aspettiamo all'Hotel Alpi per darti la possibilità di rispondere.", "hotelalpi"); ?></small></h2>
        </div>
      </div>
	  

<div class="row reviews">
      <?php
      // Ottiene tutti i post dal database della tipologia EVENTO;
      $args = array( 'post_type' => 'reviews' );
      $events = new WP_Query( $args );

      while ( $events->have_posts() ) : $events->the_post();

     ?>

    <div class="col-md-6">

      <div class="review">
            <img src="https://cdn4.iconfinder.com/data/icons/miu-flat-social/60/trip_advisor-128.png" class="review-image"/>
        <div class="header">
        <?php the_title(); ?><br>
          <small><?php the_field('testo_soggiorno'); ?></small><br>
        </div>
        
        <div class="name">
          <?php the_field('nome_cliente'); ?> <br>
          <?php the_field('luogo'); ?>
        </div>

        <div class="divider"></div>

        <div class="body">
        <p><?php the_content(); ?></p>
        </div>

      </div>

    </div>
     <?php endwhile; ?>

  </div>



    </div>
	</div>

<?php get_footer(); ?>