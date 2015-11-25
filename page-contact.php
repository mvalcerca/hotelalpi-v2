<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="contact page">

      <div class="container">
        <div class="row section">
          <div class="col-md-12">
            <h1><?php the_title(); ?></h1>

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

            <div class="row">
              <div class="col-md-12 short-cuts">
                <a href="#map-canvas" class="btn btn-default"><?php _e('Esplora la mappa', "hotelalpi"); ?></a>
                <a href="#reachus" class="btn btn-default"><?php _e('Scopri come raggiungerci', "hotelalpi"); ?></a>
                <a href="#reachus" class="btn btn-default"><?php _e('Modulo di contatto', "hotelalpi"); ?></a>
              </div>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="map-canvas" style="height: 400px;">

                </div>
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

        <div class="row section">
          <div id="reachus" class="col-md-6">
            <?php the_field('come_raggiungerci'); ?>

          </div>

          <div class="col-md-5 col-md-offset-1">
            <h2><?php _e('I nostri contatti', "hotelalpi"); ?></h2>

            <p>
              <address>
                <strong>Hotel Alpi Roma</strong><br>
                Via Castelfidardo, 84 - Rome Italy <br>
                <abbr title="Phone">P:</abbr> (+39) 06 444 1235 <br>
                <abbr title="Fax">F:</abbr> (+39) 06 444 1257 <br>
                <abbr title="Mail">E:</abbr> <a href="mailto:info@hotelalpi.com">info@hotelalpi.com</a>
              </address>
            </p>

            <hr>

            <h2><?php _e("Modulo di Contatto", "hotelalpi"); ?> <br>
            <small>
                <?php _e("Compila il modulo per essere contattato da uno dei nostri operatori", "hotelalpi"); ?>
            </small></h2>
            <form id="contactform">
              <div class="form-group">
                <label for="email"><?php _e("Indirizzo email", "hotelalpi"); ?></label>
                <input type="email" id="mail" class="form-control" placeholder="<?php _e("Indirizzo email", "hotelalpi"); ?>">
              </div>
              <div class="form-group">
                <label for="email"><?php _e("Nome", "hotelalpi"); ?></label>
                <input type="text" id="name" class="form-control" placeholder="<?php _e("Nome", "hotelalpi"); ?>">
              </div>
              <div class="form-group">
                <label for="email"><?php _e("Messaggio", "hotelalpi"); ?></label>
                <textarea id="message" class="form-control" rows="5"></textarea>
              </div>
              <button class="btn btn-block btn-primary btn-lg"><?php _e("Contattaci", "hotelalpi"); ?></button>
            </form>
            <div class="thanks-contact">
                <h3><?php _e("Grazie per averci contattato.", "hotelalpi");?></h3>
            </div>
          </div>
        </div>
      </div>

    </div>


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
<script>
function initialize() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
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

          <script type="text/javascript">

      jQuery('#contactform').on('submit', function(e){
        e.preventDefault();

        jQuery.ajax({
          type: 'POST',
          url: '/contactmadrill.php',
          data: jQuery('#contactform').serialize(),
          success: function(data){
            console.log(data);
            jQuery('#contactform').fadeOut("normal", function(){
               jQuery('.thanks-contact').fadeIn();
             });
          }
        });

      });
      </script>

    <?php get_footer(); ?>
