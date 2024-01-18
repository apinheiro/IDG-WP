<?php get_header(); ?>
<div class="row">
					<div class="col-md-12 col-sm-12">
					<h1 class="page-title text-center"><?php echo tainacan_get_the_collection_name(); ?></h1>
					<p class="pl-4 pr-4">
						<?php tainacan_the_collection_description(); ?>
					</p>
					<?php echo share_box('',true); ?>
				</div>
			</div>
		
		<div class="pt-4 pb-4">
			<?php tainacan_the_faceted_search(); ?>
		</div>
</div>
	</main>

<?php get_footer(); ?>
