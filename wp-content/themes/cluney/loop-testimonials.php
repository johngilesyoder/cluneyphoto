<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-md-4">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="col-md-8">
					<blockquote class="testimonial-quote">
						<?php the_content(); ?>
						<footer><cite><?php the_title(); ?></cite></footer>
					</blockquote>
				</div>
			</div>
		</article>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
