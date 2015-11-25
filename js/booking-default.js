//Mobile user agent
/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/
jQuery(document).ready(function(){
  (function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

jQuery(document).on('click', '.mobile-book-button', function(e){
  e.preventDefault();
  console.log('do booking');
  jQuery('#modalbmw').slideDown();
})

jQuery(document).on('click', '#modalbmw .overlay', function(e){
  jQuery('#modalbmw').slideUp();
});


//Get the locale settings from the DIV
var locale = jQuery('.bmw').data('locale');
console.log('locale: ' + locale);
var langcode = 1;
//Set the locale in MomentJS and Datepicker
if(locale == 'it-IT'){
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

console.log(langcode);

//END OF LOCALIZATION

jQuery(document).on('click', '#check-in', function(){
  jQuery('#cin-calendar').datepicker({
    inline: false,
    autoclose: true,
    onSelect: function(selectedDate){
      console.log('this changed');
      checkIn = moment(selectedDate);

      var minDate = new Date(selectedDate);
      console.log(minDate);
      minDate.setDate(minDate.getDate() + 1);
      console.log(minDate);
      //Update the datepicker with new options
      setCalendarMin('#cout-calendar', minDate);
      //Update the checkOut date
      checkOut = moment(minDate);
      console.log(checkOut);

      jQuery(this).blur();
      jQuery('#cin-calendar').hide();
      updateUI();
    },
    minDate: 0
  });
  jQuery('#cin-calendar').datepicker( "option", "dateFormat", 'mm/dd/yy' );
  jQuery('#cin-calendar').show();
});

jQuery(document).on('click', '#check-out', function(){
  jQuery('#cout-calendar').datepicker({
    inline: false,
    autoclose: true,
    onSelect: function(selectedDate){
      checkOut = moment(selectedDate);
      jQuery(this).blur();
      jQuery('#cout-calendar').hide();
      updateUI();
    },
  });
  jQuery('#cout-calendar').datepicker( "option", "dateFormat", 'mm/dd/yy' );
  jQuery('#cout-calendar').show();
});

//Bootstrap functions
var checkIn = moment();
var checkOut = moment().add(1, 'days');
var rooms = 1;
var roomsList = [
  {adults: 1, childs:0, childsAge:[0,0,0,0], active: true},
  {adults: 1, childs:0, childsAge:[0,0,0,0], active: false},
  {adults: 1, childs:0, childsAge:[0,0,0,0], active: false},
  {adults: 1, childs:0, childsAge:[0,0,0,0], active: false}
];

//Bootstrap the object
function bootstrap(){
  //Set the default checkin Date to today
  checkIn = moment();
  //Set the default checkout Date to tomorrow
  checkOut = moment().add(1, 'days');
  //Display the current room number
  jQuery('#rooms .room-number').html(rooms);
  //Update the UI to show the changes
  updateUI();
}

bootstrap();

function updateUI(){
  console.log('updating ui');
  //Update checkIn UI object
  jQuery('#check-in .day .dnumber').text(checkIn.format('D'));
  jQuery('#check-in .month').text(checkIn.format('MMMM').toUpperCase());
  //Update checkout ui object
  jQuery('#check-out .day .dnumber').text(checkOut.format('D'));
  jQuery('#check-out .month').text(checkOut.format('MMMM').toUpperCase());
}

function setPromotionRestriction(){
  var fromRestriction = jQuery('.bmw').data('from');
  var toRestriction = jQuery('.bmw').date('to');
  if(fromRestriction.length > 0){
    //there is a from date restriction
    fromRestriction = moment(fromRestriction, 'MM/DD/YYYY');
    setCalendarMin('#cin-calendar', new Date(from));
    setCalendarMin('#cout-calendar', new Date(from));
  }

  if(toRestriction.length > 0){
    fromRestriction = moment(toRestriction, 'MM/DD/YYYY');
  }
}

var that = this;
//The user clicked on the checkout date box, we show up the checkout calendar
//and set the minimum and default date to check in date + 1 day

  //We store the minimum date = checkin date + 1 day

//Set the current date and the minimum date of the datepicker
function setCalendarMin(calendar, date){
  jQuery(calendar).datepicker("option", "minDate", date);
  jQuery(calendar).datepicker("setDate", date);
}

jQuery('#cout-calendar').on('changeDate', function(ev){
    jQuery(this).datepicker('hide');
});

jQuery('#cin-calendar').on('changeDate', function(ev){
    jQuery(this).datepicker('hide');
});


function addRoom(){
  roomsList[parseInt(rooms) - 1].active = true;
  jQuery('.body').append('<div data-number="' + rooms + '" class="room-row animated fadeIn" id="room' + rooms + '">' +
        '<div class="name bordered"><strong>Room. ' + rooms + '</strong></div>' +
        '<div class="adults bordered">' +
          '<select id="adultsnum" name="options">' +
            '<option value="1">1 Adult</option>' +
            '<option value="2">2 Adults</option>' +
            '<option value="3">3 Adults</option>' +
            '<option value="4">4 Adults</option>' +
          '</select>' +
        '</div>' +
        '<div class="childs">' +
          '<select class="childsnum" name="options">' +
            '<option value="0">0 Childs</option>' +
            '<option value="1">1 Child</option>' +
            '<option value="2">2 Childs</option>' +
            '<option value="3">3 Childs</option>' +
            '<option value="4">4 Childs</option>' +
          '</select>' +
        '</div>' +
        '<div class="remove"><i class="fa fa-times"></i></div>' +
        '<div class="clear"></div></div>' +
        '<div id="childs' + rooms + '" class="childs-spec-row animated fadeIn">' +
        '<div class="item label">' +
          'Age' +
        '</div>' +
      '</div>');
}

function removeRoom(id){
  roomsList[parseInt(id) - 1].active = false;
  jQuery('#room' + id).remove();
  jQuery('#childs' + id).remove();
}

jQuery(document).on('click', '.plus',function(){
  if(rooms == 4){
    return;
  }
  rooms = rooms + 1;
  addRoom();
  jQuery('#rooms .room-number').html(rooms);
});

jQuery(document).on('click', '.minus', function(){
  if(rooms == 1){
    return;
  }
  removeRoom(rooms);
  rooms = rooms - 1;
  jQuery('#rooms .room-number').html(rooms);
});
/*
Fire when the childs num is changed. Search for the correct childs row to display.
*/
jQuery(document).on('change', '#adultsnum', function(){
  var select = jQuery(this);
  var adultsNum = select.val();
  var parentRow = select.closest('.room-row');
  var id = jQuery(parentRow).data('number');
  console.log('adultschanged');
  roomsList[parseInt(id) - 1].adults = parseInt(adultsNum);
});

jQuery(document).on('change', '.childsnum' , function(){
  var select = jQuery(this);
  var childNum = select.val();
  var parentRow = select.closest('.room-row');
  var id = jQuery(parentRow).data('number');

  roomsList[parseInt(id) - 1].childs = parseInt(childNum);


  if(childNum > 0){

    jQuery('#childs' + id).fadeIn('normal');

    jQuery('#childs' + id + ' .item.age').remove();

    for (var i = 0; i < childNum; i++) {
      jQuery('#childs' + id).append('<div id="child' + i + '" class="item age animated fadeIn">' +
          '<select class="childsage" name="options" data-number="' + rooms + '" data-child="' + i + '">' +
            '<option value="0">0 Years</option>' +
            '<option value="1">1 Year</option>' +
            '<option value="2">2 Years</option>' +
            '<option value="3">3 Years</option>' +
            '<option value="4">4 Years</option>' +
            '<option value="5">5 Years</option>' +
            '<option value="6">6 Years</option>' +
            '<option value="7">7 Years</option>' +
            '<option value="8">8 Years</option>' +
            '<option value="9">9 Years</option>' +
            '<option value="10">10 Years</option>' +
            '<option value="11">11 Years</option>' +
            '<option value="12">12 Years</option>' +
            '<option value="13">13 Years</option>' +
            '<option value="14">14 Years</option>' +
            '<option value="15">15 Years</option>' +
            '<option value="16">16 Years</option>' +
            '<option value="17">17 Years</option>' +
          '</select>' +
        '</div>');
    }

  }else{
    rooms[parentRow]['childs'] = 0;
    jQuery('#childs' + rooms).fadeOut('normal');
  }
});

jQuery(document).on("change", '.childsage', function(e) {
  var room = jQuery(this).data('number');
  var child = jQuery(this).data('child');
  roomsList[parseInt(room) - 1].childsAge[child] = parseInt(jQuery(this).val());
});

function checkMobile(){
  if(jQuery.browser.mobile){
    return true;
  }
  return false;
}

function buildUrl(caId, hoId){
  console.log(checkIn);
  console.log('langcode ' + langcode);
  //Mobile CA & Hotel
  //bol_mobile

  if(checkMobile()){
    var baseUrl = 'https://secure.hermeshotels.com/bol_mobile/dispo.do?CA=' + caId + '&hotel=' + hoId;
  }else{
    var baseUrl = 'https://secure.hermeshotels.com/bol/dispo.do?caId=' + caId + '&hoId=' + hoId;
  }

  baseUrl = baseUrl + '&lang=' + langcode;
  baseUrl = baseUrl + '&dataDa=' + checkIn.format('L') + '&dataA=' + checkOut.format('L');
  //Count the number of active rooms
  baseUrl = baseUrl + '&num_cam=' + getActiveRooms();
  //For each room we need to specify the number of adults (num_ad=x)
  //and the number of childs with age (num_chd=4) and (eta_chd1=x&eta_chd2=y)
  var roomsStrings = buildRoomsString();
  roomsStrings.forEach(function(string){
    baseUrl = baseUrl + string;
  });

  var pcode = jQuery('input.pcode').val();	  

  if(pcode){
    baseUrl = baseUrl + '&pCode=' + pcode;
  }

  baseUrl = baseUrl + '&idOfferta=0';

  console.log(baseUrl);
  window.open(baseUrl, '_blank');
}

jQuery(document).on('click', '.search', function(){
   buildUrl('251', '1684');
});

function buildRoomsString(){
  var roomCount = 0;
  var roomsStrings = [];
  roomsList.forEach(function(room){
    if(room.active){
      roomCount = roomCount + 1;
      var string = "&num_ad=" + room.adults + '&num_chd=' + room.childs;
      for(var i = 0; i < parseInt(room.childs); i++){
        string = string + '&eta_chd' + roomCount + '=' + room.childsAge[i];
      }
      roomsStrings.push(string);
    }
  });

  return roomsStrings;
}

function getActiveRooms(){
  var roomCount = 0;
  roomsList.forEach(function(room){
    if(room.active){
      roomCount = roomCount + 1;
    }
  });

  return roomCount;
}

});