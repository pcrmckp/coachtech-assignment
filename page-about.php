<?php
/*
 * Template Name: 企業案内
 */
?>
<?php get_header(); ?>

<div class="fv-top_about">
  <h1 class="common-ttl"><?php the_title() ?></h1>
  <h2 class="common-ttl_sub">企業案内</h2>
</div>
<main>
  <div class="inner">
    <div class="content-menu">
      <ul class="content-list">
        <li><a href="<?php echo home_url(); ?>/about">企業案内</a></li>
        <li><a href="<?php echo home_url(); ?>/greeting">代表挨拶</a></li>
        <li><a href="<?php echo home_url(); ?>/philosophy">経営理念</a></li>
        <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
        <li>
          <a class="content-list_member" href="<?php echo home_url(); ?>/member">メンバー</a>
        </li>
      </ul>
    </div>

    <?php the_content(); ?>
    <!-- <div class="content-about">
      <h3 class="content-about_ttl">
        新しい教育の常識を作り 多くの人々に幸せを届ける。
      </h3>
    </div>
    <span class="about-line"></span>
    <div>
      <p class="content-about_txt">
        estraが大切にすることは、教育のDX化で日本の教育を変革すること。<br />
        日本の教育にコーチングを普及し、自発的に目標達成ができる人材を育成する。
      </p>
    </div>
    <div class="conatent-about-main">
      <h3 class="content-about-main_txt">
        私たちが大切にしている<span class="three">３</span>つの事
      </h3>

      <div class="about-content_vision">
        <h4 class="about-content_vision_txt">失敗を恐れない</h4>
        <p class="about-content_vision_item">
          私たちが大切にしている「成長」のためには失敗は必要です。
        </p>
      </div>

      <div class="about-content_vision">
        <h4 class="about-content_vision_txt">
          オープンなコミュニケーション
        </h4>
        <p class="about-content_vision_item">
          組織の成長のためなら、時には厳しいことも発言することが重要です。<br>
          若いメンバーで構成されていることもあり、気軽に誰とでも話せる環境です。
        </p>
      </div>

      <div class="about-content_vision">
        <h4 class="about-content_vision_txt">メンバーの多様性</h4>
        <p class="about-content_vision_item">
          男女問わず、学生〜社会人まで様々なバックグラウンドを持ったメンバーが働いています。
        </p>
      </div>
    </div> -->
  </div>
</main>

<?php get_footer(); ?>