<?php 
    /**
     * php/scripts/footer/footer-scripts.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<div id="scripts-footer">

    <!-- THEME -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/src/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/src/js/retina/retina.min.js"></script>

    <!-- WP-FOOTER -->
    <?php wp_footer(); ?>

    <!-- FRAMEWORK -->
    <?php include(get_template_directory()."/src/php/scripts/external/bootstrap/footer.php"); ?>

</div>