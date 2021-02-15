<?php 
    /**
     * php/menus/header-mobile.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<?php 
    wp_nav_menu(
        array(
            "theme_location" => "menu-3",
            "menu_id" => "Header-Mobile"
        )
    );
?>