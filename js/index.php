<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bubble Loft - Il tuo loft per eventi</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/colorbox.css" />
</head>

<body>


<!-- <div class="metri20"></div> -->

<!-- MODALE -->
    <div id="MDLContatti" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Contattaci Ora</h3>
  </div>
  <div class="modal-body">
        <p>Compila il modulo per contattarci</p>

        <form name="contattaci" action="mail/mail.php" method="post">
          <fieldset>
            <label>(*)Nome</label>
            <input name="nome" id="nome" type="text" placeholder="Nome…">
            
            <label>(*)Telefono</label>
            <input name="telefono" id="telefono" type="text" placeholder="Telefono…">
            
            <label>(*)Mail</label>
            <input id="mail" name="mail" type="text" placeholder="Mail…">

            <label>(*)Oggetto</label>
            <input id="oggetto" name="oggetto" type="text" placeholder="Oggetto…">

            <label>(*)Messaggio</label>
            <textarea id="messaggio" name="messaggio" rows="3" placeholder="Messaggio..."></textarea><br>
              <?php
                   require_once('captcha/recaptchalib.php');
                   $publickey = "6Lczsd0SAAAAAJexa02kXRUy3HOHDTg3noeU-tjc"; // you got this from the signup page
                   echo recaptcha_get_html($publickey);
              ?>
            <button type="submit" class="btn">Invia</button>
          </fieldset>
        </form>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Chiudi</button>
          </div>
        </div><!-- end of modale-->




    			
<div class="container">
    <div id="loading">
       <div id="inner-loading">
           <h2>Caricamento in corso...</h2>
            <div class="progress progress-striped active">
            <div class="bar" style="width: 100%;"></div>
        </div>
       </div>
    </div>
<div id="toTop">^ Torna su</div>
	<div class="row">
			<div class="row">
				<div class="logo"><img src="img/logo.png" alt="logo" /></div>
			</div>

			<div id="menu" class="row">
				<div class="header">
					<div class="menu-item"><a href="#location">Location</a></div>
					<div class="menu-item"><a href="#contatti">Contact</a></div>
					<div class="menu-item"><a href="#about">About</a></div>
					<div class="menu-item right">(+39) 328 2652512</div>
				</div>
			</div>

		<div class="tower1">
            <div class="slider-wrapper theme-default">
			    <div id="slider" class="oblo-1" class="nivoSlider">
                    <a class="group1" href="tobig/1.JPG"><img src="img/1.png" alt="single_image"></a>
                    <a class="group1" href="tobig/2.JPG"><img src="img/2.png" alt="provvisorio"></a>
                    <a class="group1" href="tobig/3.JPG"><img src="img/3.png" alt="provvisorio"></a>
                </div>
            </div>
		</div>
	</div>
	<div id="location" class="row">
		<div class="bg1">
			<div class="padded">
				<span class="centrato"><h1>Location</h1></span><br/>
				<p>Bolle di sapone che galleggiano in uno spazio ampio e luminoso.<br><br>
Riesci ad pensare a qualcosa di più efficace per esprimere meglio il piacere di realizzare qualunque tuo sogno?<br>
Bubbleloft è un openspace che si adatta a te: per accogliere i tuoi amici nei momenti di festa, per ospitare le tue riunioni di lavoro, siano esse occasionali o periodiche, per promuovere la tua creatività come set foto-cinematografico, come spazio espositivo o pubblicitario, ideale per tornei di bridge o burraco!
Hai a disposizione un ambiente di 150 mq in una struttura architettonica unica, frutto di una riuscita riconversione di un complesso industriale attivo fino agli anni ’30, di cui restano preziose tracce, veri reperti di archeologia industriale, sia nell’ampio sotterraneo di 100 mq. perfettamente agibile, sia nell’imponente ciminiera che domina il quartiere Ostiense di Roma, ideale per installazioni pubblicitarie ad ampio raggio di visibilità.
</p>
				<span class="centrato"><h2>Bubbleloft è il tuo spazio di libertà: Cerca la Ciminiera</h2></span><br/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="tower2">
			  <div class="slider-wrapper theme-default">
			    <div id="slider1" class="oblo-1" class="nivoSlider">
                    <a class="group1" href="tobig/4.JPG"><img src="img/4.png" alt="single_image"></a>
                    <a class="group1" href="tobig/5.jpg"><img src="img/5.png" alt="provvisorio"></a>
                    <a class="group1" href="tobig/6.jpg"><img src="img/6.png" alt="provvisorio"></a>
                </div>
            </div>
		</div>
	</div>
	<div id="contatti" class="row">
		<div class="bg2">
			<div class="span5">
				<h1>Contattaci</h1>
                <p><small>Facilmente raggiungibile con mezzi pubblici (la fermata della metro B Garbatella è a poche centinaia di metri), questo spazio si trova dietro l’università RomaTre e dispone di ampio parcheggio, sia pubblico che custodito, comodamente accessibile da via Ostiense in entrambi i sensi di marcia. </small></p>
				<address>
 				 <strong>BubbleLoft</strong><br>
  				Via degli Argonauti 16 RM - 00154<br>
                 <abbr title="Telefono">T:</abbr> (+39) 328 2652512
			</address>
			<a href="https://www.facebook.com/bubbleloft?fref=ts" target="_blank"><img src="img/facebook.png" alt="Facebok" /></a>
			<a href="https://twitter.com/bubbleloft" target="_blank"><img src="img/twitter.png" alt="Twitter" /></a>
			<a href="http://www.flickr.com/search/?q=bubbleloft" target="_blank"><img src="img/flickr.png" alt="Flickr"/></a>
            <a href="#MDLContatti" data-toggle="modal"><img src="img/gmail.png" /></a>
</div>
			<div class="span5 offset1">
				<h1>Siamo anche su</h1>
				<a href="http://www.kijiji.it/bubbleloft/?hp_entry=sb" target="_blank"><img src="img/kijiji.png" alt="Kijiji BubbleLoft" /></a><br/>
                <a href="http://search.vivastreet.it/lazio?lb=new&search=1&start_field=1&keywords=bubbleloft&cat_1=&searchGeoId=5240&end_field=" target="_blank"><img src="img/vivastreet.png" alt="Kijiji BubbleLoft" /></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="tower3"></div>
	</div>
	<div class="row">
		<div class="bg3">
			<div class="mappa">
				<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Via+degli+Argonauti+16,+Roma,+RM&amp;aq=t&amp;sll=41.811729,12.738513&amp;sspn=3.598602,8.453979&amp;ie=UTF8&amp;hq=&amp;hnear=Via+degli+Argonauti,+16,+Roma,+Lazio&amp;t=m&amp;z=14&amp;ll=41.865129,12.479538&amp;output=embed"></iframe>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="tower4"></div>
	</div>
	<div id="about" class="row">
		<div class="bg4">
			<div class="padded">
							<span class="centrato"><h1>About</h1></span><br/>
				<p>Questa location nasce da un'area industriale attiva sino alla fine degli anni 30, in cui veniva prodotto sapone di origine animale dalla ditta Mannocci che registrò il suo marchio nel 1934 .  Affascinanti reperti di questa attività sono rappresentati dall'antica mola, tuttora presente nell'ampio sotterraneo, e dalla ciminiera, ora perfettamente restaurata, eretta nel 1932.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="tower-5-sinistra">
			<div class="D1934">
				 <a class="group1" href="img/gazzetta.png"><img src="img/1934.png" alt="n"/></a>
			</div>
			<div class="D1931">
				<a class="group1" href="img/mola.JPG"><img src="img/1931.png"/></a>
			</div>
		</div>
		<div class="tower5"></div>
		<div class="tower-5-destra">
			<div class="D1932">
				<a class="group1" href="img/bigtower.JPG"><img src="img/1932.png"/></a>
			</div>
		</div>
	</div>


</div><!-- end of container -->
		<div class="row-fluid footerp">
			
			<div class="container">
                <div class="footer">
                    <a class="group1" href="img/esterno.JPG"><div class="footerL"></div></a>
                    <a class="group1" href="img/catasto.png"><div class="footerC"></div></a>
                    <a class="youtube" href="http://www.youtube.com/embed/QnwFI6zgz5g" title="Un giorno in pretura"><div class="footerR"></div></a>
                    <div class="span12 footerCopy"><small><strong>BubbleLoft 2013</strong> © Tutti i diritti riservati - <span class="color-grey">Developed with love by Wanny Miarelli</span></small></div>
                </div>
            </div>
		</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script src="js/easing.js"></script>
<script type="text/javascript" src="js/bubblengine.js"></script>
<script src="js/lightbox.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

     <script type="text/javascript">
    $(window).load(function() {
        $('#slider1').nivoSlider();
    });
    </script>
      <script type="text/javascript">
      $(document).ready(function() {
        //Build Bubble Machines with the Bubble Engine ------------------------
        var SoapBubbleMachineNumber1 = $('fn').BubbleEngine({
          particleSizeMin:            0,
          particleSizeMax:            60,
          particleSourceX:            $(window).width()/2,
          particleSourceY:            250,
          particleAnimationDuration:  5000,
          particleDirection:          'center',
          particleAnimationDuration:  9999,
          particleAnimationVariance:  3000,
          particleScatteringX:        400,
          particleScatteringY:        700,
          gravity:                    -100
        });
        //Start Bubble Machines -----------------------------------------------
        SoapBubbleMachineNumber1.addBubbles(35);
      });
    </script>

<script type="text/javascript">
    $(window).load(function(){
        $('#loading').hide();
    });
</script>


<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});

</script>
    <script>
	$(function() {
	
		function filterPath(string) {
			return string
			.replace(/^\//,'')
			.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
			.replace(/\/$/,'');
		}
	
		var locationPath = filterPath(location.pathname);
		var scrollElem = scrollableElement('html', 'body');
	
		// Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
		$('a[href*=#]').each(function() {
	
			// Ensure it's a same-page link
			var thisPath = filterPath(this.pathname) || locationPath;
			if (  locationPath == thisPath
				&& (location.hostname == this.hostname || !this.hostname)
				&& this.hash.replace(/#/,'') ) {
	
					// Ensure target exists
					var $target = $(this.hash), target = this.hash;
					if (target) {
	
						// Find location of target
						var targetOffset = $target.offset().top;
						$(this).click(function(event) {
	
							// Prevent jump-down
							event.preventDefault();
	
							// Animate to target
							$(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
	
								// Set hash in URL after animation successful
								location.hash = target;
	
							});
						});
					}
			}
	
		});
	
		// Use the first element that is "scrollable"  (cross-browser fix?)
		function scrollableElement(els) {
			for (var i = 0, argLength = arguments.length; i <argLength; i++) {
				var el = arguments[i],
				$scrollElement = $(el);
				if ($scrollElement.scrollTop()> 0) {
					return el;
				} else {
					$scrollElement.scrollTop(1);
					var isScrollable = $scrollElement.scrollTop()> 0;
					$scrollElement.scrollTop(0);
					if (isScrollable) {
						return el;
					}
				}
			}
			return [];
		}
	
	});
	</script>
	<script src="js/jquery.colorbox-min.js"></script>
    <script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"60%", height:"60%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

        <script type="text/javascript">
                $("div.footerL").mouseover(function(){
    	            $(this).removeClass().addClass("footerZoom");
                }).mouseout(function(){
    	            $(this).removeClass().addClass("footerL");		
                });



                $("div.footerR").mouseover(function(){
    	            $(this).removeClass().addClass("footerRZoom");
                }).mouseout(function(){
    	            $(this).removeClass().addClass("footerR");		
                });


        </script>
</body>
</html>