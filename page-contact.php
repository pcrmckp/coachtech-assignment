<?php
/*
 * Template Name: お問い合わせ
 */
?>
<?php get_header(); ?>
<div class="fv-top_company">
  <h1 class="common-ttl">Contact</h1>
  <h2 class="common-ttl_sub">お問い合わせ</h2>
</div>

<div class="inner">
  <div class="content-menu">
    <h1 class="content-contact_ttl">フォームからのお問い合わせ</h1>
    <span class="privacy-line"></span>
    <p class="contact-ttl_txt">記入内容の確認後、2~3営業日以内にご連絡させていただきます。</p>
  </div>
  <main class="main__contact">

    <form id="contact_form" action="confirm.php" method="post">
      <?php echo do_shortcode('[contact-form-7 id="8" title="お問い合わせフォーム"]'); ?>
    </form>
  </main>

  <?php get_footer(); ?>