<?php
if ( $_POST["idxnw_settings_hidden"] == "Y" ) {
	if ( get_option( 'idxnw_clientid' ) != $_POST["idxnw_clientid"] ) { update_option( 'idxnw_clientid', $_POST["idxnw_clientid"] ); }
	if ( get_option( 'idxnw_lag' ) != $_POST["idxnw_lag"] ) { update_option( 'idxnw_lag', $_POST["idxnw_lag"] ); }
	if ( get_option( 'idxnw_officeid' ) != $_POST["idxnw_officeid"] ) { update_option( 'idxnw_officeid', $_POST["idxnw_officeid"] ); }
	if ( get_option( 'idxnw_defaultcity' ) != $_POST["idxnw_defaultcity"] ) { update_option( 'idxnw_defaultcity', $_POST["idxnw_defaultcity"] ); }
	if ( get_option( 'idxnw_sitecanonical' ) != $_POST["idxnw_sitecanonical"] ) { update_option( 'idxnw_sitecanonical', $_POST["idxnw_sitecanonical"] ); }
	if ( get_option( 'idxnw_searchcanonical' ) != $_POST["idxnw_searchcanonical"] ) { update_option( 'idxnw_searchcanonical', $_POST["idxnw_searchcanonical"] ); }
	if ( get_option( 'idxnw_mapsearchuri' ) != $_POST["idxnw_mapsearchuri"] ) { update_option( 'idxnw_mapsearchuri', $_POST["idxnw_mapsearchuri"] ); }
	if ( get_option( 'idxnw_textsearchuri' ) != $_POST["idxnw_textsearchuri"] ) { update_option( 'idxnw_textsearchuri', $_POST["idxnw_textsearchuri"] ); }
	if ( get_option( 'idxnw_flyeruri' ) != $_POST["idxnw_flyeruri"] ) { update_option( 'idxnw_flyeruri', $_POST["idxnw_flyeruri"] ); }
	if ( get_option( 'idxnw_flyername' ) != $_POST["idxnw_flyername"] ) { update_option( 'idxnw_flyername', $_POST["idxnw_flyername"] ); }
	if ( get_option( 'idxnw_multisearchmessageuri' ) != $_POST["idxnw_multisearchmessageuri"] ) { update_option( 'idxnw_multisearchmessageuri', $_POST["idxnw_multisearchmessageuri"] ); }
	if ( $_POST["idxnw_mobileredirect"] == "1" ) { update_option( 'idxnw_mobileredirect', '1' ); } else { update_option( 'idxnw_mobileredirect', '0' ); }
	if ( $_POST["idxnw_flyertitle"] == "1" ) { update_option( 'idxnw_flyertitle', '1' ); } else { update_option( 'idxnw_flyertitle', '0' ); }
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
}

?>

<div class="wrap">
	<?php echo '<a href="http://www.idxnw.com" target="_blank"><img src="' .plugins_url( 'images/logo-h.png' , __FILE__ ). '" style="float:right;padding-left:20px;vertical-align:top;"></a>'; ?>
	<h1>IDX Northwest Real Estate Search Platform</h1>
	<h2 style="color:#218ac2;">Settings</h2>
	<hr>
	<p style="text-align:justify;">Please enter your IDX Northwest account and your website URL information in to the boxes below.  If you have any questions on this then please contact IDXNW support at support@idxnw.com.</p><br/>
	<form name="idxnw_settings_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
		<input type="hidden" name="idxnw_settings_hidden" value="Y">  
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options', 'idxnw_basicsettings' ) ?>"/></p>  
		<?php echo "<h3 style='color:#218ac2;'>" . __( 'IDX Northwest Account Settings', 'idxnw_basicsettings' ) . "</h3>"; ?>
		<table style="border-collapse:collapse;">
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("IDXNW Client ID:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_clientid" value="<?php echo $GLOBALS['IDXNW_CLIENTID']; ?>" size="20"><br/><?php _e("<u>example</u>: 12345678<p>You can find your IDXNW client ID in the memo section of your service invoice.</p>" ); ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("NWMLS LAG Number:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_lag" value="<?php echo $GLOBALS['IDXNW_LAG']; ?>" size="20"><br/><?php _e("<u>example</u>: 12345" ); ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("NWMLS Office ID Number:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_officeid" value="<?php echo $GLOBALS['IDXNW_OFFICEID']; ?>" size="20"><br/><?php _e("<u>example</u>: 1234" ); ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Default Search City:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_defaultcity" value="<?php echo $GLOBALS['IDXNW_DEFAULTCITY']; ?>" size="20"><br/><?php _e("<u>example</u>: seattle<p>This is the city that the map search and advanced (text) search will use as a starting point if you do not use the API to set a specific starting city.</p>" ); ?></td>
			</tr>
			<tr><td colspan="2"><h3 style="color:#218ac2;">Your Site's Settings</h3></td></tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Your Site's Domain Name:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_sitecanonical" value="<?php echo $GLOBALS['IDXNW_SITECANONICAL']; ?>" size="40"><br/><?php _e("<u>example</u>: www.yourdomainname.com" ); ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Search (C NAME) Subdomain:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_searchcanonical" value="<?php echo $GLOBALS['IDXNW_SEARCHCANONICAL']; ?>" size="40"><br/><?php _e("<u>example</u>: search.yourdomainname.com" ); ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Map Search Permalink:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_mapsearchuri" value="<?php echo $GLOBALS['IDXNW_MAPSEARCHURI']; ?>" size="40"><br/><?php _e("<u>example</u>: /property-search/map-search" ); ?><br><?php echo '<img src="' .plugins_url( 'images/settings-mapsearch-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Advanced (text) Search Permalink:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_textsearchuri" value="<?php echo $GLOBALS['IDXNW_TEXTSEARCHURI']; ?>" size="40"><br/><?php _e("<u>example</u>: /property-search/advanced-search" ); ?><br><?php echo '<img src="' .plugins_url( 'images/settings-advancedsearch-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Flyer Page Permalink:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_flyeruri" value="<?php echo $GLOBALS['IDXNW_FLYERURI']; ?>" size="40"><br/><?php _e("<u>example</u>: /property-search/property-details" ); ?><br><?php echo '<img src="' .plugins_url( 'images/settings-flyer-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Flyer Page Title:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_flyername" value="<?php echo $GLOBALS['IDXNW_FLYERNAME']; ?>" size="40"><br/><?php _e("<u>example</u>: Property Details by MLS #" ); ?><br><?php echo '<img src="' .plugins_url( 'images/settings-flyertitle-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Multi-Type Search Permalink:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="text" name="idxnw_multisearchmessageuri" value="<?php echo $GLOBALS['IDXNW_MULTISEARCHMESSAGEURI']; ?>" size="40"><br/><?php _e("<u>example</u>: /property-search/search-box-results" ); ?><br><?php echo '<img src="' .plugins_url( 'images/settings-searchbox-perma.png' , __FILE__ ). '" style="margin-top:5px;margin-bottom:10px;width:525px;height:118px;border:2px #DEDEDE solid;">'; ?></td>
			</tr>
			<tr><td colspan="2"><h3 style="color:#218ac2;">IDX Feature Settings</h3></td></tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Redirect Mobile Visitors:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="checkbox" name="idxnw_mobileredirect" value="1"<?php if ($GLOBALS['IDXNW_MOBILEREDIRECT'] == "1" ) { echo " checked"; } ?>><br/><?php _e("Check the box to detect visitors using a supported mobile device and automatically redirect them to the Mobile IDX." ); ?></td>
			</tr>
			<tr>
				<td style="width:225px;font-weight:bold;vertical-align:top;padding-bottom:15px;"><?php _e("Rewrite Flyer Title:" ); ?></td>
				<td style="font-style:italic;vertical-align:top;padding-bottom:15px;"><input type="checkbox" name="idxnw_flyertitle" value="1"<?php if ($GLOBALS['IDXNW_FLYERTITLE'] == "1" ) { echo " checked"; } ?>><br/><?php _e("Check the box to rewrite the flyer page &lt;title&gt; tag to include listing information for the property being viewed.  We highly recommend that this feature remain enabled for better SEO placement." ); ?></td>
			</tr>
		</table>
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options', 'idxnw_basicsettings' ) ?>"/></p>  
	</form>  
	<br/><hr>
	<p>Copyright &copy; 2007-<?php echo date("Y"); ?> <a href="http://www.idxnw.com" target="_blank">IDX Northwest, LLC</a> - All Rights Reserved.</p>
</div>
