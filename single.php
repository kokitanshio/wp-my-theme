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
      <?php while(have_posts()): ?>
      <?php the_post(); ?>
      <!--entryここから-->
      <article class="entry wow fadeIn" data-wow-duration="2s">

          <!--entry-headerここから-->
          <div class="entry-head">
            <h1 class="entry-title"><?php the_title(); //投稿タイトルを表示 ?></h1>
            <div class="entry-meta">
              <!--投稿時間を動的に-->
              <time class="entry-meta-published" datetime="<?php the_time('c'); ?>"><i class="fas fa-stopwatch"></i><?php the_time('Y年n月j日') ?></time>
              <!--投稿時間を動的に終了-->
              <!--更新時間を表示-->
              <?php if(get_the_time() !== get_the_modified_time()): //投稿日時と更新日時が異なった場合 ?>
              <time class="entry-meta-upload" datetime="<?php the_modified_time('c'); ?>"><i class="fas fa-history"></i><?php the_modified_time('Y年n月j日'); ?></time>
              <?php endif; ?>
              <!--更新時間を表示終了-->
            </div>
            <div class="entry-img">
              <?php if(has_post_thumbnail()){ //サムネイルが投稿されていたら
                the_post_thumbnail('large'); //largeで表示
              } ?>
            </div>
          </div>
          <!--entry-headerここまで-->

          <!--記事内容ここから-->
          <div class="entry-body">

          <?php the_content(); //記事内容を表示 ?>

          <?php
          //改ページを有効にするための記述
          wp_link_pages(
          array(
          'before' => '<nav class="entry-links">',
          'after' => '</nav>',
          'link_before' => '',
          'link_after' => '',
          'next_or_number' => 'number',
          'separator' => '',
          )
          );
          ?>

          </div>
          <!--記事内容ここまで-->

          <!--タグここから-->
          <?php $post_tags = get_the_tags(); ?>
          <div class="entry-tags">
            <div class="entry-tag">
              <?php if($post_tags): ?>
              <div class="entry-tag-head">タグ ：</div>
              <?php foreach($post_tags as $tag): ?>
              <div class="entry-tag-item">
                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                <?php echo esc_html($tag->term_id); ?>
                </a>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <!--タグここまで-->
            
            <!--カテゴリーここから-->
            <?php $post_categories = get_the_category(); ?>
            <div class="entry-tag">
              <?php if($post_categories): ?>
              <div class="entry-tag-head">カテゴリー ：</div>
              <?php foreach($post_categories as $category): ?>
              <div class="entry-tag-item">
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <!--カテゴリーここまで-->
          </div>

          <!--関連ここから-->
          <?php if(has_category()): ?>
          <?php $cat_ids = array();
            foreach($post_categories as $category){
              $cat_ids[] = $category->term_id;
            }
          ?>
          <?php endif; ?>
          <?php $related_query = new WP_query(
            array(
              'post_type' => 'post',
              'post__not_in' => 'array($post->ID)',
              'orderby' => 'rand',
              'posts_per_page' => '4',
              
            )
          ) ?>
          <div class="entry-related">
            <!--related-itemここから-->
            <a href="#" class="related-item">
              <img src="img/entry1.png" alt="">
              <div class="related-item-title">
                タイトルタイトルタイトルタイトルタイトルタイトルタイトル
              </div>
            </a>
            <!--related-itemここまで-->
          </div>
          <!--関連ここまで-->

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