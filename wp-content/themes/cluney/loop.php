<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<span class="date"><?php the_time('F j, Y'); ?></span>

		<?php the_content();?>

		<div class="grid">
			<div class="gutter-sizer"></div>
			<!-- Loop these images from ACF -->

			<?php if( have_rows('gallery_images') ): ?>
				<?php $i = 0; ?>
				<?php while( have_rows('gallery_images') ): the_row(); ?>
					<?php $i++; ?>
					<?php if( $i > 10 ): ?>
						<?php break; ?>
					<?php endif; ?>

					<?php
					// vars
					$image = get_sub_field('gallery_image');
					$diptych = get_sub_field('vertical');

					?>

						<?php if( $link ): ?>
							<a href="<?php echo $link; ?>">
						<?php endif; ?>

						<img class="grid-item<?php if( $diptych ): ?> diptych<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

				<?php endwhile; ?>

			<?php endif; ?>

		</div>

		<?php if( have_rows('gallery_images') ): ?>
			<div class="btn-excerpt-wrapper">
				<a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-excerpt">View the rest &rarr;</a>
			</div>
		<?php endif; ?>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
