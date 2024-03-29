<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('tittle'); ?> <?php bloginfo( 'description' ); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fox.svg">
    <meta http-equiv="content-language" content="en" />
    <meta name="google" content="notranslate" />
    <meta name="google-site-verification" content="bdt6v24j8lYXomIkX9xX59K0IPcoTZwHTZtLnudt0-0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header overlay-header">
    <div class="container">
        <a href="<?php echo site_url(); ?>">
            <span class="label"><?php bloginfo( 'title' ); ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.svg" alt="<?php echo bloginfo('title'); ?> logo" class="main-logo">
        </a>
        <?php get_template_part( 'partials/socials' ); ?>
    </div>
</header>


