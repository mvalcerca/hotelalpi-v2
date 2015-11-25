jQuery(document).ready(function(){
  //INIT WOWJS
new WOW().init();

var checkIn = {};
var checkOut = {};
var langcode = 0;

//Get the locale settings from the DIV
var locale = jQuery('.locale').data('locale');
console.log('locale: ' + locale);
//Set the locale in MomentJS and Datepicker
if(locale == 'it-IT'){
  moment.locale('it', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'dd/mm/yy'},
      jQuery.datepicker.regional['it-IT']
    )
  );
  
  console.log('set regional it');

  langcode = 2;
}else if(locale == 'en-US'){
  console.log('enus');
  moment.locale('en', {
    longDateFormat : {
      L: "MM/DD/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['en-GB']
    )
  );
  console.log('setted enbg');

  langcode = 1;
}else if(locale == 'de-DE'){
  moment.locale('de', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['de-DE']
    )
  );

  langcode = 3;
}else if(locale == 'fr-FR'){
  moment.locale('fr', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['fr-FR']
    )
  );

  langcode = 4;
}else if(locale == 'es-ES'){
  moment.locale('es', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['es-ES']
    )
  );

  langcode = 5;
}else if(locale == 'pt-PT'){
  moment.locale('pt', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['pt-PT']
    )
  );

  langcode = 8;
}else if(locale == 'ru-RU'){
  moment.locale('ru', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['ru-RU']
    )
  );

  langcode = 7;
}else if(locale == 'ja'){
  moment.locale('en', {
    longDateFormat : {
      L: "MM/DD/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['ja']
    )
  );

  langcode = 1;
}else if(locale == null || locale == "" || locale == undefined){
  moment.locale('it', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['it']
    )
  );
}

jQuery('.lang-menu .close').on('click', function(e){
  jQuery('.lang-menu').fadeOut();
});

jQuery('.room-prev-trigger a').on('mouseover', function(){
	jQuery('.rooms-preview').fadeIn();
});

jQuery('body').on('mousemove', function(e){
	var targetClass = e.target.className;
	if(typeof e.target.id != 'undefined'){
		var targetId = e.target.id;
	}else{
		var targetId = '';
	}
	
	if(e.target.localName == 'a'){
		return;
	}
	
	if(targetClass == 'room-prev' || targetClass == 'rooms-preview text-right' 
	|| targetClass == 'rooms-link' || targetClass == 'room-image img-responsive wp-post-image'
	|| targetClass == 'room-title' || targetClass.indexOf('room-prev-trigger') >= 0){
		//we dont want to hide the element
		return;
	}else{
		jQuery('.rooms-preview').fadeOut();	
	}
});


jQuery('.featured-post').on('mouseover', function(e){
	jQuery(this).css('background-size', '120%');
});

jQuery('.featured-post').on('mouseleave', function(e){
	jQuery(this).css('background-size', '110%');
});

jQuery('.post').on('mouseover', function(e){
	jQuery(this).css('background-size', '150%');
});

jQuery('.post').on('mouseleave', function(e){
	jQuery(this).css('background-size', 'cover');
});



jQuery(window).on('resize', function(e){
	e.preventDefault();
})



jQuery(document).ready(function(){
	
	var locale = jQuery('.booking-bar').data('lang');
	
	if(locale == 'it_IT'){
  moment.locale('it', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['it']
    )
  );

  langcode = 2;
}else if(locale == 'en_GB'){
  moment.locale('en', {
    longDateFormat : {
      L: "MM/DD/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['en-GB']
    )
  );
  console.log('setted enbg');

  langcode = 1;
}else if(locale == 'de_DE'){
  moment.locale('de', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['de-DE']
    )
  );

  langcode = 3;
}else if(locale == 'fr_FR'){
  moment.locale('fr', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['fr-FR']
    )
  );

  langcode = 4;
}else if(locale == 'es_ES'){
  moment.locale('es', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['es-ES']
    )
  );

  langcode = 5;
}else if(locale == 'pt_PT'){
  moment.locale('pt', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['pt-PT']
    )
  );

  langcode = 8;
}else if(locale == 'ru_RU'){
  moment.locale('ru', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['ru-RU']
    )
  );

  langcode = 7;
}else if(locale == 'ja'){
  moment.locale('en', {
    longDateFormat : {
      L: "MM/DD/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['ja']
    )
  );

  langcode = 1;
}else if(locale == null || locale == "" || locare == undefined){
  moment.locale('it', {
    longDateFormat : {
      L: "DD/MM/YYYY",
    }
  });

  jQuery.datepicker.setDefaults(
    jQuery.extend(
      {'dateFormat':'mm/dd/yy'},
      jQuery.datepicker.regional['it']
    )
  );
}
	
  
	jQuery( "#checkIn" ).datepicker({
		onSelect: function(selectedDate){
			jQuery('#checkOut').datepicker('option', 'minDate', selectedDate);
			jQuery('#checkOut').datepicker('setDate', null);
			checkIn = moment(selectedDate);	 
			console.log(checkIn);
		}
	});
	jQuery( "#checkOut" ).datepicker({
		onSelect: function(selectedDate){
			checkOut = moment(selectedDate);
			console.log(checkOut);	 
		}
	});
	
	
	
	jQuery('#checkIn').datepicker( "option", "beforeShow", function(input, inst){
		console.log('Custom datepicker style loading');
		jQuery('#ui-datepicker-div').addClass('ll-skin-melon');
	});
	
});

jQuery(document).on('click', '#guests', function(event){
	if(jQuery('.guests').is(":visible")){
		jQuery('.guests').slideUp();
	}else{
		jQuery('.guests').slideDown();
	}
	
});

var roomNumber = 1;

jQuery(document).on('change', '#rooms', function(event){
	//Numero di camere selezionate
	var selectedRooms = jQuery(this).val();
  roomNumber = selectedRooms;
	jQuery('.book-rooms').empty();
	//per ogni camera generiamo una riga
	for(var i = 0; i < selectedRooms; i++){
		
		jQuery('.book-rooms').append('<div class="row guests" id="book-room-row-' + (i+1) + '" data-roomn="' + (i+1) + '">' +
                  '<div class="col-md-2 room-number">Camera ' + (i+1) + '</div>' +
				  '<div class="form-group col-md-2">' +
                    '<select name="adults" class="form-control" data-roomn="' + (i+1) + '" id="adults' + (i+1) + '">' +
                      '<option value="1">1 Adulto</option>' +
                      '<option value="2">2 Adulti</option>' +
                      '<option value="3">3 Adulti</option>' +
                      '<option value="4">4 Adulti</option>' +
                      '<option value="5">5 Adulti</option>' +
                      '<option value="6">6 Adulti</option>' +
                      '<option value="7">7 Adulti</option>' +
                    '</select>' +
                  '</div>' +
                  '<div class="form-group col-md-2">' +
                    '<select name="childs" class="childs form-control" data-roomn="' + (i+1) + '" id="childsn' + (i+1) + '">' +
                      '<option value="0">0 Bambini</option>' +
                      '<option value="1">1 Bambino</option>' +
                      '<option value="2">2 Bambini</option>' +
                      '<option value="3">3 Bambini</option>' +
                      '<option value="4">4 Bambini</option>' +
                    '</select>' +
                  '</div>' +
                  '<div class="childsc" id="childc' + (i+1) + '">'+
                  '</div>' +
              '</div>');
	}

});

jQuery(document).on('change', '.childs', function(event){
	var selectedChilds = jQuery(this).val();
	var roomNumber = jQuery(this).data('roomn');
	var childsRow = jQuery('#childc' + roomNumber);
	
	console.log('going to append childs in #childs' + (roomNumber));
	
	childsRow.empty();
	if(selectedChilds > 0){
		for(var i = 0; i < selectedChilds; i++){
			childsRow.append( '<div class="col-md-2 form-group"><select id="room' + roomNumber + '-child' + (i+1) + '" class="form-control"><option value="0">0 Anni</option><option value="1">1 Anni</option><option value="2">2 Anni</option><option value="3">3 Anni</option><option value="4">4 Anni</option></select></div>' ).hide().fadeIn('normal');
		}
	}
});

jQuery(document).ready(function() {
	jQuery('.tooltips').tooltipster({
		theme: 'tooltipster-punk'
	});
});

jQuery('.service').on('mouseover', function(event){
	jQuery(this).addClass('flipped');
});

jQuery('.service').on('mouseleave', function(event){
	jQuery(this).removeClass('flipped');
});

jQuery('#book-form-desktop').on('submit', function(e){
	e.preventDefault();
	var baseUrl = 'https://secure.hermeshotels.com/bol/dispo.do?caId=251&hoId=1684&lang=' + langcode;
  var destination = baseUrl;
	//get checkIn date
	destination += '&dataDa=' + checkIn.format('L') + '&dataA=' + checkOut.format('L') + '&num_cam=' + roomNumber;
  
  for(var i = 0; i < roomNumber; i++){
    console.log('setting room');
    var numAdults = jQuery('#adults' + (i+1)).val();
    var numChilds = jQuery('#childsn' + (i+1)).val();
    destination += '&num_ad=' + numAdults;
    console.log('num childs:' + numChilds + 'for childs' + (i+1));
    if(parseInt(numChilds) > 0){
      destination += '&num_chd=' + numChilds;
      for(var j = 0; j < numChilds; j++){
        var childAge = jQuery('#room' + (i+1) + '-child' + (j+1)).val();
        destination += '&eta_chd' + (i+1) + '=' + childAge;
      }
    }else{
      destination += '&num_chd=0';
    }
  }
  
    var pCode = jQuery('#pcode').val();
    if(pCode.length > 0){
      destination += '&pCode=' + pCode;
    }
    
    destination += '&idOfferta=0';
    
    window.open(destination, '_blank');
  
});

jQuery('.mob-trigger').on('click', function(e){
  
  jQuery('.mob-menu').fadeIn();
  
});

jQuery('.mob-menu .close').on('click', function(e){
  jQuery('.mob-menu').fadeOut();
});

jQuery('#lang-select').on('click', function(e){
  e.preventDefault();
  jQuery('.lang-menu').fadeIn();
});
});