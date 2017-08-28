
<?php
/**
 * Search (search.php)
 * @package WordPress
 * @subpackage Antares
 */
get_header();  ?> 

<section>
	<div class="container">
		<div class="row">

			<?php get_sidebar(); ?>

			<div class="<?php content_class_by_sidebar();?> content">

				<div class="slide">
					<?php include("about.php"); ?>
				</div>

				<div class="content-block">
					<div class="content-wrapper">

						<h3><?php printf('Поиск по строке: %s', get_search_query()); ?></h3>
						
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php if( get_theme_mod('them_preview_image_size')== 'left') {

							  get_template_part('loop'); 
								}
							else
							{
							  get_template_part('loop3');
							}
						 ?>
						<?php endwhile;

						else: echo '<p>There are no posts.</p>'; endif;?>	 
						<?php pagination();?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer();?>