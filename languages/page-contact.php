<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<div class="container page">
  <div class="row">
    <div class="col-md-12">
      <h1><?php the_title(); ?></h1>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 map-row">
      <div id="googleMap" style="width: 100%; height: 380px;"></div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-7">
      <?php the_field('come_raggiungerci'); ?>
    </div>

    <div class="col-md-4 col-md-offset-1">
      <h2><?php _e('I nostri contatti', "hotelalpi"); ?></h2>
      <hr>
      <p>
        <strong><?php _e('Telefono', "hotelalpi"); ?>:</strong> +39 06 444 1235 <br/>
        <strong><?php _e('Fax', "hotelalpi"); ?>:</strong> +39 06 444 1257 <br/>
        <strong><?php _e('Mail', "hotelalpi"); ?>:</strong> info@hotelalpi.it
      </p>

      <hr>

      <h2><?php _e("Modulo di Contatto", "hotelalpi"); ?></h2>
      <p>
        <?php _e("Compila il modulo per essere contattato da uno dei nostri operatori", "hotelalpi"); ?>
      </p>
      <?php echo do_shortcode('[bws_contact_form]'); ?>
    </div>
  </div>


</div>



<script>
function initialize() {
  // Create a map centered in Pyrmont, Sydney (Australia).
  map = new google.maps.Map(document.getElementById('googleMap'), {
    center: {lat: 41.904066, lng: 12.494125},
    draggable: false,
    scrollwheel: false,
    zoom: 15
  });

  map.setOptions({styles: [
    {
      featureType: "poi",
      stylers: [
        { visibility: "off" }
      ]
    }
  ]});

  var request = {
    location: map.getCenter(),
    radius: '500',
    query: 'Hotel Alpi, Roma'
  };

  var service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
}

// Checks that the PlacesServiceStatus is OK, and adds a marker
// using the place ID and location from the PlacesService.
function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    var templateDir = '<?php echo get_template_directory_uri(); ?>';
    var marker = new google.maps.Marker({
      map: map,
      animation: google.maps.Animation.BOUNCE,
      icon: 'http://i.imgur.com/fDIpbbw.png',
      place: {
        placeId: results[0].place_id,
        location: results[0].geometry.location
      }
    });
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<?php get_footer(); ?>
