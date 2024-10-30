<?php  
/* 
Plugin Name: IDX Northwest Real Estate Search Platform
Plugin URI: http://www.idxnw.com 
Description: Enables the Wordpress-specific IDX Northwest real estate search platform features.  You must be an active client of IDX Northwest for these features to function.
Author: IDX Northwest, LLC
Version: 0.46
Author URI: http://www.idxnw.com 

This software is copyright (c) 2007-2013 - IDX Northwest, LLC.  All Rights Reserved.  (http://www.idxnw.com)

This program is free software; you can redistribute it and/or modify it under the terms of the
GNU General Public License version 2, as published by the Free Software Foundation, provided
that this entire and unedited copyright notice is included in your distribution.

You may NOT assume that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

The license for this software can be found here: http://www.gnu.org/licenses/gpl-2.0.html
*/

error_reporting(0);

wp_enqueue_style( 'idxnw', plugins_url( '/css/main.css', __FILE__ ), false, '1.0', 'all' );

register_activation_hook( __FILE__, 'idxnw_set_default_options' );
function idxnw_set_default_options() {
	if ( get_option( 'idxnw_clientid' ) === false ) { add_option( 'idxnw_clientid', '' ); }
	if ( get_option( 'idxnw_lag' ) === false ) { add_option( 'idxnw_lag', '' ); }
	if ( get_option( 'idxnw_officeid' ) === false ) { add_option( 'idxnw_officeid', '' ); }
	if ( get_option( 'idxnw_defaultcity' ) === false ) { add_option( 'idxnw_defaultcity', '' ); }
	if ( get_option( 'idxnw_sitecanonical' ) === false ) { add_option( 'idxnw_sitecanonical', '' ); }
	if ( get_option( 'idxnw_searchcanonical' ) === false ) { add_option( 'idxnw_searchcanonical', '' ); }
	if ( get_option( 'idxnw_mapsearchuri' ) === false ) { add_option( 'idxnw_mapsearchuri', '' ); }
	if ( get_option( 'idxnw_textsearchuri' ) === false ) { add_option( 'idxnw_textsearchuri', '' ); }
	if ( get_option( 'idxnw_flyeruri' ) === false ) { add_option( 'idxnw_flyeruri', '' ); }
	if ( get_option( 'idxnw_flyername' ) === false ) { add_option( 'idxnw_flyername', '' ); }
	if ( get_option( 'idxnw_multisearchmessageuri' ) === false ) { add_option( 'idxnw_multisearchmessageuri', '' ); }
	if ( get_option( 'idxnw_mobileredirect' ) === false ) { add_option( 'idxnw_mobileredirect', '0' ); }
	if ( get_option( 'idxnw_flyertitle' ) === false ) { add_option( 'idxnw_flyertitle', '1' ); }
	if ( get_option( 'idxnw_qsb_widget_options' ) === false ) { add_option( 'idxnw_qsb_widget_options', '' ); }
	if ( get_option( 'idxnw_qsu_widget_options' ) === false ) { add_option( 'idxnw_qsu_widget_options', '' ); }
	if ( get_option( 'idxnw_qli_widget_options' ) === false ) { add_option( 'idxnw_qli_widget_options', '' ); }
}
$GLOBALS['IDXNW_CLIENTID'] = get_option( 'idxnw_clientid' );
$GLOBALS['IDXNW_LAG'] = get_option( 'idxnw_lag' );
$GLOBALS['IDXNW_OFFICEID'] = get_option( 'idxnw_officeid' );
$GLOBALS['IDXNW_DEFAULTCITY'] = get_option( 'idxnw_defaultcity' );
$GLOBALS['IDXNW_SITECANONICAL'] = get_option( 'idxnw_sitecanonical' );
$GLOBALS['IDXNW_SEARCHCANONICAL'] = get_option( 'idxnw_searchcanonical' );
$GLOBALS['IDXNW_MAPSEARCHURI'] = get_option( 'idxnw_mapsearchuri' );
$GLOBALS['IDXNW_TEXTSEARCHURI'] = get_option( 'idxnw_textsearchuri' );
$GLOBALS['IDXNW_FLYERURI'] = get_option( 'idxnw_flyeruri' );
$GLOBALS['IDXNW_FLYERNAME'] = get_option( 'idxnw_flyername' );
$GLOBALS['IDXNW_MULTISEARCHMESSAGEURI'] = get_option( 'idxnw_multisearchmessageuri' );
$GLOBALS['IDXNW_MOBILEREDIRECT'] = get_option( 'idxnw_mobileredirect' );
$GLOBALS['IDXNW_FLYERTITLE'] = get_option( 'idxnw_flyertitle' );

add_action('admin_menu','idxnw_admin_settings');
function idxnw_admin_settings() {
	add_menu_page('IDX Northwest', 'IDX Northwest', 7, __FILE__, 'idxnw_gettingstarted', plugins_url('idx-northwest-real-estate-search-platform/images/logo.png'));
    add_submenu_page(__FILE__, "Getting Started", "Getting Started", 7, __FILE__, 'idxnw_gettingstarted');
    add_submenu_page(__FILE__, "Documentation", "Documentation", 7, "idxnw-documentation", 'idxnw_documentation');
    add_submenu_page(__FILE__, "Plugin Settings", "Plugin Settings", 7, "idxnw-settings", 'idxnw_settings');
    add_submenu_page(__FILE__, "IDX Admin Panel", "IDX Admin Panel", 7, "idxnw-admin-panel", 'idxnw_adminpanel');
    add_submenu_page(__FILE__, "IDXtour Admin Panel", "IDXtour Admin Panel", 7, "idxtour-admin-panel", 'idxtour_adminpanel');
}  
function idxnw_gettingstarted() { include('gettingstarted.php'); }
function idxnw_documentation() { include('documentation.php'); }
function idxnw_settings() { include('settings.php'); }
function idxnw_adminpanel() { include('adminpanel.php'); }
function idxtour_adminpanel() { include('idxtouradminpanel.php'); }

add_shortcode('idxnw_show_mapsearch_1','idxnw_show_mapsearch_1_fn');
function idxnw_show_mapsearch_1_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/mapsearch.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . $attributes["api"] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "' frameborder='0' scrolling='no' style='background-color:white;overflow:hidden;'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_mapsearch_1_sold','idxnw_show_mapsearch_1_sold_fn');
function idxnw_show_mapsearch_1_sold_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/mapsearchsold.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . $attributes["api"] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "' frameborder='0' scrolling='no' style='background-color:white;overflow:hidden;'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_mapsearch_2','idxnw_show_mapsearch_2_fn');
function idxnw_show_mapsearch_2_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/mapsearch2.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . $attributes["api"] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "' frameborder='0' scrolling='no' style='background-color:white;overflow:hidden;'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_mapsearch_2_sold','idxnw_show_mapsearch_2_sold_fn');
function idxnw_show_mapsearch_2_sold_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/mapsearch2sold.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . $attributes["api"] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "' frameborder='0' scrolling='no' style='background-color:white;overflow:hidden;'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_advancedsearch','idxnw_show_advancedsearch_fn');
function idxnw_show_advancedsearch_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/listings.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . $attributes["api"] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "' frameborder='0' scrolling='no' style='background-color:white;overflow:hidden;'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_flyer','idxnw_show_flyer_fn');
function idxnw_show_flyer_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/flyer.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . $attributes["api"] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "&wpplugin=1' frameborder='0' scrolling='no' style='background-color:white;overflow:auto;margin:0px;'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_officeroster','idxnw_show_officeroster_fn');
function idxnw_show_officeroster_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/roster.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&fwp=1' height='" . $attributes["height"] . "' width='" . $attributes["width"] . "' frameborder='0' style='background-color:white;overflow:hidden;' onload='window.parent.parent.scrollTo(0,0)'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_neighborhoods_by_city','idxnw_show_neighborhoods_by_city_fn');
function idxnw_show_neighborhoods_by_city_fn($attributes) {
	$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-neighborhood-list.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&wpp=" . $GLOBALS['IDXNW_MAPSEARCHURI'] . "&state=" . $attributes["state"] . "&city=" . $attributes["city"]);
	return $data;
}

add_shortcode('idxnw_show_cities_by_county','idxnw_show_cities_by_county_fn');
function idxnw_show_cities_by_county_fn($attributes) {
	$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-cities-by-county.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&wpp=" . $GLOBALS['IDXNW_MAPSEARCHURI'] . "&state=" . $attributes["state"] . "&county=" . $attributes["county"]);
	return $data;
}

add_shortcode('idxnw_show_activesoldshowcase','idxnw_show_activesoldshowcase_fn');
function idxnw_show_activesoldshowcase_fn($attributes) {
	if ($attributes["height"] != "") { $tempsassh = $attributes["height"]; } else {  $tempsassh = "725"; }
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-activesoldshowcase.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&wpplugin=1&count=" . $attributes["count"] . "&st=" . $attributes["st"] . "&sort=" . $attributes["sort"] . "&pl=" . $attributes["pl"] . "&ph=" . $attributes["ph"] . "&wp=1&wpd=" . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . "' frameborder='0' scrolling='no' style='width:100%;height:" . $tempsassh . "px;background-color:transparent;overflow:hidden;margin-top:5px;' allowTransparency='true'></iframe>";
	//$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-activesoldshowcase.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&wpplugin=1&count=" . $attributes["count"] . "&st=" . $attributes["st"] . "&sort=" . $attributes["sort"] . "&pl=" . $attributes["pl"] . "&ph=" . $attributes["ph"] . "&wp=1&wpd=" . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI']);
	return $data;
}

add_shortcode('idxnw_show_h_featuredscroller','idxnw_show_h_featuredscroller_fn');
function idxnw_show_h_featuredscroller_fn($attributes) {
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/hscroller2.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&w=" . $attributes["width"] . "&h=" . $attributes["font"] . "height&mrf=" . $attributes["font"] . "&wp=1&wpd=" . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . "' width='" . $attributes["width"] . "' height='" . $attributes["height"] . "' frameborder='0' scrolling='no' style='background-color:transparent;overflow:hidden;margin-top:5px;' allowTransparency='true'></iframe>";
	return $data;
}

add_shortcode('idxnw_show_h_featuredneighborhoods','idxnw_show_h_featuredneighborhoods_fn');
function idxnw_show_h_featuredneighborhoods_fn($attributes) {
	$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-featcommunities.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&state=" . $attributes["state"] . "&city=" . $attributes["city"] . "&exclude=" . $attributes["exclude"] . "&include=" . $attributes["include"] . "&count=" . $attributes["count"] . "&wpd=" . $GLOBALS['IDXNW_SITECANONICAL'] . "&wpdd=" . $GLOBALS['IDXNW_MAPSEARCHURI'] . "&wpplugin=1");
	return $data;
}

add_shortcode('idxnw_show_nh_listingsgallery','idxnw_show_nh_listingsgallery_fn');
function idxnw_show_nh_listingsgallery_fn($attributes) {
	$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-nh-listings-gallery.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&st=wa" . "&city=" . $attributes["city"] . "&nh=" . $attributes["nh"] . "&type=all&wpplugin=1&wpd=" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "&wpf=" . $GLOBALS['IDXNW_FLYERURI']);
	return $data;
}

add_shortcode('idxnw_show_idxtour_gallery','idxnw_show_idxtour_gallery_fn');
function idxnw_show_idxtour_gallery_fn($attributes) {
	$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-tours.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&fwp=1");
	return $data;
}

add_shortcode('idxnw_show_v_sb_recentlyviewed','idxnw_show_v_sb_recentlyviewed_fn');
function idxnw_show_v_sb_recentlyviewed_fn($attributes) {
	if (is_numeric($attributes["count"])==false) { $tempvsbrvcount = 3; } else { $tempvsbrvcount = $attributes["count"]; }
	$tempvsbrvheight = (intval($tempvsbrvcount) * 175) + 10;
	$data = "<iframe src='http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/widgets/wp-sidebar-v-recentviewed.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&count=" . $tempvsbrvcount . "&wpd=" . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . "&wpplugin=1' frameborder='0' scrolling='no' style='height:" . $tempvsbrvheight . "px;width:100%;background-color:transparent;overflow:hidden;' allowTransparency='true'></iframe>";
	return $data;
}

add_action( 'wp_head', 'idxnw_flyer_404_redirect' );
function idxnw_flyer_404_redirect() {
	$slice_parts = pathinfo(slicePageURL());
	if (count_occurences(slicePageURL(),"/") == 3 && is_numeric($slice_parts['basename'])) { header('Location: ' . $GLOBALS['IDXNW_FLYERURI'] . '/?ln=' . $slice_parts['basename']); }
}
function slicePageURL() {
	$pageURL = 'http';if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
	$pageURL .= "://";if ($_SERVER["SERVER_PORT"] != "80") { $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; } else { $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; }
	return $pageURL;
}
function count_occurences($char_string, $haystack, $case_sensitive = true){
    if($case_sensitive === false) { $char_string = strtolower($char_string);$haystack = strtolower($haystack); }
    $characters = str_split($char_string);$character_count = 0;
    foreach($characters as $character) { $character_count = $character_count + substr_count($haystack, $character); }
    return $character_count;
}

function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
function curPageName() {
	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

add_action( 'wp_loaded', 'idxnw_mobile_detect' );
function idxnw_mobile_detect() {
	if ( $GLOBALS['IDXNW_MOBILEREDIRECT'] == "1" ) { $u_agent = $_SERVER['HTTP_USER_AGENT'];$u_agent = strtolower($u_agent);if (preg_match('/iphone/i', $u_agent) || preg_match('/android/i', $u_agent) || preg_match('/blackberry/i', $u_agent)) { header( 'Location: http://idxanywhere.com/?id=' . $GLOBALS['IDXNW_CLIENTID'] ); } }
}

add_action( 'wp_head', 'idxnw_head_housekeeping' );
function idxnw_head_housekeeping() {
	if ( $GLOBALS['IDXNW_FLYERTITLE'] == "1" ) {
		$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/xml/flyermeta-wp-plugin.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&ln=" . $_GET["ln"]);
		echo $data;
	}
	?>
	<script type="text/javascript" language="JavaScript">
		function searchhomeempty() { if ( document.searchhome.txty.value == 'Enter a city, neighborhood, zip code, or MLS #' ) { return false; } }
		function searchhome2empty() { if ( document.searchhome2.txty.value == 'Enter a city, neighborhood, zip code, or MLS #' ) { return false; } }
		function searchtopempty() { if ( document.searchtop.txty.value == 'Enter a city, zip code, or MLS #' ) { return false; } }
		function searchtop2empty() { if ( document.searchtop2.txty.value == 'Enter a city, zip code, or MLS #' ) { return false; } }
		function searchwidgetempty() { if ( document.searchwidget.txty.value == 'Enter a city, neighborhood, or zip code...' ) { return false; } }
		function searchwidget2empty() { if ( document.searchwidget2.txty.value == 'Enter a city, neighborhood, or zip code...' ) { return false; } }
	</script>
	<?php
}

add_filter( 'wp_title', 'idxnw_flyer_title' );
function idxnw_flyer_title($title) {
	if ( $GLOBALS['IDXNW_FLYERTITLE'] == "1" ) {
		if (strpos($title, $GLOBALS['IDXNW_FLYERNAME']) === false) {
			return is_feed() || is_admin() ? $title : sprintf( "%s\n", $title );
		} else {
			if ($_GET["ln"] == "") {
				return is_feed() || is_admin() ? $title : sprintf( "%s\n", $title );
			} else {
				$xml = simplexml_load_file("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/xml/flyertitle-wp-plugin.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&ln=" . $_GET["ln"]);
				return is_feed() || is_admin() ? $title : sprintf( "$xml->title", $title );
			}
		}
	}
}

add_filter('widget_text', 'do_shortcode');

/** This filter code section is from the Wordpress plugin "PHP Text Widget" by Stefano Lissa. */
add_filter('widget_text', 'ptw_widget_text', 99);
function ptw_widget_text($text) {
    if (strpos($text, '<' . '?') !== false) {
        ob_start();
        eval('?' . '>' . $text);
        $text = ob_get_contents();
        ob_end_clean();
    }
    return $text;
}
$ptw_post_id = null;
add_filter('the_content', 'ptw_the_content', 99);
function ptw_the_content($content) {
    global $post, $ptw_post_id;
    if (is_single() || is_page()) {
        $ptw_post_id = $post->ID;
    }
    return $content;
}

add_action("widgets_init", array('idxnw_qsb_widget', 'idxnw_qsb_register'));
class idxnw_qsb_widget {
    function idxnw_qsb_control() {
		$options = $newoptions = get_option('idxnw_qsb_widget_options');
		if ( $_POST['idxnw_qsb_widget_submit'] ) {
			$newoptions['title'] = strip_tags(stripslashes($_POST['idxnw_qsb_widget_title']));
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('idxnw_qsb_widget_options', $options);
		}
		$title = attribute_escape($options['title']);
		$textclass = attribute_escape($options['textclass']);
		$buttonclass = attribute_escape($options['buttonclass']);
		$dropclass = attribute_escape($options['dropclass']);
		?>
		<p style="text-align:justify;font-style:italic;">You can customize the CSS for this widget in the plugin's '/css/main.css' file.</p>
		<p><b>WIDGET TITLE:</b><br/><input id="idxnw_qsb_widget_title" name="idxnw_qsb_widget_title" type="text" value="<?php echo $title; ?>" style="width:100%;"/></p>
		<input type="hidden" id="idxnw_qsb_widget_submit" name="idxnw_qsb_widget_submit" value="1" />
		<?php
    }
    function idxnw_qsb_widget_output($args) {
		$options = $newoptions = get_option('idxnw_qsb_widget_options');$title = attribute_escape($options['title']);$textclass = attribute_escape($options['textclass']);$buttonclass = attribute_escape($options['buttonclass']);$dropclass = attribute_escape($options['dropclass']);
        echo $args['before_widget'];echo $args['before_title'] . $title . $args['after_title'];
        echo '<div class="idxnw-qsb-div"><form action="http://' . $GLOBALS['IDXNW_SEARCHCANONICAL'] . '/wp-searchbox-redirect.html?id=' . $GLOBALS['IDXNW_CLIENTID'] . '" method="post" target="_parent" name="searchwidget" onSubmit="return searchwidgetempty();">
				<table class="idxnw-qsb-table">
					<tr class="idxnw-qsb-tr">
						<td style="text-align:left;width:90%;border:0;" nowrap><input class="idxnw-qsb-tbox" name="txty" style="width:100%;" onblur="if (this.value == \'\') {this.value = \'Enter a city, neighborhood, or zip code...\';}" onfocus="if (this.value == \'Enter a city, neighborhood, or zip code...\') {this.value = \'\';}" type="text" value="Enter a city, neighborhood, or zip code..." /></td>
						<td style="text-align:left;padding-left:10px;width:10%;border:0;" nowrap><input class="idxnw-qsb-submit" name="Go" type="submit" value="Go" /></td>
					</tr>
				</table>
				<table class="idxnw-qsb-table">
					<tr class="idxnw-qsb-tr">
						<td style="width:50%;padding-top:10px;padding-right:5px;border:0;"><span class="idxnw-qsb-text">Price:</span></td>
						<td style="width:50%;padding-top:10px;padding-left:5px;border:0;"></td>
					</tr>
					<tr class="idxnw-qsb-tr">
						<td style="width:50%;padding-right:5px;border:0;"><select name="pl" class="idxnw-qsb-ddown" style="width:100%;"><option value="0" selected>No Minimum</option><option value="100000">$100,000</option><option value="125000">$125,000</option><option value="150000">$150,000</option><option value="175000">$175,000</option><option value="200000">$200,000</option><option value="225000">$225,000</option><option value="250000">$250,000</option><option value="275000">$275,000</option><option value="300000">$300,000</option><option value="325000">$325,000</option><option value="350000">$350,000</option><option value="375000">$375,000</option><option value="400000">$400,000</option><option value="425000">$425,000</option><option value="450000">$450,000</option><option value="475000">$475,000</option><option value="500000">$500,000</option><option value="525000">$525,000</option><option value="550000">$550,000</option><option value="575000">$575,000</option><option value="600000">$600,000</option><option value="625000">$625,000</option><option value="650000">$650,000</option><option value="675000">$675,000</option><option value="700000">$700,000</option><option value="725000">$725,000</option><option value="750000">$750,000</option><option value="775000">$775,000</option><option value="800000">$800,000</option><option value="825000">$825,000</option><option value="850000">$850,000</option><option value="875000">$875,000</option><option value="900000">$900,000</option><option value="925000">$925,000</option><option value="950000">$950,000</option><option value="975000">$975,000</option><option value="1000000">$1,000,000</option></select></td>
						<td style="width:50%;padding-left:5px;border:0;"><select name="ph" class="idxnw-qsb-ddown" style="width:100%;"><option value="99999999" selected>No Maximum</option><option value="100000">$100,000</option><option value="125000">$125,000</option><option value="150000">$150,000</option><option value="175000">$175,000</option><option value="200000">$200,000</option><option value="225000">$225,000</option><option value="250000">$250,000</option><option value="275000">$275,000</option><option value="300000">$300,000</option><option value="325000">$325,000</option><option value="350000">$350,000</option><option value="375000">$375,000</option><option value="400000">$400,000</option><option value="425000">$425,000</option><option value="450000">$450,000</option><option value="475000">$475,000</option><option value="500000">$500,000</option><option value="525000">$525,000</option><option value="550000">$550,000</option><option value="575000">$575,000</option><option value="600000">$600,000</option><option value="625000">$625,000</option><option value="650000">$650,000</option><option value="675000">$675,000</option><option value="700000">$700,000</option><option value="725000">$725,000</option><option value="750000">$750,000</option><option value="775000">$775,000</option><option value="800000">$800,000</option><option value="825000">$825,000</option><option value="850000">$850,000</option><option value="875000">$875,000</option><option value="900000">$900,000</option><option value="925000">$925,000</option><option value="950000">$950,000</option><option value="975000">$975,000</option><option value="1000000">$1,000,000</option><option value="1250000">$1,250,000</option><option value="1500000">$1,500,000</option><option value="1750000">$1,750,000</option><option value="2000000">$2,000,000</option><option value="2250000">$2,250,000</option><option value="2500000">$2,500,000</option><option value="2750000">$2,750,000</option><option value="3000000">$3,000,000</option><option value="3250000">$3,250,000</option><option value="3500000">$3,500,000</option><option value="3750000">$3,750,000</option><option value="4000000">$4,000,000</option><option value="4250000">$4,250,000</option><option value="4500000">$4,500,000</option><option value="4750000">$4,750,000</option><option value="5000000">$5,000,000</option></select></td>
					</tr>
					<tr class="idxnw-qsb-tr">
						<td style="width:50%;padding-top:10px;padding-right:5px;border:0;"><span class="idxnw-qsb-text">Bedrooms:</span></td>
						<td style="width:50%;padding-top:10px;padding-left:5px;border:0;"><span class="idxnw-qsb-text">Bathrooms:</span></td>
					</tr>
					<tr class="idxnw-qsb-tr">
						<td style="width:50%;padding-right:5px;border:0;"><select name="bed" class="idxnw-qsb-ddown" style="width:100%;"><option selected value=""># Beds</option><option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option><option value="7">7+</option><option value="8">8+</option></select></td>
						<td style="width:50%;padding-left:5px;border:0;"><select name="bath" class="idxnw-qsb-ddown" style="width:100%;"><option selected value=""># Baths</option><option value="1">1+</option><option value="1.25">1.25+</option><option value="1.5">1.5+</option><option value="1.5">1.75+</option><option value="2">2+</option><option value="2.25">2.25+</option><option value="2.5">2.5+</option><option value="2.5">2.75+</option><option value="3">3+</option><option value="3.25">3.25+</option><option value="3.5">3.5+</option><option value="3.5">3.75+</option><option value="4">4+</option><option value="4.25">4.25+</option><option value="4.5">4.5+</option><option value="3.5">4.75+</option><option value="5">5+</option></select></td>
					</tr>
				</table>
            	<input name="wpf" type="hidden" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . '" /><input name="wpm" type="hidden" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_MAPSEARCHURI'] . '" /><input name="wpd" type="hidden" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . '" />
            </form></div>';
        echo $args['after_widget'];
    }
    function idxnw_qsb_register() {
        register_sidebar_widget('[IDXNW] Sidebar Quick Search', array('idxnw_qsb_widget', 'idxnw_qsb_widget_output'));
        register_widget_control('[IDXNW] Sidebar Quick Search', array('idxnw_qsb_widget', 'idxnw_qsb_control'));
    }
}

add_action("widgets_init", array('idxnw_qsb2_widget', 'idxnw_qsb2_register'));
class idxnw_qsb2_widget {
    function idxnw_qsb2_control() {
		$options = $newoptions = get_option('idxnw_qsb2_widget_options');
		if ( $_POST['idxnw_qsb2_widget_submit'] ) {
			$newoptions['title'] = strip_tags(stripslashes($_POST['idxnw_qsb2_widget_title']));
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('idxnw_qsb2_widget_options', $options);
		}
		$title = attribute_escape($options['title']);
		$textclass = attribute_escape($options['textclass']);
		$buttonclass = attribute_escape($options['buttonclass']);
		$dropclass = attribute_escape($options['dropclass']);
		?>
		<p style="text-align:justify;font-style:italic;">You can customize the CSS for this widget in the plugin's '/css/main.css' file.</p>
		<p><b>WIDGET TITLE:</b><br/><input id="idxnw_qsb2_widget_title" name="idxnw_qsb2_widget_title" type="text" value="<?php echo $title; ?>" style="width:100%;"/></p>
		<input type="hidden" id="idxnw_qsb2_widget_submit" name="idxnw_qsb2_widget_submit" value="1" />
		<?php
    }
    function idxnw_qsb2_widget_output($args) {
		$options = $newoptions = get_option('idxnw_qsb2_widget_options');$title = attribute_escape($options['title']);$textclass = attribute_escape($options['textclass']);$buttonclass = attribute_escape($options['buttonclass']);$dropclass = attribute_escape($options['dropclass']);
        echo $args['before_widget'];echo $args['before_title'] . $title . $args['after_title'];
        echo '<div class="idxnw-qsb2-div"><form action="http://' . $GLOBALS['IDXNW_SEARCHCANONICAL'] . '/wp-searchbox-redirect.html?id=' . $GLOBALS['IDXNW_CLIENTID'] . '" method="post" target="_parent" name="searchwidget2" onSubmit="return searchwidget2empty();">
				<table class="idxnw-qsb2-table">
					<tr class="idxnw-qsb2-tr">
						<td style="text-align:left;width:90%;border:0;" nowrap><input class="idxnw-qsb2-tbox" name="txty" style="width:100%;" onblur="if (this.value == \'\') {this.value = \'Enter a city, neighborhood, or zip code...\';}" onfocus="if (this.value == \'Enter a city, neighborhood, or zip code...\') {this.value = \'\';}" type="text" value="Enter a city, neighborhood, or zip code..." /></td>
						<td style="text-align:left;padding-left:10px;width:10%;border:0;" nowrap><input class="idxnw-qsb2-submit" name="Go" type="submit" value="Go" /></td>
					</tr>
				</table>
				<table class="idxnw-qsb2-table">
					<tr class="idxnw-qsb2-tr">
						<td style="width:50%;padding-top:10px;padding-right:5px;border:0;"><span class="idxnw-qsb2-text">Price:</span></td>
						<td style="width:50%;padding-top:10px;padding-left:5px;border:0;"></td>
					</tr>
					<tr class="idxnw-qsb2-tr">
						<td style="width:50%;padding-right:5px;border:0;"><select name="pl" class="idxnw-qsb2-ddown" style="width:100%;"><option value="0" selected>No Minimum</option><option value="100000">$100,000</option><option value="125000">$125,000</option><option value="150000">$150,000</option><option value="175000">$175,000</option><option value="200000">$200,000</option><option value="225000">$225,000</option><option value="250000">$250,000</option><option value="275000">$275,000</option><option value="300000">$300,000</option><option value="325000">$325,000</option><option value="350000">$350,000</option><option value="375000">$375,000</option><option value="400000">$400,000</option><option value="425000">$425,000</option><option value="450000">$450,000</option><option value="475000">$475,000</option><option value="500000">$500,000</option><option value="525000">$525,000</option><option value="550000">$550,000</option><option value="575000">$575,000</option><option value="600000">$600,000</option><option value="625000">$625,000</option><option value="650000">$650,000</option><option value="675000">$675,000</option><option value="700000">$700,000</option><option value="725000">$725,000</option><option value="750000">$750,000</option><option value="775000">$775,000</option><option value="800000">$800,000</option><option value="825000">$825,000</option><option value="850000">$850,000</option><option value="875000">$875,000</option><option value="900000">$900,000</option><option value="925000">$925,000</option><option value="950000">$950,000</option><option value="975000">$975,000</option><option value="1000000">$1,000,000</option></select></td>
						<td style="width:50%;padding-left:5px;border:0;"><select name="ph" class="idxnw-qsb2-ddown" style="width:100%;"><option value="99999999" selected>No Maximum</option><option value="100000">$100,000</option><option value="125000">$125,000</option><option value="150000">$150,000</option><option value="175000">$175,000</option><option value="200000">$200,000</option><option value="225000">$225,000</option><option value="250000">$250,000</option><option value="275000">$275,000</option><option value="300000">$300,000</option><option value="325000">$325,000</option><option value="350000">$350,000</option><option value="375000">$375,000</option><option value="400000">$400,000</option><option value="425000">$425,000</option><option value="450000">$450,000</option><option value="475000">$475,000</option><option value="500000">$500,000</option><option value="525000">$525,000</option><option value="550000">$550,000</option><option value="575000">$575,000</option><option value="600000">$600,000</option><option value="625000">$625,000</option><option value="650000">$650,000</option><option value="675000">$675,000</option><option value="700000">$700,000</option><option value="725000">$725,000</option><option value="750000">$750,000</option><option value="775000">$775,000</option><option value="800000">$800,000</option><option value="825000">$825,000</option><option value="850000">$850,000</option><option value="875000">$875,000</option><option value="900000">$900,000</option><option value="925000">$925,000</option><option value="950000">$950,000</option><option value="975000">$975,000</option><option value="1000000">$1,000,000</option><option value="1250000">$1,250,000</option><option value="1500000">$1,500,000</option><option value="1750000">$1,750,000</option><option value="2000000">$2,000,000</option><option value="2250000">$2,250,000</option><option value="2500000">$2,500,000</option><option value="2750000">$2,750,000</option><option value="3000000">$3,000,000</option><option value="3250000">$3,250,000</option><option value="3500000">$3,500,000</option><option value="3750000">$3,750,000</option><option value="4000000">$4,000,000</option><option value="4250000">$4,250,000</option><option value="4500000">$4,500,000</option><option value="4750000">$4,750,000</option><option value="5000000">$5,000,000</option></select></td>
					</tr>
					<tr class="idxnw-qsb2-tr">
						<td style="width:50%;padding-top:10px;padding-right:5px;border:0;"><span class="idxnw-qsb2-text">Bedrooms:</span></td>
						<td style="width:50%;padding-top:10px;padding-left:5px;border:0;"><span class="idxnw-qsb2-text">Bathrooms:</span></td>
					</tr>
					<tr class="idxnw-qsb2-tr">
						<td style="width:50%;padding-right:5px;border:0;"><select name="bed" class="idxnw-qsb2-ddown" style="width:100%;"><option selected value=""># Beds</option><option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option><option value="7">7+</option><option value="8">8+</option></select></td>
						<td style="width:50%;padding-left:5px;border:0;"><select name="bath" class="idxnw-qsb2-ddown" style="width:100%;"><option selected value=""># Baths</option><option value="1">1+</option><option value="1.25">1.25+</option><option value="1.5">1.5+</option><option value="1.5">1.75+</option><option value="2">2+</option><option value="2.25">2.25+</option><option value="2.5">2.5+</option><option value="2.5">2.75+</option><option value="3">3+</option><option value="3.25">3.25+</option><option value="3.5">3.5+</option><option value="3.5">3.75+</option><option value="4">4+</option><option value="4.25">4.25+</option><option value="4.5">4.5+</option><option value="3.5">4.75+</option><option value="5">5+</option></select></td>
					</tr>
				</table>
            	<input name="wpf" type="hidden" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . '" /><input name="wpm" type="hidden" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_MAPSEARCHURI'] . '" /><input name="wpd" type="hidden" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . '" />
            </form></div>';
        echo $args['after_widget'];
    }
    function idxnw_qsb2_register() {
        register_sidebar_widget('[IDXNW] Sidebar Quick Search 2', array('idxnw_qsb2_widget', 'idxnw_qsb2_widget_output'));
        register_widget_control('[IDXNW] Sidebar Quick Search 2', array('idxnw_qsb2_widget', 'idxnw_qsb2_control'));
    }
}

add_action("widgets_init", array('idxnw_mtsb_small_widget', 'idxnw_mtsb_small_widget_register'));
class idxnw_mtsb_small_widget {
    function idxnw_mtsb_small_widget_control() {
    }
    function idxnw_mtsb_small_widget_output($args) {
        echo $args['before_widget'];
		echo '<div class="idxnw-mtsb-small-div" nowrap>
		<form name="searchtop" class="searchform" onSubmit="return searchtopempty();" method="get" action="http://' . $GLOBALS['IDXNW_SEARCHCANONICAL'] . '/wp-searchbox-redirect.html" target="_parent">
		<input type="text" value="Enter a city, zip code, or MLS &#35;" class="idxnw-mtsb-small-tbox" autocomplete="off" name="txty" onfocus="if (this.value == \'Enter a city, zip code, or MLS &#35;\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Enter a city, zip code, or MLS &#35;\';}">
		<input type="submit" class="idxnw-mtsb-small-submit" name="go" value="go">
		<input type="hidden" name="wpf" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . '">
		<input type="hidden" name="wpm" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_MAPSEARCHURI'] . '">
		<input type="hidden" name="wpd" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . '">
		<input type="hidden" name="id" value="' . $GLOBALS['IDXNW_CLIENTID'] . '">
		</form>
		</div>';
        echo $args['after_widget'];
	}
    function idxnw_mtsb_small_widget_register() {
        register_sidebar_widget('[IDXNW] Multitype Search Box - Small', array('idxnw_mtsb_small_widget', 'idxnw_mtsb_small_widget_output'));
        register_widget_control('[IDXNW] Multitype Search Box - Small', array('idxnw_mtsb_small_widget', 'idxnw_mtsb_small_widget_control'));
    }
}

add_action("widgets_init", array('idxnw_mtsb_small2_widget', 'idxnw_mtsb_small2_widget_register'));
class idxnw_mtsb_small2_widget {
    function idxnw_mtsb_small2_widget_control() {
    }
    function idxnw_mtsb_small2_widget_output($args) {
        echo $args['before_widget'];
		echo '<div class="idxnw-mtsb-small2-div" nowrap>
		<form name="searchtop2" class="searchform" onSubmit="return searchtop2empty();" method="get" action="http://' . $GLOBALS['IDXNW_SEARCHCANONICAL'] . '/wp-searchbox-redirect.html" target="_parent">
		<input type="text" value="Enter a city, zip code, or MLS &#35;" class="idxnw-mtsb-small2-tbox" autocomplete="off" name="txty" onfocus="if (this.value == \'Enter a city, zip code, or MLS &#35;\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Enter a city, zip code, or MLS &#35;\';}">
		<input type="submit" class="idxnw-mtsb-small2-submit" name="go" value="go">
		<input type="hidden" name="wpf" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . '">
		<input type="hidden" name="wpm" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_MAPSEARCHURI'] . '">
		<input type="hidden" name="wpd" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . '">
		<input type="hidden" name="id" value="' . $GLOBALS['IDXNW_CLIENTID'] . '">
		</form>
		</div>';
        echo $args['after_widget'];
	}
    function idxnw_mtsb_small2_widget_register() {
        register_sidebar_widget('[IDXNW] Multitype Search Box - Small 2', array('idxnw_mtsb_small2_widget', 'idxnw_mtsb_small2_widget_output'));
        register_widget_control('[IDXNW] Multitype Search Box - Small 2', array('idxnw_mtsb_small2_widget', 'idxnw_mtsb_small2_widget_control'));
    }
}

add_action("widgets_init", array('idxnw_mtsb_wide_widget', 'idxnw_mtsb_wide_widget_register'));
class idxnw_mtsb_wide_widget {
    function idxnw_mtsb_wide_widget_control() {
		$options = $newoptions = get_option('idxnw_mtsb_wide_widget_options');
		if ( $_POST['idxnw_mtsb_wide_widget_submit'] ) {
			$newoptions['title'] = strip_tags(stripslashes($_POST['idxnw_mtsb_wide_widget_title']));
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('idxnw_mtsb_wide_widget_options', $options);
		}
		$title = attribute_escape($options['title']);
		?>
		<p style="text-align:justify;font-style:italic;">You can customize the CSS for this widget in the plugin's '/css/main.css' file.</p>
		<p style="text-align:justify;font-style:italic;">A call to action title allows you to draw attention to the search box and should be something like "Begin Your Property Search Here:", or you can choose to leave it blank.</p>
		<p><b>CALL TO ACTION TITLE:</b><br/><input id="idxnw_mtsb_wide_widget_title" name="idxnw_mtsb_wide_widget_title" type="text" value="<?php echo $title; ?>" style="width:100%;"/></p>
		<input type="hidden" id="idxnw_mtsb_wide_widget_submit" name="idxnw_mtsb_wide_widget_submit" value="1" />
		<?php
    }
    function idxnw_mtsb_wide_widget_output($args) {
		$options = $newoptions = get_option('idxnw_mtsb_wide_widget_options');$title = attribute_escape($options['title']);
        echo $args['before_widget'];
		echo '<div class="idxnw-mtsb-wide-div">
		<span class="idxnw-mtsb-wide-title-span">'. $title .'</span>
		<span class="idxnw-mtsb-wide-tbox-span">
		<form name="searchhome" onSubmit="return searchhomeempty();" method="get" action="http://' . $GLOBALS['IDXNW_SEARCHCANONICAL'] . '/wp-searchbox-redirect.html" target="_parent">
		<input type="text" value="Enter a city, neighborhood, zip code, or MLS &#35;" class="idxnw-mtsb-wide-tbox" autocomplete="off" name="txty" onfocus="if (this.value == \'Enter a city, neighborhood, zip code, or MLS &#35;\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Enter a city, neighborhood, zip code, or MLS &#35;\';}">
		<input type="submit" class="idxnw-mtsb-wide-submit" name="go" value="go">
		<input type="hidden" name="wpf" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . '">
		<input type="hidden" name="wpm" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_MAPSEARCHURI'] . '">
		<input type="hidden" name="wpd" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . '">
		<input type="hidden" name="id" value="' . $GLOBALS['IDXNW_CLIENTID'] . '">
		</form>
		</span>
		</div>';
        echo $args['after_widget'];
	}
    function idxnw_mtsb_wide_widget_register() {
        register_sidebar_widget('[IDXNW] Multitype Search Box - Wide', array('idxnw_mtsb_wide_widget', 'idxnw_mtsb_wide_widget_output'));
        register_widget_control('[IDXNW] Multitype Search Box - Wide', array('idxnw_mtsb_wide_widget', 'idxnw_mtsb_wide_widget_control'));
    }
}

add_action("widgets_init", array('idxnw_mtsb_wide2_widget', 'idxnw_mtsb_wide2_widget_register'));
class idxnw_mtsb_wide2_widget {
    function idxnw_mtsb_wide2_widget_control() {
		$options = $newoptions = get_option('idxnw_mtsb_wide2_widget_options');
		if ( $_POST['idxnw_mtsb_wide2_widget_submit'] ) {
			$newoptions['title'] = strip_tags(stripslashes($_POST['idxnw_mtsb_wide2_widget_title']));
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('idxnw_mtsb_wide2_widget_options', $options);
		}
		$title = attribute_escape($options['title']);
		?>
		<p style="text-align:justify;font-style:italic;">You can customize the CSS for this widget in the plugin's '/css/main.css' file.</p>
		<p style="text-align:justify;font-style:italic;">A call to action title allows you to draw attention to the search box and should be something like "Begin Your Property Search Here:", or you can choose to leave it blank.</p>
		<p><b>CALL TO ACTION TITLE:</b><br/><input id="idxnw_mtsb_wide2_widget_title" name="idxnw_mtsb_wide2_widget_title" type="text" value="<?php echo $title; ?>" style="width:100%;"/></p>
		<input type="hidden" id="idxnw_mtsb_wide2_widget_submit" name="idxnw_mtsb_wide2_widget_submit" value="1" />
		<?php
    }
    function idxnw_mtsb_wide2_widget_output($args) {
		$options = $newoptions = get_option('idxnw_mtsb_wide2_widget_options');$title = attribute_escape($options['title']);
        echo $args['before_widget'];
		echo '<div class="idxnw-mtsb-wide-div">
		<span class="idxnw-mtsb-wide-title-span">'. $title .'</span>
		<span class="idxnw-mtsb-wide-tbox-span">
		<form name="searchhome2" onSubmit="return searchhome2empty();" method="get" action="http://' . $GLOBALS['IDXNW_SEARCHCANONICAL'] . '/wp-searchbox-redirect.html" target="_parent">
		<input type="text" value="Enter a city, neighborhood, zip code, or MLS &#35;" class="idxnw-mtsb-wide2-tbox" autocomplete="off" name="txty" onfocus="if (this.value == \'Enter a city, neighborhood, zip code, or MLS &#35;\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Enter a city, neighborhood, zip code, or MLS &#35;\';}">
		<input type="submit" class="idxnw-mtsb-wide2-submit" name="go" value="go">
		<input type="hidden" name="wpf" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI'] . '">
		<input type="hidden" name="wpm" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_MAPSEARCHURI'] . '">
		<input type="hidden" name="wpd" value="' . $GLOBALS['IDXNW_SITECANONICAL'] . '">
		<input type="hidden" name="id" value="' . $GLOBALS['IDXNW_CLIENTID'] . '">
		</form>
		</span>
		</div>';
        echo $args['after_widget'];
	}
    function idxnw_mtsb_wide2_widget_register() {
        register_sidebar_widget('[IDXNW] Multitype Search Box - Wide 2', array('idxnw_mtsb_wide2_widget', 'idxnw_mtsb_wide2_widget_output'));
        register_widget_control('[IDXNW] Multitype Search Box - Wide 2', array('idxnw_mtsb_wide2_widget', 'idxnw_mtsb_wide2_widget_control'));
    }
}

add_filter( 'wp_title', 'idxnw_doctitle_wrap', 30 );
function idxnw_doctitle_wrap( $title ) {
	if ($_GET["id"] == "" && $_GET["ln"] == "" && $_GET["address"] == "") {
		return is_feed() || is_admin() ? $title : sprintf( "%s\n", $title );
	} else {
		$xml = simplexml_load_file("http://search.idxnw.com/xml/flyertitle-wp-plugin.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&ln=" . $_GET["ln"]);
		return is_feed() || is_admin() ? $title : sprintf( "<title>$xml->title</title>$xml->head\n", $title );
	}
}

?>
