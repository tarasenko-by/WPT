<?php
/**
 * Page template (page.php)
 * @package WordPress
 * @subpackage Antares
 */
get_header(); ?>

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
						<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('block page'); ?>> 
								<h1 class="pmn title"><?php the_title();?></h1>
								<?php the_content();?>
							</article>
						<?php endwhile;?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer();?>