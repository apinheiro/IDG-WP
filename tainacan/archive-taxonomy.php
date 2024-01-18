<?php
$current_term = tainacan_get_term();
$current_taxonomy = get_taxonomy( $current_term->taxonomy );
?>
<?php get_header(); ?>
<div class="row">
					<div class="col-md-12 col-sm-12">
					<h1 class="page-title text-center"><?php echo $current_taxonomy->label; ?>: <span><?php tainacan_the_term_name(); ?></span></h1>
					<?php echo share_box('',true); ?>
				</div>
			</div>
		</div>

		<div class="pt-4 pb-4">
			<p class="pl-4 pr-4">
				<?php tainacan_the_term_description(); ?>
			</p>

			<?php tainacan_the_faceted_search(); ?>
		</div>
	</main>

<?php get_footer(); ?>