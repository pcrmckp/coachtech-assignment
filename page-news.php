<?php
/*
 * Template Name: お知らせ
 */ ?>
<?php get_header(); ?>

<main>
  <div class="fv-top_news">
    <h1 class="common-ttl">News</h1>
    <h2 class="common-ttl_sub">お知らせ</h2>
  </div>
  <div class="inner">
    <h2 class="news_ttl">最新ニュース</h2>
    <span class="line2"></span>

    <div id="news2" class="container_news">
      <?php
      $posts = new WP_Query(
        array(
          'post_type' => 'news',
          'posts_per_page' => 15
        )
      );
      if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
      ?>
          <!-- ニュースというカスタム投稿タイプのサブループ開始 -->
          <ul class="news__list">
            <li>
              <p class="news__list-data"><?php echo get_the_date('Y-m-d'); ?></p>
              <!-- 投稿日付の出力 -->
              <p class="news__list-data">
                <?php
                $days = 3;
                $today = date_i18n('U');
                $entry_day = get_the_time('U');
                $keika = date('U', ($today - $entry_day)) / 86400;
                if ($days > $keika) :
                  $limit = 3;
                  $num = $wp_query->current_post;
                  if ($limit > $num) :
                    echo '<p class="new">New</p>';
                  endif;
                endif;
                ?>
                <!-- 3日以内に投稿されている投稿にはNewと表示をする -->
              </p>
              <a href="<?php the_permalink(); ?>" class="news__list-detail">
                <?php the_title(); ?>
                <!-- タイトルの出力 -->
              </a>
            </li>
              </ul>
        <?php endwhile;
      endif;
      wp_reset_query(); ?>
        <!-- サブループ終了 -->

    </div>
  </div>
</main>




<?php get_footer(); ?>