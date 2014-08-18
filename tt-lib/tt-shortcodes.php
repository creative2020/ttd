<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'post_info', 'post_info' );
function post_info ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'tt_social', 'tt_social' );
function tt_social ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);

$content = '
<div class="social-links">
    <div class="social facebook">
        <a href="https://www.facebook.com/pages/Tran-Thomas-Design-Studio/227747890613984" STYLE="text-decoration: none">Facebook</a></div>
    <div class="social twitter">
        <a href="https://twitter.com/tranandthomas" STYLE="text-decoration: none">Twitter</a></div>
    <div class="social houzz">
        <a href="http://www.houzz.com/pro/tranandthomas/tran-thomas-design-studio" STYLE="text-decoration: none">Houzz</a></div>
    <div class="social pinterest">    
        <a href="#" STYLE="text-decoration: none">Pintrest</a></div>
     <div class="social youtube">
        <a href="http://www.youtube.com/watch?v=bL6MAGfeWtc" STYLE="text-decoration: none">Youtube</a></div>
</div>';


    
// code
return $content;    
}

////////////////////////////////////////////////////////