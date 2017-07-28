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
				</div>

				<div class="content-block">
					<div class="content-wrapper">
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('block page'); ?>> <?php // контэйнер с классами и id ?>
								<h1 class="pmn title"><?php the_title(); // заголовок поста ?></h1>
								<?php the_content(); // контент ?>
							</article>
						<?php endwhile; // конец цикла ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>