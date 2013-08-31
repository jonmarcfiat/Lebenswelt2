<?php

/*
	This file controls all content in the before-page section,
	including both default and custom sub-section 'entities'
	created for the site build.

	Entities are stored in the 'entities' directory. They
	contain their own HTML markup for purposes of layout
	and responsive design.

	List conditional calls to entities below, for example:

*/
	if (is_front_page())
		get_template_part('entities/brand');
	
	if (is_page('portfolio'))
		get_template_part('entities/homepage');
	
	if (is_page('portfolio'))
		get_template_part('entities/portfolio');
	
	if (is_page('portfolio'))
		get_template_part('entities/contactform');	

?>

