<div class="entry-related">
          <?php if(has_category()){
            $post_cats = get_the_category();
            $cat_ids = array(); //所属カテゴリーのIDリスト
            foreach($post_cats as $cat){
              $cat_ids[] = $cat->term_id;
            }
          } 
          
          $myposts = get_posts(array(
            'post_type' => 'post', // 投稿タイプ
            'posts_per_page' => '4', // 4件を取得
            'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
            'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
            'orderby' => 'rand' // ランダムに
          ));
          if($myposts):
          ?>
          <?php foreach($myposts as $post): setup_postdata($post); ?>
            <!--related-itemここから-->
            <a href="<?php the_permalink(); ?>" class="related-item">
              <?php my_the_post_thumbnail(true); ?>
              <div class="related-item-title">
              <?php the_title(); ?>
              </div>
            </a>
            <!--related-itemここまで-->
            <?php endforeach; wp_reset_postdata();
            endif; ?>
          </div>