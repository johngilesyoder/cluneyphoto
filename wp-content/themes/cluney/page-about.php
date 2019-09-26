<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2 class="page-title sansMed allcaps grid_16"><?php the_title(); ?></h2>

	<div class="grid_4 sidebar-about">
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/aboutpic.png" alt="About Us"/>
		<ul class="links">
			<li class="iconfbook"><a href="http://www.facebook.com/cluneyphoto"><span>Cluney Photo</span> on <span>Facebook</span></a></li>
			<li class="icontwitter"><a href="http://www.twitter.com/cluneyphoto"><span>Cluney Photo</span> on <span>Twitter</span></a></li>
			<li class="iconpinterest"><a href="http://www.pinterest.com/cluneyphoto"><span>Cluney Photo</span> on <span>Pinterest</span></a></li>
			<li class="iconblog"><a href="/blog">Check out our <br /><span>Blog!</span></a></li>
			<li class="iconlocation"><a href="http://www.ci.missoula.mt.us/">Located in <br /><span>Missoula, MT</span></a></li>
		</ul>
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