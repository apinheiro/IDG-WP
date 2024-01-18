<?php /* Template Name: Perguntas Frequentes */ ?>

<?php get_header(); ?>
<div class="row">
					<div class="col-md-12 col-sm-12">
          <?php
          while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content-page', 'page' );


          endwhile; // End of the loop.
          ?>
        </div>

        <div class="entry-content">
          <?php get_template_part('template-parts/copyright'); ?>
        </div>
      </div>
  </div>
  </main>
<?php
get_footer();
