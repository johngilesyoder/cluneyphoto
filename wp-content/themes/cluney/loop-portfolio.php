<?php
$term = get_queried_object();
$slug = $term->slug;

$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => 30,
	'no_found_rows' => true,
);

query_posts( $args ); if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-sm-6 col-md-4">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
				<h2 class="gallery-title"><span><?php the_title(); ?></span></h2>
			</a>
		</article>
	</div>

<?php endwhile; ?>

<?php else: ?>

<?php endif; wp_reset_query(); ?>
