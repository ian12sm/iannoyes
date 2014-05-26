<div class="row">
	<div class="col-sm-12">
		<div class="home-slider">
			<?php $args = array(
    'numberposts' => 3,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish');

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
    foreach( $recent_posts as $recent ){
		echo '<div class="row"><div class="col-sm-10 col-sm-offset-1"><li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li></div></div> ';
	}
?>