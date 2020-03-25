  <?php get_header(); ?>
  <!--contentここから-->
  <div class="content inner" id="content">

    <!--mainここから-->
    <main id="main" class="main">

      <!--パンクズここから-->
      <div class="breadcrumb">
      <?php bcn_display(); ?>
      </div>
      <!--パンクズここまで-->

      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
      <!--entryここから-->
      <article class="entry wow fadeIn" data-wow-duration="2s">

          <!--entry-headerここから-->
          <div class="entry-head">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-img">
            <?php my_the_post_thumbnail(false); ?>
            </div>
          </div>
          <!--entry-headerここまで-->

          <!--記事内容ここから-->
          <div class="entry-body">
          <?php the_content(); ?>

          <!--改ページを有効にするここから-->
          <?php get_template_part('template_parts/kaipage'); ?>
          <!--改ページを有効にするここまで-->
          </div>
          <!--記事内容ここまで-->

      </article>
      <!--entryここまで-->
        <?php endwhile; ?>
        <?php endif; ?>

    </main>
    <!--mainここまで-->

    <!--sidebarここから-->
    <?php get_sidebar(); ?>
    <!--sidebarここまで-->

  </div>
  <!--contentここまで-->
  <?php get_footer(); ?>