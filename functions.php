<?php 
    /**
     * functions.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/21
    **/
?>

<?php
    // THEME CUSTOMIZATIONS
        // ENABLE TITLE TAG SUPPORT
            add_theme_support('title-tag');

        // ENABLE POST THUMBNAILS
            add_theme_support('post-thumbnails');

        // MENU SUPPORT
            register_nav_menus(
                array(
                    'menu-1' => esc_html__('Header-Primary', 'seem'),
                    'menu-2' => esc_html__('Header-Top', 'seem'),
                    'menu-3' => esc_html__('Header-Mobile', 'seem'),
                    'menu-4' => esc_html__('Footer-Links', 'seem')
                )
            );

    // ADMIN SITE CUSTOMIZATIONS
        // CUSTOM ADMIN LOGIN LOGO
            function custom_login_logo() {
                echo
                '<style type="text/css">
                    h1 {
                        margin-bottom: 2.00rem !important;
                    }

                    h1 a {
                        height: 209px !important;
                        width: 100.00% !important;
                        display: block;
                        background-image: url('.get_bloginfo('template_directory').'/src/svg/logos/logo-seem-full-color.svg) !important;
                        background-size: 100.00% !important;
                        margin: 0.00rem !important;
                    }
                </style>';
            }
                
            add_action('login_head', 'custom_login_logo');

        // REPLACE FOOTER TEXT
            function remove_footer_admin() {
                echo 'Southeast Energy Exchange Market Website Administration | <strong>Production Site</strong> | <a href="/" target="_blank">Visit Site</a></p>';
            }

            add_filter('admin_footer_text', 'remove_footer_admin');
?>