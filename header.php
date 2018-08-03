<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <meta name="keywords" content="">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/aos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/style.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

<?php get_template_part("partials/organisms/header"); ?>