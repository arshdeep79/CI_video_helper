<?php
/*
 * AUTHORS:
 *   Arshdeep Giri
 */

function yt_url_to_id($url){
	if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
    return $match[1];
	return false;
}


function yt_embed_url($url){
	$video_id = yt_url_to_id($url);
	return "http://www.youtube.com/embed/{$video_id}";
}

/*
	The config array posssible values
	array(
		url					=> <youtube url>,
		height			=> 560,
		width				=> 315,
	)
*/
function yt_embed_code($config){
//default values
	$width = 560;
	$height = 315;
	extract($config);
//we need either URL or Video ID
	if(!isset($url))
		return false;
		
	$embed_url = yt_embed_url($url);
	
	return "<iframe width='{$width}' height='{$height}' src='{$embed_url}' frameborder='0' allowfullscreen></iframe>";
}


function yt_image($url, $size = 'mqdefault'){
	if(!in_array($size,array('default','mqdefault','hqdefault')))
		$size = 'mqdefault';
	
	$video_id = yt_url_to_id($url);
	
	return "http://i.ytimg.com/vi/{$video_id}/{$size}.jpg";
}


