<?php
/**
 * フッダー
 *
 * @package Wordpress
 * @subpackage reform2
 * @since 1.0.0
 */
get_header(); ?>

  <footer class="footer">
      <div class="centering footer-inner">
        <p class="pagetop"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/top.png" alt="トップ"></a></p>
        <div class="footer-top clearfix">
          <p class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/logo.png" alt="株式会社エンラージ">
          </p>
          <div class="footer-logo-right">
            <p class="area">リフォーム施工エリア</p>
            <p>
              八王子市、日野市、昭島市、立川市、多摩市、町田市、あきる野市、福生市、稲城市<br>
              エンラージ八王子は八王子市周辺のリフォームのご相談を優先してご対応させていただいておりますので、誠に申し訳ありませんが、上記以外の地域のリフォームをお考えの方はご相談させていただく場合がございます。
            </p>
          </div>
          </div>
          <div class="footer-middle">
          <ul class="shop-list">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/honten.png" class="fit" alt="八王子本店">
              <div class="data">
                <p class="name">八王子本店</p><p>東京都八王子市千人町4-2-19</p>
              </div>
              <a href="<?php echo home_url(); ?>/company/hachioji/"></a>
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/kitano.png" class="fit" alt="北野支店">
              <div class="data">
                <p class="name">北野支店</p><p>東京都八王子市打越町645-3</p>
              </div>
              <a href="<?php echo home_url(); ?>/company/kitano/"></a>
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/hino.png" class="fit" alt="日野支店">
              <div class="data">
                <p class="name">日野支店</p><p>東京都日野市日野本町2-20-6</p>
              </div>
              <a href="<?php echo home_url(); ?>/company/hino/"></a>
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/cafe.png" class="fit" alt="Cafe ENLARGE">
              <span class="cafe-holiday">店舗改装工事のため<br>7/25〜9/20休業</span>
              <div class="data">
                <p class="name">Cafe ENLARGE</p><p>東京都八王子市千人町4-3-2</p>
              </div>
              <a href="<?php echo home_url(); ?>/company/cafe-enlarge/"></a>
            </li>
          </ul>
        </div>
        <div class="footer-bottom">
          <ul class="sitemap">
            <li><a href="<?php echo home_url(); ?>">トップページ</a></li>
            <li><a href="<?php echo home_url(); ?>/policy/">プライバシーポリシー</a></li>
            <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
          </ul>
          <ul class="sitemap">
            <li><a href="<?php echo home_url(); ?>/company/">会社案内</a></li>
            <li><a href="<?php echo home_url(); ?>/message/">代表あいさつ</a></li>
            <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/staff/">スタッフ紹介</a></li>
            <li><a href="<?php echo home_url(); ?>/voice/">お客様の声</a></li>
            <li><a href="<?php echo home_url(); ?>/event/">イベント情報</a></li>
            <li><a href="<?php echo home_url(); ?>/point/">選ばれる理由</a></li>
            <li><a href="<?php echo home_url(); ?>/homepro/">ホームプロ受賞</a></li>
            <li><a href="<?php echo home_url(); ?>/reform_nagare/">リフォームの流れ</a></li>
            <li><a href="<?php echo home_url(); ?>/staffblog/">スタッフブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/recruit/">採用情報</a></li>
          </ul>
          <ul class="sitemap">
            <li><a href="<?php echo home_url(); ?>">ショールーム</a></li>
            <li><a href="<?php echo home_url(); ?>/company/hachioji/">八王子本店</a></li>
            <li><a href="<?php echo home_url(); ?>/company/kitano/">北野支店</a></li>
            <li><a href="<?php echo home_url(); ?>/company/hino/">日野支店</a></li>
            <li><a href="<?php echo home_url(); ?>/cafe-enlarge/">カフェエンラージ</a></li>
            <li><a href="<?php echo home_url(); ?>/school/">貸し教室</a></li>
            <li><a href="<?php echo home_url(); ?>/renov/">リノベーション施工事例</a></li>
            <li><a href="<?php echo home_url(); ?>/album/">エンラージギャラリー</a></li>
            <li><a href="<?php echo home_url(); ?>/seko/">施工事例</a></li>
          </ul>
          <ul class="sitemap">
            <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
            <li><a href="<?php echo home_url(); ?>/raiten/">来店予約</a></li>
            <li><a href="<?php echo home_url(); ?>/renovation/">中古購入×リノベーション</a></li>
            <li><a href="<?php echo home_url(); ?>/kaigo/">補助金を活用してリフォーム</a></li>
            <li><a href="<?php echo home_url(); ?>/shinkochiku/">新、古築</a></li>
            <li><a href="<?php echo home_url(); ?>/chukobukken/">中古物件情報</a></li>
          </ul>
        </div>
      </div>
      <p class="copyright">Copyright &#169;<script type="text/javascript">document.write(new Date().getFullYear());</script> 株式会社エンラージ .All Right Reserved</p>
  </footer>
    <div class="footer-floating pc-none">
      <ul class="floating-menu">
        <li>
          <a href="<?php echo home_url(); ?>/raiten/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/raiten.png" alt="来店予約"></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/contact.png" alt="お問い合わせ"></a>
        </li>
        <li>
          <a href="tel:0120512355" onclick="ga('send', 'event', 'smartphone', 'phone-number-tap', 'footer')"><img src="<?php echo get_template_directory_uri(); ?>/img/common/foot/tel.png" alt="電話する"></a>
        </li>
        </ul>
      </div>
<?php wp_footer(); ?>
 
</body>
</html>
