<?php
/*
Template Name: Faculty Biographies

Options:
&include=array( 39,7,189 )
&exclude=189

*/

?>

<h3>Administration</h3> <!-- Use by manually including the user IDs of the admin staff -->

<?php
    $blogusers = get_users('blog_id=1&orderby=post_count&include=array( 39,7,189 )');
    foreach ($blogusers as $user) {
  echo '<div class="row-fluid">';
	echo '<div class="span2">';
	echo userphoto($user, '', '', array('class' => 'photo'));
	echo '</div>';
	echo '<div class="span10">';
	echo '<p><strong>' . $user->display_name . '</strong></p>';
	echo '<p>' . $user->aim . '</p>';
	echo '<a href="mailto:' . $user->user_email . '"><button class="btn"><i class="icon-envelope"></i> Email</button></a>';
	echo '<a href="' . $user->user_url . '"><button class="btn" style="margin: 0 5px;">Teacher Page</button></a>';
	echo '<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#' . $user->id . '">Biography</button>';
	echo '<div id="' . $user->id . '" class="collapse" style="margin-top: 10px">';
	echo '<div class="alert alert-info">' . $user->description . '</div></div>';
	echo '</div>';
	echo '</div>';
	echo '<hr>';
    }
?>

<h3>Faculty</h3> <!-- Calls all WP users set as Author -->

<?php
    $blogusers = get_users('blog_id=1&orderby=nicename&role=author');
    foreach ($blogusers as $user) {
	echo '<div class="row-fluid">';
	echo '<div class="span2">';
	echo userphoto($user, '', '', array('class' => 'photo'));
	echo '</div>';
	echo '<div class="span10">';
	echo '<p><strong>' . $user->display_name . '</strong></p>';
	echo '<p>' . $user->aim . '</p>';
	echo '<a href="mailto:' . $user->user_email . '"><button class="btn"><i class="icon-envelope"></i> Email</button></a>';
	echo '<a href="' . $user->user_url . '"><button class="btn" style="margin: 0 5px;">Teacher Page</button></a>';
	echo '<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#' . $user->id . '">Biography</button>';
	echo '<div id="' . $user->id . '" class="collapse" style="margin-top: 10px">';
	echo '<div class="alert alert-info">' . $user->description . '</div></div>';
	echo '</div>';
	echo '</div>';
	echo '<hr>';
    }
?>
