<aside id="side-bar" class="side-bar">
      <!--検索ここから-->
      <div class="widget widget_search">
        <div class="widget-title">検索</div>
        <form action="get" class="search-form" action="#">
          <input type="search" name="s" id="s" class="search-field" placeholder="キーワード">
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
          <a class="wprofile-link" href="#">
            プロフィールはこちら
          </a>
          <ul class="wprofile-sns">
            <li class="sns-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
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

          <!--wpost-itemここから-->
          <a href="#" class="wpost-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt="">
            <div class="wpost-item-title">
              タイトルタイトルタイトルタイトルタイトルタイトルタイトル
            </div>
          </a>
          <!--wpost-itemここまで-->
          <!--wpost-itemここから-->
          <a href="#" class="wpost-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt="">
            <div class="wpost-item-title">
              タイトルタイトルタイトルタイトルタイトルタイトルタイトル
            </div>
          </a>
          <!--wpost-itemここまで-->
          <!--wpost-itemここから-->
          <a href="#" class="wpost-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt="">
            <div class="wpost-item-title">
              タイトルタイトルタイトルタイトルタイトルタイトルタイトル
            </div>
          </a>
          <!--wpost-itemここまで-->
          <!--wpost-itemここから-->
          <a href="#" class="wpost-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt="">
            <div class="wpost-item-title">
              タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル
            </div>
          </a>
          <!--wpost-itemここまで-->
          <!--wpost-itemここから-->
          <a href="#" class="wpost-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt="">
            <div class="wpost-item-title">
              タイトルタイトルタイトルタイトルタイトルタイトルタイトル
            </div>
          </a>
          <!--wpost-itemここまで-->

        </div>
      </div>
      <!--人気記事ここまで-->
      <!--アーカイブここから-->
      <div class="widget widget_archive">
        <div class="widget-title">アーカイブ</div>
        <ul>
          <li><a href="<?php the_permalink(); ?>">2020年3月</a></li>
          <li><a href="#">2020年2月</a></li>
          <li><a href="#">2020年1月</a></li>
        </ul>
      </div>
      <!--アーカイブここまで-->
      
    </aside>