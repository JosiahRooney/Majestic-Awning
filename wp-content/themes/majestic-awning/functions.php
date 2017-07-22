<?php

  add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );
  function load_theme_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-scripts', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
  }

  add_action( 'wp_enqueue_scripts', 'load_assets' );
  function load_assets() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/vendor/bootstrap.min.css' );
    wp_enqueue_style( 'theme', get_stylesheet_directory_uri() . '/css/theme.css' );
  	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  }

  add_action( 'widgets_init', 'majestic_widgets_init' );
  function majestic_widgets_init() {
    register_sidebar( array (
      'name' => __( 'Footer Column 1'),
      'id' => 'footer-widget-1',
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
    register_sidebar( array (
      'name' => __( 'Footer Column 2'),
      'id' => 'footer-widget-2',
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
    register_sidebar( array (
      'name' => __( 'Footer Column 3'),
      'id' => 'footer-widget-3',
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  register_nav_menus( array(
  	'main_menu' => 'Main Menu',
  	'footer_menu' => 'Footer Menu',
  ) );
