<?php get_header(); ?>

<?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title" itemprop="name"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        </header><!-- .entry-header -->
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </article><!-- #post-## -->

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
