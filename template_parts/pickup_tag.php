<?php
$pickup_post = get_posts(array(
  'post_type' => 'post',
  'posts_per_page' => '3',
  'tag' => 'pickup',
  'orderby' => 'rand',
));
?>

  <div class="pickup">
    <!--pickup-pcここから-->
    <div class="pickup-items">
      
    <?php foreach($pickup_post as $post):
      setup_postdata($post); ?>

      <!--pickpitemここから-->
      <a href="<?php the_permalink() ?>" class="pickup-item wow fadeIn" data-wow-duration="2s">
        <div class="pickup-item-img">
          <!--thumbnail設定されていたら表示-->
          <?php my_the_post_thumbnail(true); ?>
          <!--thumbnail設定されていたら表示-->
        </div>
        <div class="pickup-item-text">
          <h2><?php the_title(); ?></h2>
        </div>
      </a>
      <!--pickpitemここまで-->

      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
    <!--pickup-itemsここまで--><!--pickup-pcここまで-->
    
    <!--pickup-spここから-->
    <div class="pickup-sp wow fadeIn" data-wow-duration="2s">
      <!--swiperここから-->
      <div class="swiper-container">
        <div class="swiper-wrapper">
  
          <?php foreach($pickup_post as $post):
            setup_postdata($post); ?>

          <!--pickpitemここから-->
          <a href="<?php the_permalink(); ?>" class="swiper-slide">
            <div class="swiper-slide-img">
            <!--thumbnail設定されていたら表示-->
            <?php my_the_post_thumbnail(true); ?>
            <!--thumbnail設定されていたら表示-->
            </div>
            <div class="swiper-slide-text">
              <h2><?php the_title(); ?></h2>
            </div>
          </a>
        <!--pickpitemここまで-->

        <?php endforeach;
        wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <!--swiperここまで-->
    </div>
    <!--pickup-spここまで-->

  </div>
