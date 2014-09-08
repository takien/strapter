<?php
/**
 *  Filters
 *  To modify default WordPress behaviour or HTML tag.
 *  
 *  @package _strapter
 */

add_filter('wp_link_pages_args','_strapter_wp_link_pages_args');

function _strapter_wp_link_pages_args ( $params ) {
	$params['before'] = '<ul class="pagination">';
	$params['after']  = '</ul>';
	return $params;
}

add_filter('wp_link_pages_link', '_strapter_wp_link_pages_link', 10, 2);
function _strapter_wp_link_pages_link( $link, $i ) {
	if ( is_numeric( $link ) ) {
		$return = '<li class="active"><a href="javascript:;">' . $link . '</a></li>';
	} else {
		$return = '<li>' . $link . '</li>';
	}
	return $return;
}
//apply_filters( 'wp_link_pages_link', $link, $i );