<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
								 
				<!-- QUERY POSTS IN THE BLOG CATEGORY -->
				<?php
				if (is_home()) {
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("category_name=blog&paged=$paged");
				}
				?>
				
				<!-- BEGIN THE LOOP -->
				<?php while ( have_posts() ) : the_post(); ?>
				
					<!-- POST CONTAINER -->
					<div class="post">
						<div class="date">
							<span class="day"><?php the_time( 'j' ); ?></span><br />
							<span class="month"><?php the_time( 'M y' ); ?></span>
						</div>
						<div class="title">
							<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<span class="meta">Posted by <?php the_author(); ?> on <?php the_time( 'F j, Y' ); ?></span>
						</div>
						<div class="clear"></div>
						
						<!-- POST CONTENT -->
						<div class="content">
							<?php the_excerpt( __( '', 'twentyten' ) ); ?>
						</div><!-- .content -->
			
						
						
							<a class="post-footer" href="<?php the_permalink() ?>">Read More</a>
						
					</div><!-- .post -->
				
				<?php endwhile; // End the loop. Whew. ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
								<span class="pagination-older"><?php next_posts_link('Older Items', 0); ?></span>
								<span class="pagination-newer"><?php previous_posts_link('Newer Items', 0); ?></span>
								<div class="clear"></div>
				<?php endif; ?>