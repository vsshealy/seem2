<?php 
    /**
     * php/theme/loops/comments.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<?php 
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
?>