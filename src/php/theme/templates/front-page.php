<?php 
    /**
     * php/theme/templates/front-page.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<main id="<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
    <?php include(get_template_directory()."/src/php/theme/loops/index.php"); ?>
</main>