<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotelalpi
 */

?>
    <footer>
      <div class="container">
        <div class="row">
          
          <div class="col-md-2 menu">
            <h4>Hotel</h4>
            <?php wp_nav_menu(array('theme_location' => 'main-footer', 'menu_class' => 'list-unstyled')); ?>
          </div>
          <div class="col-md-2 menu">
            <h4>Our Rooms</h4>
            <?php wp_nav_menu(array('theme_location' => 'room-menu', 'menu_class' => 'list-unstyled')); ?>
          </div>
          <div class="col-md-2 menu">
            <h4>Explore Hotel Alpi</h4>
            <?php wp_nav_menu(array('theme_location' => 'footer-explore', 'menu_class' => 'list-unstyled')); ?>
          </div>
          <div class="col-md-6 company-data text-right">
            <img src="http://www.hotelalpi.com/wp-content/themes/hotelalpi/imgs/footer-logo.png" alt="Hotel Alpi Logo"><br>
            Via Castelfidardo, 84 - Rome Italy <br>
            Tel: +39 06 444 1235 <br>
            info@hotelalpi.com
          </div>
        </div>
      </div>
    </footer>
    <div class="credits">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            Created by <a href="">WebJ</a>
          </div>
        </div>
      </div>
    </div>
    
   
	<?php wp_footer(); ?>
  </body>
</html>
