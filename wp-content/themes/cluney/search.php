<?php get_header(); ?>

<?php
  $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
  $featured_image = $img[0];
?>

<main role="main" class="page-journal">
	<div class="container">
		<div class="tile-posts">
			<div class="row">
				<div class="col-md-9">
					<h1 class="page-title search-title"><?php echo sprintf( __( '%s Search Result(s) for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
