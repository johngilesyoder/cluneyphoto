<?php
/*
Template Name: Investment
*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2 class="page-title allcaps grid_16"><?php the_title(); ?></h2>

	<div class="grid_4 sidebar-about">
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/investment.jpg" alt="Investment"/>
		<a href="http://pinterest.com/cluneyphoto/"><img class="martop_20" src="/wp-content/uploads/2013/02/pinterest.jpg" alt="Need inspiration? We're on Pinterest!"/></a>
	</div>
	
	<div class="grid_12 content">				
		<?php the_content(); ?>
	</div><!-- .grid_12 .content -->

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


