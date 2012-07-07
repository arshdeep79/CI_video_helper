CI_video_helper
===============

This CI Helper provides out of box functionality to create embed code, thumbnails urls etc.

Showing Video Player

	<?php 
	echo yt_embed_code(array(
		"url"			=> "http://www.youtube.com/watch?v=yioJQFrqMXM",
		"width"		=> 560,
		"height"	=> 315
	));


Showing Thumbnail URL

	<?php 
	echo yt_image("http://www.youtube.com/watch?v=yioJQFrqMXM"));

