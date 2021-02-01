<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
	<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- css -->
    <?php wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css'); ?>
    <?php wp_enqueue_style('reset-css', 'https://unpkg.com/ress/dist/ress.min.css'); ?>
    <?php wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css'); ?>
    <!-- Javascript -->
    <?php wp_enqueue_style('index-js', get_template_directory_uri() . '/index.js'); ?>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body class="light-mode">
<?php wp_body_open(); ?>
    <div id="loading" class="loading"></div>
        <header class="container-header">
            <nav class="nav-header">
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-home">HOME</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-about">ABOUT</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-concept">CONCEPT</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-skills">SKILLS</a></h4></div>
                <div class="header-item"><h4><a class="smooth-scroll" href="#my-sns">SNS</a></h4></div>
            </nav>
            <input id="switch-mode" class="switch-mode" type="checkbox">
            <label for="switch-mode" id="switch-mode-button" class="switch-mode-button light-mode-button"></label>
        </header>