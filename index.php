
<?php get_header(); ?>

  <!--pickupここから-->
  <?php get_template_part('template_parts/pickup_tag'); ?>
  <!--pickupここまで-->

  <!--contentここから-->
  <div class="content inner" id="content">
    <!--mainここから-->
    <main id="main" class="main">
      <!--entries ここから-->
      
      <!--記事の数ループ開始-->
      <?php if(have_posts()): ?>
      <div class="entries">
      <?php while(have_posts()): ?>
      <?php the_post(); ?>

        <!--entry-itemここから-->
        <a href="<?php the_permalink(); ?>" class="entry-item wow fadeInUp" data-wow-offset="200">

        <!--カテゴリー名表示処理-->
          <div class="entry-item-tag">
          <?php my_the_post_category(); ?>
          </div>
        <!--カテゴリー名表示処理終了-->

            <!--アイキャッチ画像表示処理-->
            <div class="entry-item-img">
            <?php 
            my_the_post_thumbnail(true);
            ?>
            </div>
            <!--アイキャッチ画像表示処理終了-->

            <div class="entry-item-body">
            <!--投稿日時を表示-->
              <time class="entry-item-time" date-time="<?php the_time('c'); ?>">
                <i class="fas fa-stopwatch"></i> <?php the_time('Y年n月j日'); ?>
              </time>
            <!--投稿日時を表示終了-->

              <h2 class="entry-item-title">
                <?php the_title(); ?> <!--タイトル表示-->
              </h2>
              <div class="entry-item-text">
                <?php the_excerpt(); ?> <!--抜粋表示-->
              </div>
            </div>
        </a>
        <!--entry-itemここまで-->
      <?php endwhile; ?>
      </div>
      <!--entries ここまで-->
      <?php endif; ?>
      <!--ループ終了-->

      <!--ページネーションの読み込み-->
      <?php get_template_part('template_parts/pagination'); ?>
      <!--ページネーションの読み込み-->

    </main>
    <!--mainここまで-->

    <!--sidebarここから-->
    <?php get_sidebar(); ?>
    <!--sidebarここまで-->
  </div>
  <!--contentここまで-->

  <?php get_footer(); ?>