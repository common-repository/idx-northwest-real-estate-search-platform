<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<?php
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('jquery-ui-tabs');
?>
<script type="text/javascript">jQuery(document).ready(function($) { $("#tabs").tabs(); });</script>

<div class="wrap">  
	<?php echo '<a href="http://www.idxnw.com" target="_blank"><img src="' .plugins_url( 'images/logo-h.png' , __FILE__ ). '" style="float:right;padding-left:20px;vertical-align:top;"></a>'; ?>
	<h1>IDX Northwest Real Estate Search Platform</h1>
	<h2 style="color:#218ac2;">Documentation</h2>
	<hr>
	<p style="text-align:justify;">Below you will find detailed documentation on each of the available shortcodes offered by this plugin for the search functions, data widgets, passive functions, and sidebar widgets that integrate themselves in to the structure of your Wordpress site to enhance convenience for your site's visitors.</p><br/>
	<div id="tabs">
		<ul>
			<li><a href="#tab1">Search Functions</a></li>
			<li><a href="#tab2">IDX Data Widgets</a></li>
			<li><a href="#tab3">Passive Functions</a></li>
			<li><a href="#tab4">Wordpress Widgets</a></li>
		</ul>
		<div id="tab1">
			<p>
				<h3 style="color:#218ac2;">Map Search - Style 1</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_mapsearch_1<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_mapsearch_1 width="100%" height="700" api=""]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height, api<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.19<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
						<i>api</i><blockquote></blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					Visit the API documentation at http://www.idxnw.com/support/api for details on all of the API switches available to you:
					<p><i>To load a map search with a specific city selected as the default:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_mapsearch_1 width="100%" height="700" api="&city=seattle"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Map Search - Style 1 - Sold Properties</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_mapsearch_1_sold<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_mapsearch_1_sold width="100%" height="700" api=""]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height, api<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.19<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
						<i>api</i><blockquote></blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					Visit the API documentation at http://www.idxnw.com/support/api for details on all of the API switches available to you:
					<p><i>To load a map search with a specific city selected as the default:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_mapsearch_1_sold width="100%" height="700" api="&city=seattle"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Map Search - Style 2</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_mapsearch_2<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_mapsearch_2 width="100%" height="700" api=""]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height, api<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.19<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
						<i>api</i><blockquote></blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					Visit the API documentation at http://www.idxnw.com/support/api for details on all of the API switches available to you:
					<p><i>To load a map search with a specific city selected as the default:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_mapsearch_2 width="100%" height="700" api="&city=seattle"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Map Search - Style 2 - Sold Properties</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_mapsearch_2_sold<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_mapsearch_2_sold width="100%" height="700" api=""]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height, api<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.19<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
						<i>api</i><blockquote></blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					Visit the API documentation at http://www.idxnw.com/support/api for details on all of the API switches available to you:
					<p><i>To load a map search with a specific city selected as the default:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_mapsearch_2_sold width="100%" height="700" api="&city=seattle"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Advanced (Text-Based) Search</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_advancedsearch<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_advancedsearch width="100%" height="3200" api=""]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height, api<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.19<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
						<i>api</i><blockquote></blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					Visit the API documentation at http://www.idxnw.com/support/api for details on all of the API switches available to you:
					<p><i>To display only the listings that are assigned to your LAG and office ID:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_advancedsearch width="100%" height="3200" api="&ps=7&ps2=14&ps3=26&cd=1&type=resi&mapshow=1"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Property Flyer</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_flyer<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_flyer width="100%" height="5000" api=""]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height, api<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.22<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
						<i>api</i><blockquote></blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					<p><i>To display a flyer for a specific listing number:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_flyer width="100%" height="5000" api="&ln=<i>12345</i>"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Cities with Neighborhoods and Listing Counts</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_neighborhoods_by_city<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_neighborhoods_by_city state="wa" city=""]<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: state, city<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Map Search Permalink<br>
					<u>Introduced</u>: v0.16<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>state</i><blockquote>The state for which neighborhoods should be shown.  Since IDXNW currently serves Washington, this value should be "wa".  The default value, if omitted, is "wa".</blockquote>
						<i>city</i><blockquote>The city for which neighborhoods should be shown.  This parameter accepts only one city per shortcode, so if you would like to display a specific set of cities on your page, then simply place multiple shortcodes that each request a single city.  This is an optional switch and is used if you wish to show the neighborhoods for the specified city only.  If omitted, all neighborhoods in all cities will be shown.  If a city name contains spaces, as in 'Federal Way', then it should be entered with a '%20' in place of the space(s).  This would look like 'Federal%20Way'.</blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					<p><i>To show the neighborhoods available in a specific (supported) city:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_neighborhoods_by_city state="wa" city="seattle"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Counties with Cities and Listing Counts</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_cities_by_county<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_cities_by_county state="wa" county=""]<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: state, county<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Your Site's Domain Name, Flyer Page Permalink, Map Search Permalink<br>
					<u>Introduced</u>: v0.16<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>state</i><blockquote>The state for which counties should be shown.  Since IDXNW currently serves Washington, this value should be "wa".  The default value, if omitted, is "wa".</blockquote>
						<i>county</i><blockquote>The county for which cities should be shown.  This parameter accepts only one county per shortcode, so if you would like to display a specific set of counties on your page, then simply place multiple shortcodes that each request a single county.  This is an optional switch and is used if you wish to show the cities for the specified count only.  If omitted, all cities in all counties will be shown.</blockquote>
					</blockquote>
					<h5>Example Usage</h5>
					<p><i>To show the cities available in a specific county:</i></p>
					<blockquote style="text-align:justify;">[idxnw_show_cities_by_county state="wa" county="king"]</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Office Roster</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_officeroster<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_officeroster width="100%" height="7000"]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: width, height<br>
					<u>Type</u>: Search<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.19<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
					</blockquote>
				</blockquote>
			</p>
		</div>
		<div id="tab2">
			<p>
				<h3 style="color:#218ac2;">Display Active IDXtour Virtual Tours</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_idxtour_gallery<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_idxtour_gallery]<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: none<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID<br>
					<u>Introduced</u>: v0.44<br>
					<p>Displays all active IDXtours for your account in a responsive gallery format.  There are no optinal attribues for this function.</p>
				</blockquote>
				<h3 style="color:#218ac2;">Active/Sold Showcase - "Six Pack"</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_activesoldshowcase<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_activesoldshowcase count="6" st="all" pl="" ph=""]<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: count, st, pl, ph<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Your Site's Domain Name, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.16<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>count</i><blockquote>The number of listing tiles to display each time the widget is loaded.  This value should be an integer and a multiple of two -- 2, 4, 6, 8, etc.  The default value is 6.</blockquote>
						<i>st</i><blockquote>The listing status that should be used to filter the properties that are in the pool to be randomly displayed.  The available values are "a" to display active only, "c" to display contingent only, "ac" to display either active or contingent, "pall" to display any pending status, "p" to display pending only, "pi" to display pending inspection only, "pb" to display pending backup requested only, "ps" to display pending short sale only, "pf" to display pending feasibilty only, "s" to display sold only, and "all" or omitting a value to display any status'.</blockquote>
						<i>pl</i><blockquote>The lowest price of a listing that should be displayed.  This value should be an integer ranging from 0 to 999999999.  The default value if left blank is 0.</blockquote>
						<i>ph</i><blockquote>The highest price of a listing that should be displayed.  This value should be an integer ranging from 0 to 999999999.  The default value if a value if left blank is 999999999.</blockquote>
					</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Featured Listings Scroller Widget - Horizontal Orientation</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_h_featuredscroller<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_h_featuredscroller font="droid serif" width="260" height="400"]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: font, width, height<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.16<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>font</i><blockquote></blockquote>
						<i>width</i><blockquote></blockquote>
						<i>height</i><blockquote></blockquote>
					</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Featured Neighborhoods Widget - Horizontal Orientation</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_h_featuredneighborhoods<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_h_featuredneighborhoods state="wa" city="" exclude="" include="" count="4"]<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: state, city, exclude, include, count<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Your Site's Domain Name, Map Search Permalink<br>
					<u>Introduced</u>: v0.16<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>state</i><blockquote>The state for which neighborhoods should be shown.  Since IDXNW currently serves Washington, this value should be "wa".  The default value, if omitted, is "wa".</blockquote>
						<i>city</i><blockquote>If you wish to show neighborhoods for only a single specific city from the total number of cities that are available, enter it here.  This attribute should only be used if you wish to specify a single city and you should leave this attribute blank and use the "include" attribute below if you wish to specific more than one specific city to include.  The default value, if omitted, is "" and the plugin will randomly select neighborhoods from all available cities in the selected state.</blockquote>
						<i>exclude</i><blockquote>If you wish to exlude a specific city, or several specific cities, from being shown out of the total number that are available, then enter them here separated by commas.  The default value, if omitted, is "" and the plugin will randomly select from all available neighborhoods in the selected state.</blockquote>
						<i>include</i><blockquote>This is the inverse of the "exclude" attribute above.  If you wish to inlude multiple specific cities to be shown out of the total number that are available, then enter them here separated by commas.  The default value, if omitted, is "" and the plugin will randomly select from all available neighborhoods in the selected state.</blockquote>
						<i>count</i><blockquote>The number of neighborhoods to display each time the widget is loaded.  This value should be an integer between 1 and 5.  The default value is 4.</blockquote>
					</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Neighborhood Listings Gallery Widget</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_nh_listingsgallery<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_nh_listingsgallery state="wa" city="seattle" nh="ballard" type="all"]<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: state, city, nh, type<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.41<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>state</i><blockquote>The state for which neighborhoods should be shown.  Since IDXNW currently serves Washington, this value should be "wa".  The default value, if omitted, is "wa".</blockquote>
						<i>city</i><blockquote></blockquote>
						<i>nh</i><blockquote></blockquote>
						<i>type</i><blockquote>The default value is 'all'.</blockquote>
					</blockquote>
				</blockquote>
				<h3 style="color:#218ac2;">Recently Viewed Properties for Sidebar - Vertical Orientation</h3>
				<blockquote>
					<u>Shortcode</u>: idxnw_show_v_sb_recentlyviewed<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: [idxnw_show_v_sb_recentlyviewed count="3"]<br>
					<u>Native HTML or Framed</u>: Framed<br>
					<u>Attributes</u>: count<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Shortcode<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.39<br>
					<h5>Attributes</h5>
					<blockquote style="text-align:justify;">
						<i>count</i><blockquote>The number of recently viewed property to display each time the widget is loaded.  This value should be an integer between 1 and 10.  The default value is 3 if a value is not set.</blockquote>
					</blockquote>
				</blockquote>
			</p>
		</div>
		<div id="tab3">
			<p>
				<h3 style="color:#218ac2;">Access Property Flyer by Short URL</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: http://&lt;your_domain&gt;/&lt;integer&gt;<br>
					<u>Example Usage</u>: http://demosite.idxnw.com/30971<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Passive / Automatic<br>
					<u>Method</u>: Action Hook<br>
					<u>Plugin Settings Used</u>: Flyer Page Permalink<br>
					<u>Introduced</u>: v0.16<br>
					<br>
					This function allows your site's visitors to access property details by entering a simple URL.  This method is also great when you want to create links in your site's content that directs visitors to a specific listing flyer.
					<br/><br/>This feature is still experimental and it has been tested to be fully functional in many StudioPress Genesis themes.  Expect additional themes and frameworks to be support as we're exposed to them, but at this time it simply either may or may not work with your theme.
				</blockquote>
				<h3 style="color:#218ac2;">Property Flyer SEO Enhancements</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Passive / Automatic<br>
					<u>Method</u>: Filter Hook<br>
					<u>Plugin Settings Used</u>: Flyer Page Title<br>
					<u>Introduced</u>: v0.16<br>
					<br>
					This function intercepts and replaces the default Wordpress &lt;title&gt; tag in the property flyer page's HTML header, which normally would be the name you gave the page when creating it, and instead displays the listing address, price, MLS #, and your branding.  This allows visitors and search engines can more easily make sense of the page's content and is especially helpful for visitors that wish to bookmark a property flyer page on your site.
					<br><br>
					It also inserts &lt;meta&gt; tags in to the page's header that are specific to the property being shown.  This is especially useful for proper SEO ranking when your site is crawled by the search engines.
				</blockquote>
				<h3 style="color:#218ac2;">Detect Visitor Using a Supported Mobile Device and Automatically Redirect to Mobile IDX</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Passive / Automatic<br>
					<u>Method</u>: Action Hook<br>
					<u>Plugin Settings Used</u>: Redirect Mobile Visitors<br>
					<u>Introduced</u>: v0.16<br>
					<br>
					This function, when activated in the Plugin Settings, will detect if a visitor to your site is using an iPhone, iPad, Android phone or tablet, or Blackberry device, and then automatically redirect them to the Mobile IDX.  You can enable or disable this feature on the Plugin Settings page.
					<p><b>IMPORTANT:</b> "OUTPUT_BUFFERING" must be turned on, set to "1", in the php.ini file on the webserver that your Wordpress site is hosted on for this function to work properly.  Please refer to this <a href="http://www.php.net/manual/en/outcontrol.configuration.php" target="_blank">official PHP manual</a> page for more information.</p>
				</blockquote>
			</p>
		</div>
		<div id="tab4">
			<p>
			The widgets described in this section can be found in the 'Appearance &gt; Widgets' menu of the Wordpress admin panel.
			</p>
			<br/>
<!--
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Sidebar Quick Login</h3>
				<blockquote>
					This is a placeholder for the forthcoming Quick Login widget that will be available in a future release of this plugin.
					<br>
				</blockquote>
			</p>
-->
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Multitype Search Box - Small</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Widget<br>
					<u>Can Edit CSS</u>: Yes<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Map Search Permalink, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.44<br>
					<p>A single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is great for areas where width is a premium, such as in a page's header or in a sidebar.</p>
					<p>This widget accepts the CSS classes of the "[IDXNW] Multitype Search Box - Small" section that is found in the plugin's CSS file located in your Wordpress installation at /wp-content/plugins/idx-northwest-real-estate-search-platform/css/main.css.  </p>
				</blockquote>
			</p>
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Multitype Search Box - Small 2</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Widget<br>
					<u>Can Edit CSS</u>: Yes<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Map Search Permalink, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.45<br>
					<p>An alternate CSS style for the single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is great for areas where width is a premium, such as in a page's header or in a sidebar.</p>
					<p>This widget accepts the CSS classes of the "[IDXNW] Multitype Search Box - Small 2" section that is found in the plugin's CSS file located in your Wordpress installation at /wp-content/plugins/idx-northwest-real-estate-search-platform/css/main.css.  </p>
				</blockquote>
			</p>
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Multitype Search Box - Wide</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Widget<br>
					<u>Can Edit CSS</u>: Yes<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Map Search Permalink, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.44<br>
					<p>A single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is best in wide areas where it has the full width of the page, or main section that has a sidebar.  You may also add lead-in call to action text that introduces the widget, such as "Begin Your Property Search Here:".</p>
					<p>This widget accepts the CSS classes of the "[IDXNW] Multitype Search Box - Wide" section that is found in the plugin's CSS file located in your Wordpress installation at /wp-content/plugins/idx-northwest-real-estate-search-platform/css/main.css.</p>
				</blockquote>
			</p>
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Multitype Search Box - Wide 2</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Widget<br>
					<u>Can Edit CSS</u>: Yes<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Map Search Permalink, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.45<br>
					<p>An alternate CSS style for the single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is best in wide areas where it has the full width of the page, or main section that has a sidebar.  You may also add lead-in call to action text that introduces the widget, such as "Begin Your Property Search Here:".</p>
					<p>This widget accepts the CSS classes of the "[IDXNW] Multitype Search Box - Wide 2" section that is found in the plugin's CSS file located in your Wordpress installation at /wp-content/plugins/idx-northwest-real-estate-search-platform/css/main.css.</p>
				</blockquote>
			</p>
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Sidebar Quick Search</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Widget<br>
					<u>Can Edit CSS</u>: Yes<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Map Search Permalink, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.33<br>
					<p>This widget provides a quick method for your site's visitors to select a city, neighborhood, zip code, or MLS number, and then filter search results by price range, bedrooms, and/or bathrooms.</p>
					<p>This widget accepts the CSS classes of the "[IDXNW] Sidebar Quick Search" section that is found in the plugin's CSS file located in your Wordpress installation at /wp-content/plugins/idx-northwest-real-estate-search-platform/css/main.css.</p>
				</blockquote>
			</p>
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Sidebar Quick Search 2</h3>
				<blockquote>
					<u>Shortcode</u>: N/A<br>
					<u>URL Usage</u>: N/A<br>
					<u>Example Usage</u>: N/A<br>
					<u>Native HTML or Framed</u>: Native HTML<br>
					<u>Attributes</u>: N/A<br>
					<u>Type</u>: Widget<br>
					<u>Method</u>: Widget<br>
					<u>Can Edit CSS</u>: Yes<br>
					<u>Plugin Settings Used</u>: IDXNW Client ID, Search (C NAME) Subdomain, Your Site's Domain Name, Map Search Permalink, Flyer Page Permalink<br>
					<u>Introduced</u>: v0.45<br>
					<p>An alternate CSS style for the widget that provides a quick method for your site's visitors to select a city, neighborhood, zip code, or MLS number, and then filter search results by price range, bedrooms, and/or bathrooms.</p>
					<p>This widget accepts the CSS classes of the "[IDXNW] Sidebar Quick Search 2" section that is found in the plugin's CSS file located in your Wordpress installation at /wp-content/plugins/idx-northwest-real-estate-search-platform/css/main.css.</p>
				</blockquote>
			</p>
<!--
			<p>
				<h3 style="color:#218ac2;">[IDXNW] Sidebar Quick Signup</h3>
				<blockquote>
					This is a placeholder for the forthcoming Quick Signup widget that will be available in a future release of this plugin.
					<br>
				</blockquote>
			</p>
-->
		</div>
	</div>
	<br/><hr>
	<p>Copyright &copy; 2007-<?php echo date("Y"); ?> <a href="http://www.idxnw.com" target="_blank">IDX Northwest, LLC</a> - All Rights Reserved.</p>
</div>
