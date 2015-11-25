<?php get_header(); ?>
	<div class="container page">
		<div class="row">
			<div class="col-md-12 section text-center">
				<h1><?php the_title(); ?> <br><small><?php the_field('sottotitolo'); ?></small></h1>
        <a href="#" class="mobile-book-button"><i class="ion-bookmark"></i> BOOK NOW</a>
			</div>
		</div>
    
    <?php
    
      $destra = get_field('immagine_destra');
      $sinistra_alto = get_field('immagine_sinistra_alto');
      $sinistra_basso = get_field('immagine_sinistra_basso');
    
    ?>
    
    <div class="room-intro">
      <div class="side hidden-xs hidden-sm">
        <img src="<?php echo $destra['url']; ?>" alt="Room">
      </div>
      <div class="side">
        <div class="first">
          <img src="<?php echo $sinistra_alto['url']; ?>" alt="Room">
        </div>
        <div class="second">
          <img src="<?php echo $sinistra_basso['url']; ?>" alt="Room">
        </div>
      </div>
    </div>
    
    <div class="room-description">
      
      <div class="row">
        <div class="col-md-12 service-icons">
          <h3>Servzi compresi</h3>
          <i class="ion-wifi"></i>
          <i class="ion-ios-monitor-outline"></i>
          <i class="ion-coffee"></i>
          <i class="ion-waterdrop"></i>
          <i class="ion-ios-snowy"></i>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
    
    
    
	</div>
<?php get_footer(); ?>