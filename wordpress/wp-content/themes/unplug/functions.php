<?php

//WIDGETS
function theme_widgets_init() {
	//Area 1 - below SOS Logo
	register_sidebar( array(
	'name'=>'Area 1',
	'id'=>'area_1',
	'before_widget'=>'',
	'after_widget'=>'',
	'before_title'=>'',
	'after_title'=>'',
	));
}
add_action( 'init', 'theme_widgets_init' );

function is_sidebar_active( $index ){
	global $wp_registered_sidebars;
 	$widgetcolums = wp_get_sidebars_widgets();
 	if ($widgetcolums[$index]) return true;
 	return false;
}

?>
