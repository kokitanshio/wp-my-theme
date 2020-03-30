  <?php get_header(); ?>
  <!--contentここから-->
  <div class="content inner" id="content">
    <!--entryここから-->
    <article class="entry entry-404 wow fadeIn" data-wow-duration="2s">
      <?php the_archive_title(); ?>
      <h1 class="entry-404-title">Not Found ...</h1>
      <dv class="entry-404-lead">ページが見つかりませんでした</dv>
      <div class="entry-404-text">お探しのページはすでに存在しないか、URLが間違っている可能性がございます。</div>
      <div class="entry-404-text">下記キーワード検索より記事をお探しください。</div>

      <!--widgetここから-->
      <div class="widget-404">
        <!--検索ここから-->
        <div class="widget widget_search">
          <div class="widget-title">キーワード検索</div>
          <form action="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" name="s" id="s" class="search-field" placeholder="キーワード">
            <button type="submit" class="search-submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <!--検索ここまで-->
      </div>
      <!--widgetここまで-->
      <div class="btn-404">
        <a href="<?php echo esc_url(home_url('/')); ?>">トップに戻る</a>
      </div>

    </article>
    <!--entryここまで-->
  </div>
  <!--contentここまで-->
  <?php get_footer(); ?>