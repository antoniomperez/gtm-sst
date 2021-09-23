<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Catch Themes
 * @subpackage E-commerce
 * @since E-commerce 1.2
 */

	/** 
	 * e_commerce_doctype hook
	 *
	 * @hooked e_commerce_doctype -  10
	 * 
	 */
	do_action( 'e_commerce_doctype' );
	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl+'&gtm_auth=R2hZsn8VECXhbNL609uSdg&gtm_preview=env-3&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-TVNG8V7');
		</script>
		<!-- End Google Tag Manager -->
<head>
<?php	
	/** 
	 * e_commerce_before_wp_head hook
	 *
	 * @hooked e_commerce_head -  10
	 * 
	 */
	do_action( 'e_commerce_before_wp_head' );

	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVNG8V7&gtm_auth=R2hZsn8VECXhbNL609uSdg&gtm_preview=env-3&gtm_cookies_win=x"
			height="0" width="0" style="display:none;visibility:hidden">
			</iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'wp_body_open' );  ?>

	<?php 
	/** 
	 * e_commerce_before_header hook
	 *
	 * @hooked e_commerce_page_start -  10
	 * 
	 */
	do_action( 'e_commerce_before_header' );


	/** 
	 * e_commerce_header hook
	 *
	 * @hooked e_commerce_header_start -  10
	 * @hooked e_commerce_site_banner_start -  20
	 * @hooked e_commerce_site_branding_start -  30
	 * @hooked e_commerce_logo_site_title -  40
	 * @hooked e_commerce_site_branding_end - 50
	 * @hooked e_commerce_header_left - 60
	 * @hooked e_commerce_header_right - 70
	 * @hooked e_commerce_site_banner_end - 80
	 * @hooked e_commerce_header_menu - 90
	 * @hooked e_commerce_primary_menu - 100
	 * @hooked e_commerce_header_end -  200
	 * 
	 */
	do_action( 'e_commerce_header' );


	/** 
	 * e_commerce_after_header hook
	 *
	 * @hooked e_commerce_featured_image_display - 30
	 * 
	 */
	do_action( 'e_commerce_after_header' );

	/** 
	 * e_commerce_content hook
	 *
	 * @hooked e_commerce_content_start - 10
	 * 
	 */
	do_action( 'e_commerce_content' );