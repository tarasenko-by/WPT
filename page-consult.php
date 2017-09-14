<?php
/**
 * Custom Page (page-consult.php)
 * @package WordPress
 * @subpackage Antares
 * Template Name: Страница с консультациями
 */

get_header(); ?>

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

				<div class="content-block ">
					<div class="content-wrapper consult pmn">

						<div class="col-sm-12 title">
							<h2>Личная консультация по Skype</h2>
							<p>Если у вас есть вопросы или вам нужна помощь в веб-дизайне или верстке сайтов, то я готов уделить вам свое время. <strong> Время можно разбивать на удобные для вас части.</strong></p>

						</div>
						
						<div class="col-sm-4 pmn price">
							<img src="<?php echo get_template_directory_uri(); ?>/images/start.png" alt="" class="img-responsive">
							<span class="title">Минимум</span>
							<span class="time">1 час</span>
							<span class="money">1500 <strong>₽</strong></span>
							<a href="#" class="btn btn-blue">Отправить заявку</a>
						</div>
						
						<div class="col-sm-4 pmn price">
							<img src="<?php echo get_template_directory_uri(); ?>/images/basic.png" alt="" class="img-responsive">
							<span class="title">Стандартная</span>
							<span class="time">2 часа</span>
							<span class="money">2800 <strong>₽</strong></span>
							<a href="#" class="btn btn-blue">Отправить заявку</a>
						</div>
						
						<div class="col-sm-4 pmn price wb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ultra.png" alt="" class="img-responsive">
							<span class="title">Максимальная</span>
							<span class="time">3 часа</span>
							<span class="money">4000 <strong>₽</strong></span>
							<a href="#" class="btn btn-blue">Отправить заявку</a>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer();?>