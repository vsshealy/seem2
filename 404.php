<?php 
    /**
     * 404.php
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
        <?php include(get_template_directory()."/src/php/scripts/head/page.php"); ?>
    </head>

    <!-- BODY -->
    <body class="page">

        <!-- HEADER -->
        <?php include(get_template_directory()."/header.php"); ?>

        <!-- CONTENT | 404.PHP -->
        <?php include(get_template_directory()."/src/php/theme/templates/404.php"); ?>

        <!-- FOOTER -->
        <?php include(get_template_directory()."/footer.php"); ?>

        <!-- SCRIPTS -->
        <?php include(get_template_directory()."/src/php/scripts/footer/footer-scripts.php"); ?>
        
    </body>

</html>