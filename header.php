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
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png" />
	
	<!-- Fonte Rawline-->
    <link rel="stylesheet" href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css"/>
    <!-- Fonte Raleway-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap"/>
    <!-- Design System de Governo-->
    <link rel="stylesheet" href="https://apinheiro.github.io/tainacan-site/govbr/assets/core.css"/>
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://apinheiro.github.io/tainacan-site/govbr/assets/slick/slick.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="template-base">
      <nav class="br-skiplink"><a class="br-item" href="#main-content" accesskey="1">Ir para o conteúdo (1/4) <span class="br-tag text ml-1">1</span></a><a class="br-item" href="#header-navigation" accesskey="2">Ir para o menu (2/4) <span class="br-tag text ml-1">2</span></a><a class="br-item" href="#main-searchbox" accesskey="3">Ir para a busca (3/4) <span class="br-tag text ml-1">3</span></a><a class="br-item" href="#footer" accesskey="4">Ir para o rodapé (4/4) <span class="br-tag text ml-1">4</span></a>
      </nav>
      <header class="br-header mb-4" id="header" data-sticky="data-sticky">
        <div class="container-fluid">
          <div class="header-top">
            <div class="header-logo">
              <a href="/">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"/></a>
              <span class="br-divider vertical"></span>
              <div class="header-sign">Minstério da Gestão e da Inovação em Serviços Públicos</div>
            </div>
            <div class="header-actions">
              <div class="header-links dropdown">
                <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </button>
                <div class="br-list">
                  <div class="header">
                    <div class="title">Acesso Rápido</div>
                  </div>
                  <div class="br-list">
                  <?php
					$menu_args = array(
						'menu'              => 'featured-links',
						'theme_location'    => 'featured-links',
						'depth'             => 1,
						'container'         => 'ul',
						'menu_class'        => 'nav d-none d-md-flex',
					);
					wp_nav_menu($menu_args); ?>
               </div>
                </div>
              </div><span class="br-divider vertical mx-half mx-sm-1"></span>
              <div class="header-functions dropdown">
                <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Funcionalidades do Sistema"><i class="fas fa-th" aria-hidden="true"></i>
                </button>
                <div class="br-list">
                  <div class="header">
                    <div class="title">Funcionalidades do Sistema</div>
                  </div>
                  <!-- <div class="br-item">
                    <button class="br-button circle small" type="button" aria-label="Funcionalidade 1"><i class="fas fa-chart-bar" aria-hidden="true"></i><span class="text">Funcionalidade 1</span>
                    </button>
                  </div>
                  <div class="br-item">
                    <button class="br-button circle small" type="button" aria-label="Funcionalidade 2"><i class="fas fa-headset" aria-hidden="true"></i><span class="text">Funcionalidade 2</span>
                    </button>
                  </div> -->
                  <div class="br-item">
                    <button class="br-button circle small" type="button" aria-label="Funcionalidade 3"><i class="fas fa-comment" aria-hidden="true"></i><span class="text">Funcionalidade 3</span>
                    </button>
                  </div>
                  <!-- <div class="br-item">
                    <button class="br-button circle small" type="button" aria-label="Funcionalidade 4"><i class="fas fa-adjust" aria-hidden="true"></i><span class="text">Funcionalidade 4</span>
                    </button>
                  </div> -->
                </div>
              </div>
              <div class="header-search-trigger">
                <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search" data-target=".header-search"><i class="fas fa-search" aria-hidden="true"></i>
                </button>
              </div>
              <!-- <div class="header-login">
                <div class="header-sign-in">
                  <button class="br-sign-in small" type="button" data-trigger="login"><i class="fas fa-user" aria-hidden="true"></i><span class="d-sm-inline">Entrar</span>
                  </button>
                </div>
                <div class="header-avatar"></div>
              /div> -->
            </div>
          </div>
          <div class="header-bottom">
            <div class="header-menu">
              <div class="header-menu-trigger" id="header-navigation">
                <button class="br-button small circle" type="button" aria-label="Menu" data-toggle="menu" data-target="#main-navigation" id="navigation"><i class="fas fa-bars" aria-hidden="true"></i>
                </button>
              </div>
              <div class="header-info">
                <div class="header-title">Memória<b>SPU</b></div>
                <div class="header-subtitle"><?php bloginfo( 'description' ); ?></div>
              </div>
            </div>
            <?php get_search_form(); ?>
          </div>
        </div>
      </header> 

