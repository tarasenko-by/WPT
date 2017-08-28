
<?php
/**
 * Tags (tag.php)
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
					<?php include("about.php"); ?>
				</div>

				<div class="content-block">
					<div class="content-wrapper">

						<h3><?php printf('Посты с тэгом: %s', single_tag_title('', false));?></h3>
						
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php get_template_part('loop'); ?>
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