<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="product-icon-container">
	
	<li>
	  <a class="button">
		<i class="fab fa-facebook-f fa-sm"></i>
		<span> Like</span>
	  </a>
	</li>
	<li>
	  <a class="button">
		<i class="fab fa-twitter fa-sm"></i>
		<span> Tweet</span>
	  </a>
	</li>
	<li>
	  <a class="button">
		<i class="fab fa-pinterest fa-sm"></i>
		<span> Pin</span>
	  </a>
	</li>
</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
