<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */

get_header();
?>
<div class="row">
<div class="col-md-12 col-sm-12">

		<section class="carousel-wrapper">
			<?php get_template_part('template-parts/jumbotron-carousel'); ?>
		</section>

		<?php get_template_part('template-parts/sections-entrada'); ?>

		<?php get_template_part('template-parts/busca-acervo'); ?>

		<?php get_template_part('template-parts/exposicoes'); ?>

		<?php get_template_part('template-parts/noticias-entrada'); ?>

		<?php if ( !idg_wp_get_option('_home_widgets_sections_disable') ):  ?>

			<?php
			$idg_wp_widgets_areas = get_theme_mod( 'idg_wp_widgets_areas' );
			$sections = idg_wp_get_option('_home_widgets_sections');
			$sections = explode( ',', $sections );
			
			foreach ($sections as $section) : ?>
			<section id="<?php echo $section; ?>" class="<?php echo empty( $idg_wp_widgets_areas['areas'][$section]['section_class'] ) ? 'mt-5 mb-5 pt-4' : $idg_wp_widgets_areas['areas'][$section]['section_class']; ?>">
				<div class="container">
					<div class="row">
						
						<?php if( $idg_wp_widgets_areas['areas'][$section]['section_title'] ): ?>
							<div class="col-lg-12">
								<h2 class="section-title mb-5 text-center"><?php echo $idg_wp_widgets_areas['areas'][$section]['section_title']; ?></h2>
							</div>
						<?php endif; ?>
						
						<div class="overflow-wrapper">
							<?php
							if ( is_active_sidebar( $section ) ) :
								dynamic_sidebar( $section );
							endif;
							?>
						</div>
					</div>
				</div>
			</section>
		<?php endforeach; ?>
		
	<?php endif; ?>

		<?php if(idg_wp_get_option('home_show_agenda')): ?>

			<section class="pt-5 pb-5 mb-5" id="agenda">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-lg-12">
							<?php echo do_shortcode( '[gs-agenda event-cats="agenda-cultural, agenda-do-ministro, agenda-de-cursos"]' );?>
						</div>
					</div>
				</div>
			</section>

		<?php endif; ?>

	</main>

<?php
get_footer();
