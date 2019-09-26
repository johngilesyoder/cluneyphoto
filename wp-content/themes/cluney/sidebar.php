<!-- sidebar -->
<aside class="blog-sidebar" role="complementary">

	<div class="sidebar-top">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-top')) ?>
	</div>

	<!-- Social Rows -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/social-rows' ); ?>

	<div class="sidebar-bottom">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-bottom')) ?>
	</div>

	<div class="featured-badges">
		<?php if( have_rows('badges', 'option') ): ?>

			<ul class="featured-badges">

			<?php while( have_rows('badges', 'option') ): the_row();

				// vars
				$badge_image = get_sub_field('badge_image');
				$publication_link = get_sub_field('publication_link');

				?>

				<li class="featured-badge">

					<?php if( $publication_link ): ?>
						<a href="<?php echo $publication_link; ?>">
					<?php else : ?>
						<span>
					<?php endif; ?>

						<img src="<?php echo $badge_image['url']; ?>" alt="<?php echo $badge_image['alt'] ?>" />

					<?php if( $publication_link ): ?>
						</a>
					<?php else : ?>
						</span>
					<?php endif; ?>

				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	</div>

</aside>
<!-- /sidebar -->
