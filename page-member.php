<?php
/*
 * Template Name: メンバー紹介
 */
?>
<?php get_header(); ?>

<main>
  <div class="fv-top_member">
    <h1 class="common-ttl">Member</h1>
    <h2 class="common-ttl_sub">メンバー紹介</h2>
  </div>

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

    <div id="main_column">
      <section class="member-photo_block">
        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ichiro.jpg" alt="山田太郎" width="1800" height="1681" />
            <div class="members-name_ttl">
              <p>山田太郎(Taro Yamada)</p>
              <p>代表取締役CEO</p>
            </div>
          </a>

        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/jiro.jpg" alt="河本次郎" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>河本次郎(Jiro Komoto)</p>
            <p>COO</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/saburo.jpg" alt="佐藤三郎" width="1800" height="1681" /></a>
          <div class="members-name_ttl">
            <p>佐藤三郎(Saburou Sato)</p>
            <p>Director</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shiro.jpg" alt="村本四郎" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>村本四郎(Shiro Muramoto)</p>
            <p>Adviser</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/goro.jpg" alt="市川吾郎" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>市川吾郎(Goro Ichikawa)</p>
            <p>Engineer</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/rokuro.jpg" alt="黒川六郎" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>黒川六郎(Rokurou kurokawa)</p>
            <p>Engineer</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/nana.jpg" alt="赤城菜々" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>赤城菜々(Nana Akagi)</p>
            <p>Designer</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hatsue.jpg" alt="渋井初恵" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>渋井初恵(Hatsue Sibui)</p>
            <p>Partner</p>
          </div>
        </div>

        <div class="img_box">
          <a class="person_url" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kuro.jpg" alt="櫻井九郎" width="1800" height="1681" />
          </a>
          <div class="members-name_ttl">
            <p>櫻井九郎(Kurou Sakurai)</p>
            <p>Art Director</p>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>