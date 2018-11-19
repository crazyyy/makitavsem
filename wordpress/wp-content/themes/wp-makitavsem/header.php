<!doctype html>
<html <?php language_attributes(); ?> class="no-js" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="//www.google-analytics.com/" rel="dns-prefetch">
  <link href="//fonts.googleapis.com" rel="dns-prefetch">
  <link href="//cdnjs.cloudflare.com" rel="dns-prefetch">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class('left-sidebar'); ?>>
<div id="page" class="hfeed site" style="position: relative; min-height: 100%; height: auto">

	<header id="masthead" class="site-header" role="banner">
		<div class="container" style="padding: 5px">
			<div class="row">
				<div class="three columns">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            <a href="<?php echo home_url(); ?>">
          <?php } ?>
              <img class="top-logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            </a>
          <?php } ?>
				</div>
				<div class="five columns" style="text-align:right; padding-right: 50px">
					<div class="header-phone">тел.: <span>+7</span> 495 <span>133</span> 86 72</div>
					<div style="margin-top: -10px">
						<h6 style="color: white">График работы: Пн-Пт 10:00-18:00 </h6>
					</div>
				</div>
				<div class="four columns" style="text-align: right">
          <div class="site-search">
            <div class="widget woocommerce widget_product_search">
              <form role="search" method="get" class="woocommerce-product-search" action="<?php echo home_url(); ?>">
                <label class="screen-reader-text" for="s">Искать:</label>
                <input type="search" class="search-field" placeholder="Поиск товаров…" value="" name="s" title="Искать:">
                <input type="submit" value="Поиск">
                <input type="hidden" name="post_type" value="product">
              </form>
            </div>
          </div>
				</div>
			</div>
			<div class="row">
				<div class="nine columns">
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Главная навигация">
		        <button class="menu-toggle" aria-controls="primary-navigation" aria-expanded="false">Навигация</button>
			      <div class="primary-navigation">
              <?php wpeHeadNav(); ?>
            </div>
		      </nav><!-- #site-navigation -->
				</div>

      </div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
