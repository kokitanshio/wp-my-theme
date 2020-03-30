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
        <div class="archive-lead">SEARCH</div>
        <h1 class="archive-title"><i class="fas fa-search"></i><span>”<?php echo esc_html(get_search_query()); ?>”</span>の検索結果（<?php echo $wp_query->found_posts; ?>件）</h1>
        
      </div>
      <!--archive-headここまで-->
      
      <!--entries ここから-->
      <div class="entries">

      <?php if(have_posts()):
        while(have_posts()):
        the_post(); ?>
        <!--entry-itemここから-->
        <a href="<?php the_permalink(); ?>" class="entry-item wow fadeInUp" data-wow-offset="200">
          <div class="entry-item-tag"><?php my_the_post_category(); ?></div>
          <div class="entry-item-img">
            <?php my_the_post_thumbnail(true); ?>
          </div>
          <div class="entry-item-body">
            <time class="entry-item-time" date-time="<?php the_time('c'); ?>">
              <i class="fas fa-stopwatch"></i><?php the_time('Y年n月j日'); ?>
            </time>
            <h2 class="entry-item-title">
              <?php the_title(); ?>
            </h2>
            <div class="entry-item-text">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </a>
        <!--entry-itemここまで-->
        <?php endwhile;
        endif; ?>
      </div>
      <!--entries ここまで-->
      <!--paginationここから-->
      <?php get_template_part('template_parts/pagination'); ?>
      <!--paginationここまで-->

    </main>
    <!--mainここまで-->
    
    <!--sidebarここから-->
    <?php get_sidebar(); ?>
    <!--sidebarここまで-->

  </div>
  <!--contentここまで-->
  <?php get_footer(); ?>