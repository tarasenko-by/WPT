<?php
/**
 * Loop (loop.php)
 * @package WordPress
 * @subpackage Antares
 */ 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('story row pmn'); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-5 pmn">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive">
				</a>
			</div>
		<?php } ?>
	<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-7<?php } else { ?>col-sm-12<?php }?>">

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php the_content('');?>

		<div class="info">
				<div class="date">
					<p><?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></p>
				</div>

			<div class="category text-right">
				<svg class="icon icon-category"><use xlink:href="#icon-category"></use></svg> <?php the_category(',') ?>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
</article>