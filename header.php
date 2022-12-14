<?php
/*
 * The Header for Scout Troop theme.
 * Displays all of the <head> section and everything up till <div id="wrapper">
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>
        <?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?><?php echo " | " . get_bloginfo( 'description' )?>
    </title>
    <!--[if (lt IE 9)&(!IEMobile)]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js" /></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script />
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" /></script>
	<![endif]-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href='//fonts.googleapis.com/css?family=Marcellus&subset=latin-ext,latin' />
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <p class="skip"><a accesskey="C" href="#wrapper">Skip to content</a>. <a accesskey="N" href="#main-navigation">Skip
            to main navigation</a>.</p>

    <header id="page-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
            title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="mobile-logo"
                src="<?php echo get_template_directory_uri(); ?>/images/Universal_Emblem_tiny.gif" alt="B.S.A. 
Fleur De Lis" />
            <img id="fleurdelis" src="<?php echo get_template_directory_uri(); ?>/images/sardarabad-home.png"
                alt="Logo Grupo Escoteiro Sardarabad"  style="height: 110px; width: auto; padding-right: 4px; float: left;border-right: #0A335A 3px solid;"/>
            <div style="clear: none; float: left; height: 100%; margin-left: 10px;">
                <div style="position: relative;top: 50%;transform: translateY(-50%); height: 50%">
                    <h1 id="site-name" rel="home"><?php bloginfo( 'name' ); ?></h1>
                    <h2 id="charter-box"><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
        </a>
        <div style="float: right;border-left: #0A335A 3px solid;">
            <a href="https://www.escoteiros.org.br" title="Uni??o dos Escoteiros do Brasil" target="_blank">
                <img id="ueb-logo" src="<?php echo get_template_directory_uri(); ?>/images/ueb.png" alt="Emblema U.E.B."
                    style="height: 110px;" />
            </a>
        </div>
    </header>
    <div id="main-navigation">
        <div class="menu-button">Menu</div>
        <?php 
		// If a menu has been assigned to the top-navigation location, show it here else show the default one.
		if ( has_nav_menu( 'top-navigation' ) ) {
		 wp_nav_menu( array( 
					'theme_location' => 'top-navigation',
					'container'       => 'nav',
					'container_class' => '',
					'menu_class' => 'flexnav', //Adding the class for FlexNav
					'items_wrap' => '<ul data-breakpoint="767" id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
				 ) ); 
		}
		else {
			echo "<div style='width:100%;text-align:center;font-weight:bold;color:white;'>You must add a Navigation Menu: In WP Admin go to Appearance -> Menus. Create a Menu and assign it to the location Top Navigation.</div>";
			} 

		?>
    </div>
    <div id="wrapper">