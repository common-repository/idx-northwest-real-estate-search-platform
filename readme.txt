=== Plugin Name ===
Contributors: IDX Northwest
Donate link: http://www.idxnw.com/
Tags: idx northwest, idx, real estate, nwmls
Requires at least: 3.3
Tested up to: 3.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables the general and Wordpress-specific IDX Northwest real estate search platform features.

== Description ==

Enables the general and Wordpress-specific IDX Northwest real estate search platform features and you must be an active client of IDX Northwest to make use of the features of this plugin.

Remember to ALWAYS fully backup your Wordpress site and database before installing or upgrading ANY plugin!

If you have any questions on the installation or fundamental functions of this plugin then please contact IDXNW support.

This plugin is in the late beta testing phase of development and you can expect that new features, bug fixes, and updates to existing features will be released often.  Be sure to update this plugin as soon as you receive notification that a new version is available.

== Installation ==

1. Upload the entire `idx-northwest-real-estate-search-platform` folder to the to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to the 'IDX Northwest' menu and follow the built-in instructions to configure the plugin.

== Changelog ==

= 0.46 (8-7-13) =
* ALERT: *** THIS IS A REMINDER TO ALWAYS BACKUP YOUR CSS FILES FOR THIS PLUGIN BEFORE UPGRADING VERSIONS - The default file(s) in the plugin's /css directory will be overwritten and reset to default upon upgrading versions, so be sure to always backup this directory before upgrading if you've customized the plugin's CSS! ***
* An "oops" release to fix a detail in in the new "IDXtour Admin Panel" page.

= 0.45 (8-7-13) =
* ALERT: *** THIS IS A REMINDER TO ALWAYS BACKUP YOUR CSS FILES FOR THIS PLUGIN BEFORE UPGRADING VERSIONS - The default file(s) in the plugin's /css directory will be overwritten and reset to default upon upgrading versions, so be sure to always backup this directory before upgrading if you've customized the plugin's CSS! ***
* NEW: Added "IDXtour Admin Panel" menu item to the IDXNW plugin's menu in the Wordpress admin panel's interface for convenience.
* NEW: Added "[IDXNW] Sidebar Quick Search 2" widget - A second css styled version of the sidebar multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, MLS number, price range, or bed and baths.  You may also add lead-in call to action text that introduces the widget, such as "Property Quick Search".  The CSS styles for this widget can be modified in the '/css/main.css' file.
* NEW: Added "[IDXNW] Multitype Search Box - Wide 2" widget - A second css styled version of the single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is best in wide areas where it has the full width of the page, or main section that has a sidebar.  You may also add lead-in call to action text that introduces the widget, such as "Begin Your Property Search Here:".  The CSS styles for this widget can be modified in the '/css/main.css' file.
* NEW: Added "[IDXNW] Multitype Search Box - Small 2" widget - A second css styled version of the single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is great for areas where width is a premium, such as in a page's header or in a sidebar.  The CSS styles for this widget can be modified in the '/css/main.css' file.
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.44 (8-4-13) =
* ALERT: *** THIS IS A REMINDER TO ALWAYS BACKUP YOUR CSS FILES FOR THIS PLUGIN BEFORE UPGRADING VERSIONS - The default file(s) in the plugin's /css directory will be overwritten and reset to default upon upgrading versions, so be sure to always backup this directory before upgrading if you've customized the plugin's CSS! ***
* NEW: Added "[IDXNW] Multitype Search Box - Wide" widget - A single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is best in wide areas where it has the full width of the page, or main section that has a sidebar.  You may also add lead-in call to action text that introduces the widget, such as "Begin Your Property Search Here:".  The CSS styles for this widget can be modified in the '/css/main.css' file.
* NEW: Added "[IDXNW] Multitype Search Box - Small" widget - A single line multi-type search box widget that allows visitors to quickly jump to a search based on city, neighborhood, zip code, or MLS number.  This widget is great for areas where width is a premium, such as in a page's header or in a sidebar.  The CSS styles for this widget can be modified in the '/css/main.css' file.
* UPDATED: Added a new 'include' attribute to the idxnw_show_h_featuredneighborhoods shortcode.  With this new attribute you can specify more than one specific city to be shown and all others will be omitted.  It is the inverse of the 'exclude' attribute.  Continue to use the 'city' attribute if you only wish to specific a single city, but use the new 'include' attribute if you wish to select more than one specific city.
* UPDATED: "[IDXNW] Sidebar Quick Search" widget updated to add CSS classes for the container div, text box, drop downs, and text labels to be independent of each other.
* UPDATED: Modified the code for the "Access Property Flyer by Short URL" passive function.  The function will now only redirect a visitor to the property details page if the URI is in the form of http://your-domain-name/12345 and Wordpress will again process the URI as it normally would if it's in any other form.  This corrects a bug where, in some more rare situations, if a WP page required pagination and had a trailing integer value in the URI then this function would inappropriately intercept the request.
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.43 (7-30-13) =
* UPDATED: Documentation.

= 0.42 (7-29-13) =
* NEW: Initiated native css to the plugin via the /css directory.  All future features can and will use css file to allow direct style customization by the client.
* UPDATED: Converted "[IDXNW] Sidebar Quick Search" widget code to use new external css file classes.  Added 'idxnw-qsb-tbox' and 'idxnw-qsb-submit' classes for this purpose.
* UPDATED: Set Redirect Mobile Visitors feature settings to 'off' by default.  To enable this feature upon initial installation of this plugin you will now need to manually check the box and save the settings.
* UPDATED: Fixed issue with automatic rewriting of <title> tag with the specific listing's info on the property flyer page, and this function should now work properly unless forcibly overwritten by another SEO plugin that you may also have installed.
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.41 (5-25-13) =
* NEW: Added Neighborhood Listings Gallery shortcode (idxnw_show_nh_listingsgallery).
* UPDATED: Added optional "st=", "pl=", and "ph=" switches to data widget 'idxnw_show_activesoldshowcase' that allow you to force the listing status, and/or constraign the low and high price range, of properties that are displayed.
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.40 (3-31-2013) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.39 (3-31-2013) =
* NEW: Added Recently Viewed Listings shortcode for sidebars (idxnw_show_v_sb_recentlyviewed).
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.38 (3-14-2013) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.37 (1-4-2013) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.36 (1-4-2013) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.35 (12-25-2012) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.34 (12-25-2012) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.33 (12-24-2012) =
* NEW: Added Quick Search Widget ([IDXNW] Sidebar Quick Search).
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Miscellaneous minor bug fixes.
* UPDATED: Documentation.

= 0.32 (12-01-2012) =
* UPDATED: Documentation.

= 0.31 (11-30-2012) =
* UPDATED: Miscellaneous code cleanup.
* UPDATED: Documentation.

= 0.30 (11-30-2012) =
* UPDATED: Removed dependence on the third-party plugin "WYSIWYG Widgets" and added the required functionality natively to this plugin (see next line item for details).  If you have previously installed "WYSIWYG Widgets", and have no other use for it, then please feel free to deactivate and delete that plugin from your site since it is no longer required by this plugin.
* NEW: Added ability for shortcodes to be fired from within the standard Wordpress text widget.
* UPDATED: Documentation.

= 0.29 (11-30-2012) =
* UPDATED: Removed an unused (and previously commented out) function.
* NEW: Amended the function that allows PHP execution in the standard Wordpress text widget.
* UPDATED: Documentation.

= 0.28 (11-30-2012) =
* UPDATED: Documentation.

= 0.27 (11-30-2012) =
* UPDATED: Documentation.

= 0.26 (11-30-2012) =
* UPDATED: Cleanup of code and addressed a previously undiscovered initial installation error.

= 0.25 (11-30-2012) =
* NEW: Initial public beta release.
