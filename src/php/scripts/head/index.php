<?php 
    /**
     * php/scripts/head/index.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<!-- TITLE -->
<title><?php single_post_title(); ?> | <?php bloginfo("name"); ?></title>

<!-- META -->
<?php include(get_template_directory()."/src/php/scripts/head/files/meta.php"); ?>

<!-- HEADER-SCRIPTS -->
<?php include(get_template_directory()."/src/php/scripts/head/files/header-scripts.php"); ?>