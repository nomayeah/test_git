<footer>
  <div class="site-data">
    <div class="owner">
      <dl>
        <dt><img src="#" alt=""></dt>
        <dd>
          <h4>オーナーについて</h4>
          <div>東京都出身。若いころ海外に憧れを持ちオーストラリア・ニュージーランドへ移住。仕事の傍ら、趣味の魚釣りを楽しみながら生活する自然大好きなオーナーが皆様のご宿泊を心よりお待ちしております。</div>
        </dd>
      </dl>
      <div class="address-data">
        <ul>
          <li>〒389-1303 長野県上水内郡信濃町野尻3884−246</li>
          <li>TEL:<a href="tel:0262621716">026-262-1716</a></li>
          <li>FAX:<a href="tel:0262621728">026-262-1728</a></li>
          <li>E-mail:<a href="mailto:reservation@kotorinoki.com">reservation@kotorinoki.com</a></li>
        </ul>
      </div>
    </div>
    <div>
      <div class="footer-lang">
        <div class="lang-choice">言語選択</div>
        <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
        <div class="page-choice">言語選択</div>
        <ul class="footer-menu">
          <li>館内施設</li>
          <li>レジャー</li>
          <li>アクセス</li>
          <li>料金・ご予約</li>
          <li>ブログ</li>
          <li>お問い合わせ</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="copyright">© 2016<?php if (date("Y")!=2016) echo date("-Y"); ?> ことりの樹</div>

</footer>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/base.js"></script>

<?php wp_footer(); ?>
</body>
</html>