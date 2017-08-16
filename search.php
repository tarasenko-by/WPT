
<?php
/**
 * Главная страница (index.php)
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
					<div class="col-sm-2 pmn">
						<img src="<?php echo get_theme_root_uri(); ?>/creade/images/photo.jpg" alt="" class="img-responsive">
					</div>
					<div class="col-sm-10">
						<h5>Немного обо мне</h5>
						<p>Меня зовут Сергей Тарасенко и я занимаюсь UX/UI и web-дизайном. В свободное время делиюсь свои опытом в блоге и на YouTube канале.</p>
						<p>
							Подпишись на обновления:
						</p>
						<ul class="ul-ui ul-lsn ul-line">
							<li class="vk"><a href="/">VK.com</a></li>
							<li class="youtube"><a href="/">YouTube</a></li>
							<li class="telegram"><a href="/">Telegram</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="content-block">
					<div class="content-wrapper">

						<h3><?php printf('Поиск по строке: %s', get_search_query()); ?></h3>
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							
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

						<?php endwhile; // конец цикла

						else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
						<?php pagination(); // пагинация, функция нах-ся в function.php ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>