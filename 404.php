<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */

get_header();
?>
			<div class="row" id="content">
				<div class="col-12 pt-4 pb-4">
					<header class="entry-header">
						<h1 class="entry-title text-center mt-1"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'idg-wp' ); ?></h1>
					</header><!-- .page-header -->

					<div class="entry-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'idg-wp' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'idg-wp' ); ?></h2>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div>

						<?php
						$idg_wp_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'idg-wp' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$idg_wp_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>
					</div>
				</div>
			</div>
		</div>

	</main>

<?php
get_footer();
