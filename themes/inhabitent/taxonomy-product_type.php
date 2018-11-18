<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<!-- archive title and description -->
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );	
				?>
				 <div class="single-term-description">
          <?php the_archive_description(); ?>
</div>
				
<?php endif; ?>
			</header><!-- .page-header -->


    <div class="product-container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
        </a>
				
		<div class="archive-product-info">
          <p class="entry-title">
            <?php the_title(); ?>
            <div class="after-title"></div>
          </p>
        
          <p class="product-price">
            <?php echo CFS()->get( 'price' ); ?>
          </p>
        </div>
			<?php endwhile; ?>

		

		

			

		
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
