<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotelalpi
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>
  <?php if(is_singular('events')){ ?>
  <body class="noflow">
  <?php }else{ ?>
    <body>
  <?php } ?>
    <div class="bmw" id="modalbmw" data-locale="<?php echo get_bloginfo("language"); ?>">

  <div class="overlay"></div>
  <div class="container">
    <div class="overlay-loading"></div>
    <div id="cin-calendar" class="calendar animated fadeIn"></div>
    <div id="cout-calendar" class="calendar animated fadeIn"></div>
    <div class="header">
      <div id="check-in" class="item checkin">
        <div class="title">ARRIVAL</div>
        <div class="day calendar-in"><span class="dnumber">21</span> <i class="fa fa-angle-down calendar-in"></i></div>
        <div class="month calendar-in">LUGLIO</div>
      </div>
      <div id="check-out" class="item checkout">
        <div class="title">DEPARTURE</div>
        <div class="day calendar-out"><span class="dnumber">21</span> <i class="fa fa-angle-down calendar-out"></i></div>
        <div class="month calendar-out">LUGLIO</div>
      </div>
      <div class="item rooms">
        <span class="title">ROOMS</span>
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
        <div class="name bordered"> <strong>Room 1</strong></div>
        <div class="adults bordered">
          <select id="adultsnum" name='options'>
            <option value='1'>1 Adult</option>
            <option value='2'>2 Adult</option>
            <option value='3'>3 Adult</option>
            <option value='4'>4 Adult</option>
            <option value='5'>5 Adult</option>
            <option value='6'>6 Adult</option>
            <option value='7'>7 Adult</option>
          </select>
        </div>
        <div class="childs">
          <select class="childsnum" name='options'>
            <option value='0'>0 Child</option>
            <option value='1'>1 Child</option>
            <option value='2'>2 Child</option>
             <option value='3'>3 Child</option>
             <option value='4'>4 Child</option>
          </select>
        </div>
        <div class="remove"><i class="ion-ios-trash-outline"></i></div>
        <div class="clear"></div>
      </div>

      <div id="childs1" class="childs-spec-row">
        <div class="item label">
          Age
        </div>
      </div>

    </div><!-- end of body -->

    <div class="promocode">
      <input type="text" class="pcode" placeholder="Do you have a promocode ? Type it here!" />
    </div>

    <div class="search">
      CHECK AVAILABILITY
    </div>

  </div>

</div>
    <div class="locale" data-locale="<?php echo get_bloginfo("language"); ?>"></div>
    <div class="lang-menu">
      <ul class="languages">
        <li><a href="/it">Italiano</a></li>
        <li><a href="/en">English</a></li>
        <li><a href="/es">Español</a></li>
        <li><a href="/fr">Français</a></li>
        <li><a href="/de">Deutsch</a></li>
        <li><a href="/pt">Português</a></li>
        <li>日本語</li>
        <li><a href="/ru">Русский</a></li>
      </ul>
      <div class="close">CLOSE</div>
    </div>
    <div class="mob-menu">
      <ul class="mob-nav">
        <?php wp_nav_menu(array('theme_location' => 'upper-menu', 'menu_class' => 'navigation')); ?>
      </ul>
      <ul class="mob-nav">
        <?php wp_nav_menu(array('theme_location' => 'bottom-menu', 'menu_class' => 'navigation')); ?>
      </ul>
      <div class="close">CHIUDI</div>
    </div>
    <?php
        if(!is_front_page()){
      ?>
        <div class="booking-bar-header mobile-book-button">
          BOOK NOW
        </div>
      <?php
        }
      ?>
    <header>
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo-small-x2.jpg" alt="Hotel Alpi Logo">
        </a>
      </div>
      <div class="mob-trigger hidden-md hidden-lg">
        <i class="ion-navicon"></i>
      </div>
      <div class="upper-nav">
        
        <div class="container hidden-sm hidden-xs">
          <div class="row">
            <div class="col-md-12 text-right">
              
              <ul class="utils">
                <li><a href="">+39 06 444 1235</a></li>
                <li><a href="/alpi-stream">#AlpiRoma</a></li>
                <li><a id="lang-select" href="">Language</a></li>
              </ul>
              
              <ul class="navigation">
                <?php wp_nav_menu(array('theme_location' => 'upper-menu', 'menu_class' => 'navigation')); ?>
              </ul>
              
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="bottom-nav">
        <div class="container  hidden-sm hidden-xs">
          <div class="row">
            <div class="col-md-12">
              <?php wp_nav_menu(array('theme_location' => 'bottom-menu', 'menu_class' => 'navigation')); ?>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- rooms preview -->
      <div id="room-preview-list" class="rooms-preview text-right">
         <?php
          // Ottiene tutti i post dal database della tipologia EVENTO;
          $args = array( 'post_type' => 'rooms' );
          $events = new WP_Query( $args );
      
          while ( $events->have_posts() ) : $events->the_post();
          $term = get_field('tipologia');
      
        ?>
          <div class="room-prev" onclick="location.href='<?php echo get_permalink(); ?>'">
            <?php the_post_thumbnail('full', array('class' => 'room-image img-responsive')); ?>
            
            <div class="room-title"><?php the_title(); ?></div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        
      </div>
      <!-- end of rooms preview -->
    </header>