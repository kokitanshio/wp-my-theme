<aside id="side-bar" class="side-bar">
      <!--検索ここから-->
      <div class="widget widget_search">
        <div class="widget-title">検索</div>
        <form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
          <input type="search" name="s" id="s" class="search-field" placeholder="キーワード" value="<?php the_search_query(); ?>">
          <button type="submit" class="search-submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
      <!--検索ここまで-->
      <!--プロフィールここから-->
      <div class="widget widget_text widget_custom_html">
        <div class="widget-title">プロフィール</div>
        <div class="wprofile">
          <div class="wprofile-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tanshio.jpeg" alt="">
          </div>
          <div class="wprofile-name">たんしお</div>
          <div class="wprofile-content">
            テキストテキストテキストテキストテキストテキストテキスト
          </div>
          <a class="wprofile-link" href="<?php echo get_permalink(31); ?>">
            プロフィールはこちら
          </a>
          <ul class="wprofile-sns">
            <li class="sns-twitter"><a href="https://twitter.com/tanshiokoki73" target="_blank"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div> 
      </div>
      <!--プロフィールここまで-->
      <!--Twitterここから-->
      <div class="widget widget_twitter">
        <div class="widget-title">Twitter</div>
        <a class="twitter-timeline" data-height="500" href="https://twitter.com/tanshiokoki73?ref_src=twsrc%5Etfw">Tweets by tanshiokoki73</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <!--twitter埋め込み-->
      </div>
      <!--Twitterここまで-->
      <!--人気記事ここから-->
      <div class="widget widget_popular">
        <div class="widget-title">人気記事</div>
        <div class="wpost-items">

          <?php $popular_posts = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'order' => 'DESC',
            'meta_key' => 'view_counter',
            'orderby' => 'meta_value_num',
          ));
          foreach($popular_posts as $post): setup_postdata($post); ?>

          <!--wpost-itemここから-->
          <a href="<?php the_permalink(); ?>" class="wpost-item">
            <?php my_the_post_thumbnail(true); ?>
            <div class="wpost-item-title">
              <?php the_title(); ?>
            </div>
          </a>
          <!--wpost-itemここまで-->
          <?php endforeach; wp_reset_postdata(); ?>
<?php echo $count; ?>
        </div>
      </div>
      <!--人気記事ここまで-->
      <!--アーカイブここから-->
      <div class="widget widget_archive">
        <div class="widget-title">アーカイブ</div>
        <ul>
        <?php wp_get_archives(array(
          'type' => 'monthly',
          'format' => 'html',
          'orderby' => 'ASC',
        )); ?>
        </ul>
      </div>
      <!--アーカイブここまで-->
      
    </aside>