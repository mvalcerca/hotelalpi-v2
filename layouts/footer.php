	</div> <!-- end container -->
<?php
global $themedir, $pego_prefix;
//custom BG 
include("functions/customBG.php"); 
//custom JS
include("functions/custom-js.php"); 
?>

	<div class="mobile-book-button">
		BOOK NOW
	</div>
	<div class="bmw" id="modalbmw" data-locale="<?php echo get_bloginfo("language"); ?>">

  <div class="overlay"></div>
  <div class="container">
    <div class="overlay-loading"></div>
    <div id="cin-calendar" class="calendar animated fadeIn"></div>
    <div id="cout-calendar" class="calendar animated fadeIn"></div>
    <div class="header">
      <div id="check-in" class="item checkin">
        <div class="title">ARRIVO</div>
        <div class="day calendar-in"><span class="dnumber">21</span> <i class="fa fa-angle-down calendar-in"></i></div>
        <div class="month calendar-in">LUGLIO</div>
      </div>
      <div id="check-out" class="item checkout">
        <div class="title">PARTENZA</div>
        <div class="day calendar-out"><span class="dnumber">21</span> <i class="fa fa-angle-down calendar-out"></i></div>
        <div class="month calendar-out">LUGLIO</div>
      </div>
      <div class="item rooms">
        <span class="title">CAMERE</span>
        <div class="dayWrapper">
          <div class="control plus">+</div>
          <div id="rooms" class="room">
            <span class="room-number">2</span>
          </div>
          <div class="control minus">-</div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div><!-- end of header -->

    <div class="body">
      <div class="room-row" data-number="1" id="room1">
        <div class="name bordered"> <strong>Cam. 1</strong></div>
        <div class="adults bordered">
          <select id="adultsnum" name='options'>
            <option value='1'>1 Adulto</option>
            <option value='2'>2 Adulti</option>
            <option value='3'>3 Adulti</option>
            <option value='4'>4 Adulti</option>
            <option value='5'>5 Adulti</option>
            <option value='6'>6 Adulti</option>
            <option value='7'>7 Adulti</option>
          </select>
        </div>
        <div class="childs">
          <select class="childsnum" name='options'>
            <option value='0'>0 Bambini</option>
            <option value='1'>1 Bambino</option>
            <option value='2'>2 Bambini</option>
             <option value='3'>3 Bambini</option>
             <option value='4'>4 Bambini</option>
          </select>
        </div>
        <div class="remove"><i class="ion-ios-trash-outline"></i></div>
        <div class="clear"></div>
      </div>

      <div id="childs1" class="childs-spec-row">
        <div class="item label">
          Età
        </div>
      </div>

    </div><!-- end of body -->

    <div class="promocode">
      <input type="text" class="pcode" placeholder="Hai un promocode ? scrivilo qui." />
    </div>

    <div class="search">
      VERIFICA DISPONIBILITÀ
    </div>

  </div>

</div>
	<div id="footer"> <!-- start footer  -->	
		<div id="footer-inside">
			<div class="one_fourth columnShortcodeType">
					<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer First Column Sidebar') ) :  

					endif; 
					?>
			</div>
			<div class="one_fourth columnShortcodeType">		
					<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Second Column Sidebar') ) :  

					endif; 
					?>	
			</div>
			<div class="one_fourth columnShortcodeType">	
					<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Third Column Sidebar') ) :  

					endif; 
					?>	
			</div>
			<div class="one_fourth columnShortcodeType">		
					<?php
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Fourth Column Sidebar') ) : 

					endif; 
					?>		
			</div>
			<div class="clear"></div>
		</div>
	</div> <!-- end footer -->
	<div id="under-footer">
		<div id="under-footer-inside">
			<div class="fl">
			<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under footer area - left') ) :

			endif; 
			?>				
			</div>
			<div class="fr">
			<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under footer area - right') ) : 

			endif; 
			?>		
			</div>
			
			<div class="clear"></div>
			<div class="" style="text-align: center; display: block;">
				<?php 
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under footer area - center') ) : 

				endif; 
				?>		
			</div>
			
			<div class="clear"></div>
		</div>
	</div>	
<?php  wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-345188-21', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>