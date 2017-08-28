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
			<?php echo get_theme_mod('socialTitle', ''); ?>
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
			<li class="facebook"><a href="<?php echo  get_theme_mod('social_network_fb'); ?>">Faсebook</a></li>
			<?php } ?>
			<?php if ( get_theme_mod('social_network_twitter', '') != '' ){ ?>
			<li class="twitter"><a href="<?php echo get_theme_mod('social_network_twitter'); ?>">Twitter</a></li>
			<?php } ?>
		</ul>
	</div>
	<div class="clearfix"></div>