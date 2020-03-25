<?php get_header(); ?>
  <!--contentここから-->
  <div id="content" class="content inner">
    <!--mainここから-->
    <main id="main" class="main">

      <!--パンクズここから-->
      <div class="breadcrumb">
        <?php bcn_display(); ?>
      </div>
      <!--パンクズここまで-->

      <!--archive-headここから-->
      <div class="archive-head">
        <div class="archive-lead">TAG</div>
        <h1 class="archive-title"><i class="fas fa-tags"></i><?php the_archive_title(); ?></h1>
      </div>
      <!--archive-headここまで-->
      
      <?php if(have_posts()): ?>
      <!--entries ここから-->
      <div class="entries">
      <?php while(have_posts()): 
        the_post();
        ?>
        <!--entry-itemここから-->
        <a href="<?php the_permalink(); ?>" class="entry-item wow fadeInUp" data-wow-offset="200">

        <!--カテゴリー名表示処理-->
        <div class="entry-item-tag"><?php my_the_post_category(); ?></div>
        <!--カテゴリー名表示処理終了-->

          <!--アイキャッチ画像表示処理-->
          <div class="entry-item-img">
            <?php my_the_post_thumbnail(true); ?>
          </div>
          <!--アイキャッチ画像表示処理終了-->
            
            <div class="entry-item-body">
              <!--投稿時間を動的に-->
              <time class="entry-item-time" date-time="<?php the_time('c'); ?>">
                <i class="fas fa-stopwatch"></i> <?php the_time('Y年n月j日'); ?>
              </time>
              <!--投稿時間を動的に終了-->

              <h2 class="entry-item-title">
                <?php the_title(); //タイトル表示 ?>
              </h2>
              <div class="entry-item-text">
                <?php the_excerpt(); //本文表示 ?>
              </div>
            </div>
        </a>
        <!--entry-itemここまで-->
        <?php endwhile; ?>
      </div>
      <!--entries ここまで-->
      <?php endif; ?>

      <!--paginate開始-->
      <?php get_template_part('template_parts/pagination'); ?>
      <!--paginate開始-->

    </main>
    <!--mainここまで-->
    
    <!--sidebarここから-->
    <?php get_sidebar(); ?>
    <!--sidebarここまで-->

  </div>
  <!--contentここまで-->

  <?php get_footer(); ?>