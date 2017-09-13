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
							<article id="post-<?php the_ID(); ?>" <?php post_class('block page consult'); ?>> 
								<div class="col-sm-10 col-sm-offset-1 text-center title">
								Если вы хотите получить личную консультацию на тему веб-дизайна или верстки сайтов, то вы можете выбрать один из ниже предложенных вариантов по времени.
								<br><br>Я готов ответить на все интересующие вас вопросы :)</div>
								<div class="col-sm-4 price">
									<div class="text-center title min">Минимум</div>
									<div class="text">
										<p>Продолжительность: <strong>1 час</strong></p>
										<p>Цена: <strong>1500 руб.</strong></p>
									</div>
									<a class="btn btn-blue btn-block">Заказать</a>
								</div>

								<div class="col-sm-4 price">
									<div class="text-center title stand">Стандарт</div>
									<div class="text">
										<p>Продолжительность: <strong>2 час</strong></p>
										<p>Цена: <strong>1500 руб.</strong></p>
									</div>
									<a class="btn btn-blue btn-block">Заказать</a>
								</div>

								<div class="col-sm-4 price">
									<div class="text-center title max">Максимум</div>
									<div class="text">
										<p>Продолжительность: <strong>3 час</strong></p>
										<p>Цена: <strong>1500 руб.</strong></p>
									</div>
									<a class="btn btn-blue btn-block">Заказать</a>
								</div>
								<div class="col-sm-10 col-sm-offset-1 title text-center">
									Подбор удобного времени для консультации обсуждается с каждым лично. <br>Оставшееся время тратиться в другое время.
								</div>
								<div class="clearfix"></div>
							</article>
						<?php endwhile;?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer();?>