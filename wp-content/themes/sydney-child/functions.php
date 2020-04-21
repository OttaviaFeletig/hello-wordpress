<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_and_child_styles' );

function enqueue_parent_and_child_styles() {
   $parent_style = 'parent-style';
   wp_enqueue_style( $parent_style, get_template_directory_uri().'/style.css' );
   //to add my styles to existing parent style
   wp_enqueue_style('child-theme', get_stylesheet_directory_uri().'/style.css', array($parent_style), wp_get_theme()->get('Version'));
   if(is_front_page()){
      wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/footer.js', array( 'jquery' ), 1.1, true);

   }
}