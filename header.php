<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;
	wp_title();?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/default_style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="shortcut icon" href="/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <header class="header">
    	<div class="header-container">
            <div class="logo"><a href="/"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="<?php echo get_bloginfo('description'); ?>" /></a></div>
     		
            <div class="header-info">
                <h2><span>Your spotlight</span> on local services</h2>
                <h2><a href="01205820892">01205 820 892</a>
            </div>
        </div>  
    </header>

    <div class="wrapper navigation">
        <nav class="container">
            <div class="primary-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </div>
        </nav>
    </div>

    helllo