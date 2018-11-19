<?php get_header(); ?>

<?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->
          <div class="entry-content" itemprop="mainContentOfPage">
            <?php the_content(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-## -->

      <?php endwhile; endif; ?>
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
