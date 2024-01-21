
<?php
	$args = [];
	$args['category_name'] = "exposicoes";
	if( idg_wp_get_option('_main_carousel_slides') ){
		$args['posts_per_page'] = idg_wp_get_option('_main_carousel_slides');
	} else {
		$args['posts_per_page'] = 3;
	}

	$feature_news_query = new WP_Query( $args );

	if ( $feature_news_query->have_posts() ) : $i = 0; ?>
     <h2 class="ml-6">Exposições</h2>
     <div class="row br-slick-cards">
        <?php while ( $feature_news_query->have_posts() ) : $feature_news_query->the_post(); ?>
        <?php
          $slug = get_post_field('post_name', get_post());

          $img_args = array(
            'post_type' => 'attachment',
            'post_status' => 'inherit',
            'post_mime_type' => 'image',
            's' => "$slug"
          );
          $imagem_query = new WP_Query($img_args);

          $imagem_src = $imagem_query->have_posts() ? $imagem_query->post->guid : get_template_directory_uri()."info.png";
        ?>
        <div class="col-3 m-2 br-card">
            <div class="card-content">
                <a href="<?php the_permalink(); ?>" draggagle="false">
                    <img src="<?= $imagem_src ?>" draggagle="false">
                </a>
                <span class="text-weight-bold"><?php the_title(); ?></span>
                <?php the_excerpt(); ?>
            </div>
        </div>
        <?php $i ++; endwhile;
			wp_reset_postdata(); ?>
    </div>
 
<?php endif; ?>