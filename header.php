<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krystof-marasek
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'krystof-marasek' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header container-fluid">
            <div class="header-row row d-flex">
                <div class="desktop-menu-container d-flex justify-content-between">

                    <div class="left-menu-container d-flex col-xl-3 col-lg-3 col-6 align-items-center justify-content-start" >
                        <div class="col-xl-2 col-lg-2 col-1"></div>
						<div class="logo-container col-10">
                            <div class="image-container d-flex justify-content-start align-items-center">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                    </div>

					<div class="right-menu-container col-xl-4 col-lg-4 col-6 d-flex align-items-center">
						<div class="header-navigation col-10 d-none d-xl-flex g-2">
							<nav id="site-navigation" class="main-navigation">
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
						<div class="col-2"></div>

						<div class="mobile-navigation d-flex d-xl-none justify-content-end g-2">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <div class="hamburger">
                                    <div class="bars1"></div>
                                    <div class="bars2"></div>
                                    <div class="bars3"></div>
                                </div>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                  <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h4>
                                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
									<?php wp_nav_menu(array("theme_location" => "mobile-nav-menu-location")) ?>
                                </div>
                            </div>
                        </div>
					</div>
                </div> 
            </div>
        </div>
	</header><!-- #masthead -->
