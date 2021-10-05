<?php

                        /**
                         * Enqueue scripts and styles.
                         */

                        function resturent_theme_files()
                        {

                            wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '1.0', 'all');
                            wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0', 'all');
                            wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
                            wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', false );
                            wp_enqueue_style('layout', get_template_directory_uri() . '/assets/layout/styles/layout.css', array(), '1.0', 'all');
                            //wp_enqueue_style('style', get_stylesheet_uri());


                            wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/vendor/owl.carousel/owl.carousel.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), '1.0', true);
                            // wp_enqueue_script('ajaxchimp',get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), '1.0', true );
                            // wp_enqueue_script('ajaxchimp-config',get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), '1.0', true );
                            //    wp_enqueue_script('jquery-migrate', '/https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js', array('jquery'), '3.3.2', true );
                            wp_enqueue_script('resturent-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);


                            // Threaded comment reply styles.
                            if (is_singular() && comments_open() && get_option('thread_comments')) {
                                wp_enqueue_script('comment-reply');
                            }
                        }

                        add_action('wp_enqueue_scripts', 'resturent_theme_files');
