
  <!--footerここから-->
  <footer>
    <div class="footer-menu inner">
      <div class="footer-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </div>

      <!--to-topここから-->
      <div class="to-top" id="to-top">
        <i class="fas fa-chevron-up"></i>
      </div>
      <!--to-topここまで-->

      <!--footer-navここから-->
      <!-- <nav class="footer-nav">
        <ul class="footer-list">
          <li><a href="#">プライバシーポリシー</a></li>
          <li><a href="#">お問い合わせ</a></li>
          <li><a href="#">たんしおのプロフィール</a></li>
        </ul>
      </nav> -->
      <?php
      wp_nav_menu(
        array(
          'menu_class'=>'footer-list',
          'container'=>'nav',
          'container_class'=>'footer-nav',
          'theme_location'=>'footer',
        )
      );
      ?>
      <!--footer-navここまで-->
      <div class="copy">
        Copyright2020 <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All rights reserved
      </div>
    </div>

  </footer>
  <!--footerここまで-->
  <?php wp_footer(); ?>
</body>

</html>