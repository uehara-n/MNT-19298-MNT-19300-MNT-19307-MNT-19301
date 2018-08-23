<?php
/**
 * ヘッダー
 *
 * @package Wordpress
 * @subpackage reform2
 * @since 1.0.0
 */
get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<?php if(is_front_page()): ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php else: ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php endif; ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<?php if(is_front_page()): ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46164926-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46164926-1');
</script>

<title>八王子、日野、昭島、立川でのリフォームはエンラージへ。</title>
<meta name="description" content="エンラージ八王子のHPです。 リフォームやリノベーションの豊富な施工事例、リフォーム情報を掲載してます。 施工エリアは八王子、日野、昭島、立川です。【電話：0120-512-355/受付：9時～19時】メール相談・御見積り依頼は24時間受付。">
<meta name="keywords" content="リフォーム,リノベーション,八王子市,日野市,昭島市,立川市,エンラージ">
<!-- OGP -->
<meta property="og:title" content="八王子、日野、昭島、立川でのリフォームはエンラージへ。">
<meta property="og:description" content="エンラージ八王子のHPです。 リフォームやリノベーションの豊富な施工事例、リフォーム情報を掲載してます。 施工エリアは八王子、日野、昭島、立川です。【電話：0120-512-355/受付：9時～19時】メール相談・御見積り依頼は24時間受付。">
<meta property="og:site_name" content="一級建築士事務所 株式会社エンラージ">
<meta property="og:url" content="<?php bloginfo('url'); ?>">
<meta property="og:type" content="website">
<?php elseif(is_post_type_archive( array( 'staffblog', 'renov','staff', 'voice', 'event', 'seko', 'album' ) )): ?>
  <?php
  if (( get_post_type() === 'staffblog')):
    $url = get_post_type_archive_link('staffblog');
    elseif(get_post_type() === 'renov'):
      $url = get_post_type_archive_link('renov');
  elseif(get_post_type() === 'voice'):
    $url = get_post_type_archive_link('voice');
  elseif(get_post_type() === 'staff'):
    $url = get_post_type_archive_link('staff');
  elseif(get_post_type() === 'seko'):
    $url = get_post_type_archive_link('seko');
  elseif(get_post_type() === 'event'):
    $url = get_post_type_archive_link('event');
  elseif(get_post_type() === 'album'):
    $url = get_post_type_archive_link('album');
  endif;
  ?>
<title><?php the_archive_title(); ?>｜八王子、日野、昭島、立川でのリフォームはエンラージへ。</title>
<meta name="description" content="エンラージ八王子のHPです。 リフォームやリノベーションの豊富な施工事例、リフォーム情報を掲載してます。 施工エリアは八王子、日野、昭島、立川です。【電話：0120-512-355/受付：9時～19時】メール相談・御見積り依頼は24時間受付。<?php the_archive_title(); ?>">
<meta name="keywords" content="リフォーム,リノベーション,八王子市,日野市,昭島市,立川市,エンラージ">
<!-- OGP -->
<meta property="og:title" content="<?php the_archive_title(); ?> ｜八王子、日野、昭島、立川でのリフォームはエンラージへ。">
<meta property="og:description" content="エンラージ八王子のHPです。 リフォームやリノベーションの豊富な施工事例、リフォーム情報を掲載してます。 施工エリアは八王子、日野、昭島、立川です。【電話：0120-512-355/受付：9時～19時】メール相談・御見積り依頼は24時間受付。<?php the_archive_title(); ?>">
<meta property="og:site_name" content="一級建築士事務所 株式会社エンラージ">
<meta property="og:url" content="<?php echo esc_url($url);?>">
<meta property="og:type" content="article">
<?php else: ?>
<title><?php the_title(); ?>｜八王子、日野、昭島、立川でのリフォームはエンラージへ。</title>
<meta name="description" content="エンラージ八王子のHPです。 リフォームやリノベーションの豊富な施工事例、リフォーム情報を掲載してます。 施工エリアは八王子、日野、昭島、立川です。【電話：0120-512-355/受付：9時～19時】メール相談・御見積り依頼は24時間受付。<?php the_title(); ?>">
<meta name="keywords" content="リフォーム,リノベーション,八王子市,日野市,昭島市,立川市,エンラージ">
<!-- OGP -->
<meta property="og:title" content="<?php the_title(); ?>｜八王子、日野、昭島、立川でのリフォームはエンラージへ。">
<meta property="og:description" content="エンラージ八王子のHPです。 リフォームやリノベーションの豊富な施工事例、リフォーム情報を掲載してます。 施工エリアは八王子、日野、昭島、立川です。【電話：0120-512-355/受付：9時～19時】メール相談・御見積り依頼は24時間受付。<?php the_title(); ?>">
<meta property="og:site_name" content="一級建築士事務所 株式会社エンラージ">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:type" content="article">
<?php endif; ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>

<body>
  <header class="header">
    <div class="header-bar"></div>
    <div class="header-top">
      <div class="header-cell">
        <div class="header-cell-left">
          <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/logo.png" class="site-logo" alt="株式会社エンラージ"></a></h1>
        </div>
        <div class="header-cell-right">
          <p class="tel pr20">Tel:0120-512-355<span>営業時間 9:00~19:00 定休日なし</span></p>
          <p class="pr5"><a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/btn-contact.png" alt="お問い合わせ"></a></p>
          <p><a href="<?php echo home_url(); ?>/raiten/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/btn-raiten.png" alt="来店予約"></a></p>
        </div>
      </div>
      <div class="header-sp-cell">
        <p class="logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/logo-sp.png" class="site-logo" alt="株式会社エンラージ">
          </a>
        <p class="icon">
          <a href="tel:0120512355" onclick="ga('send', 'event', 'smartphone', 'phone-number-tap', 'header')"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/tel.png" class="fit" alt="電話番号"></a>
        </p>
        <p class="navbtn">
          <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/toggle.png" class="fit" alt="メニュー"></a>
        </p>
      </div>
    </div>
    <nav class="navi" role="navigation">
      <p class="closebtn"><a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/close.png" class="fit" alt="CLOSE"></a></p>
      <div class="spmenu-btn">
        <p><a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/btn-contact-sp.png" class="fit" alt="お問い合わせ"></a></p>
        <p><a href="<?php echo home_url(); ?>/raiten/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/btn-raiten-sp.png" class="fit" alt="来店予約"></a></p>
        <p><a href="<?php echo home_url(); ?>/book/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/head/btn-book-sp.png" alt="資料請求"></a></p>
      </div>
      <ul class="menu-list">
        <li class="sp-none"><a href="<?php echo home_url(); ?>"><span class="sp-none icon-home"></span><span class="pc-none">HOME</span></a></li>
        <li class="parent"><a href="<?php echo home_url(); ?>/renovation/">中古購入×リノベーション</a>
          <ul class="submenu">
            <li><a href="<?php echo home_url(); ?>/renovation/">中古購入×リノベーション</a></li>
            <li><a href="<?php echo home_url(); ?>/shinkochiku/">新、古築</a></li>
            <li><a href="<?php echo home_url(); ?>/kaigo/">補助金を活用してリフォーム</a></li>
          </ul>
        </li>
        <li class="parent"><a href="<?php echo home_url(); ?>/renov/">リノベーション事例</a>
          <ul class="submenu">
            <li><a href="<?php echo home_url(); ?>/renov/">リノベーション事例</a></li>
            <li><a href="<?php echo home_url(); ?>/album/">ギャラリー</a></li>
          </ul>
        </li>
        <li class="parent"><a href="<?php echo home_url(); ?>/company/">会社紹介</a>
          <ul class="submenu">
            <li><a href="<?php echo home_url(); ?>/company/">会社紹介</a></li>
            <li><a href="<?php echo home_url(); ?>/reform_nagare/">リフォームの流れ</a></li>
            <li><a href="<?php echo home_url(); ?>/point/">選ばれる理由</a></li>
            <li><a href="<?php echo home_url(); ?>/homepro/">ホームプロとは</a></li>
            <li><a href="<?php echo home_url(); ?>/event/">イベント情報</a></li>
          </ul>
        </li>
        <li><a href="<?php echo home_url(); ?>/staff/">スタッフ紹介</a></li>
        <li><a href="<?php echo home_url(); ?>/voice/">お客様の声</a></li>
        <li class="parent"><a href="<?php echo home_url(); ?>">ショールーム</a>
          <ul class="submenu">
            <li><a href="<?php echo home_url(); ?>/company/hachioji/">八王子本店</a></li>
            <li><a href="<?php echo home_url(); ?>/company/kitano/">北野支店</a></li>
            <li><a href="<?php echo home_url(); ?>/company/hino/">日野支店</a></li>
            <li><a href="<?php echo home_url(); ?>/cafe-enlarge/">カフェ・エンラージ</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
