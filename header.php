<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="inner">
      <div class="logo_box">
        <h1 id="title">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo"><span class="hdn"><?php bloginfo('name'); ?></span></a>
        </h1>
        <!-- <?php bloginfo('description'); ?> -->
      </div>

      <nav class="header_nav">
        <ul class="global_nav">
          <li>
            <a href="<?php echo home_url(); ?>"><span>ホーム</span></a>
          </li>
          <li>
            <a href="<?php echo home_url("about"); ?>"><span>企業案内</span></a>
          </li>
          <li>
            <a href="<?php echo home_url("news"); ?>"><span>ニュース</span></a>
          </li>
          <li>
            <a href="<?php echo home_url("service"); ?>"><span>サービス</span></a>
          </li>
          <li>
            <a href="<?php echo home_url("recruit"); ?>"><span>採用情報</span></a>
          </li>
          <li>
            <a href="<?php echo home_url("contact"); ?>">お問い合わせ</span></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>