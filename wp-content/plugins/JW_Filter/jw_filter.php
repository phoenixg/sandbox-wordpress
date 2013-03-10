<?php
/*
Plugin Name: JW Filter
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

add_filter( 'the_title', ucwords );

add_filter( 'the_content', function( $content ) {
		return $content . ' ' . time();
	} );

// 在每个文章后显示同属于该category下的其他文章
add_filter( 'the_content', function( $content ){
	$id = get_the_id();

	if (!is_singular( 'post' )) {
		return $content;
	}

	$terms = get_the_terms( $id, 'category' );
	$cats = array();

	foreach ($terms as $term) {
		$cats[] = $term->cat_ID;
	}

	$loop = new WP_Query(
		array(
				'posts_per_page' => 3,
				'category__in' => $cats,
				'orderby' => 'rand',
				'post__not_in' => array($id)
		)
	);

	if ($loop->have_posts()) {
		$content .= '
			<h2>You also might like ...</h2>
			<ul class="related-catogory-posts">';

		while ($loop->have_posts()) {
			$loop->the_post();

			$content .= '
				<li>
					<a href="'.get_permalink().'">'.get_the_title().'</a>
				</li>
			';
		}

		$content .= '</ul>';
		wp_reset_query();
	}

	return $content;

});

add_action( 'wp_footer', function(){
	echo '这是在footer位置添加的文本';
} );

add_action( 'comment_post', function(){
	$email = get_bloginfo( 'admin_email' );
	wp_mail(
		$email,
		'New comment posted',
		'This is the comment'
		);
});




