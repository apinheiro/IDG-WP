<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport"  content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />


	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png" />
	
	<link rel="stylesheet" href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
	<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap"
    />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="template-base">
	<nav class="br-skiplink">
		<a class="br-item" href="#main-content" accesskey="1">Ir para o conteúdo (1/4) 
			<span class="br-tag text ml-1">1</span></a><a class="br-item" href="#header-navigation" accesskey="2">Ir para o menu (2/4) <span class="br-tag text ml-1">2</span></a><a class="br-item" href="#main-searchbox" accesskey="3">Ir para a busca (3/4) <span class="br-tag text ml-1">3</span></a><a class="br-item" href="#footer" accesskey="4">Ir para o rodapé (4/4) <span class="br-tag text ml-1">4</span></a>
    </nav>
<a class="skip-link sr-only" href="#main">
    <?php esc_html_e( 'Skip to content', 'idg-wp' ); ?>
</a>

<header class="br-header mb-4" id="header" data-sticky="data-sticky">
<div class="container-fluid">
		
	<div id="barra-brasil"></div>
	<div class="header-top">
			<div class="header-logo"><img src="https://apinheiro.github.io/tainacan-site/govbr/imagens/logo_spu.png" alt="logo"/><span class="br-divider vertical"></span>
              <div class="header-sign">Minstério da Gestão e da Inovação em Serviços Públicos</div>
            </div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-8 title-wrapper">
				<p class="site-denomination mb-0"><?php bloginfo( 'description' ); ?></p>
				<h1 class="site-title mt-0 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="col-md-6 col-lg-4 d-none d-md-block">
				<ul id="accessibility-bar" class="text-right">
					<li class="high-contrast">
						<a href="#" id="high-contrast-btn">Alto contraste</a>
					</li>
					<li class="vlibras">
						<a href="http://www.vlibras.gov.br/" target="_blank">VLibras</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-1 col-md-8 col-lg-9 menu-wrapper">
				<nav id="featured-links">
					<button id="menu-toggle">
						<span><?php esc_html_e( 'Primary Menu', 'idg-wp' ); ?></span>
						<span></span>
						<span></span>
					</button>

					<?php
					$menu_args = array(
						'menu'              => 'featured-links',
						'theme_location'    => 'featured-links',
						'depth'             => 1,
						'container'         => 'ul',
						'menu_class'   => 'nav d-none d-md-flex',
					);
					wp_nav_menu($menu_args); ?>
				</nav>
			</div>
			<div class="col-sm-11 col-md-4 col-lg-3 search-wrapper hide-mobile">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div id="menu-wrapper" class="clearfix">
			<div class="menu-content container">

					<div class="menu-header hide-desktop">
						<button type="button" class="close-menu icon-close"></button>
						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<div class="search-wrapper">
							<?php get_search_form(); ?>
						</div>
					</div>

					<div class="menu-body scrollTarget">
						<div class="row">
							<?php
							if ( is_active_sidebar( 'main-menu-area' ) ) :
								dynamic_sidebar( 'main-menu-area' );
							endif;
							?>

							<div class="col social-media-col hide-mobile">
								<div class="menu-col border-0">
									<h3 class="menu-title">Redes Sociais</h3>

									<?php get_template_part( 'template-parts/social-medias' ); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="menu-footer hide-desktop">
						<?php get_template_part( 'template-parts/social-medias' ); ?>
					</div>

			</div>
		</div>
	</div>
</header>
