<footer>
  <span class="footer-line"></span>
  <div class="inner">
    <h1 class="footer-logo"></h1>
    <div class="footermenu-content__item">
      <ul class="footermenu-content_list">
        <li><a href="<?php echo home_url(); ?>/about">企業案内</a></li>
        <li><a href="<?php echo home_url(); ?>/news">ニュース</a></li>
        <li><a href="<?php echo home_url(); ?>/service">サービス</a></li>
        <li><a href="<?php echo home_url(); ?>/recruit">採用情報</a></li>
        <li><a href=" <?php echo home_url(); ?>/contact">お問い合わせ</a></li>
        <li><a href="<?php echo home_url(); ?>/privacy-policy">個人情報保護方針</a></li>
      </ul>
    </div>
    <div class="sns-content__item">
      <div class="sns-content">
        <ul class="sns-content_item">
          <li><a href="#" target="_blank"></a></li>
          <li><a href="#" target="_blank"></a></li>
          <li><a href="#" target="_blank"></a></li>
        </ul>
      </div>

      <div class="footermenu-content_small">
        <small class="copy">&copy;copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?>all rights
          reserved.</small>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>