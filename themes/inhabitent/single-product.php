<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class= "product-container"> 

		<?php while ( have_posts() ) : the_post(); ?>

<div class="image-container">
	<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<div class="entry-meta">

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
</header><!-- .entry-header -->


		
<div class="product-price">

		<p><?php echo CFS()->get( 'price' ); ?></p>

		</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
</div>
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
          

	
		</div><!-- .entry-meta -->

		
	</div><!-- .entry-content -->
</div><!-- container -->



	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


		


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	


<?php get_footer(); ?>
