<?php get_header(); ?>

  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <?php
            $price = get_post_meta(get_the_ID(), 'price', true);
            $price_clean = get_post_meta(get_the_ID(), 'price', true);
            if ($price == '0.00') {
              $price = 'Нет в наличии';
              $availability = '<link itemprop="availability" href="http://schema.org/OutOfStock">';
            } else {
              $price = $price.'&nbsp;руб.';
              $availability = '<link itemprop="availability" href="<link itemprop="availability" href="http://schema.org/InStock">">';
            }
            $sku = get_post_meta(get_the_ID(), 'price_org', true);
            $price_org = get_post_meta(get_the_ID(), 'price_org', true);
          ?>

          <div itemscope="" itemtype="http://schema.org/Product" id="post-<?php the_ID(); ?>" <?php post_class('type-product'); ?> >
          <h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
          <div class="">
            <div class="row">
              <div class="four columns images-wrapper">
          <?php if($sku) { ?><span class="sku_wrapper">Артикул: <span class="sku" itemprop="sku"><?php echo $sku; ?></span></span><?php } ?>
                <p><?php if($price_org) { ?><b><i> Цена для организаций: <?php echo $price_org; ?> руб. <br></i></b><?php } ?></p>

                <div class="images">
                  <a href="<?php echo the_post_thumbnail_url('large'); ?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">
                    <img width="300" height="300" src="<?php echo the_post_thumbnail_url('medium'); ?>" class="attachment-shop_single wp-post-image" alt="<?php echo $sku; ?> <?php the_title(); ?>" title="<?php the_title(); ?> <?php echo $sku; ?>">
                  </a>
                </div>
              </div>

              <div class="eight columns summary entry-summary">
                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                  <p class="price">Цена: <span class="amount"><?php echo $price; ?></span></p>
                  <meta itemprop="price" content="<?php echo $price_clean; ?>">
                  <meta itemprop="priceCurrency" content="RUB">
                  <?php echo $availability; ?>

                </div>

                <div itemprop="description" class="short-descroption">
                  <?php
                    $content = get_the_content();
                    $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    $separator = '<table class="shop_attributes">';
                    $explode = explode( $separator, $content );
                    $explode_0 = $explode[0];
                    $explode_1 = strstr($content, '<table class="shop_attributes">');
                    echo $explode_0;

                  ?>
                </div>
              </div><!-- .summary -->
              <?php if($explode_1) { ?>
                <h2>Характеристики</h2>
                <?php echo $explode_1; ?>
              <?php } ?>
            </div>
          </div>

          <?php get_template_part('template-related'); ?>
          <meta itemprop="url" content="<?php the_permalink(); ?>">
        </div><!-- #product-62 -->

      <?php endwhile; endif; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
