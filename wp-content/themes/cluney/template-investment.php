<?php /* Template Name: Investment */ get_header(); ?>

	<main role="main">
		<div class="container-fluid">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="row">
				<div class="col-sm-4">
					<img class="img-responsive investment-photo" src="<?php the_post_thumbnail_url( full ); ?>">
				</div>
				<div class="col-sm-8">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>

				<?php endif; ?>

				</div>
			</div>

		</div>
	</main>

<?php get_footer(); ?>
