<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

<header>
    <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
    <p><?php bloginfo('description'); ?></p>
    <?php get_template_part('template_parts/navi'); ?>
</header>