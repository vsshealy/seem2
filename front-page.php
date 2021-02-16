<?php 
    /**
     * front-page.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<!DOCTYPE HTML>
<!-- SEEM | SOUTHEAST ENERGY EXCHANGE MARKET | INFO@SOUTHEASTENERGYMARKET.COM -->

<html id="seem" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        <?php include(get_template_directory()."/src/php/scripts/head/front-page.php"); ?>
    </head>

    <!-- BODY -->
    <body <?php body_class(); ?> class="page">

        <!-- HEADER -->
        <?php include(get_template_directory()."/header.php"); ?>

        <!-- CONTENT | (FRONT-)PAGE.PHP -->
        <?php include(get_template_directory()."/src/php/theme/templates/front-page.php"); ?>
        
        <!-- FOOTER -->
        <?php include(get_template_directory()."/footer.php"); ?>

        <!-- SCRIPTS -->
        <?php include(get_template_directory()."/src/php/scripts/footer/footer-scripts.php"); ?>
        
    </body>

</html>