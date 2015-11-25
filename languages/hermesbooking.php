<?php
/**
* Plugin Name: Hermes Booking Plugin 1.0.
* Plugin URI: http://hermeshotels.it
* Description: Implementazione del sistema booking HermesHotels per Wordpress
* Version: 1.0
* Author: HermesHotels
* Author URI: http://www.hermeshotels.it
* License: A short license name. Example: GPL2
* Text Domain: hermesbooking
* Domain Path: /lang
*/

/**
 * Set up the plugin localization
 */
function my_plugin_load_plugin_textdomain() {
    load_plugin_textdomain( 'hermesbooking', FALSE, basename( dirname( __FILE__ ) ) . '/lang/' );
}
add_action( 'plugins_loaded', 'my_plugin_load_plugin_textdomain' );

/**
 * Set up the custom style section
 */
add_action('wp_head','custom_plugin_style');
function custom_plugin_style(){
  echo '<style>' . esc_attr( get_option('customCSS') ) . '</style>';
}

/**
 * Enqueue the script & styles
 */
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_styles', 999 );
/**
 * Load Plugin Styles
 */
function enqueue_scripts(){
  wp_enqueue_script( 'jquery', plugin_dir_url( __FILE__ ) . 'js/jquery.min.js', array( 'jquery' ), '0.0.9', false );
  wp_enqueue_script( 'jquery-min', plugin_dir_url( __FILE__ ) . 'js/jquery-ui.min.js', array( 'jquery' ), '0.0.9', false );
  wp_enqueue_script( 'moment', plugin_dir_url( __FILE__ ) . 'js/moment.min.js', array( 'jquery' ), '0.0.9', false );
  wp_enqueue_script( 'angular', plugin_dir_url( __FILE__ ) . 'js/angular.min.js', array( 'jquery' ), '0.0.9', false );
  wp_enqueue_script( 'hermesapp', plugin_dir_url( __FILE__ ) . 'js/main.js', array( 'jquery' ), '0.0.9', false );
  wp_enqueue_script( 'datepicker-locale', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js', array( 'jquery' ), '0.0.9', false );

 }

function enqueue_styles(){
  wp_enqueue_style( 'hermes-booking-ui-theme', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.css', array(), '0.0.9', 'all' );
  wp_enqueue_style( 'awesome-css', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '0.0.9', 'all' );
  wp_enqueue_style( 'main-css', plugin_dir_url( __FILE__ ) . 'css/main.min.css', array(), '0.0.9', 'all' );
}

add_shortcode('booking', 'theShortCode');

function theShortCode(){
?>
<div class="hermes-styles hermes-plugin-wrapper hidden-xs hidden-sm" ng-app="booking" ng-controller="bookingController" ng-init="parser.setLocale('<?php echo get_bloginfo("language"); ?>')">


    <div class="hermes-booking-bar">
        <div class="form-grp">
            <input type="text" readonly="readonly" class="hermes-control toggleAdv" value="{{parser.from.format('L')}}" placeholder="<?php _e('Check In', 'hermesbooking'); ?>">
        </div>

        <div class="form-grp">
            <input type="text" readonly="readonly" class="hermes-control toggleAdv" value="{{parser.to.format('L')}}" placeholder="<?php _e('Check Out', 'hermesbooking'); ?>">
        </div>

        <div class="form-grp">
            <input type="text" readonly="readonly" class="hermes-control toggleAdv" value="{{parser.rooms.length}} <?php _e('Camere', 'hermesbooking'); ?>" placeholder="<?php _e('Camere', 'hermesbooking'); ?>">
        </div>

        <div class="form-grp">
            <input type="text" readonly="readonly" class="hermes-control toggleAdv" value="{{parser.pCode}}" placeholder="<?php _e('Promo code', 'hermesbooking'); ?>">
        </div>

        <div class="form-grp">
            <button type="button" class="hermes-button" name="button" ng-click="parser.verify(<?php echo esc_attr( get_option('caId') ); ?>, <?php echo esc_attr( get_option('hoId') ); ?>)"><?php _e('Ricerca', 'hermesbooking'); ?></button>
        </div>

        <div class="form-grp text-center">
            <a class="btn find-track btn-block" href="https://secure.hermeshotels.com/bol/retrieve.do?caId=<?php echo esc_attr( get_option('caId') ); ?>&hoId=<?php echo esc_attr( get_option('hoId') ); ?>&lang=1"><?php _e('Recupera', 'hermesbooking'); ?></a>
        </div>
    </div>

    <div class="hermes-styles">
        <div class="hermes-modal-container">
            <div class="hermes-booking-overlay">
            </div>

            <div class="hermes-modal-wrapper">

                <div class="loading">
                    <div class="spinner"></div>
                    <h3><?php _e('Stiamo cercando la disponibilità...', 'hermesbooking'); ?> <br><small>  <?php _e('attendi qualche secondo e non ti deluderemo.', 'hermesbooking'); ?></small></h3>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 content">

                            <div class="row" ng-show="rooms == false && help == false">
                                <div class="col-md-12">
                                    <h3><?php _e('Scegli le date', 'hermesbooking'); ?> <small><?php _e('Scegli la data di', 'hermesbooking'); ?><strong> <?php _e('arrivo', 'hermesbooking'); ?></strong> <?php _e('e quella di', 'hermesbooking'); ?> <strong><?php _e('partenza', 'hermesbooking'); ?></strong>.</small></h3>
                                    <hr />
                                </div>
                                <div class="col-md-12">
                                    <div booking-calendar-directive lang="parser.lang" check-in="parser.from" check-out="parser.to" difference="parser.difference"></div>
                                </div><!-- end of col-12 -->
                            </div>

                            <div class="row" ng-show="help == true ">
                                <div class="col-md-12">
                                    <h3><?php _e('Centro di supporto', 'hermesbooking'); ?> <small><?php _e('per qualsiasi necessità non esitare a contattarci', 'hermesbooking'); ?></small></h3>
                                    <hr />
                                </div>

                                <div class="col-md-12">
                                    <p>
                                        <?php _e('Se hai dubbi sulla prenotazione o hai bisogno di semplici informazioni', 'hermesbooking'); ?> <a href="#"><?php _e('contattaci', 'hermesbooking'); ?></a>.
                                    </p>
                                    <hr />
                                    <p><?php _e('Se hai problemi di natura', 'hermesbooking'); ?> <strong><?php _e('tecnica', 'hermesbooking'); ?></strong> <?php _e('puoi rivolgerti al nostro', 'hermesbooking'); ?> <a href="#">Help Desk</a>.</p>
                                </div>
                            </div>

                            <div class="row" ng-show="rooms == true && help == false">
                                <div class="col-md-12">
                                    <h3><?php _e('Scegli le Camere', 'hermesbooking'); ?> <small><?php _e('gestisci la composizione delle camere', 'hermesbooking'); ?>.</small></h3>
                                    <hr />
                                </div>

                                <div class="col-md-12" ng-repeat="room in parser.rooms">

                                    <div class="row">
                                        <div class="col-md-4 room-title">
                                            <strong><?php _e('Camera', 'hermesbooking'); ?> {{$index + 1}}</strong>
                                        </div>
                                        <div class="col-md-4 col-md-offset-4 text-right">
                                            <a href="#" ng-click="parser.removeRoom($index)" class="btn btn-danger btn-xs"><?php _e('Rimuovi', 'hermesbooking'); ?></a>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label><?php _e('Adulti', 'hermesbooking'); ?></label>
                                            <input type="number"  ng-model="room.adults" class="form-control input-sm" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label><?php _e('Bambini', 'hermesbooking'); ?></label>
                                            <input type="number" ng-model="room.childsNum" class="form-control input-sm" ng-change="parser.generateChilds(room)" max="4" min="0" />
                                        </div>

                                        <div class="form-group col-md-2" ng-repeat="child in room.childs">
                                            <label class="child-title"><?php _e('Età', 'hermesbooking'); ?> {{$index + 1}}</label>
                                            <input type="number" ng-model="child.age" class="form-control input-sm" />
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <hr />
                                    <button class="btn btn-primary" ng-click="parser.addRoom()" ng-disabled="parser.rooms.length >= 4">
                                        <span ng-show="parser.rooms.length >= 4"><?php _e('Limite raggiunto', 'hermesbooking'); ?></span>
                                        <span ng-show="parser.rooms.length < 4"><?php _e('Aggiungi camera', 'hermesbooking'); ?></span>
                                    </button>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4 sidebar">

                            <div class="row">
                                <div class="col-md-12">
                                    <h3><?php _e('Dettagli prenotazione', 'hermesbooking'); ?></h3>
                                    <hr />
                                </div>
                            </div>

                            <div class="row details">
                                <div class="col-md-6">
                                    <strong><i class="fa fa-sign-in"></i> <?php _e('Arrivo', 'hermesbooking'); ?>:</strong>
                                </div>
                                <div class="col-md-6 text-right">
                                    {{parser.from.format('l')}}
                                </div>

                                <div class="col-md-6">
                                    <strong><i class="fa fa-sign-out"></i> <?php _e('Partenza', 'hermesbooking'); ?>:</strong>
                                </div>
                                <div class="col-md-6 text-right">
                                    {{parser.to.format('l')}}
                                </div>

                            </div>

                            <hr />

                            <div class="row nights">
                                <div class="col-md-5">
                                    <strong><?php _e('Notti', 'hermesbooking'); ?>:</strong>
                                </div>
                                <div class="col-md-7 text-right">
                                    {{parser.difference}}
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label><?php _e('Adulti', 'hermesbooking'); ?></label>
                                    <input type="number" class="form-control input-sm" ng-model="parser.rooms[0].adults" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label><?php _e('Bambini', 'hermesbooking'); ?></label>
                                    <input type="number" class="form-control input-sm" ng-model="parser.rooms[0].childsNum" ng-click="rooms = true" ng-change="parser.generateChilds(parser.rooms[0])"  max="4" min="0" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="promo"><i class="fa fa-barcode"></i> Promo code</label>
                                    <input type="text" class="form-control" ng-model="parser.pCode" placeholder="Promo code..."/>
                                </div>
                            </div>

                            <hr />

                            <div class="row">

                                <div class="col-md-12" ng-show="parser.difference < 1 || !parser.from || !parser.to">

                                    <strong><i class="fa fa-info"></i> <?php _e('Informazioni mancanti:', 'hermesbooking'); ?>:</strong>
                                    <p><?php _e('Scegli un intervallo di date per continuare.', 'hermesbooking'); ?></p>
                                    <hr />
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <a href="#" class="btn btn-hermes btn-block" ng-click="toggleRooms()">
                                        <span ng-show="rooms == false"><?php _e('Gestisci camere', 'hermesbooking'); ?></span>
                                        <span ng-show="rooms == true"><?php _e('Gestisci date', 'hermesbooking'); ?></span>
                                    </a>

                                    <a href="#" class="btn btn-hermes cta btn-block" ng-click="parser.verify(<?php echo esc_attr( get_option('caId') ); ?>, <?php echo esc_attr( get_option('hoId') ); ?>)" ng-disabled="!parser.difference || !parser.from || !parser.to"><?php _e('Verifica disponibilità', 'hermesbooking'); ?></a>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="row footer">
                        <div class="col-md-4">
                            Powered by <a href="http://www.hermeshotels.com">HermesHotels</a>
                        </div>
                        <div class="col-md-6 col-md-offset-2 text-right">
                            <a href="#" ng-click="toggleHelp()"><i class="fa fa-life-ring"></i> <?php _e('Bisogno di aiuto?', 'hermesbooking'); ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
}


 add_action('admin_head', 'admin_custom_css');
 function admin_custom_css() {
   echo '<link rel="stylesheet" href="' . plugins_url('admin/main.css', __FILE__ ) . '" type="text/css" media="all" />';
 }
 //Include l'admin page
 require_once plugin_dir_path( dirname( __FILE__ ) ) . 'hermesbooking/admin/admin-option-page.php';
