<?php
/**
 * The template for displaying category results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */

get_header();
?>
	<div class="row">
					<div class="col-md-12 col-sm-12">

					<h1 class="page-title text-center">
						<?php echo get_cat_name(get_query_var('cat')); ?>
					</h1>

					<?php get_template_part('template-parts/posts-list', 'category'); ?>

					<?php get_template_part('template-parts/copyright'); ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
