<!DOCTYPE html>
<html lang="de">
<head>
<title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
</head>
<body>

<header>
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
<?php get_template_part('template_parts/navi'); ?>
</header>