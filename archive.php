<?php
/**
 * Main page (index.php)
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

						<h3><?php  //
							if (is_day()) : printf('Daily Archives: %s', get_the_date());
							elseif (is_month()) : printf('Архив за: %s', get_the_date('F Y'));
							elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
							else : 'Archives';
						endif; ?></h3>
						
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php get_template_part('loop');?>
						<?php endwhile;

						else: echo '<p>Нет записей.</p>'; endif;?>
						<?php pagination();?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer();?>