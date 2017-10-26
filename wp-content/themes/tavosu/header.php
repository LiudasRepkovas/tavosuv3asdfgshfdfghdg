<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo ( 'description' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="page-wrapper clearfix">
    <!--<button id="scrollToTop" title="Go to top">
            <img src="<?php bloginfo('template_directory');?>/img/arrow.png" style="width:41px; height: 41px;">
            <img class="hover" src="<?php bloginfo('template_directory');?>/img/arrowhover.png" style="width:41px; height: 41px;">
    </button>-->


    <div class="sidebar-navigation">
        <a class="logo-wrap" href="<?php echo home_url()?>">
            <span>TAVOSU</span>
            <!--<img class="logo" src="<?php header_image()?>" nopin = "nopin">-->
        </a>
        <div class="menu-icon">
            <span></span>
        </div>
        <?php wp_nav_menu(array('menu' => 'Main menu'));?>
    </div>
    <div class="mobile-menu">
            <?php wp_nav_menu(array('menu' => 'Main menu'));?>
        </div>
    <div class="content container">
        <div class="not-footer">




