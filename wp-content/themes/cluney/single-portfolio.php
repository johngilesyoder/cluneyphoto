<?php get_header();

?>

	<main role="main">
		<div class="container-fluid portfolio-gallery-wrapper">
			<h4 class="page-subtitle"><a href="/portfolio/">&larr; Portfolio</a></h4>
			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="gallery-description">
					<?php the_content(); ?>
				</div>

				<div class="grid">
				  <div class="gutter-sizer"></div>
					<!-- Loop these images from ACF -->

					<?php if( have_rows('gallery_images') ): ?>

						<?php while( have_rows('gallery_images') ): the_row();

							// vars
							$image = get_sub_field('gallery_image');
							$diptych = get_sub_field('vertical');

							?>

								<?php if( $link ): ?>
									<a href="<?php echo $link; ?>">
								<?php endif; ?>

								<img class="grid-item<?php if( $diptych ): ?> diptych<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
	</section>
	</main>

<?php get_footer(); ?>
