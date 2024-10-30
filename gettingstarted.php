<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<?php
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('jquery-ui-tabs');
?>
<script type="text/javascript">jQuery(document).ready(function($) { $("#steps").tabs(); });</script>

<div class="wrap">  
	<?php echo '<a href="http://www.idxnw.com" target="_blank"><img src="' .plugins_url( 'images/logo-h.png' , __FILE__ ). '" style="float:right;padding-left:20px;vertical-align:top;"></a>'; ?>
	<h1>IDX Northwest Real Estate Search Platform</h1>
	<h2 style="color:#218ac2;">Getting Started</h2>
	<hr>
	<p style="text-align:justify;">Welcome to the official Wordpress plugin for the IDX Northwest real estate search platform.  With this plugin you can quickly and easily add our search engine optimized content to spend more time selling real estate and less time worrying about your website.</p>
	<p style="text-align:justify;">This plugin has been optimized for the Wordpress 3.5 platform and above.</p>
	<p style="text-align:justify;">You must be an active subscriber of IDX Northwest to take advantage of the features of this plugin, so if you're not yet a subscriber then head on over to our website at <a href="http://www.idxnw.com" target="_blank">www.idxnw.com</a> to learn more!</p>
	<table style="border-collapse:collapse;width:100%;margin-top:40px;">
		<tr>
			<td style="width:204px;text-align:right;"><a href="http://www.idxtour.com" target="_blank"><img src="http://www.idxtour.com/images/site/idxtour_logo_75h.png" style="width:204px;height:75px;border:0;vertical-align:middle;margin-right:25px;"></a></td>
			<td style="width:100%;text-align:justify;font-size:18px;font-weight:bold;line-height:22px;">Don't forget to check out the new and totally automatic virtual tour system that exclusively for our clients and absolutely free with your subscription! &nbsp;<a href="http://www.idxtour.com" target="_blank">IDXtour.com</a></td>
		</tr>
	</table>
	<table style="border-collapse:collapse;width:100%;margin-top:30px;">
		<tr><td colspan="4" style="text-align:center;"><h1 style="color:#218ac2;">Get going in four easy steps:</h1></td></tr>
		<tr>
			<td style="width:25%;padding:25px;vertical-align:top;text-align:center;"><?php echo '<img src="' .plugins_url( 'images/step1.png' , __FILE__ ). '" style="width:125px;">'; ?><br/><h3 style="color:#69bd28;">A Bit of Housekeeping</h3></td>
			<td style="width:25%;padding:25px;vertical-align:top;text-align:center;"><?php echo '<img src="' .plugins_url( 'images/step2.png' , __FILE__ ). '" style="width:125px;">'; ?><br/><h3 style="color:#69bd28;">Update Plugin Settings</h3></td>
			<td style="width:25%;padding:25px;vertical-align:top;text-align:center;"><?php echo '<img src="' .plugins_url( 'images/step3.png' , __FILE__ ). '" style="width:125px;">'; ?><br/><h3 style="color:#69bd28;">Add IDX Shortcodes</h3></td>
			<td style="width:25%;padding:25px;vertical-align:top;text-align:center;"><?php echo '<img src="' .plugins_url( 'images/step4.png' , __FILE__ ). '" style="width:125px;">'; ?><br/><h3 style="color:#69bd28;">Away You Go!</h3></td>
		</tr>
	</table>
	<div id="steps">
		<ul>
			<li><a href="#step1"><b>Step 1</b><br/>A Bit of Housekeeping</a></li>
			<li><a href="#step2"><b>Step 2</b><br/>Update Plugin Settings</a></li>
			<li><a href="#step3"><b>Step 3</b><br/>Add IDX Shortcodes</a></li>
			<li><a href="#step4"><b>Step 4</b><br/>Away You Go!</a></li>
		</ul>
		<div id="step1">
			<p style="text-align:justify;">Please note that this plugin is in the "beta testing" phase of development and we recommend that versions prior to version 1.0 be deployed only on a non-production site.  Future versions will be released through the standard Wordpress plugin update mechanism and you are strongly encouraged to update as soon as you are notified that a new version is available.  ALWAYS perform a full backup of your Wordpress site and database before installing or upgrading ANY plugin!</p>
			<hr>
			<h2>Install a Third-Party Plugin</h2>
			<p style="text-align:justify;">The IDX Northwest plugin currently requires that a specific third-party plugin be installed and activated on your site in order for several of the features to function properly.  Please go to the "Plugins > Add Plugin" menu and search and add the following plugin:</p>
			<blockquote>
				<em>
					<li><a href="http://wordpress.org/extend/plugins/php-execution-plugin/" target="_blank">PHP Execution</a> by Nicolas Zeh<p>This plugin allows PHP to be executed from within your Wordpress post pages in an accepted and secure manner.  The functionality is used on several pages, such as the default (and recommended) configuration of the property flyer, map search, and text search pages.</p></li>
				</em>
			</blockquote>
				<p style="text-align:justify;">You will see a notice that the PHP Execution plugin hasn't been updated in some time when you visit the Wordpress plugin repository.  We've tested it to be fully functional up to Wordpress 3.5 and the notice of it being older should not be a cause for any concern.</p>
				<p style="text-align:justify;">We will eliminate the dependence on this third-party plugin in a future release, so be sure to view the change log and readme.txt file of all future versions of this plugin for notification on when that should happen.</p>

			<h2>Create a New "C NAME" DNS Record</h2>
			<p style="text-align:justify;">For proper SEO ranking of your site's listings, you will need to create what's called a "C NAME" DNS record for your domain name.  To do this, log in to your domain name registrar account, select your domain name, and choose "Edit DNS" (or something similar depending on which registrar you use).</p>
			<p style="text-align:justify;">Once there, add a new "C NAME" record called "search" and then point it to "search.idxnw.com".  Save the change, and in as soon as 30 minutes this change will be available on the internet (depending on how quickly your registrar updates their records), but realistically expect the change to take an hour or more to become active.  When you type 'http://search.&lt;yourdomainname&gt;' in to the address bar of your web browser and see the IDX Northwest logo then you know that this change has taken effect and that you're ready to proceed on to the next steps.</p>
			<p><?php echo '<img src="' .plugins_url( 'images/settings-cname.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:691px;height:388px;border:2px #DEDEDE solid;">'; ?><br>The image above shows how this step might appear if your domain name registrar is GoDaddy or one of their many resellers.</p>
			<p style="text-align:justify;">What this all does is let the search engines index every listing and bit of information presented by the IDX on your web site and attribute it to your domain name for proper credit and ranking.</p>
			<p style="text-align:justify;">Once you have created the C NAME, write it down in the form of cname.yourdomain.com, as you will need this information later.</p>

			<h2>Create a Multi-Type Search Page</h2>
			<p style="text-align:justify;">Go to the "Pages &gt; Add New" menu in the Wordpress admin panel and create a new page that will serve as the search box redirect page for your site.  Several features of this plugin, such as the Multi-Type Search Box, and various data widgets, require that this page be created on your site for them to function properly.</p><p style="text-align:justify;">Once you have created the page, write down the page's Permalink that appears directly below the page title box once you have saved the page as you will need this information later.</p>
			<p style="text-align:justify;">If your Permalink looks like "http://www.yourdomain.com/property-search/search-box-results/" then you'll want to write down "/property-search/search-box-results/"
			<p><?php echo '<img src="' .plugins_url( 'images/settings-searchbox-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></p>
			<p style="text-align:justify;">While on the Wordpress page edit screen for the new multi-type search page that you have created, click the "HTML" tab of the page entry box so that you are entering in HTML mode, and copy and paste the following in to the box, then publish the change.</p>
<pre style="padding:10px;background-color:#EFEFEF;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
&lt;?php
$URLinput =  $_SERVER['QUERY_STRING'];
if ( $URLinput == "" ) { $URLoutput = ""; } else { $URLoutput = "fwp=1&" . $URLinput; }
?&gt;
&lt;iframe src="http://&lt;?php echo $GLOBALS['IDXNW_SEARCHCANONICAL']; ?&gt;/wp-searchbox-redirect.html?&lt;?php echo $URLoutput; ?&gt;" height="2500" width="100%" frameborder="0" style="background-color:white;overflow:auto;"&gt;&lt;/iframe&gt;
</pre>

			<h2>Create a Map Search Page</h2>
			<p style="text-align:justify;">Go to the "Pages &gt; Add New" menu in the Wordpress admin panel and create a new page that will serve as the main map search page for your site.  Several features of this plugin, such as the Multi-Type Search Box, and various data widgets, require that this page be created on your site for them to function properly.</p><p style="text-align:justify;">Once you have created the page, write down the page's Permalink that appears directly below the page title box once you have saved the page as you will need this information later.</p>
			<p style="text-align:justify;">If your Permalink looks something like "http://www.yourdomain.com/property-search/map-search/" then you'll want to write down "/property-search/map-search"
			<p><?php echo '<img src="' .plugins_url( 'images/settings-mapsearch-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></p>
			<p style="text-align:justify;">While on the Wordpress page edit screen for the new map search page that you have created, click the "HTML" tab of the page entry box so that you are entering in HTML mode, and copy and paste the following in to the box, then publish the change.</p>
<pre style="padding:10px;background-color:#EFEFEF;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
&lt;?php
$URLinput =  $_SERVER['QUERY_STRING'];
if ( $URLinput == "" ) { $URLoutput = "&city=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&resicheck=1&condcheck=0&manucheck=0&vaclcheck=0&rentcheck=0&multcheck=0&sort=plowhigh&bed=0&bath=0&pl=0&ph=0&sfl=0&sfh=0"; } else { $URLoutput = "&" . $URLinput; }
?&gt;
[idxnw_show_mapsearch_2 width="100%" height="690" api="&lt;?php echo $URLoutput; ?&gt;"]
</pre>
			<h2>Create a Text Search Page</h2>
			<p style="text-align:justify;">Go to the "Pages &gt; Add New" menu in the Wordpress admin panel and create a new page that will serve as the main text search page for your site.  Several features of this plugin, such as the Multi-Type Search Box, and various data widgets, require that this page be created on your site for them to function properly.</p><p style="text-align:justify;">Once you have created the page, write down the page's Permalink that appears directly below the page title box once you have saved the page as you will need this information later.</p>
			<p style="text-align:justify;">If your Permalink looks something like "http://www.yourdomain.com/property-search/advanced-search/" then you'll want to write down "/property-search/advanced-search"
			<p><?php echo '<img src="' .plugins_url( 'images/settings-advancedsearch-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></p>
			<p style="text-align:justify;">While on the Wordpress page edit screen for the new text search page that you have created, click the "HTML" tab of the page entry box so that you are entering in HTML mode, and copy and paste the following in to the box, then publish the change.</p>
<pre style="padding:10px;background-color:#EFEFEF;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
&lt;?php
$URLinput =  $_SERVER['QUERY_STRING'];
if ( $URLinput == "" ) { $URLoutput = "&s=1&ps=7&ps2=13&ps3=32&cd=1&type=resi&mapshow=1&r1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&c1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&m1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&t1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&v1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&j1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&f1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&b1=" . $GLOBALS['IDXNW_DEFAULTCITY'] . "&i1=" . $GLOBALS['IDXNW_DEFAULTCITY']; } else { $URLoutput = "&" . $URLinput; }
?&gt;
[idxnw_show_advancedsearch width="100%" height="3200" api="&lt;?php echo $URLoutput; ?&gt;"]
</pre>
			<h2>Create a Property Flyer (listing details) Page</h2>
			<p style="text-align:justify;">Go to the "Pages &gt; Add New" menu in the Wordpress admin panel and create a new page that will serve as the main property flyer page for your site.  Several features of this plugin, such as the Multi-Type Search Box, and various data widgets, require that this page be created on your site for them to function properly.</p><p style="text-align:justify;">Once you have created the page, write down the page's Permalink that appears directly below the page title box once you have saved the page, and the exact title that you have given to the page, as you will need this information later.</p>
			<p style="text-align:justify;">If your Permalink looks something like "http://www.yourdomain.com/property-search/property-details/" then you'll want to write down "/property-search/property-details", and if you named your page "Property Details by MLS #" then you'll want to write that down exactly as you have named it, being sure to include any capital letters and/or special characters precisely.
			<p><?php echo '<img src="' .plugins_url( 'images/settings-flyer-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></p>
			<p><?php echo '<img src="' .plugins_url( 'images/settings-flyertitle-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></p>
			<p style="text-align:justify;">While on the Wordpress page edit screen for the new property flyer page that you have created, click the "HTML" tab of the page entry box so that you are entering in HTML mode, and copy and paste the following in to the box, then publish the change.</p>
<pre style="padding:10px;background-color:#EFEFEF;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
&lt;?php
$URLinput =  $_GET["ln"];
if ( $URLinput == "" ) { $URLoutput = "&nbg=1&ln="; } else { $URLoutput = "&nbg=1&ln=" . $URLinput; }
?&gt;
&lt;center&gt;[idxnw_show_flyer width="100%" height="3700" api="&lt;?php echo $URLoutput; ?&gt;"]&lt;/center&gt;
</pre>
			<h2>Create an RSS Feed Page</h2>
			<p style="text-align:justify;">Go to the "Pages &gt; Add New" menu in the Wordpress admin panel and create a new page that will serve as the main RSS feed page for your site.  Creating this page on your site is entirely optional, but it is strongly recommended since search engines just love to consume RSS feeds.  If you would prefer not to have a link to the RSS page appear in your site's main menu then a great alternative for placement would be adding a link to the page in your site's footer.</p>
			<p style="text-align:justify;">While on the Wordpress page edit screen for the new RSS feed page that you have created, click the "HTML" tab of the page entry box so that you are entering in HTML mode, and copy and paste the following in to the box, then publish the change.</p>
<pre style="padding:10px;background-color:#EFEFEF;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
&lt;?php
$data = file_get_contents("http://" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "/rss/rssfeeds-wa.html?id=" . $GLOBALS['IDXNW_CLIENTID'] . "&wpd=" . $GLOBALS['IDXNW_SEARCHCANONICAL'] . "&wpf=" . $GLOBALS['IDXNW_SITECANONICAL'] . $GLOBALS['IDXNW_FLYERURI']);
echo $data;
?&gt;
</pre>
			<br><h2>Move on to Step 2 &gt;&gt;&gt;</h2>
		</div>
		<div id="step2">
			<p style="text-align:justify;">Please note that this plugin is in the "beta testing" phase of development and we recommend that versions prior to version 1.0 be deployed only on a non-production site.  Future versions will be released through the standard Wordpress plugin update mechanism and you are strongly encouraged to update as soon as you are notified that a new version is available.  ALWAYS perform a full backup of your Wordpress site and database before installing or upgrading ANY plugin!</p>
			<hr>
			<h2>Update Plugin Settings</h2>
			<p style="text-align:justify;">Using the information that you've written down from Step One, and the information contained in the memo section of your IDX Northwest service invoice, you're ready to configure the plugin to your site.</p><p style="text-align:justify;">Navigate to the "IDX Northwest &gt; Plugin Settings" page and input the site structure that you've just created in to the appropriate text boxes.</p>
			<br><h2>Move on to Step 3 &gt;&gt;&gt;</h2>
		</div>
		<div id="step3">
			<p style="text-align:justify;">Please note that this plugin is in the "beta testing" phase of development and we recommend that versions prior to version 1.0 be deployed only on a non-production site.  Future versions will be released through the standard Wordpress plugin update mechanism and you are strongly encouraged to update as soon as you are notified that a new version is available.  ALWAYS perform a full backup of your Wordpress site and database before installing or upgrading ANY plugin!</p>
			<hr>
			<h2>Add IDX Shortcodes</h2>
			<p style="text-align:justify;">Now that your plugin is configured, it's time to add IDX functions to your site based on your needs.  Visit the "IDX Northwest &gt; Documentation" page to view all of the functions and widgets that are avialable for you to choose from.  You'll find documentation on how to configure each function or widget in the documentation section of this plugin.</p>
			<br><h2>Move on to Step 4 &gt;&gt;&gt;</h2>
		</div>
		<div id="step4">
			<p style="text-align:justify;">Please note that this plugin is in the "beta testing" phase of development and we recommend that versions prior to version 1.0 be deployed only on a non-production site.  Future versions will be released through the standard Wordpress plugin update mechanism and you are strongly encouraged to update as soon as you are notified that a new version is available.  ALWAYS perform a full backup of your Wordpress site and database before installing or upgrading ANY plugin!</p>
			<hr>
			<h2>You're All Set and Away You Go!</h2>
			<p style="text-align:justify;">Enjoy!</p>
		</div>
	</div>
	<br/><hr>
	<p>Copyright &copy; 2007-<?php echo date("Y"); ?> <a href="http://www.idxnw.com" target="_blank">IDX Northwest, LLC</a> - All Rights Reserved.</p>
</div>
