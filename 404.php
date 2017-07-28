
<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<section>
	<div class="container">
		<div class="row">

			<?php get_sidebar(); // подключаем sidebar.php ?>

			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?> content">

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
<?php get_footer(); // подключаем footer.php ?>