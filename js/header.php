<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hotelalpi
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.css" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.date.css" type="text/css">


<?php wp_head(); ?>
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-top"};
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64011381-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Minified Cookie Consent served from our CDN -->
<script src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
  <script type="text/javascript">
  jQuery(function(){
setInterval(function(){
  var divUtc = jQuery('.time-utc');
  var divLocal = jQuery('.time');
  //put UTC time into divUTC
  divUtc.text(moment.utc().format('YYYY-MM-DD HH:mm:ss'));

  //get text from divUTC and conver to local timezone
  var localTime  = moment.utc(divUtc.text()).toDate();
  localTime = moment(localTime).format('HH:mm:ss');
  divLocal.html('<i class="fa fa-clock-o"></i> ' + localTime);
},1000);
});
  </script>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,300,700,100);

.hermes-modal-wrapper .ui-datepicker-inline.ui-datepicker.ui-widget.ui-widget-content.ui-helper-clearfix.ui-corner-all{
	background-color: transparent;
	border: 0px;
}

.bmw *{
  box-sizing: border-box;
  -webkit-user-select: none;  
  -moz-user-select: none;    
  -ms-user-select: none;      
  user-select: none;
}

#cin-calendar, #cout-calendar{
  display: none;
}

.bmw{
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
  background-size: cover;
}

.bmw{
width: 100%;
  height: 100%;
  border: 1px solid #dedede;
  border-radius: 3px;
  padding: 1em;}

.bmw .overlay{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
}

.bmw .container{
  position: relative;
  top: 0;
  margin: 0 auto;
  /* margin-top: 50px; */
  /* min-width: 550px; */
  min-height: 1px;
  -webkit-border-top-left-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topleft: 3px;
  -moz-border-radius-topright: 3px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  width: 100%;
}

.bmw .container .header{
  min-height: 100px;
  height: 100%;
  width: 100%;
  background-color: rgb(255, 255, 255);
  -webkit-border-top-left-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topleft: 3px;
  -moz-border-radius-topright: 3px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.bmw .container .header .item{
  width: 33.33%;
  min-height: 132px;
  height: 100%;
  float: left;
  padding: 1em;
  box-sizing: border-box;
  text-align: center;
  border-right: 1px solid #dedede;
  transition: all 0.5s ease;
  cursor: pointer;
  z-index: 70;
}

.bmw .container .header .item:hover{
  background-color: #f0f0f0;
}

.bmw .container .header .item:nth-last-child(2){
   border: 0px;
}

.clear{
  clear: both;
}

.bmw .container .header .item .title{
  font-size: 0.85em;
  font-weight: 600;
  color: #9B9B9B;
}

.bmw .container .header .item .day{
  font-size: 3.5em;
  font-weight: 300;
  color: #3E3E3E;
  transition: all 0.5s ease;
  text-align: center;
}

.bmw .container .header .item .room{
  font-size: 3.5em;
  font-weight: 300;
  color: #3E3E3E;
  transition: all 0.5s ease;
  text-align: center;
  width: 60%;
  float: left;
  height: 100%;
}

.bmw .container .header .item .day i{
  font-size: 0.8em;
  font-weight: 100;
  color: #9B9B9B;
  margin-left: -5px;
  transition: all 0.5s ease;
}

.bmw .container .header .item .day:hover i{
  color: #2980b9;
}

.bmw .container .header .item .month{
  font-size: 0.85em;
  font-weight: 600;
  color: #9B9B9B;
  transition: all 0.5s ease;
}

.bmw .container .header .item .control{
  
}

.bmw .container .header .item .control.plus{
  float: left;
  width: 20%;
  font-size: 3.3em;
  color: #b9b9b9;
}

.bmw .container .header .item .control.minus{
  float: left;
  width: 20%;
  font-size: 3.3em;
  color: #b9b9b9;
}

.bmw .container .header .item .controls a.plus{
  position: absolute;
  top: 30px;
  left: 420px;
  font-size: 4em;
  font-weight: 100;
  color: #9B9B9B;
  text-decoration: none;
}

.bmw .container .header .item .controls a.minus{
  position: absolute;
  top: 30px;
  right: 20px;
  font-size: 4em;
  font-weight: 100;
  color: #9B9B9B;
  text-decoration: none;
  transition: all 0.5s ease;
}

.bmw .container .header .item .controls a:hover{
  color: #3498db;
}

.bmw .body{
  background-color: #f0f0f0;
  border-top: 1px solid #dedede;
  min-height: 30px;
  overflow: hidden;
}

.bmw .room-row{
  border-bottom: 1px solid #dedede;
  transition: all 0.5s ease;
  height: 65px;
}

.bmw .room-row:hover{
  background-color: #fcfcfc;
}

.bmw .room-row:last-child{
  border-bottom: 0;
}

.bmw .room-row .bordered{
  border-right: 1px solid #dedede;
}

.bmw .room-row select, .bmw .childs-spec-row select{
  -moz-appearance:none;
  -webkit-appearance: none;
  font-size: 0.9em;
  padding-left: 10px;
  height: 65px;
  width: 100%;
  border: 0;
  outline: none;
  background: transparent url("https://cdn0.iconfinder.com/data/icons/slim-square-icons-basics/100/basics-08-32.png") no-repeat 90% center;
}

.bmw .room-row .name{
  width: 33.33%;
  float: left;
  height: 65px;
  line-height: 33px;
  box-sizing: border-box;
  padding: 1em;
}

.bmw .room-row .remove{
  width: 8%;
  float: left;
  height: 65px;
  line-height: 65px;
  box-sizing: border-box;
  border-left: 1px solid #dedede;
  text-align: center;
  font-weight: 100;
  transition: all 0.5s ease;
  cursor: pointer;
}

.bmw .room-row .remove:hover{
  background-color: #c0392b;
  color: #FFF;
  border-left: 0px;
}

.bmw .room-row .adults{
  width: 33.33%;
  float: left;
  box-sizing: border-box;
  text-align: center;
}



.bmw .room-row .childs{
  width: 25.33%;
  float: left;
  box-sizing: border-box;
  text-align: center;
}

.bmw .search{
  border-top: 1px solid #16a085;
  background-color: #1abc9c;
  text-align: center;
  padding: 0.5em;
  color: #FFF;
  font-size: 1.5em;
  -webkit-border-bottom-right-radius: 5px;
  -webkit-border-bottom-left-radius: 5px;
  -moz-border-radius-bottomright: 5px;
  -moz-border-radius-bottomleft: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  transition: all 0.5s ease;
  cursor: pointer;
  border-bottom: 4px solid #10735F;
}

.bmw .search:active{
  background-color: #10735F;
}

.bmw .search:hover{
  background-color: #16a085;
}

.bmw .promocode{
  background-color: #FFF;
  z-index: 1;
}

.bmw .promocode input{
  -moz-appearance:none;
  -webkit-appearance: none;
  display: block;
  height: 100%;
  border: 0;
  width: 100%;
  font-size: 1em;
  padding: 15px;
  box-sizing: border-box;
  text-align: center;
  outline: none;
  border-top: 1px solid #dedede;
}

.bmw .promocode label{
  position: absolute;
  top: 15px;
  left: 20px;
}

.bmw .promocode input:focus{
  box-shadow: 0;
}

.picker--opened .picker__holder{
  min-width: 20em;
  top: 12px;
  left: -16px;
  border: 1px solid #dedede;
  border-radius: 0 0 3px 3px;
}

.bmw .childs-spec-row{
  height: 65px;
  line-height: 65px;
  width: 100%;
  background-color: white;
  border-bottom: 1px solid #dedede;
  display: none;
}

.bmw .childs-spec-row:last-child{
  border-bottom: 0px;
}

.bmw .childs-spec-row .label{
  padding-left: 1em;
  box-sizing: border-box;
}

.bmw .childs-spec-row .item{
  border-right: 1px solid #dedede;
  float: left;
color: #333;
}

.bmw .childs-spec-row .item.labs{
  width: 20%;
color: #333;
}

.bmw .childs-spec-row .item.age{
  box-sizing: border-box;
  width: 20%;
}

.ui-datepicker-inline.ui-datepicker.ui-widget.ui-widget-content.ui-helper-clearfix.ui-corner-all {
  display: block;
  background-color: #FFF;
  z-index: 99999;
  position: absolute;
  padding: 1.5em;
  border: 1px solid #dedede;
  border-radius: 3px;
  height: 100%;
  width: 100%;
}

table.ui-datepicker-calendar{
  height: 80%;
  width: 100%;
}

.ui-datepicker-title{
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}

.ui-datepicker-header.ui-widget-header.ui-helper-clearfix.ui-corner-all{
  margin-bottom: 20px;
}

.ui-datepicker-prev{
  float: left;
}

.ui-datepicker-next{
  float: right;
}

.calendar{
  height: 100%;
  width: 100%;
  top:0;
  left: 0;
  position: absolute;
  z-index: 99999;
}

table.ui-datepicker-calendar thead{
  font-size: 0.8em;
  color: #6C6C6C;
  margin-top: 1em;
}

table.ui-datepicker-calendar a{
  color: #9B9B9B;
  font-size: 0.9em;
  text-decoration: none;
  transition: all 0.5s ease;
  display: block;
  padding: 0.4em;
  width: 2em;
  height: 2em;
}

table.ui-datepicker-calendar a:hover{
  color: #3498db;
}

.ui-state-disabled .ui-state-default{
  text-decoration: line-through;
  color: #C2C2C2;
}

.ui-state-default{
  transition: all 0.5s ease;
}

a.ui-state-default:hover{
  color: #3498db;
}

.ui-state-default.ui-state-active{
  color: #FFF;
  border-radius: 50%;
  background-color: #3498db;
  transition: all 0.5s ease;
  padding: 0.4em;
}

  .bmw .container .header .item.rooms{
	background-image: none;
  }
  


.ui-datepicker-year{
  font-size: 0.7em;
}

@media (max-width: 600px){
  .bmw .container{
    min-width: 200px;
  }
  .bmw .container .header .item{
    width: 50%;
  }
  
  .bmw .container .header .item:last-child{
    width: 100%;
  }
  
  .bmw .container .header .item.rooms{
    min-height: 80px;
    width: 100%;
	background-image: none;
  }
  
  .bmw .container .header .item .control.plus {
    font-size: 2.5em;
  }
  
  .bmw .container .header .item .control.minus {
    font-size: 2.5em;
  }
  
  .bmw .container .header .item .control.minus:hover {
    color: #2980b9;
}
  
  .bmw .container .header .item .room{
    font-size: 2.5em;
  }
  
  .bmw .container .header .item.rooms{
    border-top: 1px solid #dedede;
  }
  
  .bmw .container .header .item .day{
    font-size: 2.5em;
  }
  
  .bmw .container .header .item{
    min-height: 100px;
  }
  
  .bmw .room-row .name{
    font-size: 0.780em;
    padding: 0.4;
  }
  
  .bmw .room-row select, .bmw .childs-spec-row select{
    background: none;
  }

}
</style>

</head>

<body>
<div id="lang-selector">
  <div class="row">
    <h2>Select a language</h2>
    <div class="divider"></div>
  </div>

  <div class="row lang-list">
    <div class="col-md-6 unbordered col-md-offset-3">

      <div class="row">
        <div class="col-md-6 lang"><a href="/it">Italiano</a></div>
          <div class="col-md-6 lang"><a href="/en">English</a></div>
          <div class="col-md-6 lang"><a href="/fr">Français</a></div>
          <div class="col-md-6 lang"><a href="/pt">Português</a></div>
          <div class="col-md-6 lang"><a href="/ja">日本人</a></div>
          <div class="col-md-6 lang"><a href="/ru">Pусский</a></div>
          <div class="col-md-6 lang"><a href="/de">Deutsch</a></div>
          <div class="col-md-6 lang"><a href="/es">Español</a></div>
          <!-- <div class="col-md-6 unbordered lang"><a href="/zh"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/48/China_flat.png"> 中國</a></div> -->
        </div>
      </div>
  </div>

  <div class="backToSite">
    <div class="col-md-12">
      <i class="fa fa-chevron-left"></i> Back to site
    </div>
  </div>
</div>
	<header>

    <div class="mobile-header hidden-md hidden-lg">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/logo-small.png" alt="Hotel Alpi" />
          </div>
          <div class="col-xs-6 text-right menu-btn">
            <i id="mobile-button" class="fa fa-bars"></i>
          </div>
        </div>
      </div>
    </div>

		<div class="top-header hidden-xs">
			<div class="absolute-logo">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-2">
							<?php if(!is_front_page() && !is_single() || is_single()){ ?>
								<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/imgs/logo-small.png" alt="Hotel Alpi Roma" /></a>
							<?php }elseif(is_front_page()){ ?>
								<a href="<?php echo home_url(); ?>">
									<img class="logo hidden-xs" src="<?php bloginfo('template_directory'); ?>/imgs/logo-big.jpg" alt="Hotel Alpi Logo" />
									<img class="hidden-sm hidden-lg hidden-md" src="<?php bloginfo('template_directory'); ?>/imgs/logo-small.png" alt=" Hotel Alpi Roma" />
								</a>
							<?php } ?>
						</div>
						<div class="col-md-2 col-sm-11 hidden-xs social-link">
							<a href="https://www.facebook.com/HotelAlpiRoma" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/46-facebook-24.png" alt="Hotel Alpi Facebook Page" /></a>
<a href="https://twitter.com/alpiroma" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/43-twitter-24.png" alt="Hotel Alpi Twitter" /></a>
<a href="https://plus.google.com/105942300326479704912" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/80-google-plus-24.png" alt="Hotel Alpi Google Plus Page" /></a>
<a href="https://www.pinterest.com/hotelalpiroma/" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/73-pinterest-24.png" alt="Hotel Alpi Pinterest Page" /></a>
						</div>
						<div class="col-md-8 col-sm-9 hidden-xs text-right">
							<?php wp_nav_menu(array('theme_location' => 'upper-social', 'menu_class' => 'sub-menu', 'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="menu-boxed"><a href="#" id="language">Language</a></li><li class="menu-boxed hash"><a href="' . get_bloginfo('url') . '/alpi-stream/">#AlpiRoma</a></li>	<li class="menu-boxed unbordered phone"><a href="tel:0621707433">+39 06 444 1235</a></li>%3$s</ul>')); ?>
							<!-- <ul class="sub-menu">
								<li class="menu-boxed hash"><a href="http://draft.hotelwebj.com/alpi/alpi-stream/">#AlpiRoma</a></li>
								<li class="menu-boxed unbordered phone"><a href="tel:0621707433">+39 06 444 1235</a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-md-offset-2 hidden-xs time">
						Orario
					</div>
					<div class="time-utc" style="display: none;">

					</div>
					<div class="col-md-8 col-xs-12 text-right">
            <nav>
              <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'main-menu nav-collapse', 'container' => false)); ?>
            </nav>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 text-right">
						<ul class="sub-menu">
							<?php wp_nav_menu(array('theme_location' => 'room-menu', 'menu_class' => 'sub-menu')); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php if(!is_front_page()): ?>
		<div class="booking-bar-header">
			<div class="container">
				<?php do_shortcode('[booking]'); ?>
			</div>
		</div>
		<?php endif;?>
	</header>
