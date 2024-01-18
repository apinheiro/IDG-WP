<?php get_header(); ?>
<div class="row">
					<div class="col-md-12 col-sm-12">
					<h1 class="page-title text-center">Acervo</h1>
					<?php echo share_box('',true); ?>
				</div>
			</div>
		</div>

		<div class="pt-4 pb-4">
			<?php tainacan_the_faceted_search(); ?>
		</div>
	</main>

<?php get_footer(); ?>