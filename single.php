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


<!-- SendPulse Form -->
						  <style >.sp-form-outer{margin-top: 30px;padding-top: 30px; border-top: 1px solid #eee;}.sp-form{color: #fff;} .sp-form-control{color: #434343 !important;} .sp-force-hide { display: none;}.sp-form[sp-id="86216"] { display: block; background: rgba(255, 255, 255, 1); padding: 20px; width: 100%; max-width: 100%; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; font-family: inherit; background-repeat: no-repeat; background-position: center; background-size: cover; background-image: url(//login.sendpulse.com/files/emailservice/userfiles/c66d89094d31852c0bd915666d7165d46777502/courses.jpg);}.sp-form[sp-id="86216"] .sp-form-fields-wrapper { margin: 0 auto; width: 590px;}.sp-form[sp-id="86216"] .sp-form-control { background: #ffffff; border-color: #cccccc; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; height: 35px; width: 100%;}.sp-form[sp-id="86216"] .sp-field label { color: rgba(255, 255, 255, 1); font-size: 14px; font-style: normal; font-weight: bold;}.sp-form[sp-id="86216"] .sp-button { border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background-color: #f3e60f; color: #212121; width: 100%; font-weight: bold; font-style: normal; font-family: Arial, sans-serif; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;}.sp-form[sp-id="86216"] .sp-button-container { text-align: left; width: auto;}</style><div class="sp-form-outer sp-force-hide"><div id="sp-form-86216" sp-id="86216" sp-hash="ce9614511b37740a6c5a089467be1341781ef22a9bd9f8eca02b0119162ca341" sp-lang="ru" class="sp-form sp-form-regular sp-form-embed sp-form-full-width" sp-show-options="%7B%22satellite%22%3Afalse%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%7D"><div class="sp-form-fields-wrapper show-grid"><div class="sp-message"><div></div></div><div class="sp-element-container sp-field-nolabel"><div class="sp-field " sp-id="sp-55ec577c-0b00-4cdd-9414-617867c37bbe"><div style="font-family: inherit; line-height: 1.2;"><p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 20px;">Узнайте, какие 5 критических ошибок&nbsp;</span></strong></span><br><span style="color: #ffffff;"><strong><span style="font-size: 20px;">не дают заработать новичку в Веб-дизайне</span></strong></span></p></div></div><div class="sp-field " sp-id="sp-b8776035-d08a-4cea-bb43-12b1e8045a37"><div style="font-family: inherit; line-height: 1.5;"><p style="text-align: center;"><span style="color: #ffffff;">Получите доступ к БЕСПЛАТНОМУ видеокурсу от Сергея Тарасенко&nbsp;</span><br><span style="color: #ffffff;">(5 видеоуроков + 2 PDF-файла)</span></p></div></div><div class="sp-field " sp-id="sp-8445d9e3-e178-4a03-8b93-6121030b7a8b"><label class="sp-control-label"><span >Email</span><strong >*</strong></label><input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="username@gmail.com" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required"></div><div class="sp-field sp-button-container " sp-id="sp-bea4c50d-c2bd-4b31-8cee-ccf773a4d796"><button id="sp-bea4c50d-c2bd-4b31-8cee-ccf773a4d796" class="sp-button">Подписаться </button></div></div><div class="sp-link-wrapper sp-brandname__left"><a class="sp-link " target="_blank" href="https://sendpulse.com/ru/?ref=6777502"><span class="sp-link-img" style="display:none;">&nbsp;</span><span translate="FORM.PROVIDED_BY"  style="display:none;">Предоставлено SendPulse</span></a></div></div></div></div><script type="text/javascript" src="//static-login.sendpulse.com/apps/fc3/build/default-handler.js?1509703623720"></script> 
<!-- /SendPulse Form -->

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
