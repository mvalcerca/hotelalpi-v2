<?php /* Template Name: Around Page */ ?>
<?php get_header(); ?>

<div class="rooms page">
  <div class="section noPadBottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center page-head">
          <h1><?php the_title(); ?></h1>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 noPadding">
          <?php
        // Ottiene tutti i post dal database della tipologia EVENTO;
        $args = array( 'post_type' => 'places' );
        $events = new WP_Query( $args );
        while ( $events->have_posts() ) : $events->the_post();
        $cont = 1;

        $location = get_field('luogo');
      ?>


      <div id="<?php the_ID(); ?>" class="map-obj-info">
        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="pic" style="background-image: url('<?php echo $feat_image; ?>'); background-size: cover; background-position: center;">
        </div>
        <div class="desc">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
          <div id="map-canvas" style="height: 550px;" class="near-map">
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgufrjPoBcjLEr4cd-v3EGlNxVQMOAtoc">
</script>
<script type="text/javascript">

  var styles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];

  function initialize() {
    var mapOptions = {
      center: { lat: 41.9051851, lng: 12.5026749},
      scrollwheel: false,
      zoom: 14,
      styles: styles
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var markers = Array();


    <?php
      // Ottiene tutti i post dal database della tipologia EVENTO;
      $args = array( 'post_type' => 'places' );
      $events = new WP_Query( $args );
      while ( $events->have_posts() ) : $events->the_post();
      $cont = 1;

      $location = get_field('luogo');
    ?>

    var myLatlng = new google.maps.LatLng(<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>);

    var markerUrl = '<?php echo the_field("custom_marker_url"); ?>';

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        animation: google.maps.Animation.DROP,
        title: '<?php echo the_title(); ?>',
        _index: <?php echo the_ID(); ?>,
	icon: markerUrl
    });

    if(markerUrl.length > 0){
	marker.icon = markerUrl;
	console.log(markerUrl);
    }

    var lastOpen;

    google.maps.event.addListener(marker, 'click', function(event){
      if(lastOpen){
        lastOpen.animate({width:'toggle'},350);
      }
      jQuery('#' + this._index).animate({width:'toggle'},350);
      lastOpen = jQuery('#' + this._index);
    });

    markers.push(marker);

    <?php endwhile; ?>
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<?php get_footer(); ?>