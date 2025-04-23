<?php 
  /*
  Template Name: Active Results Page
  */

  get_header(); 
?>

<!-- 【活動実績】ページ -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page-active-results.css">
<main>
  <div class="active-results-firstview">
    <h1>活動実績</h1>
  </div>

  <div class="active-results_top">
    <div class="active-results_intro">
    人と人が絞り染めを通じてつながり、互いを認め合う。
    <br>会話が生まれ、笑顔があふれ、新たな絆が育まれていく。
    <br>絞り染めは、コミュニケーションのツールにもなり得るのです。
    <br>私たちは、伝統工芸の新たな可能性を体験を通じて提案しています。
    </div>
  </div>

  <div class="events-section">
    <div class="results_card">
      <div class="results-section__title"> 
        ①体験イベント
      </div>
      <div class="results-section__intro">
        体験活動することで様々な人に喜んでもらえる！
      </div>
    </div>

    <div class="event-group">
      <h3>地域学習としての体験授業</h3>
      <div class="event-item single">
        <img src="image1.jpg" alt="小学校">
        <p>伝統工芸に触れながら、ものづくりの楽しさを体験してもらいたいと考えています。
          <br>また、お互いの作品を見せ合い、認め合うことも大切にしています。さらに、感想や気づきを作文やお手紙などで表現することで、自分の思いを言葉にする力も育みます。</p>
      </div>
    </div>

    <div class="event-group">
      <h3>海外交流イベント</h3>
      <div class="event-grid">
        <div class="event-item">
          <img src="image2.jpg" alt="イタリア トリノ">
          <p>イタリア トリノ市で友好姉妹都市イベント</p>
        </div>
        <div class="event-item">
          <img src="image3.jpg" alt="アメリカ ロサンゼルス">
          <p>アメリカロサンゼルス市
          <br>友好姉妹都市イベントにて</p>
        </div>
        <div class="event-item">
          <img src="image4.jpg" alt="オーストラリア">
          <p>オーストラリアからの交換留学生さんの絞り染め体験
          <br>ー大府市の小学校さんにてー</p>
        </div>
      </div>
    </div>

    <div class="event-group">
      <h3>その他ワークショップ</h3>
      <div class="event-grid">
        <div class="event-item">
          <img src="image5.jpg" alt="緑警察署">
          <p>緑警察署 南警察署 中川警察署 
          <br>青少年立ち直り支援の一環として</p>
        </div>
        <div class="event-item">
          <img src="image6.jpg" alt="世界コスプレサミット">
          <p>世界コスプレサミット2023</p>
        </div>
        <div class="event-item">
          <img src="image7.jpg" alt="名古屋大学">
          <p>名古屋大学 天野教授物理学会にて 絞り染め体験</p>
        </div>
      </div>
    </div>

  </div>

  <div class="events-section">
    <div class="results_card">
      <div class="results-section__title"> 
        ②自社製品
      </div>
      <div class="results-section__intro">
        ─ 絞りの魅力を日常に ─
      </div>
    </div>

    <div class="results-goods">
      <div class="results-goods__title">
        自社商品
      </div>
      <div class="results-goods__line">
      </div>

      <div class="product-grid">
        <div class="product-item">
          <img src="img1.jpg" alt="絞りアクセサリー">
          <p>絞りアクセサリー</p>
        </div>
        <div class="product-item">
          <img src="img2.jpg" alt="雪花絞りの手拭い">
          <p>雪花絞りの手拭い</p>
        </div>
        <div class="product-item">
          <img src="img3.jpg" alt="鳴海絞マスク">
          <p>鳴海絞マスク</p>
        </div>
      </div>
    </div>

    <div class="results-stores">
      <div class="results-stores__title">
        百貨店で出店した商品
      </div>
      <div class="results-stores__line">
      </div>

      <div class="store-grid">
        <p class="store-description">
          各地の百貨店や催事にて、絞り染めの商品を多数販売しています。<br>
          アクセサリー、シャツ、小物など、実用的なデザインに伝統の技を融合。<br>
          実際に手に取っていただける機会を通して、絞りの魅力を直接お届けしています。
        </p>
        <div class="store-item-grid">
          <div class="store-item">
            <img src="img4.jpg" alt="出店1">
          </div>
          <div class="store-item">
            <img src="img5.jpg" alt="出店2">
          </div>
          <div class="store-item">
            <img src="img6.jpg" alt="出店3">
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="events-section">
    <div class="results_card">
      <div class="results-section__title"> 
        ③新商品開発
      </div>
      <div class="results-section__intro">
        体験活動することで様々な人に喜んでもらえる！
      </div>
    </div>

  </div>

  <div class="events-section">
    <div class="results_card">
      <div class="results-section__title"> 
        ④OEM生産
      </div>
      <div class="results-section__intro">
        アパレル商品（OEM）/ 京都の SOU・SOU 商品
      </div>
    </div>
  </div>

</main>


<?php get_footer(); ?>