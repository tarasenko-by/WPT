<?php
/**
 * Article (single.php)
 * @package WordPress
 * @subpackage Antares
 */
get_header();?>

<section>
	<div class="container">
		<div class="row">

			<?php get_sidebar();?>

			<div class="<?php content_class_by_sidebar();?> content">

			<div class="slide">
				<ul class="breadcrumb">
					<?php the_breadcrumb() ?>
				</ul>
			</div>

			<div class="content-block">
				<div class="content-wrapper">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('block story full-story'); ?>> 
							<h1 class="pmn title"><?php the_title();?></h1>
							<div class="info">
								<time class="date grey" datetime="<?php the_time(get_option('date_format')." в ".get_option('time_format')); ?>">
									<?php the_time(get_option('date_format')." в ".get_option('time_format')); ?>
								</time>

						
					</div>
							<?php the_content();?>
							<div class="meta-block row">
								<div class="meta col-sm-6 pmn">
									<ul class="ul-ui ul-line">
										<li><p>Автор:  <?php the_author_posts_link(); ?></p></li>
										<li><p>Категории: <?php the_category(',') ?></p></li>
									</ul>
									<?php the_tags('<p>Тэги: ', ',', '</p>');?>
								</div>
								<div class="share col-sm-6 pmn">
									<!-- Ya.Share -->
									<div class="share">
										<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
										<script src="//yastatic.net/share2/share.js"></script>
										<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-size="m" data-counter=""></div>
									</div>
									<!-- / Ya.Share -->
								</div>
							</div>
						</article>
					<?php endwhile;?>
					
					<div class="add-block">
					<div class="other-posts">
						<?php previous_post_link('%link', '
							<svg class="icon icon-arrow-left">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-left"></use>
							</svg>
							 %title', TRUE); ?> 

						<?php next_post_link('%link', '%title <svg class="icon icon-arrow-right">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-right"></use>
							</svg>', TRUE); ?> 
					</div>
					<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
					</div>
				</div>
			</div>
		</div>

		</div>
	</div>
</section>

<?php get_footer();  ?>
