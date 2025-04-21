<?php
  /*
  Template Name: About Page
  */

  get_header(); 
?>

<main>
  <div class="about-firstview">
    <h1>絞りについて</h1>
  </div>

  <div class="top-section">
    <div class="top-section_intro">
    絞り染めは、布を糸やひもでしっかり縛ったり、板で布をはさんだりして、模様を作りながら染める技法です。染める前の「しばり方」や「たたみ方」、絞る長さなどによって、同じ布でもまったく違う表情が生まれます。
    日本では、飛鳥〜奈良時代にかけて大陸から伝わったとされ、<br>
    正倉院には美しい絞り染めの布が、宝物として今も大切に残されています。
    </div>
  </div>

  <div class="narumi-section">
    <h2 class="narumi-section__title">鳴海絞について</h2>

    <div class="narumi-section__intro">
      鳴海絞りは、名古屋市緑区鳴海町を中心に400年以上前からはじまりました。
      比較的近い場所に木綿の産地があったので、木綿を入手しやすく、
      絞り染めの浴衣や手ぬぐいなどがよく作られました。
    </div>

    <div class="narumi-section__history">
      <div class="narumi-section__item">
        <div class="narumi-section__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/narumi1.png" alt="東海道五十三次">
        </div>
        <div class="narumi-section__text">
          <div class="narumi-section__subtitle">江戸時代の賑わいと絞り文化</div>
          <p>
            江戸時代には江戸（東京）と京都を結ぶ街道が設けられました。  
            東海道五十三次です。鳴海は40番目の宿場町として栄えました。上は将軍様、大名から商人、町民まで、あらゆる人たちが行き来しました。色鮮やかな絞り染めは、行き交う人々の目にも興味深く映り、手土産として重宝されたそうです。
            その繁栄ぶりは安藤広重や葛飾北斎の浮世絵などにも描かれています。
          </p>
        </div>
      </div>
    </div>

    <div class="narumi-section__development">
      <div class="narumi-section__item">
        <div class="narumi-section__text">
          <div class="narumi-section__subtitle">鳴海絞の広がりと技法の発展</div>
          <p>
            日本の他の地域でも絞り染めは行われていましたが、鳴海では絞りについての研究が特に盛んでした。
            そのため産み出された絞りの種類は100種類以上と、日本のみならず世界的にみても突出した絞りの産地となりました。
            1975年には、有松鳴海絞りとして国の伝統工芸品にも指定されています
          </p>
          </div>
        <div class="narumi-section__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/narumi2.png" alt="鳴海絞の発展">
        </div>
    </div>
  </div>


  <div class="process-section full-width-section">
    <h2 class="process-section__title">絞り染めの工程</h2>
    <div class="process-section__intro">伝統的な絞り染めは、以下の工程を通して美しい模様を生み出します。</div>
    
    <div class="step">
      <div class="step_box">
        <div class="step-label">STEP1</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/process1.png" alt="デザイン・型彫り・絵彫り">
        <div class="step_title">①デザイン・型彫り・絵彫り</div>
        <p>
          鳴海絞りで使われるデザインを考えます。<br>
          図柄とともに、小穴や目抜きなどを考えながら型紙をつくります。<br>
          昔は手作業で彫り込みます。
        </p>
      </div>

      <div class="step_box">
        <div class="step-label">STEP2</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/process2.png" alt="括り">
        <div class="step_title">②括り</div>
        <p>
        糸と針を使って縫ったり、専用の絞り台を使って括ります。
        他にも、板などではさむ絞り技法もあります。画像は巻上げ絞りを括る様子です。
        </p>
      </div>

      <div class="step_box">
        <div class="step-label">STEP3</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/process3.png" alt="染色">
        <div class="step_title">③染色</div>
        <p>
        染色をします。素材によって染料を変えて、
        絞りの括りが解けないように注意して染めます。一部の絞りを解いてさらに染めることもあります。
        </p>
      </div>

      <div class="step_box">
        <div class="step-label">STEP4</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/process4.png" alt="糸抜き、仕上げ">
        <div class="step_title">④糸抜き、仕上げ</div>
        <p>
        絞りの種類によって解き方が異なります。同じ図案でも、一枚一枚表情が違う絞り染め。
        それが魅力のひとつでもあり、難しさでもあります
        </p>
      </div>
    
    </div>
  </div>

  <div class="experience-section full-width-section">
    <div class="experience-left">
      実際にこの絞り染めを体験してみませんか？
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/triangle.svg" alt="triangle-img">
    <a href="#" class="experience-right">
      ご予約はこちらから
      <span class="arrow">→</span>
    </a>
  </div>  



  <div class="textile-section full-width-section">
    <div class="textile-box"> 
      <h2 class="textile-section__title">テキスタイルの紹介</h2>
      <div class="textile-section__intro">— 絞りの多彩な世界を、写真でご覧ください —</div>
    
      <div class="textile_list">
        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile1.png" alt="杢目（もくめ）絞り">
          <p>杢目（もくめ）絞り</p>
        </div>

        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile2.png" alt="三浦絞り">
          <p>三浦絞り</p>
        </div>

        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile3.png" alt="三浦絞り">
          <p>三浦絞り</p>
        </div>

        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile4.png" alt="杢目（もくめ）絞り">
          <p>杢目（もくめ）絞り</p>
        </div>

        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile5.png" alt="蜘蛛絞り">
          <p>蜘蛛絞り</p>
        </div>

        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile6.png" alt="杢目（もくめ）絞り">
          <p>杢目（もくめ）絞り</p>
        </div>

        <div class="textile_item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/textile7.png" alt="三浦絞りと竜巻絞り">
          <p>三浦絞りと竜巻絞り</p>
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

