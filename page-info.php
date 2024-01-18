<?php /* Template Name: Informação ao Cidadão */ ?>

<?php get_header(); ?>
<div class="row">
					<div class="col-md-12 col-sm-12">
		<?php wp_reset_postdata(); ?>

		<div id="content" class="pt-5">

			<div class="content-wrapper">
				<?php the_content(); ?>
			</div>

			<div class="entry-content">
				<?php get_template_part( 'template-parts/copyright' ); ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>


