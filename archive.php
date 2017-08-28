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
					<?php include("about.php"); ?>
				</div>

				<div class="content-block">
					<div class="content-wrapper">

						<h3><?php  //
							if (is_day()) : printf('Daily Archives: %s', get_the_date());
							elseif (is_month()) : printf('Archive for: %s', get_the_date('F Y'));
							elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
							else : 'Archives';
						endif; ?></h3>
						
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php get_template_part('loop');?>
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