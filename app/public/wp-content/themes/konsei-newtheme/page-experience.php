<?php
  /*
  Template Name: Experience Page
  */

  get_header(); 
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/experience.css">

<main>
  <div class="h3-title-container experience-title">
    <span></span>
    <h3 data-i18n="top-experoence-title">体験のご紹介</h3>
    <span></span>
  </div>

  <div class="tab-buttons">
    <button class="tab-btn" data-tab="group">団体様向け</button>
    <button class="tab-btn active" data-tab="yukata">雪花絞り<br>（浴衣の反物）</button>
    <button class="tab-btn" data-tab="denim">デニム素材</button>
  </div>

  <div class="tab-contents">
    <section class="tab-content group-section" id="group">

      <h2>団体様向け体験について</h2>

      <div class="dantai">
        <div class="about-group-top">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/group.png" alt="group-image">

          <div class="about-group-top-text">
            <p>Tシャツ、ハンカチ、手ぬぐい、ストール等、各種絞り染め体験を行っております。</p>
            <p>地域産業のひとつとして、学校などの授業の中でも体験していただいています。</p>
            <p>子供会やサークル活動、企業様のレクなど、お子様から大人の方まで楽しんでいただけます。</p>
            <p>お気軽にお問い合わせください。</p>
          </div>
        </div>

        <div class="about-group-bottom">
          <div class="about-group-bottom-text">
            <p>ご自分たちで作り上げる、オリジナルの記念品や贈答品などとして！</p>
            <p>またおそろいのグッズ作りとしてもご好評いただいております。</p>
            <p>弊社では、化学染料を使用しております。色のバリエーションが豊富で、色もちも良く、初めての方でも安心して染色していいただけます。</p>
          </div>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/shirt.png" alt="shirt-image">
        </div>
      </div>

      <div class="background2">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/towel-belt.png" alt="towel-belt-image">
        </div>

        <div>
          <p>自分で表紙をデザインできます。</p>
          <p>メッセージを添えて贈り物にいかがですか？</p>
          <p>手ぬぐい用の帯はこちらからダウンロードできます。</p>

          <button>ダウンロード（69.6kb）</button>
        </div>
    </section>
  </div>

  <div class="tab-content active" id="yukata">
    <div class="sekka-shibori-firstview">
      <h2>雪花絞り（浴衣の反物）</h2>
    </div>

    <h5 class="naiyou experience-h5">【体験内容】</h5>

    <div class="syo">
      <ol>
        <li>
          <p>①&emsp;<span>約13mの浴衣地を、アイロンを使いながら折りたたんで染めていただきます。</span></p>
          <p>&emsp;※4m以上〜お好きな長さでの制作も可能です。</p>
        </li>

        <li>
          <p>②&emsp;<span>柄は、4種類の中から1つお選びください。</span></p>
          <p>&emsp;それぞれ異なる模様の出方が楽しめます。</p>
        </li>

        <li>
          <p>③&emsp;<span>色は、10色の中から1色お選びいただけます。</span></p>
          <p>&emsp;※柄によっては2色までお使いいただけます。</p>
        </li>

        <li>
          <p>④&emsp;<span>本番前に、手ぬぐいで練習していただけます。</span></p>
          <p>浴衣生地・手ぬぐい共に当日乾燥させ、お持ち帰りいただけます。</p>
        </li>

        <div>
          <p>💡使用する染料について</p>
          <p>&emsp;弊社では、化学染料を使用しています。</p>
          <p>&emsp;色のバリエーションが豊富で、発色もよく、色もちも◎</p>
          <p>&emsp;初めての方でも安心して染色いただけます。</p>
        </div>
      </ol>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image8.png" alt="experience-shibori-image1">  
    </div>

    <h5 class="experience-h5">【お選びいただける柄（4種）】</h5>

    <ul class="gar">
      <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image4.jpeg" alt="experience-shibori-image2"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image5.jpeg" alt="experience-shibori-image3"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image6.jpeg" alt="experience-shibori-image4"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image7.jpeg" alt="experience-shibori-image5"></li>
    </ul>

    <h5 class="experience-h5">【お選びいただける色（10種）】</h5>

    <div class="inu">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/10-colors.png" alt="10-colors-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/shiboinu-comment.png" alt="shiborinu-comment-image">  
    </div>

    <button class="saku">お客様の作品例はこちら</button>

    <h5 class="experience-h5">【お日にち・参加人数】</h5>
    <div class="nin">
      <ul>
        <li>- 平日（月〜金）1〜5名様までの予約を受け付けています</li>
        <li>- 希望の日時が埋まっていることもあるため、早めのご予約をおすすめします</li>
        <li>- まずはお気軽にお問い合わせください</li>
      </ul>

    </div>
    <div class="google-calendar">
      <iframe src="https://calendar.google.com/calendar/embed?src=ja.japanese%23holiday%40group.v.calendar.google.com&ctz=UTC" frameborder="0" scrolling="no"></iframe>
    </div>

    <div class="google-calender-text">
      <p>カレンダーをご覧いただいている時点で、他の方からのご予約や申込状況などによってご希望に添えない場合がございます。</p>
      <p>お問い合わせページより複数のご希望日をお知らせいただけますよう宜しくお願いいたします。</p>
    </div>

    <div class="background">
      <div class="content-box">
        <section class="money">
          <h5 class="experience-h5">【体験料金（令和７年４月より）】</h5>

          <div>
            <p>これまで、多くのリクエストをいただき、さまざまな柄や染色スタイルに挑戦してきました。</p>
            <p>本当にありがとうございます！</p>
            <p>その中で、染料の調合や器具の準備などにお時間をいただくことがあり、</p>
            <p>一部の対応には手間やコストがかかってしまうこともありました。</p>
            <p>そこで、よりわかりやすくご案内できるように</p>
            <p>「オプション」という形で一部の料金を区別させていただくことになりました。</p>
            <p>新しい料金体系は下記のとおりです。ぜひご確認ください。</p>
          </div>

          <table class="price-table">
            <tr>
              <th class="ki">
                <p>基本料金</p>
              </th>
              
              <td>
                <p>20,000円</p>
              </td>
            </tr>

            <tr>
              <th class="op">
                <p>オプション（２回目以降の方）</p>
              </th>

              <td class="op"></td>
            </tr>

            <tr>
              <th class="ryo">
                <p>黒生地</p>
              </th>

              <td>
                <p>+1,000円</p>
              </td>
            </tr>

            <tr>
              <th class="ryo">
                <p>六つ折り</p>
                <p>（基本の畳み方よりもお時間がかかりますのでご了承ください）</p>
              </th>

              <td>
                <p>+1,000円</p>
              </td>
            </tr>

            <tr>
              <th class="ryo">
                <p>柄の大きさにグラデーションをつけて染色</p>
                <p>（白生地のみ）</p>
              </th>
              
              <td>
                <p>+1,000円</p>
              </td>
            </tr>
          </table>

          <p>★2回目以降の方は、事前に生地をたたんでいただくスタイルも人気です。</p>
          <p>送料無料で生地などをお届けしますのでお申し付けください。</p>  
        </section>

        <div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/kuro-kiji.jpg" alt="kuro-kiji-image">
            <p>黒生地</p>
          </div>

          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/mutsu-ori.png" alt="mtsu-ori-image">
            <p>六つ折り</p>
          </div>

          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/gradation.png" alt="gradation-image">
            <p>グラデーション</p>
          </div>
        </div>

        <section>
          <h5 class="experience-h5">ー&emsp;動画撮影オプション&emsp;ー</h5>

          <div class="video-option-text">
            <p>iPhone動画クリエイターの「あすきゃんさん」が撮影します。</p>
            <p>自然な笑顔を引き出し、心に残る映像を撮ってくださいます。</p>
            <p>①か②よりお選びください（2024年8月より）</p>
            <p>①反物を染色している様子2時間程度</p>
            <p>②反物を染色している様子2時間程度+浴衣完成後浴衣姿での撮影2時間程度</p>
            <p>（名古屋市緑区有松にて</p>
          </div>

          <div class="but">
            <a>参考動画はこちら</a>
            <a href="https://shiborikonsei.com/ews/uploads/2024/11/asukyan.jpeg" class="button">動画撮影のオプションはこちら</a>
          </div>
        </section>
        
        <div class="huru">
          <hgroup>
            <h6>【ふるさと納税でもご利用いただけます！】</h6>
            <p>下記の主要サービスで「こんせい」体験を選択できます。</p>
          </hgroup>

          <div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/rakuten-logo.png" alt="rakuten-logo">
            </div>

            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/hurunabi-logo.png" alt="hurunabi-logo">
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/hurusato-choisu-logo.png" alt="hurusato-choisu-logo">
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="to">
      <section class="toujitu-box">
        <h5 class="experience-h5">【体験当日のご案内】</h5>

        <div>
          <p >- 所要時間約6〜7時間</p>
          <p>（10:00スタート → 16:00〜17:00ごろ終了予定）</p>
          <p>お客様のペースに合わせて進行します</p>
          <p>昼食は自由時間（🍱お弁当の持参 or 飲食店のご案内も可能です）</p>
          <p>作業状況により終了時間が前後する場合もあります</p>
          <p>- 持ちもの</p>
          <p>汚れてもよい服装</p>
          <p>お弁当や飲み物など（必要な方）</p>
        </div>
      </section>
    </div>
  </div>

    <div class="tab-content" id="denim">
      <div class="kasaneru">
        <h2>デニム生地</h2>
      </div>

      <section>
        <h5 class="naiyou experience-h5">【体験内容】</h5>

        <div class="syo">
          <div class="denim-content-top-text">
            <p>デニム生地にお好みの色をかけ染めしていただきます。</p>
            <p>自由な染色で自分らしいスタイルを楽しんでください。</p>
            <p>男性も女性もマイサイズの着物を手に入れられます！</p>
            <p>＊別料金</p>
            <p>デニム染め着物ワークショップで、伝統の美と自由な発想を融合させて、自分の個性を引き立ててください。</p>
            <p>経験ある指導者が丁寧に指導しますので、初心者の方でも安心してご参加いただけます。</p>
            <p>💡薄手デニム生地（５．５オンス）&emsp;約42㎝幅にカットした生地約13m&emsp;</p>
            <p>※広幅の生地をカットしていて生地端は切りっぱなしです</p>
          </div>
        
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/denim-kimono.png" alt="denim-kimono-image">
        </div>
      </section>

      <div>
        <hgourp class="machining-title">
          <h6>【お選びいただける加工（2種）】</h6>
          <p>他にもご要望がありましたらお聞かせください。</p>
        </hgroup>

        <div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/crushed-pattern.png" alt="crushed-pattern-image">
            <p>クラッシュ柄</p>
          </div>

          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/striped-pattern.png" alt="">
            <p>横縞柄</p>
          </div>
        </div>
      </div>

      <section>
        <h5 class="experience-h5">【お選びいただける色】</h5>

        <ul class="color">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/enji.png" alt="enji-image">
            <p>エンジ</p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/karashi.png" alt="karashi-image">
            <p>カラシ</p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/green.png" alt="green-image">
            <p>緑</p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/blue.png" alt="blue-image">
            <p>青</p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/purple.png" alt="purple-image">
            <p>紫</p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/color-none.svg" alt="decolourization-image">
            <p>脱色</p>
          </li>
        </ul>
      </section>

      <section>
        <h5 class="experience-h5">【お日にち・参加人数】</h5>

        <ul>
          <li>
            <p>- 平日（月〜金）1〜5名様までの予約を受け付けています</p>
          </li>

          <li>
            <p>- 希望の日時が埋まっていることもあるため、早めのご予約をおすすめします</p>
          </li>
          
          <li>
            <p>- まずはお気軽にお問い合わせください</p>
          </li>
        </ul>
      </section>

      <div class="google-calendar">
        <iframe src="https://calendar.google.com/calendar/embed?src=ja.japanese%23holiday%40group.v.calendar.google.com&ctz=UTC" frameborder="0" scrolling="no"></iframe>

        <div class="google-calender-text">
          <p>カレンダーをご覧いただいている時点で、他の方からのご予約や申込状況などによってご希望に添えない場合がございます。</p>
          <p>お問い合わせページより複数のご希望日をお知らせいただけますよう宜しくお願いいたします。</p>
        </div>
      </div>

      <div>
        <section class="content-box">
          <h5>【体験料金（令和７年４月より）】</h5>

          <table class="price-table">
            <tr>
              <th class="ki">
                <p>基本料金</p>
              </th>

              <td>
                <p>30,000円</p>
              </td>
            </tr>

            <tr>
              <th class="ryo">
                <p>1色追加</p>
              </th>
              
              <td>
                <p>+1,000円</p>
              </td>
            </tr>

            <tr>
              <th class="ryo">
                <p>1加工追加</p>
                <p>（基本の畳み方よりもお時間がかかりますのでご了承ください）</p>
              </th>

              <td>
                <p>+1,000円</p>
              </td>
            </tr>

            <tr>
              <th class="ryo">
                <p>お仕立てのご案内</p>
              </th>

              <td>
                <p>22,000円</p>
              </td>  
            </tr>
          </table>

          <p>★2回目以降の方は、事前に生地をたたんでいただくスタイルも人気です。</p>
          <p>送料無料で生地などをお届けしますのでお申し付けください。</p>
        </section>
      </div>
      
      <div class="to">
        <section class="toujitu-box">
          <h5 class="experience-h5">【体験当日のご案内】</h5>

          <div>
            <p>- 所要時間約6〜7時間<p>
            <p>（10:00スタート → 16:00〜17:00ごろ終了予定）</p>
            <p>お客様のペースに合わせて進行します</p>
            <p>昼食は自由時間（🍱お弁当の持参 or 飲食店のご案内も可能です）</p>
            <p>絞りの種類や作業状況により終了時間が前後する場合もあります</p>
            <p>- 持ちもの</p>
            <p>汚れてもよい服装</p>
            <p>お弁当や飲み物など（必要な方）</p>
          </div>
        </section>
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