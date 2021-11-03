<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title></title>
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Titillium+Web&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
	                $custom_logo_id = get_theme_mod( 'custom_logo' );
	                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	
	                if ( has_custom_logo() ) {
		                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="128">';
	                }
                }
            ?>
        </a>
        <br />
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>