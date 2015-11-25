<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
    <div class="slider">
      <?php
      $currentlang = get_bloginfo('language');

      if($currentlang == "fr-FR"){
        echo do_shortcode('[metaslider id=922]');
      }

      if($currentlang == "it-IT"){
        echo do_shortcode('[metaslider id=165]');
      }

      if($currentlang == "en-GB"){
        echo do_shortcode('[metaslider id=931]');
      }

      if($currentlang == "de-DE"){
        echo do_shortcode('[metaslider id=939]');
      }

      if($currentlang == "es-ES"){
        echo do_shortcode('[metaslider id=947]');
      }

      if($currentlang == "ja"){
        echo do_shortcode('[metaslider id=1424]');
      }

      if($currentlang == "pt-PT"){
        echo do_shortcode('[metaslider id=1491]');
      }

      if($currentlang == "ru-RU"){
        echo do_shortcode('[metaslider id=1542]');
      }

      ?>
      <div class="booking-bar-mobile hidden-md hidden-lg mobile-book-button">
        <?php _e('BOOK NOW', 'hotelalpi'); ?>
      </div>
      <div class="booking-bar hidden-sm hidden-xs" data-lang="<?php echo get_locale() ?>">
        <img src="http://www.airtransat.ca/getmedia/22463e82-447c-49b0-bb98-997284fc3675/Rome03.jpg" alt="">
        <div class="container">

           <form id="book-form-desktop">
             <div class="row">

              <div class="form-group col-md-2">
                <input type="text" id="checkIn" class="form-control" placeholder="<?php _e('Check In', 'hotelalpi'); ?>">
              </div>
              <div class="form-group col-md-2">
                <input type="text" id="checkOut" class="form-control" placeholder="<?php _e('Check Out', 'hotelalpi'); ?>">
              </div>
              <div class="form-group col-md-2">
                <select name="rooms" class="form-control" id="rooms">
                  <option value="1" selected="true">1 <?php _e('Camera', 'hotelalpi'); ?></option>
                  <option value="2">2 <?php _e('Camere', 'hotelalpi'); ?></option>
                  <option value="3">3 <?php _e('Camere', 'hotelalpi'); ?></option>
                  <option value="4">4 <?php _e('Camere', 'hotelalpi'); ?></option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <input type="text" id="guests" class="form-control" placeholder="<?php _e('Seleziona ospiti', 'hotelalpi'); ?>">
              </div>
              <div class="form-group col-md-2" >
                <input type="text" id="pcode" class="form-control tooltips tooltipster-punk" placeholder="Promocode" title="<?php _e('Iscriviti alla nostra newsletter per ricevere il promocode.', 'hotelalpi'); ?>">
              </div>
              <div class="form-group col-md-2">
                <button id="booknow" type="submit" class="btn btn-primary btn-block"><?php _e('PRENOTA', 'hotelalpi'); ?></button>
              </div>

          </div>

          <div class="row guests">
            <div class="col-md-8 book-rooms">

            </div>
          </div>
          </form>
        </div>
      </div>
    </div>

    <div class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <h1 class="wow fadeIn"><?php the_field('titolo_intro'); ?></h1>
            <div class="wow fadeIn">
              <?php the_field('testo_intro'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row text-center">

          <div class="col-md-3">
            <div class="service wow rotateInDownLeft" onclick="location.href='<?php the_field('link_cerchio_1'); ?>'">
              <img src="http://static.laterooms.com/hotelphotos/laterooms/6942/gallery/hotel-alpi-roma_220220121842068650.jpg" alt="Service">
              <div class="caption"><?php the_field('testo_primo_cerchio'); ?></div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="service wow fadeInUp" onclick="location.href='<?php the_field('link_cerchio_2'); ?>'">
              <img src="http://www.italytravels.info/files_inserzioni/roma-hotel-Alpi1.jpg" alt="Service">
              <div class="caption"><?php the_field('testo_secondo_cerchio'); ?></div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="service wow fadeInDown" onclick="location.href='<?php the_field('link_cerchio_3'); ?>'">
              <img src="http://i.imgur.com/yG0GkgJ.jpg" alt="Service">
              <div class="caption"><?php the_field('testo_terzo_cerchio'); ?></div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="service wow rotateInDownRight" onclick="location.href='<?php the_field('link_cerchio_4'); ?>'">
              <img src="http://draft.hotelwebj.com/alpi/wp-content/uploads/2015/05/gallery.jpg" alt="Service">
              <div class="caption"><?php the_field('testo_quarto_cerchio'); ?></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="newsblog">
      <div class="container-fluid mheight">
        <div class="row mheight">
          <div class="col-md-6 mheight">
            <div class="section">
              <h2><?php the_field('titolo_sezione_vantaggi'); ?> <br><small><?php the_field('paragrafo_sezione_vantaggi'); ?>
</small></h2>
  <?php  if( have_rows('vantaggi') ): ?>
  <?php $i = 1; ?>
            <?php  while ( have_rows('vantaggi') ) : the_row(); ?>

                  <?php if($i == 1 || $i == 3 || $i == 5){ ?>
                    <div class="row">
                  <?php } ?>

                  <div class="col-md-6">
                    <div class="benefit">
                      <i class="ion-checkmark"></i> <?php the_sub_field('vantaggio', false, false); ?>
                    </div>
                  </div>

                  <?php if($i == 2 || $i == 4 || $i == 6){ ?>
                  </div>
                  <?php } ?>

                  <?php $i += 1; ?>

              <?php endwhile; ?>
<?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 newsletter mheight">
            <div class="wow fadeInRight">

              <h2><?php the_field('titolo_sezione_newsletter'); ?> <br><small><?php the_field('paragrafo_sezione_newsletter'); ?></small></h2>
            <form class="newsform promocodeform">
              <div class="form-group">
                <input type="email" id="emailAddress" placeholder="email@example.com" class="form-control">
                <div class="checkbox checkbox-newsletter"> <label> <input class="checkbox-promocode" type="checkbox"> <?php _e('Acconsento al trattamento dei dati personali', 'hotelalpi'); ?> - <a href="<?php echo get_permalink(pll_get_post(1986)); ?>">Privacy</a> </label></div>
              </div>

              <button type="submit" class="btn btn-primary btn-block"><?php _e('Iscriviti!', 'hotelalpi', 'hotelalpi'); ?></button>
            </form>

            <div class="thanks" style="display: none;"><h3><?php _e('Grazie per esserti iscritto !', 'hotelalpi'); ?></h3></div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="blog-recap section">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center title-padding">
            <h2>LIVE FROM ROMA <br><small><?php _e('News, eventi e promozioni da Hotel Alpi Roma'); ?></small></h2>
          </div>
        </div>

        <div class="row">


          <?php $latest_post = get_posts( array('post_type' => 'events', 'numberposts' => 3) ); ?>
          <?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="col-md-4 wow fadeIn" onclick="location.href='<?php echo get_permalink(); ?>'" >
              <div class="post" style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover; background-repeat: no-repeat; transition: all 0.5s ease;">
                <div class="image">

                </div>
                <div class="title">
                  <?php the_title(); ?>
                  <div class="date"><i class="ion-ios-clock-outline"></i> <?php the_date(); ?></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>



    <div class="modal fade" id="contactmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php _e("Modulo di Contatto", "hotelalpi"); ?></h4>
                </div>
                <div class="modal-body">
                    <form id="contactform">
                    <p>
                      <?php _e("Compila il modulo per essere contattato da uno dei nostri operatori", "hotelalpi"); ?>
                    </p>

                       <div class="form-group"> <label for="email"><?php _e("Indirizzo email", "hotelalpi"); ?></label> <input class="form-control" type="email" name="mail" id="mail" placeholder="<?php _e("Indirizzo email", "hotelalpi"); ?>"/> </div>
                       <div class="form-group"> <label for="email"><?php _e("Nome", "hotelalpi"); ?></label> <input class="form-control" type="text" name="name" id="name" placeholder="<?php _e("Nome", "hotelalpi"); ?>"/> </div>
                       <div class="form-group"> <label for="email"><?php _e("Oggetto", "hotelalpi"); ?></label> <input class="form-control" type="text" name="subject" id="subject" placeholder="<?php _e("Oggetto", "hotelalpi"); ?>"/> </div>
                       <div class="form-group"> <label for="email"><?php _e("Messaggio", "hotelalpi"); ?></label> <textarea class="form-control" name="message" name="phone" id="message" id="messaggio" rows="7" placeholder="<?php _e("Messaggio", "hotelalpi"); ?>"></textarea> </div>

                       <div class="form-group">
                         <div id="formerror">

                         </div>
                       </div>

                       <button type="submit" id="contactnow" class="btn btn-lg btn-primary btn-block"><?php _e("Contattaci", "hotelalpi"); ?></button>

                    </form>

                    <div class="thanks-contact">
                      <h3><?php _e('Grazie per averci contattato.', 'hotelalpi'); ?></h3>
                    </div>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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

    <script type="text/javascript">

      function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
      }

      jQuery('.newsform').on('submit', function(e){
        e.preventDefault();

        var privacy = jQuery('.checkbox-promocode');

        if(!IsEmail(jQuery('#emailAddress').val())){
          jQuery('#emailAddress').removeClass('text-danger animated shake');
          jQuery('#emailAddress').addClass('text-danger animated shake');
          return;
        }

        if(!privacy.is(':checked')){
          jQuery('.checkbox-promocode').addClass('text-danger animated shake');
          return;
        }

        jQuery.ajax({
          type: 'POST',
          url: '/promocode.php',
          data: jQuery('.promocodeform').serialize(),
          success: function(data){
            console.log(data);
            jQuery('.promocodeform').fadeOut("normal", function(){
               jQuery('.thanks').fadeIn();
             });
          }
        });

      });

      </script>
<?php get_footer(); ?>
