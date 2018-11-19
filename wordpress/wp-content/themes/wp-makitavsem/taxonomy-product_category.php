<?php get_header(); ?>

<?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <header class="entry-header">
        <h1 class="entry-title" itemprop="name"><?php the_category(', '); ?></h1>
      </header><!-- .entry-header -->

        <div class="entry-content" itemprop="mainContentOfPage">
          <div class="woocommerce columns-4">
            <ul class="products">
              <?php
                $queried_object = get_queried_object();
                $paged = get_query_var('paged');
                $paged = ($paged) ? $paged : 1;
                $query = new WP_Query( array(
                  'post_type' => 'product',          // name of post type.
                  'paged' => $paged ,          // name of post type.
                  'posts_per_page' => 96,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_category',   // taxonomy name
                      'field' => 'term_id',           // term_id, slug or name
                      'terms' => $queried_object->term_id,                  // term id, term slug or term name
                    )
                  )
                ));

                while ( $query->have_posts() ) : $query->the_post();
            ?>

              <?php $price = get_post_meta(get_the_ID(), 'price', true); if ($price == '0.00') { $price = 'Нет в наличии';} else { $price = $price.'&nbsp;руб.';} $sku = get_post_meta(get_the_ID(), 'price_org', true); $price_org = get_post_meta(get_the_ID(), 'price_org', true); ?>
              <li class="first product type-product status-publish has-post-thumbnail product_cat-shurupoverti shipping-taxable purchasable product-type-simple product-cat-shurupoverti outofstock">
                <a href="<?php the_permalink() ?>">
                  <img width="299" height="299" src="<?php echo the_post_thumbnail_url('medium'); ?>" class="attachment-shop_catalog wp-post-image" alt="<?php the_title(); ?> <?php echo $sku; ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
                <div class="product__wr-button">

                  <span class="price"><span class="amount"><?php echo $price; ?></span></span>
                  <a href="<?php the_permalink() ?>" rel="nofollow" data-product_id="<?php the_ID(); ?>" data-product_sku="<?php echo $sku; ?>" data-quantity="1" class="button  product_type_simple">Подробнее</a>
                </div>
              </li>
            <?php endwhile; ?>

          </ul>
        </div>
      </div><!-- .entry-content -->


      <?php get_template_part('pagination'); ?>

      <?php wp_reset_query(); ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
