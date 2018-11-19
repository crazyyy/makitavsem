<?php get_header(); ?>

<?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <header class="entry-header">
        <h1 class="entry-title" itemprop="name"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
      </header><!-- .entry-header -->
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

</main><!-- #main -->

  </div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
