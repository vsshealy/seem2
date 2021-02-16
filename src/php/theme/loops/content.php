<?php 
    /**
     * php/theme/loops/content.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<?php 
    while (have_posts()):
        the_post();
        get_template_part("/src/php/theme/parts/content", "page");
    endwhile;
?>