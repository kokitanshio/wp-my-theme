
<?php get_header(); ?>

  <!--pickupここから-->
  <div class="pickup">
    <!--pickup-pcここから-->
    <div class="pickup-items">

        <!--pickpitemここから-->
        <a href="#" class="pickup-item wow fadeIn" data-wow-duration="2s">
          <div class="pickup-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt=""></div>
          <div class="pickup-item-text">
            <h2>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h2>
          </div>
        </a>
        <!--pickpitemここまで-->
        <!--pickpitemここから-->
        <a href="#" class="pickup-item wow fadeIn" data-wow-duration="2s">
          <div class="pickup-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt=""></div>
          <div class="pickup-item-text">
            <h2>タイトルタイトルタイトル</h2>
          </div>
        </a>
        <!--pickpitemここまで-->
        <!--pickpitemここから-->
        <a href="#" class="pickup-item wow fadeIn" data-wow-duration="2s">
          <div class="pickup-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt=""></div>
          <div class="pickup-item-text">
            <h2>タイトルタイトルタイトル</h2>
          </div>
        </a>
        <!--pickpitemここまで-->

    </div>
    <!--pickup-itemsここまで--><!--pickup-pcここまで-->
    
    <!--pickup-spここから-->
    <div class="pickup-sp wow fadeIn" data-wow-duration="2s">
      <!--swiperここから-->
      <div class="swiper-container">
        <div class="swiper-wrapper">
  
          <!--pickpitemここから-->
          <a href="#" class="swiper-slide">
            <div class="swiper-slide-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt=""></div>
            <div class="swiper-slide-text">
              <h2>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h2>
            </div>
          </a>
        <!--pickpitemここまで-->
          <!--pickpitemここから-->
          <a href="#" class="swiper-slide">
            <div class="swiper-slide-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt=""></div>
            <div class="swiper-slide-text">
              <h2>タイトルタイトルタイトル</h2>
            </div>
          </a>
        <!--pickpitemここまで-->
          <!--pickpitemここから-->
          <a href="#" class="swiper-slide">
            <div class="swiper-slide-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt=""></div>
            <div class="swiper-slide-text">
              <h2>タイトルタイトルタイトル</h2>
            </div>
          </a>
        <!--pickpitemここまで-->
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div class="swiper-pagination"></div>
      <!--swiperここまで-->
    </div>
    <!--pickup-spここまで-->

  </div>
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
        <a href="#" class="entry-item wow fadeInUp" data-wow-offset="200">

        <!--カテゴリー名表示処理-->
          <div class="entry-item-tag">
          <?php $category = get_the_category();
          if($category[0]){
            echo $category[0]->cat_name;
          }
          ?>
          </div>
        <!--カテゴリー名表示処理終了-->

            <!--アイキャッチ画像表示処理-->
            <div class="entry-item-img">
            <?php if(has_post_thumbnail()){
              the_post_thumbnail('large');
            }else{ //アイキャッチ指定なければnoimg表示
              echo '<img src="'.esc_url(get_template_directory_uri()).'/img/noimg.png" alt="">';
            } ?>
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
        <!-- <a class="prev page-numbers" href="#"><i class="fas fa-arrow-left"></i></a>
        <span class="page-numbers current">1</span>
        <a class="page-numbers" href="#">2</a>
        <a class="page-numbers" href="#">3</a>
        <a class="next page-numbers" href="#"><i class="fas fa-arrow-right"></i></a> -->
      </div>
      <?php endif; ?>
    </main>
    <!--mainここまで-->

    <!--sidebarここから-->
    <?php get_sidebar(); ?>
    <!--sidebarここまで-->
  </div>
  <!--contentここまで-->

  <?php get_footer(); ?>