<?php
/**
 * Custom Page (page-custom.php)
 * @package WordPress
 * @subpackage Antares
 * Template Name: Custom Tamplate
 */

get_header(); ?>

<section>
	<div class="container">
		<div class="row">


			<div class="col-sm-12 content">

				<div class="slide">
					<h1 class="pmn title text-center"><?php the_title();?></h1>
					<ul class="breadcrumb">
						<?php the_breadcrumb() ?>
					</ul>
				</div>

				<div class="content-block">
					<div class="content-wrapper">
						<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('block page'); ?>> 
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