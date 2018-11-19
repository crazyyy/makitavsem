<div id="secondary" class="widget-area" role="complementary">
  <aside class="widget woocommerce widget_product_categories">
    <h3 class="widget-title">Каталог</h3>
    <?php
      $terms = get_terms('product_category');
      if ( !empty( $terms ) && !is_wp_error( $terms ) ){
        echo '<ul class="product-categories">';
        foreach ( $terms as $term ) {
          $term = sanitize_term( $term, 'product_category' );
          $term_link = get_term_link( $term, 'product_category' );

            echo '<li class="cat-item cat-parent"><a href="' . esc_url( $term_link ) . '">' . $term->name . '&nbsp;<span class="count">(' . $term->count . ')</span' . '</a></li>';
        }
        echo '</ul>';
      }
    ?>

    <!-- <ul class="product-categories">
      <li class="cat-item cat-item-120 cat-parent"><a href="/product-category/katalog-osnastki/">Каталог оснастки Makita</a> <span class="count">(116)</span>
        <ul class="children">
          <li class="cat-item cat-item-135"><a href="/product-category/katalog-osnastki/akkumulyatory/">Аккумуляторы</a> <span class="count">(16)</span></li>
        </ul>
      </li>
    </ul> -->
  </aside>

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php endif;  ?>

  <!-- <div class="mv-slider" style="margin-bottom: 50px;">
		<a href="/discounts/" target="_blank">
			<img src="img/banner-2.png" alt="Скидки на МВ!" title="Скидки на МВ!">
		</a>
	</div> -->
</div><!-- #secondary -->
