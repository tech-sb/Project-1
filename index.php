<?php get_header(); ?>

<div id="content" class="clearfix">
		
<?php //echo do_shortcode("[featured slider slide_category='home']"); ?>

	<section id="home-content" class="page-content">
		
		<?php 
		//home content
		query_posts('post_type=home&numposts=1'); 
		while (have_posts()) : the_post();	
		global $post; 
		?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</section>

	<section class="home-bottom clearfix">
		
		<?php if ( is_active_sidebar( 'home-bottom-bar' ) ) : ?>
			<?php dynamic_sidebar( 'home-bottom-bar' ); ?>
		<?php endif; ?>
		
	</section>			

</div><!-- #content -->
	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>