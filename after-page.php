<?php

/*
	This file controls all content in the after-page section,
	including both default and custom sub-section 'entities'
	created for the site build.

	Entities are stored in the 'entities' directory. They
	contain their own HTML markup for purposes of layout
	and responsive design.

	List conditional calls to entities below, for example:

	if (is_home())
		get_template_part('entities/slider');

	if (is_page('home'))
		get_template_part('entities/slider')

*/

	if (is_page('websites'))
		get_template_part('entities/contactform');

?>

