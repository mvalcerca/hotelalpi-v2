<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>

<?php
// Ottiene tutti i post dal database della tipologia EVENTO
$args = array( 'post_type' => 'events' );
$events = new WP_Query( $args );
?>


<div class="blog">
     <?php while ( $events->have_posts() ) : $events->the_post(); ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <div class="featured-post" onclick="location.href='<?php echo get_permalink(); ?>'" style="background-image: url('<?php echo $image[0]; ?>'); background-position: center; background-size: cover; transition: all 0.5s ease;">
        <div class="overlay"></div>
        <div class="title">
          <?php the_title(); ?>
          <div class="data"><?php the_date(); ?></div>
        </div>
      </div>
      <?php break; ?>
     <?php endwhile; ?>
     
     <div class="container section">
       <div class="row">
         <div class="col-md-10 col-md-offset-1">
           
          <?php while ( $events->have_posts() ) : $events->the_post(); ?>
           <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="post" onclick="location.href='<?php echo get_permalink(); ?>'" style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
              <div class="overlay"></div>
              <div class="title">
                <?php the_title(); ?>
                <div class="data"><?php the_date(); ?></div>
              </div>
            </div>
           <?php endwhile; ?>
           
           <!-- <div class="ads" style="background-image: url('http://angeltours.eu/site_media/location/Spiral_staircase_in_the_Vatican_Museums.jpg'); background-size: cover;">
             <div class="overlay"></div>
             <div class="title">
               PACCHETTO VISITA MUSEI
               <div class="price">a partire da <strong>€300,00</strong></div>
             </div>
           </div> -->
           
         </div>
       </div>
     </div>
   </div>

<?php get_footer(); ?>