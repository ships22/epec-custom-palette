<?php
/*
Plugin Name: epec-custom-palette
Plugin URI: http://zero-plugin.com
Description: Un plugin de colour pour le changer les colour sous WordPress
Version: 0.1
Author: Mahfuj
*/


function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand color - 1', 'epec-custom-palette' ),
            'slug' => 'brand-color-1',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand color - 2', 'epec-custom-palette' ),
            'slug' => 'brand-color-2',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'white', 'epec-custom-palette' ),
            'slug' => 'very-light-gray',
            'color' => '#FFFFFF',
        ),
        array(
            'name' => __( 'very dark gray', 'epec-custom-palette' ),
            'slug' => 'very-dark-gray',
            'color' => '#111111',
        ),
        ) );
    }
    
    add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );
        function my_scripts() {
            wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
            wp_enqueue_style( 'prefix-style' );
            }
        add_action('wp_enqueue_scripts','my_scripts');