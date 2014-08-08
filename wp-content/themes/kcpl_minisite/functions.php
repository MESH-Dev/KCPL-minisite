<?php
  //enqueue scripts and styles *use production assets. Dev assets are located in assets/css and assets/js
  function WPS_scripts() {
  	wp_enqueue_style( 'WPS-script', get_template_directory_uri().'/style.css' );
  	wp_enqueue_script( 'script-name', get_template_directory_uri().'/assets/js/WPStarter.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'masonry', get_template_directory_uri().'/assets/js/masonry.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('typekit','//use.typekit.net/drm7klb.js');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/libs/font-awesome-4.1.0/css/font-awesome.min.css');
  }
  add_action( 'wp_enqueue_scripts', 'WPS_scripts' );

  //theme supports
  add_theme_support('post-thumbnails');
  $defaults = array(
    'flex-height'   => true,
    'flex-width'    => true,
    'height'        => 100,
    'width'         => 200,
    'default-image' => get_template_directory_uri() . '/assets/img/logo.gif',
    'header-text'   => false
  );
  add_theme_support('custom-header', $defaults);
  add_theme_support('custom-background');
  add_theme_support('html5');
  add_theme_support('automatic-feed-links');

  //menus
  register_nav_menus(array(
  	'main_nav' => 'Header and breadcrumb trail heirarchy',
  	'social_nav' => 'Social menu used throughout'
  ));

  //widgets
  register_sidebar(array(
	   'name'          => __( 'Footer - Left' ),
	   'id'            => 'footer-left',
	   'description'   => '',
     'class'         => '',
	   'before_widget' => '',
	   'after_widget'  => '',
	   'before_title'  => '<h2>',
	   'after_title'   => '</h2>' ));

  //editor style
  add_editor_style('assets/wp-admin/custom-editor-style.css');


    add_action('frm_field_input_html', 'add_input_html');
    function add_input_html($field){
      if($field['id'] == 13){ //change 25 to the ID of your field
         echo ' onkeyup="countChar(this)"';
      }
    }

    add_action(‘frm_after_update_field’, ‘frm_trigger_entry_update’);
    function frm_trigger_entry_update($atts){
        $entry = FrmEntry::getOne($atts['entry_id']);
        do_action(‘frm_after_update_entry’, $entry->id, $entry->form_id);
    }

  //login page style
  function WPS_loginCSS() {
	   echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/assets/img/wp-login.css"/>';
  } add_action('login_head', 'WPS_loginCSS');

  //footer attribution
  function WPS_footer_admin () {
	   echo 'Theme developed by <a href="http://pateason.com">Pat Eason</a>.';
  } add_filter('admin_footer_text', 'WPS_footer_admin');

  //disable code editors
  define('DISALLOW_FILE_EDIT', true);

?>
