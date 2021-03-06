<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
<!-- Frontpage hero banner; -->
       <section class="frontpage-header">
           <img class="logo" src="<?php echo get_template_directory_uri() . "/logos/inhabitent-logo-full.svg"?>" alt="Inhabitent full logo"/>
       </section>
      
        <!-- // Get the terms for our products and do some clever stuff with images. -->
       <div class="main-section-divider">

       <section class="frontpage-shop">
           <h2>Shop Stuff</h2>
        <div class="frontpage-block-container">
        <?php 
        $terms = get_terms(array(
            'taxonomy' => 'product_type',
            'hide_empty' => 0,
           
        ));
        foreach($terms as $term): ?>
            <div class="frontpage-term">
       
       <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg' ?>" alt="<?php echo $term->name; ?>" />
       

       <p> <?php echo $term->description; ?></p>
       <p class="frontpage-term-link"><a href="<?php echo get_term_link( $term ); ?>">
       <?php echo $term->name; ?> Stuff</a></p>

    </div>
    <?php endforeach;?>
        
    </div>
        </section>

        


        <?php 
	
	  /*
        *  Get the blog journal entries
        */

	 $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
	 $journal_posts = get_posts( $args ); // returns an array of posts
     
       ?>
     <section class="frontpage-journal">
         <h2>Inhabitent Journal</h2>      
        <div class="frontpage-blog-container">           
            <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>          
            <article class="journal-entry">              
                <div class="thumbnail-container">
                <?php       
                if( has_post_thumbnail() ) {
                the_post_thumbnail('medium');
                }
                ?>
                </div>
                <div class="entry-meta-container">
            <div class="frontpage-meta-block">
                    <span class="entry-meta">
                        <?php
                            red_starter_posted_on();
                            echo ' / ';
                            comments_number( '0 Comments', '1 Comment', '% Comments' );
                        ?>
                    </span> 
            <div class="meta-permalink">
                <a href="<?php echo get_the_permalink(); ?>">
                <?php  the_title(); ?>
                </a>
            </div>
            </div>     
            <a class="read-entry" href="<?php echo get_the_permalink(); ?>">
            Read Entry
            </a>
            </div>
            </article>

            <?php endforeach; wp_reset_postdata(); ?> 
        </div>
     </section>

<!-- Front page adventures section -->
     <section class="frontpage-adventures">
         <h2>Latest Adventures</h2>      
         
        <article class="journal-entry">   
             
            <div class="frontpage-adventures-container">      
                
                <div class="canoe-nature">
                    <h2><a class="adventure-title" href="">
                        Getting Back to Nature in a Canoe</a></h2>
                       <a id="adventure-button" href="">Read More</a>
                </div>   
                
              
                <div class="friends">
                    <h2><a class="adventure-title" href="">
                            A Night with Friends at the Beach</a></h2>
                        <a id="adventure-button" href="">Read More</a>
                </div>  
                   
                <div class="big-mountain">
                    <h2><a class="adventure-title" href="">
                            Taking in the View at Big Mountain</a></h2>
                        <a id="adventure-button" href="">Read More</a>
                </div>  
                <div class="star-gazing">
                    <h2><a class="adventure-title" href="">
                            Star-Gazing at the Night Sky</a></h2>
                        <a id="adventure-button" href="">Read More</a>
                </div> 
            
            </div>
            <div class="more-adventures-container">
                <a class="more-adventures" href="">More Adventures</a>
            </div>
        
        </article>
            

                







     </section>
     </div>
    </main><!-- #main -->
    </div><!-- #primary -->
    


<?php get_footer(); ?>