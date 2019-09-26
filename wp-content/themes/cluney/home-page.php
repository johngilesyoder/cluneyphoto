<?php
/**
 * Template Name: Home
 *
 * A custom page template for the Homepage.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */                   

get_header(); ?>
<div class="gallery grid_16">
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	    <!-- Gallery Images (Custom Field on Homepage) -->
		<?php $images = get_post_meta($post->ID, 'galleryimage', false);
			if ($images) {
				foreach ($images as $image) 
			{
			echo "<img src='$image'/>";
			}
		echo "";
		}
		?>
		<?php $description = get_post_meta($post->ID, 'description', true);
		?>
		<?php endwhile; ?>
</div><!-- .gallery -->

<div class="grid_16">
	<p id="description" class="home_description">
		<?php //echo $description ?>
		<span>Cluney Photo</span> is Des Moines, Iowa based wedding photographer Mark Cluney. Specializing in Wedding and Elopement Photography, we are available for travel throughout Iowa, the Midwest, and nationwide.
	</p>
</div>

<!-- BLOGROLL -->
<div class="grid_16 blogroll">
	<h3>Latest from the Blog</h3>
	<ul>
		<?php query_posts('category_name=blog&posts_per_page=5'); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; // End the loop. Whew. ?>
		<?php wp_reset_query(); ?>
	</ul>
	<div class="clear"></div>
</div>

<?php
// Promo boxes
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<ul class="promos grid_16">
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</ul>
		
<?php endif; ?>

<div class="clear"></div>
</div><!-- .container_16 .sitewrapper -->
	
<!-- jQuery InnerFade (blog roll fade) -->
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.innerfade.js"></script>
<script type="text/javascript">
	$(document).ready(
		function(){
			$('.blogroll ul').innerfade({
				animationtype: 'fade',
				speed: 750,
				timeout: 7000,
				type: 'sequence',
				containerheight: ''
			});
			
			$('.gallery').innerfade({
				animationtype: 'fade',
				speed: 750,
				timeout: 7000,
				type: 'sequence',
				containerheight: ''
			});
			
		}
	);
</script>

<?php get_footer(); ?>