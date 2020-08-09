<?php
/**
 * The header for page template "LP".
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magento
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'magento' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-top" id="header-top">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div>
			<div class="site-branding-alternative">
				<?php 
					$sticky_logo_url = get_theme_mod( 'sticky_header_logo' );
					$home_url = get_home_url();
					if ( $sticky_logo_url )
						echo '<a href="'.$home_url.'"><img src="'.$sticky_logo_url.'" alt="logo"></a>';
				?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'magento' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>

		<div class="header-content">
			<div class="header-info">
				<h1 class="header-title"><?php the_field("header_title"); ?></h1>
				<p class="header-description"><?php the_field("header_description"); ?></p>
				<button class="header-button">
					<?php 
					$link = get_field("header_button");
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</button>
			</div>	
			<div class="header-icons">
				<div class="icon-container one">
					<div class="header-icon"><img src="<?php echo get_bloginfo('template_url') ?>/images/icon1.png" alt="magento logo"></div>
					<div class="header-icon-tiny"><img src="<?php echo get_bloginfo('template_url') ?>/images/1.png" alt="number one icon"></div>
				</div>
				<div class="icon-container two">
					<div class="header-icon"><img src="<?php echo get_bloginfo('template_url') ?>/images/icon2.png" alt="shoping cart icon"></div>
				</div>
				<div class="icon-container three">
					<div class="header-icon"><img src="<?php echo get_bloginfo('template_url') ?>/images/icon3.png" alt="credit card icon"></div>
				</div>
				<div class="icon-container four">
					<div class="header-icon"><img src="<?php echo get_bloginfo('template_url') ?>/images/icon1.png" alt="magento logo"></div>
					<div class="header-icon-tiny"><img src="<?php echo get_bloginfo('template_url') ?>/images/2.png" alt="number two icon"></div>
				</div>
			</div>		
		</div>

		<div class="down" id="down">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/arrow-point-to-down.png" alt="go down" class="scroll-arrow">
		</div>

	</header><!-- #masthead -->
