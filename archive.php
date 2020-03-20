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
        <div class="archive-lead">ARCHIVE</div>
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
          <?php $category = get_the_category();
          if($category[0]):?>
          <div class="entry-item-tag"><?php echo $category[0]->cat_name; //最初のカテゴリー名を表示 ?></div>
          <?php endif; ?>
        <!--カテゴリー名表示処理終了-->

          <!--アイキャッチ画像表示処理-->
          <div class="entry-item-img">
              <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail('large'); //アイキャッチ設定されていたらlargeで表示 ?>
              <?php else: ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); //設定されてない場合noimg画像表示 ?>/img/noimg.png" alt="">
              <?php endif; ?>
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
      <?php if(paginate_links()): ?>
      <div class="pagenation">
        <?php echo paginate_links(
          array(
            
            'end_size' => 0,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '<i class="fas fa-arrow-left"></i>',
            'next_text' => '<i class="fas fa-arrow-right"></i>',
          )
        ); ?>
      </div>
      <?php endif; ?>
      <!--paginate開始-->

    </main>
    <!--mainここまで-->
    
    <!--sidebarここから-->
    <?php get_sidebar(); ?>
    <!--sidebarここまで-->

  </div>
  <!--contentここまで-->

  <?php get_footer(); ?>