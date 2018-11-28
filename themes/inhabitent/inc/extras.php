<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/logos/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );






function inhabitent_dynamic_css() {

	if(!is_page_template('about.php')) {
		return;
	}

	// $hero_css = '';
	// wp_add_inline_style('tent-style', $hero_css);

$image = CFS()->get('about_hero_image');

if(!$image) {
	
$hero_css = ".page-template-about .entry-header {
	background: gray;
	color: white;
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}";
} else {
	$hero_css = ".page-template-about .entry-header {
	background: gray;
	background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url({$image});
	color: white;
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	background-size: cover;
	background-position: bottom;
	}";

}
wp_add_inline_style('tent-style', $hero_css);
}



add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');

// Replaces the excerpt "Read More" text by a link
function inhabitent_excerpt_more( $more ) {
	global $post;
 return ' [...]<p><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More &rarr;</a></p>';
}
add_filter('excerpt_more', 'inhabitent_excerpt_more');

/*
*Filter the product archive title
*/

function inhabitent_archive_title( $title ) {
	if( is_post_type_archive( 'product' ) ) {
		$title = 'Shop Stuff';
	} elseif( is_tax( 'product_type' ) ) {
		$title = sprintf( '%1$s', single_term_title( '', false ) );
	}
	return $title;
}


add_filter('get_the_archive_title', 'inhabitent_archive_title' );


/*
*Modify the Product post type archive loop
*/

function inhabitent_mod_post_type_archive( $query ) {
	if(
		( is_post_type_archive( array( 'product' ) ) || $query->is_tax( 'product_type' ) )
		&& !is_admin()
		&& $query->is_main_query()
	){
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	}
} 



add_action( 'pre_get_posts', 'inhabitent_mod_post_type_archive' );