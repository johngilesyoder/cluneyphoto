<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>


		<!-- BLOG TITLE -->
		<h2 class="page-title sansMed allcaps grid_16">PORTFOLIO</h2>
		<div class="clear"></div>
		
		<!-- MAIN CONTENT CONTAINER -->
		<div class="grid_16 portfolio-gallery">
			
			<!-- BEGIN THE LOOP -->
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<!-- GALLERY CONTAINER -->
				<div class="post">
					<!-- FACEBOOK LIKE BUTTON -->
					<div class="fblike alignright">
						<fb:like href="<?php the_permalink() ?>" layout="button_count" show_faces="false" width="80" action="like" colorscheme="light"></fb:like>
					</div>
					<!-- TWEET BUTTON -->
					<div class="tweet-btn alignright">
						<a href="https://twitter.com/share" class="twitter-share-button" data-via="cluneyphoto" data-related="cluneyphoto" data-count="none">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<!-- Pin it BUTTON -->
					<div class="pinit-btn alignright">
						<a data-pin-config="beside" href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
					</div>
					
					
					<!-- GALLERY TITLE -->
					<h1 class="section-title"><?php the_title(); ?></h1>
			
					<!-- GALLERY CONTENT -->
					<div class="content">
						<?php the_content(); ?>
						<div class="clear"></div>
					</div><!-- .content -->
			
				</div><!-- .post -->
							
				<!-- PAGINATION -->			
				<span class="pagination-older"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentyten' ) . ' Previous Gallery' ); ?></span>
				<span class="pagination-newer"><?php next_post_link( '%link', 'Next Gallery ' . _x( '', 'Next post link', 'twentyten' ) . '' ); ?></span>				
		
			<?php endwhile; // end of the loop. ?>
			
			<div class="clear"></div>
		</div><!-- .grid_16 .portfolio-gallery -->
		
		<?php
		// Promo boxes
		if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
		
				<ul class="promos grid_16">
					<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
				</ul>
				
		<?php endif; ?>
		<div class="clear"></div>
		</div><!-- .container_16 .sitewrapper -->
	
	<!-- CALL FOOTER -->
	<?php get_footer(); ?>