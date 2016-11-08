<?php 
/**
 * Template Name: Books
 */
get_header(); ?>
	<?php
	    $args = array(
	      'post_type' => 'book',
	      'post_status' => 'publish',
	      'post_per_page' => '5'
	    );
	    $ebook = new WP_Query( $args );
	    if( $ebook->have_posts() ) {
	      while( $ebook->have_posts() ) {
	        $ebook->the_post();
	        ?>
	        <article>
	          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	          <div class='content'>
	            <?php the_content() ?>
	          </div>
	        </article>
	        <?php
	      }
	    }
	?>
<?php get_footer(); ?>