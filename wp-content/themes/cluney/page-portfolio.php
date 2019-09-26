<?php
/*
Template Name: Portfolio
*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- PAGE TITLE -->
	<h2 class="page-title sansMed allcaps grid_16"><?php the_title(); ?></h2>
	<div class="clear"></div>
	
	<!-- WEDDINGS -->	
	<h1 class="section-title">WEDDING</h1>
		<ul class="gallery-section">
		<!-- START THE LOOP FOR GALLERIES IN THE WEDDINGS CATEGORY -->
		<?php $loop = new WP_Query( array( 'post_type' => 'galleries', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'wedding-portfolio'  ) );
		while ( $loop->have_posts() ) : $loop->the_post();
    	?>
			<li>
				<!-- SINGLE GALLERY CONTAINER -->
				<div class="grid_4 marbottom_20">
					<!-- IMAGE CONTAINER (frame bg) -->
					<div class="center">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(220,220) ); ?></a>
					</div>
					<!-- TEXT LINK -->
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
				<div class="clear"></div>
				</div>	
			</li>
			<?php endwhile; // End the loop. Whew. ?>
			<?php wp_reset_query(); ?>
			<div class="clear"></div>
		</ul>
		
	<!-- ENGAGEMENTS -->	
	<h1 class="section-title">ENGAGEMENT</h1>
		<ul class="gallery-section">
		<!-- START THE LOOP FOR GALLERIES IN THE ENGAGEMENT CATEGORY -->
		<?php $loop = new WP_Query( array( 'post_type' => 'galleries', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'engagement-portfolio'  ) );
		while ( $loop->have_posts() ) : $loop->the_post();
    	?>
			<li>
				<!-- SINGLE GALLERY CONTAINER -->
				<div class="grid_4 marbottom_20">
					<!-- IMAGE CONTAINER (frame bg) -->
					<div class="center">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(220,220) ); ?></a>
					</div>
					<!-- TEXT LINK -->
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
				</div>	
			</li>
			<?php endwhile; // End the loop. Whew. ?>
			<?php wp_reset_query(); ?>
			<div class="clear"></div>
		</ul>

	<!-- PORTRAIT -->
	<h1 class="section-title">PORTRAITS &amp; EDITORIAL</h1>
		<ul class="gallery-section">
		<!-- START THE LOOP FOR GALLERIES IN THE PORTRAIT CATEGORY -->
		<?php $loop = new WP_Query( array( 'post_type' => 'galleries', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'portrait-portfolio'  ) );
		while ( $loop->have_posts() ) : $loop->the_post();
    	?>
			<li>
				<!-- SINGLE GALLERY CONTAINER -->
				<div class="grid_4 marbottom_20">
					<!-- IMAGE CONTAINER (frame bg) -->
					<div class="center">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(220,220) ); ?></a>
					</div>
					<!-- TEXT LINK -->
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
				</div>	
			</li>
			<?php endwhile; // End the loop. Whew. ?>
			<?php wp_reset_query(); ?>
			<div class="clear"></div>
		</ul>

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