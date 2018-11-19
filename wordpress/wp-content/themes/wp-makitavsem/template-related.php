<div class="related products">
  <h2>Похожие товары</h2>
  <ul class="products">
    <?php
    //Get array of terms
    $terms = get_the_terms( $post->ID , 'product_category', 'string');
    //Pluck out the IDs to get an array of IDS
    $term_ids = wp_list_pluck($terms,'term_id');

    //Query posts with tax_query. Choose in 'IN' if want to query posts with any of the terms
    //Chose 'AND' if you want to query for posts with all terms
      $second_query = new WP_Query( array(
          'post_type' => 'product',
          'tax_query' => array(
          array(
              'taxonomy' => 'product_category',
              'field' => 'id',
              'terms' => $term_ids,
              'operator'=> 'IN' //Or 'AND' or 'NOT IN'
          )),
          'posts_per_page' => 4,
          'ignore_sticky_posts' => 1,
          'orderby' => 'rand',
          'post__not_in'=>array($post->ID)
      ) );

    //Loop through posts and display...
        if($second_query->have_posts()) {
          while ($second_query->have_posts() ) : $second_query->the_post(); ?>
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

        <?php endwhile; wp_reset_query();
      }

    ?>
  </ul>
</div>
