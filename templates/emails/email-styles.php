<?php
/**
 * Email Styles
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Load colours
$bg              = get_option( 'woocommerce_email_background_color' );
$body            = get_option( 'woocommerce_email_body_background_color' );
$base            = get_option( 'woocommerce_email_base_color' );
$base_text       = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text            = get_option( 'woocommerce_email_text_color' );

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
?>
#wrapper {
    background-color: <?php echo esc_attr( $bg ); ?>;
    width: 100%;
    -webkit-text-size-adjust: none !important;
    margin: 0;
    padding: 70px 0 70px 0;
}
#template_container {
    box-shadow: 0 0 0 3px rgba(0,0,0,0.025) !important;
    border-radius: 6px !important;
    background-color: <?php echo esc_attr( $body ); ?>;
    border: 1px solid $bg_darker_10;
    border-radius: 6px !important;
}
#template_header {
    background-color: <?php echo esc_attr( $base ); ?>;
    color: <?php echo $base_text; ?>;
    border-top-left-radius:6px !important;
    border-top-right-radius:6px !important;
    border-bottom: 0;
    font-family:Arial;
    font-weight:bold;
    line-height:100%;
    vertical-align:middle;
}
#body_content {
    background-color: <?php echo esc_attr( $body ); ?>;
    border-radius:6px !important;
}
#body_content_inner {
    color: <?php echo $text_lighter_20;?>;
    font-family:Arial;
    font-size:14px;
    line-height:150%;
    text-align:left;
}
h1 {
    color: <?php echo esc_attr( $base_text ); ?>;
    margin:0;
    padding: 28px 24px;
    text-shadow: 0 1px 0 <?php echo $base_lighter_20; ?>;
    display:block;
    font-family:Arial;
    font-size:30px;
    font-weight:bold;
    text-align:left;
    line-height: 150%;
}
<?php
