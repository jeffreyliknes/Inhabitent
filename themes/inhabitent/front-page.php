<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
<!-- Frontpage hero banner, add the background image with css e.g. background: url(../../images/home-hero.jpg); -->


       <section class="frontpage-header">
           <img class="logo" src="<?php echo get_template_directory_uri() . "/logos/inhabitent-logo-full.svg"?>" alt="Inhabitent full logo"/>
       </section>
      
        <!-- // Get the terms for our products and do some clever stuff with images. -->
       
       <section class="frontpage-shop">
           <h2>Shop Stuff</h2>
        
        <?php 
        $terms = get_terms(array(
            'taxonomy' => 'product_type',
            'hide_empty' => 0,
           
        ));
        foreach($terms as $term): ?>
            <div class="frontpage-term">
       
       <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg' ?>" alt="<?php echo $term->name; ?>" />
       

       <p> <?php echo $term->description; ?>
       <a href="<?php echo get_term_link( $term ); ?>">
       <?php echo $term->name; ?> Stuff</a></p>
       
    </section>
       
       
       <?php
        
        ?>

      <!-- </div> -->
     <?php endforeach; ?>
    
        
        
        </section>
        <?php 
	
	  /*
        *  Get the blog journal entries
        */

	 $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
	 $journal_posts = get_posts( $args ); // returns an array of posts
     
       ?>

     
     <section class="front-page-journal">
         <h2>Inhabitent Journal</h2>
		<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
		<article class="journal-entry">
        <?php 
        
        if( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        }
       
       ?>

       <span class="entry-meta">
       <?php
        red_starter_posted_on();
        echo ' / ';
        comments_number( '0 Comments', '1 Comment', '% Comments' );
        ?>
        </span>
        <a href="<?php echo get_the_permalink(); ?>">
        <?php  the_title(); ?>
        </a>
        <a class="read-more" href="<?php get_the_permalink(); ?>">
        Read More
        </a>
        </article>

        <?php endforeach; wp_reset_postdata(); ?>
		
     </section>
        
    </main><!-- #main -->
    </div><!-- #primary -->
    


<?php get_footer(); ?>