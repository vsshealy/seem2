<?php 
    /**
     * php/scripts/head/files/header-scripts.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<!-- FAVICON -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-seem-160x160.png"/>

<!-- FONTS -->
<?php include(get_template_directory()."/src/php/scripts/external/fonts/open-sans.php"); ?>
<?php include(get_template_directory()."/src/php/scripts/external/fonts/roboto-slab.php"); ?>

<!-- FONT-AWESOME -->
<link href="<?php echo get_template_directory_uri(); ?>/bin/fontawesome-5.15.2/css/all.css" rel="stylesheet">

<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- FRAMEWORK -->
<?php include(get_template_directory()."/src/php/scripts/external/bootstrap/header.php"); ?>

<!-- GOOGLE ANALYTICS -->
<?php include(get_template_directory()."/src/php/scripts/external/analytics/header.php"); ?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css"/>