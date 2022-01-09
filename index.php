<?php get_header(); ?>

<main>
  <div class="fv-top_home">
    <h1 class="fv-top_ttl_home">
      <span class="commit">Commit</span> to the growth for everyone
    </h1>
    <h1>全ての人の成長に<span class="commit">コミット</span>する</h1>
  </div>
  <div class="inner">
    <div class="fv-content_home">
      <h2 class="fv_content-item">
        <span class="word-technology">Technology</span>×<span class="word-coaching">Coaching</span>
      </h2>
      <div class="about-content">
        <p class="about_exp">
          株式会社estraはデジタル化が遅れている教育業界に
          最新のテクノロジーを導入することによって教育のDXを実現します。<br />
          独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。
        </p>
      </div>
      <div class="illust"></div>
    </div>

    <h3 class="content-ttl">ニュース</h3>

    <div id="news1" class="home-container_news">
      <?php
      $posts = new WP_Query(
        array(
          'post_type' => 'news',
          'posts_per_page' => 5
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

    <div class="home-button_news">
      <a class="home-button_news_link" href="#">詳しく見る ></a>
    </div>

    <!-- <div class="news_content">
          <div class="news_ttl">
            <p>estra 新代々木オフィス昨年12月に移転しました</p>
          </div>
          <a class="home-button_news" href="#">詳しく見る ></a>
        </div> -->

    <h3 class="content-ttl">サービス</h3>
    <div class="flex__item">
      <div class="service-content__item">
        <h4>フリーランス特化型プログラミングスクール</h4>
        <h3>COACHTECH</h3>
        <div class="coachtech_pic"></div>
        <p class="coachtech_txt">
          COACHTECH(コーチテック)はフリーランス特化型の
          オンラインコーチングプログラミングスクールです。<br />
          プログラミング未経験の方でも、「独自の学習ノウハウ」で
          フリーランスエンジニアを目指すことができます。
        </p>
        <div class="home-button_service">
          <a class="home-button_service_link" href="#">詳しく見る ></a>
        </div>
      </div>

      <div class="stageee-content__item">
        <h4>教育機関向け業務効率化支援ツール</h4>
        <h3>「Stageee」</h3>
        <div class="stageee_pic"></div>
        <p class="stageee_txt">
          Stageee(ステージー)はコーチングに特化した
          業務効率化支援ツールです。<br />
          Web会議、面談予約、チャット、学習計画作成、学習状況の把握、
          教材管理、指導報告書作成といったコーチングにおいて必要な機能が
          1つにまとまった業務効率化を支えるSaaS
        </p>
        <div class="home-button_service2">
          <a class="home-button_service_link2" href="#">詳しく見る ></a>
        </div>
      </div>
    </div>

    <h3 class="content-ttl">採用情報</h3>
    <div class="recruite_content">
      <h4 class="recruit-content_ttl">
        日本の教育を変革する最前線で活躍する人材に
      </h4>
      <p class="recruit-content_txt">
        全員がリスクを恐れずにチャレンジし、社員一人一人が活躍できる環境をみんなで作り上げる
      </p>
      <div class="home-button_service">
        <a href="#">詳しく見る ></a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>