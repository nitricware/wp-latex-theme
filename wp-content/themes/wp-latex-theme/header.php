<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title></title>
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Titillium+Web&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>