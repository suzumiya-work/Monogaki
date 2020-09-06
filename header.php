<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
<header class="site-header">
    <div>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php wp_nav_menu(array(
            'theme_location' => 'header-nav',
            'container' => 'nav'
        ));?>
        <?php //get_search_form(); ?>
    </div>
</header>