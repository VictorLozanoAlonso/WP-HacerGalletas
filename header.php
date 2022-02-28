<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Napoli
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6W51PVM6E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y6W51PVM6E');
</script>
<!-- Global site tag (gtag.js) - Google adsense -->	
<script data-ad-client="ca-pub-6301043847195730" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'napoli' ); ?></a>

		<header id="masthead" class="site-header clearfix" role="banner">

			<div class="header-main container clearfix">

				<div id="logo" class="site-branding clearfix">

					<?php napoli_site_logo(); ?>
					<?php napoli_site_title(); ?>
					<?php napoli_site_description(); ?>

				</div><!-- .site-branding -->

				<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>

			</div><!-- .header-main -->

			<?php do_action( 'napoli_header_menu' ); ?>

		</header><!-- #masthead -->

		<?php napoli_breadcrumbs(); ?>

		<?php napoli_header_image(); ?>

		<div id="content" class="site-content container clearfix">
