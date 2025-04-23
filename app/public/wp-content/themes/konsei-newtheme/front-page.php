<?php get_header(); ?>

<main>
  <div class="top-first-view">
    <h1 data-i18n="first-view-text">有松・鳴海絞り</h1>

    <div class="first-view-text-sp">
      <h2>有松</h2>
      <h2>鳴海絞り</h2>
    </div>
  </div>

  <div class="second-view">
    <div class="second-view-top">
      <div class="second-view-top-text">
        <p data-i18n="second-view-top-text1">日本伝統工芸、有松・鳴海絞の手仕事ならではの温もりを</p>
        <p data-i18n="second-view-top-text2">誰もが身近に感じて、そして楽しんでいただきたい</p>
        <p data-i18n="second-view-top-text3">そんな気持ちで日々くくりや染色に取り組んでいます</p>
        <p data-i18n="second-view-top-text4">そして、みなさんに絞り染めを体験していただける機会を</p>
        <p data-i18n="second-view-top-text5">もっともっと増やしていきたい</p>
      </div>
      <div class="second-view-top-image">
        <!-- background image -->
      </div>
    </div>
    <div class="second-view-bottom">
      <div class="second-view-bottom-images">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/second-view-bottom1.png" alt="second-view-bottom-image1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/second-view-bottom2.png" alt="second-view-bottom-image2">
      </div>
      <section class="second-view-bottom-text">
        <h5 data-i18n="second-view-bottom-title">絞りについて</h5>

        <p data-i18n="second-view-bottom-text1">絞りについて</p>
        <p data-i18n="second-view-bottom-text2">古くから伝わる、美しい染めの文化</p>
        <p data-i18n="second-view-bottom-text3">絞り染めは、古くから世界各地で親しまれてきた染色技法です。</p>
        <p data-i18n="second-view-bottom-text4">日本には飛鳥〜奈良時代、仏教とともに</p>
        <p data-i18n="second-view-bottom-text5">大陸文化の一つとして伝わり、</p>
        <p data-i18n="second-view-bottom-text6">正倉院にもその美しい布が宝物として残されています。</p>

        <a href="<?php echo home_url() ?>/about" class="second-view-bottom-link" data-i18n="second-view-bottom-link">さらに詳しく</a>
      </section>
    </div>
  </div>

  <section class="top-experience-section">
    <div class="top-experience-title-container">
      <span></span>
      <h3 data-i18n="top-experoence-title">体験のご紹介</h3>
      <span></span>
    </div>
    <div class="top-experience-content">
      <div class="top-experience-card">
        <div class="top-experience-card__sekka-shibori">
          <div class="top-experience-card-title">
            <div class="top-experience-card-left"></div>
            <div class="top-experience-card-stalk"></div>
            <a href="<?php echo home_url() ?>/experience">
              <span data-i18n="top-experience-card-text1">雪花絞り</span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-navy-blue.svg" alt="arrow-icon">
            </a>
          </div>
        </div>
      </div>
      <div class="top-experience-card">
        <div class="top-experience-card__group">
          <div class="top-experience-card-title">
            <div class="top-experience-card-left"></div>
            <div class="top-experience-card-stalk"></div>
            <a href="<?php echo home_url() ?>/experience">
              <span data-i18n="top-experience-card-text2">団体様向け</span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-navy-blue.svg" alt="arrow-icon">
            </a>
          </div>
        </div>
      </div>
      <div class="top-experience-card">
        <div class="top-experience-card__denim">
          <div class="top-experience-card-title">
            <div class="top-experience-card-left"></div>
            <div class="top-experience-card-stalk"></div>
            <a href="<?php echo home_url() ?>/experience">
              <span data-i18n="top-experience-card-text3">デニムも</span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-navy-blue.svg" alt="arrow-icon">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-guest-section">
    <div class="top-guest-title-container">
      <span></span>
      <h3 data-i18n="top-guest-title">お客様のページ</h3>
      <span></span>
    </div>
    <div class="top-guest-content">
      <div class="top-guest-images">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guest/guest-image1.jpg" alt="top-guest-image1" class="top-guest-image1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guest/guest-image2.jpg" alt="top-guest-image2" class="top-guest-image2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guest/guest-image3.jpg" alt="top-guest-image3" class="top-guest-image3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guest/guest-image4.jpg" alt="top-guest-image4" class="top-guest-image4">
      </div>
      <div class="top-guest-shiboinu">
        <div class="top-guest-shiboinu-comment">
          <p data-i18n="top-guest-shiboinu-text1">お客様から届いた</p>
          <p data-i18n="top-guest-shiboinu-text2">お声やお写真を紹介しているワン！</p>
          <p data-i18n="top-guest-shiboinu-text3">是非見ていって欲しいワン！</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shiboinu.png" alt="shiboinu-image" class="top-guest-shiboinu-image">
      </div>
      <a href="<?php echo home_url() ?>/guest" class="top-guest-link">
        <span data-i18n="top-guest-link">もっと見る</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-white.svg" alt="arrow-icon">
      </a>
      <div class="top-guest-description">
        <p>マスコットキャラクター</p>
        <h6>シボ犬</h6>
      </div>
    </div>
  </section>

  <section class="top-info-section">
    <div class="top-info-title-container">
      <span></span>
      <h3 data-i18n="top-info-title">お知らせ・最新情報</h3>
      <span></span>
    </div>
    <div class="top-info-content">
      <ul>
        <li class="top-info-item">
          <span>2025/04/14</span>
          <p data-i18n="top-info-text1">雪花絞り（浴衣反物）体験料金改定のお知らせ（2025年4月～ご予約より）</p>
        </li>
        <li class="top-info-item">
          <span>2024/09/06</span>
          <p data-i18n="top-info-text2">9月29日(日)  雪花絞り手ぬぐいワークショップをこんせい  にて行います！！</p>
        </li>
        <li class="top-info-item">
          <span>2024/08/03</span>
          <p data-i18n="top-info-text3">浴衣ワークショップ相席のお願い</p>
        </li>
        <li class="top-info-item">
          <span>2024/04/12</span>
          <p data-i18n="top-info-text4">ふるさと納税でもご利用いただけます！</p>
        </li>
      </ul>
    </div>
  </section>

  <div class="top-access-section">
    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.5161444338123!2d136.95413073901133!3d35.07722827882573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037c908803f8d1%3A0x6f003b2a71a3059!2z77yI5pyJ77yJ44GT44KT44Gb44GE!5e0!3m2!1sja!2sjp!4v1745136631675!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="top-access-content">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parking-area-map.jpg" alt="parking-area-map" class="parking-area-map-image">
      <div class="top-access-text">
        <p>〒458-0801</p>
        <p data-i18n="top-access-text1">名古屋市緑区鳴海町字下中21番地</p>
        <p>TEL.052-624-0029</p>
        <p data-i18n="top-access-text2">*カーナビなどで検索される場合は下記の内容で入力下さい</p>
        <p data-i18n="top-access-text3">名古屋市緑区鳴海町下中22</p>
        <p data-i18n="top-access-text4">*駐車場ございます(左図)</p>
        <p data-i18n="top-access-text5">*名鉄鳴海駅  東出口より徒歩3分程</p>
      </div>
    </div>
  </div>

  <div class="page-top-button" id="pageTopBtn">
    <button>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-white.svg" alt="arrow-icon">
    </button>
  </div>
</main>

<?php get_footer(); ?>