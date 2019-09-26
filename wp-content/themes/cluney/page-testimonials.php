<?php
/*
Template Name: Testimonials
*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<!-- PAGE TITLE -->
	<h2 class="page-title grid_16"><?php the_title(); ?></h2>
	<div class="clear"></div>
	<!-- TESTIMONIALS CONTAINER -->
	<div class="testimonials">
		<!-- BEGIN THE LOOP -->
		<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'order' => 'ASC', 'orderby' => 'menu_order'  ) );
		while ( $loop->have_posts() ) : $loop->the_post();
    	?>
		<!-- SINGLE TESTIMONIAL -->
		<div class="testimonial grid_16">
			<!-- TESTIMONIAL THUMB -->
			<div class="alpha grid_3 center">
				<?php the_post_thumbnail( array(160,160) ); ?>
			</div>
			<!-- TESTIMONIAL CONTENT -->
			<div class="omega grid_13 content">				
				<?php the_content(); ?>
				<!-- VIEW GALLERY LINK -->
				<!-- <a class="grid_3 alpha view-gallery" href="<?php $link="testimonial_link"; echo get_post_meta($post->ID, $link, true); ?>">VIEW GALLERY</a> -->
				<!-- CLIENT NAME -->
				<h3 class="grid_6 push_4 right">&#8212; <?php the_title(); ?></h3>
			</div><!-- .grid_12 .content -->
			<div class="clear"></div>
		</div><!-- .testimonial -->
		<?php endwhile; // End the loop. Whew. ?>
		<?php wp_reset_query(); ?>
	</div><!-- .testimonials -->
<!-- END THE LOOP -->
<?php endwhile; ?>

<?php
// Promo Boxes
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<ul class="promos grid_16">
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</ul>
		
<?php endif; ?>

<div class="clear"></div>
</div><!-- .container_16 .sitewrapper -->

<?php get_footer(); ?>