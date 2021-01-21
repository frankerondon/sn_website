<?php 
//post thumbnails
add_theme_support('post-thumbnails');

//menus
add_theme_support('menus');

//side bar
register_sidebar(array(
    'name'          => __( 'Right Hand Sidebar' ),
	'id'            => 'right-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => 'widgets will appear in right hand sidebar',
	'before_title'  => '<h5 class="sidebar-title">',
	'after_title'   => '</h5>' , '<br>' ,
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>'
    ));
?>