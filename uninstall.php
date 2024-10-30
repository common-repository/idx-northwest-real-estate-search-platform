<?php
if ( !defined('WP_UNINSTALL_PLUGIN') )
exit;

if ( get_option( 'idxnw_clientid' ) != false ) { delete_option( 'idxnw_clientid' ); }
if ( get_option( 'idxnw_lag' ) != false ) { delete_option( 'idxnw_lag' ); }
if ( get_option( 'idxnw_officeid' ) != false ) { delete_option( 'idxnw_officeid' ); }
if ( get_option( 'idxnw_defaultcity' ) != false ) { delete_option( 'idxnw_defaultcity' ); }
if ( get_option( 'idxnw_sitecanonical' ) != false ) { delete_option( 'idxnw_sitecanonical' ); }
if ( get_option( 'idxnw_searchcanonical' ) != false ) { delete_option( 'idxnw_searchcanonical' ); }
if ( get_option( 'idxnw_mapsearchuri' ) != false ) { delete_option( 'idxnw_mapsearchuri' ); }
if ( get_option( 'idxnw_textsearchuri' ) != false ) { delete_option( 'idxnw_textsearchuri' ); }
if ( get_option( 'idxnw_flyeruri' ) != false ) { delete_option( 'idxnw_flyeruri' ); }
if ( get_option( 'idxnw_flyername' ) != false ) { delete_option( 'idxnw_flyername' ); }
if ( get_option( 'idxnw_multisearchmessageuri' ) != false ) { delete_option( 'idxnw_multisearchmessageuri' ); }
if ( get_option( 'idxnw_mobileredirect' ) != false ) { delete_option( 'idxnw_mobileredirect' ); }
if ( get_option( 'idxnw_flyertitle' ) != false ) { delete_option( 'idxnw_flyertitle' ); }
if ( get_option( 'idxnw_qsb_widget_options' ) != false ) { delete_option( 'idxnw_qsb_widget_options' ); }
if ( get_option( 'idxnw_qsu_widget_options' ) != false ) { delete_option( 'idxnw_qsu_widget_options' ); }
if ( get_option( 'idxnw_qli_widget_options' ) != false ) { delete_option( 'idxnw_qli_widget_options' ); }
?>
