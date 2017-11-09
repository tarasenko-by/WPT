<?php
/**
 * Шаблон отдельной записи (single.php)
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
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('block story full-story'); ?>> <?php // контэйнер с классами и id ?>
							<h1 class="pmn title"><?php the_title(); // заголовок поста ?></h1>
							<div class="info">
								<time class="date grey" datetime="<?php the_time(get_option('date_format')." в ".get_option('time_format')); ?>">
									<?php the_time(get_option('date_format')." в ".get_option('time_format')); ?>
								</time>

						
					</div>
							<?php the_content(); // контент ?>

							<div class="form-subscrive">
								<div class="form-subscrive-block clearfix">
									<h3>Узнайте, какие 5 критических ошибок <br> не дают заработать новичку в Веб-дизайне</h3>
									<h4>Получите доступ к БЕСПЛАТНОМУ видеокурсу от Сергея Тарасенко <br> (5 видеоуроков + 2 PDF-файла)</h4>

									<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
										<div class="col-sm-4 pmn pr-20"><input type="text" class="form-control" name="name" placeholder="Имя" /></div>
										<div class="col-sm-4 pmn pr-20"><input type="text" class="form-control" name="email" placeholder="E-mail" /></div>
										<input type="hidden" name="campaign_token" value="nkNZY" />
										<input type="hidden" name="thankyou_url" value="https://creade.ru/success"/>
										<div class="col-sm-4 pmn"><input type="submit" class="btn btn-block" value="Получить доступ"/></div>
									</form>
								</div>
							</div>

							<div class="meta-block row">
								<div class="meta col-sm-6 pmn">
									<ul class="ul-ui ul-line">
										<li><p>Автор:  <?php the_author_posts_link(); ?></p></li>
										<li><p>Категории: <?php the_category(',') ?></p> <?php // ссылки на категории в которых опубликован пост, через зпт ?></li>
									</ul>
									<?php the_tags('<p>Тэги: ', ',', '</p>'); // ссылки на тэги поста ?>
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
					<?php endwhile; // конец цикла ?>
					
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
					<?php if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
					</div>
				</div>
			</div>
		</div>

		</div>
	</div>
</section>

<?php get_footer(); // подключаем footer.php ?>
