<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="container-fluid">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<span class="date"><?php the_time('F j, Y'); ?></span>
	<div class="post-share">
		<div class="share-facebook">
			<div class="fb-like" data-width="80" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
		</div>
		<div class="share-twitter">
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<div class="share-pinterest">
			<a href="https://www.pinterest.com/pin/create/button/">
				<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<main role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); // Dynamic Content ?>

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

					<div class="post-share post-share-bottom">
            <strong>Share this post</strong>
            <div class="share-facebook">
              <div class="fb-like" data-width="80" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            </div>
            <div class="share-twitter">
              <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <div class="share-pinterest">
              <a href="https://www.pinterest.com/pin/create/button/">
                <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
              </a>
            </div>
          </div>

					<div class="post-tags">
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>');?>
					</div>

				</article>
				<!-- /article -->



			</main>
		</div>
		<div class="col-md-4">

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>
