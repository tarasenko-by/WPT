
<?php
/**
 * Templete 404.php (404.php)
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
							<article class="block error-page page text-center">
								<h2>Ой, это 404!</h2>
								<img src="/wp-content/themes/WPT/images/404.jpg" alt="" class="img-responsive img-center">
								<a href="/" class="btn btn-blue btn-big">Вернуть на главную</a>
							</article>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer();?>