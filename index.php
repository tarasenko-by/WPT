<?php
/**
 * Index (index.php)
 * @package WordPress
 * @subpackage Antares
 */
get_header(); ?>

<section>
	<div class="container">
		<div class="row">

			<?php get_sidebar();?>

			<div class="<?php content_class_by_sidebar();?> content">

				<div class="slide">
					<?php if (get_theme_mod('authorPhoto', '') != '' ) { ?>
					<div class="col-sm-2 pmn">

						<img src="<?php echo get_theme_mod('authorPhoto', ''); ?>" alt="" class="img-responsive">

					</div>
					<?php } ?>
					<div class="col-sm-10">


						<h5><?php echo get_theme_mod('aboutTitle', ''); ?></h5>
						<p>
							<?php echo get_theme_mod('about', ''); ?>
						</p>
						<p>
							Подпишись на обновления:
						</p>
						<ul class="ul-ui ul-lsn ul-line">
							<?php if ( get_theme_mod('social_network_vk', '') != '' ){ ?>
							<li class="vk"><a href="<?php echo  get_theme_mod('social_network_vk'); ?>">VK.com</a></li>
							<?php } ?>
							<?php if ( get_theme_mod('social_network_youtube', '') != '' ){ ?>
							<li class="youtube"><a href="<?php echo  get_theme_mod('social_network_youtube'); ?>">YouTube</a></li>
							<?php } ?>
							<?php if ( get_theme_mod('social_network_telegramm', '') != '' ){ ?>
							<li class="telegram"><a href="<?php echo get_theme_mod('social_network_telegramm'); ?>">Telegram</a></li>
							<?php } ?>

							<?php if ( get_theme_mod('social_network_fb', '') != '' ){ ?>
							<li class="telegram"><a href="<?php echo  get_theme_mod('social_network_fb'); ?>">Faсebook</a></li>
							<?php } ?>
							<?php if ( get_theme_mod('social_network_twitter', '') != '' ){ ?>
							<li class="telegram"><a href="<?php echo get_theme_mod('social_network_twitter'); ?>">Twitter</a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="content-block">
					<div class="content-wrapper">

						<h1><?php  //
							if (is_day()) : printf('Daily Archives: %s', get_the_date());
							elseif (is_month()) : printf('Архив за: %s', get_the_date('F Y'));
							elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
							else : 'Archives';
						endif; ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php if( get_theme_mod('them_preview_image_size')== 'small') {

							  get_template_part('loop');
								}
							else
							{
							  get_template_part('loop3');
							}
						 ?>
						<?php endwhile;

						else: echo '<p>Нет записей.</p>'; endif;?>
						<?php pagination(); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer();?>
