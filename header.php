<?php 
    /**
     * header.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<header>
    <div class="wrapper-content">
        <div class="grid-x">
            
            <!-- #HEADER-LOGO -->
            <div id="header-logo" class="cell small-9 medium-3 large-3">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/logos/logo-seem-full-color.svg" alt="Southeast Energy Exchange Market"/>
                </a>
            </div>

            <!-- #HEADER-NAV -->
            <div id="header-nav" class="cell small-3 medium-9 large-9">

                <!-- #HEADER-TOP -->
                <div id="header-top" class="grid-x">
                    <nav class="cell small-12 medium-12 large-12">
                        <?php include(get_template_directory()."/src/php/menus/header-top.php"); ?>
                    </nav>
                </div>

                <!-- #HEADER-PRIMARY -->
                <div id="header-primary" class="grid-x">
                    <nav class="cell small-12 medium-12 large-12">
                        <?php include(get_template_directory()."/src/php/menus/header-primary.php"); ?>
                    </nav>
                </div>

                <!-- #HEADER-MOBILE -->
                <div id="header-mobile" class="grid-x">
                    <nav class="cell small-12 medium-12 large-12">
                        <?php include(get_template_directory()."/src/php/menus/header-mobile.php"); ?>
                    </nav>
                </div>

            </div>

        </div>
    </div>
</header>