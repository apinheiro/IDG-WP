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
	<footer id="main-footer" class="br-footer">
		<div class="container-lg">
			<div class="logo">
				<img src="https://apinheiro.github.io/tainacan-site/govbr/imagens/logo_spu_branco.png" alt="Imagem"/>
			</div>
			<div class="br-list horizontal" data-toggle="data-toggle" data-sub="data-sub">
			<?php if ( is_active_sidebar( 'footer-widgets-area' ) ) :
						dynamic_sidebar( 'footer-widgets-area' );
					endif; ?>
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
