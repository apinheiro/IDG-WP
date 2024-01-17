<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */

?>
	<footer id="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="social-title text-uppercase">Redes sociais</h3>

					<?php get_template_part( 'template-parts/social-medias' ); ?>
				</div>
			</div>
			<div class="row menus">
				<?php if ( is_active_sidebar( 'footer-widgets-area' ) ) :
					dynamic_sidebar( 'footer-widgets-area' );
				endif; ?>
			</div>
			<div class="row footer-brasil">
				<div class="col-lg-12">
					<a class="logo-acesso-footer" target="_blank" href="http://www.acessoainformacao.gov.br/" alt="Acesso à informação" title="Acesso à informação"></a>
					<a class="logo-governo-federal" target="_blank" href="http://www.brasil.gov.br/" alt="Governo Federal" title="Governo Federal"></a>
				</div>
			</div>
		</div>
	</footer>

	<div id="overlay"></div>

<?php wp_footer(); ?>
			</div>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://apinheiro.github.io/tainacan-site/govbr/assets/slick/slick.min.js"></script>

	<script src="https://apinheiro.github.io/tainacan-site/govbr/assets/core-init.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
