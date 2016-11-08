<?php get_header(); ?>
	<div class="main">
		<div class="inner">
			<?php 
			while ( have_posts() ) : the_post(); ?>
				<h1>Ebooks: <?php the_title(); ?> </h1>
				<?php the_content(); ?>
				<?php  $image = get_field('image'); if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			<?php endwhile;
			?>
		</div>
	</div>
<?php get_footer(); ?>
