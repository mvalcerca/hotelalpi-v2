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
 <!-- Start Google Analytics -->
 <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-64011381-1', 'auto');
 ga('send', 'pageview');
 ga('require', 'linker');
 ga('linker:autoLink', ['secure.hermeshotels.com']);
 </script>
 <!-- End Google Analytics -->

	<?php wp_footer(); ?>
  </body>
</html>
