<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<header>
    <section class="wrapp-menu">
        <h1>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() . '/images/logo.png'?>" alt="Skokov"/>
                Skokov
            </a>
        </h1>
        <?php
        if ( function_exists( 'wp_nav_menu' ) )
            wp_nav_menu(
                array(
                    'theme_location' => 'custom-menu',
                    'fallback_cb'=> 'custom_menu',
                    'container' => 'ul',
                    'menu_id' => 'nav',
                    'menu_class' => 'nav')
            );
        else custom_menu();
        ?>
    </section>
    <section class="wrapp-item">
        <h2>
            Blog
        </h2>
    </section>


</header>