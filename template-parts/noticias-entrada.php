<?php
	$args = [];
	$args['category_name'] = "destaques";
	$args['posts_per_page'] = 2;

	$feature_news_query = new WP_Query( $args );

	if ( $feature_news_query->have_posts() ) : $i = 0; ?>
    <h2 class="ml-5 mt-5">Destaques</h2>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <?php while ( $feature_news_query->have_posts() ) : $feature_news_query->the_post(); ?>
        <div class="col-6 ">
        <?php
					if ( has_post_thumbnail() ) {
						$post_thumb = get_the_post_thumbnail_url( get_the_ID(), 'carousel-feature' );
					} else {
						$post_thumb = get_template_directory_uri() . '/assets/img/corte.jpg';
					}
					?>
					<a href="<?php the_permalink(); ?>">
                    <img class="d-block w-100 banner" src="<?php echo $post_thumb; ?>" alt="Second slide"></a>

            <h5 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <?php the_excerpt(); ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>

    <?php endif; ?>