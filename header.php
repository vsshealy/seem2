<?php 
    /**
     * header.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<header id="header-primary">
    <div class="wrapper-content wrapper-header">

        <!-- #HEADER-DESKTOP -->
        <div id="header-desktop" class="row mobile-hide">

            <!-- #HEADER-DESKTOP-LOGO -->
            <div id="header-desktop-logo" class="columns col-lg-3">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/logos/logo-seem-full-color.svg" alt="Southeast Energy Exchange Market"/>
                </a>
            </div>

            <!-- #HEADER-DESKTOP-NAV -->
            <div id="header-desktop-nav" class="columns col-lg-9">
                
                <!-- #HEADER-DESKTOP-NAV-TOP -->
                <div id="header-desktop-nav-top" class="row">
                    <nav class="columns col-lg-12">
                        <?php include(get_template_directory()."/src/php/menus/header-top.php"); ?>
                    </nav>
                </div>

                <!-- #HEADER-DESKTOP-NAV-PRIMARY -->
                <div id="header-desktop-nav-primary" class="row">
                    <nav class="columns col-lg-12">
                        <?php include(get_template_directory()."/src/php/menus/header-primary.php"); ?>
                    </nav>
                </div>

            </div>

        </div>

        <!-- #HEADER-MOBILE -->
        <div id="header-mobile" class="row desktop-hide">
            <nav id="header-mobile-nav" class="columns col-xl-12">
                <?php include(get_template_directory()."/src/php/menus/header-mobile.php"); ?>
            </nav>
        </div>

    </div>
</header>