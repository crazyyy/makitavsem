<?php /* Template Name: Home Page */ get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title" itemprop="name">Каталог</h1>
        </header><!-- .entry-header -->
        <div class="entry-content" itemprop="mainContentOfPage">
          <div class="woocommerce columns-4">
            <ul class="products">
              <?php $wcatTerms = get_terms('product_category', array('hide_empty' => 0, 'parent' =>0)); foreach($wcatTerms as $wcatTerm) : ?>
                <li class="product-category product first">
                  <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
                    <img src="img/D-33691-300x270-299x269.jpg" alt="Каталог оснастки Makita" width="299"
                      height="299">
                    <h3><?php echo $wcatTerm->name; ?></h3>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->
      <?php endwhile; endif; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
