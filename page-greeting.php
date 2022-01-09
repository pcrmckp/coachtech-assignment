<?php
/*
 * Template Name: 代表挨拶
 */
?>
<?php get_header(); ?>

<main>
  <div class="fv-top_greeting">
    <h1 class="common-ttl">Message</h1>
    <h2 class="common-ttl_sub">代表挨拶</h2>
  </div>

  <div class="inner">
    <div class="content-menu">
      <ul class="content-list">
        <li><a href="<?php echo home_url(); ?>/about">企業案内</a></li>
        <li><a class="content-list_member" href="<?php echo home_url(); ?>/greeting">代表挨拶</a></li>
        <li><a href="<?php echo home_url(); ?>/philosophy">経営理念</a></li>
        <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
        <li>
          <a href="<?php echo home_url(); ?>/member">メンバー</a>
        </li>
      </ul>
    </div>

    <?php the_content(); ?>
</main>

<?php get_footer(); ?>