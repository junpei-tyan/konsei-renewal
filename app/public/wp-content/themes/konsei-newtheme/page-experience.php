<?php
  /*
  Template Name: Experience Page
  */

  get_header(); 
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/experience.css">

<main>
  <h1 id="midasi">体験紹介</h1>

  <div class="tab-buttons">
    <button class="tab-btn" data-tab="group">団体様向け</button>
    <button class="tab-btn active" data-tab="yukata">雪花絞り<br>（浴衣の反物）</button>
    <button class="tab-btn" data-tab="denim">デニム素材</button>
  </div>

  <div class="tab-contents">
    <div class="tab-content " id="group">
      <h2 class="about-dantai">団体様向け体験について</h2>
      <div class="dantai">
        <div class="about-group-top">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/group.jpg" alt="group-image">

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

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/shirt.jpg" alt="shirt-image">
        </div>
      </div>

    <div class="background2">
        <div class="design-box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/towel-belt.jpg" alt="towel-belt-image">
          <ul>
            <li>
              <p>自分で表紙をデザインできます。</p>
              <p>メッセージを添えて贈り物にいかがですか？</p>
              <p>手ぬぐい用の帯はこちらからダウンロードできます。</p>
            </li>
            <li>
              <button class="down">ダウンロード（69.6kb）</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <!-- 雪花絞り -->
    <div class="tab-content active" id="yukata">
      <div class="sekka-shibori-firstview">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/sekka-shibori-firstview copy.jpg" alt="sekka-shibori-firstview">
        <h2>雪花絞り（浴衣の反物）</h2>
      </div>
      <h2 class="naiyou selected-h2">【体験内容】</h2>
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
            <p>💡使用する染料について</p>
            <p>&emsp;弊社では、化学染料を使用しています。</p>
            <p>&emsp;色のバリエーションが豊富で、発色もよく、色もちも◎</p>
            <p>&emsp;初めての方でも安心して染色いただけます。</p>
        </ol>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image8.jpg" alt="experience-shibori-image1">  
      </div>

      <h2 class="selected-h2">【お選びいただける柄（4種）】</h2>

      <ul class="gar">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image4.jpg" alt="experience-shibori-image2"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image5.jpg" alt="experience-shibori-image3"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image6.jpg" alt="experience-shibori-image4"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shibori-image7.jpg" alt="experience-shibori-image5"></li>
      </ul>

      <h2 class="selected-h2">【お選びいただける色（10種）】</h2>

      <div class="inu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/10-colors.jpg" alt="10-colors-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/shiboinu-comment.png" alt="shiborinu-comment-image">  
      </div>

      <button class="saku">お客様の作品例はこちら</button>

      <h2 class="selected-h2">【お日にち・参加人数】</h2>
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
          <div class="money">
            <h2 class="selected-h2">【体験料金（令和７年４月より）】</h2>
            <p>これまで、多くのリクエストをいただき、さまざまな柄や染色スタイルに挑戦してきました。</p>
            <p>本当にありがとうございます！</p>
            <p>その中で、染料の調合や器具の準備などにお時間をいただくことがあり、</p>
            <p>一部の対応には手間やコストがかかってしまうこともありました。</p>
            <p>そこで、よりわかりやすくご案内できるように</p>
            <p>「オプション」という形で一部の料金を区別させていただくことになりました。</p>
            <p>新しい料金体系は下記のとおりです。ぜひご確認ください。</p>

            <table class="price-table">
              <colgroup>
                <col style="width: 70%;">
                <col style="width: 30%;">
              </colgroup>
              <tr>
                <th class="ki">基本料金</th>
                <td>20,000円</td>
              </tr>
              <tr>
                <th class="op">オプション（２回目以降の方）</th>
                <td class="op"></td>
              </tr>
              <tr>
                <th class="ryo">黒生地</th>
                <td>+1,000円</td>
              </tr>
              <tr>
                <th class="ryo">
                  <p>六つ折り</p>
                  <p>（基本の畳み方よりもお時間がかかりますのでご了承ください）</p>
                </th>
                <td>+1,000円</td>
              </tr>
              <tr>
                <th class="ryo">
                  <p>柄の大きさにグラデーションをつけて染色</p>
                  <p>（白生地のみ）</p>
                </th>
                <td>+1,000円</td>
              </tr>
            </table>

            <p>★2回目以降の方は、事前に生地をたたんでいただくスタイルも人気です。</p>
            <p>送料無料で生地などをお届けしますのでお申し付けください。</p>  

          </div>
          <ul class="option">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/kuro-kiji copy.jpg" alt="kuro-kiji-image"><p>黒生地</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/mutsu-ori.jpg" alt="mtsu-ori-image"><p>六つ折り</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/gradation.jpg" alt="gradation-image"><p>グラデーション</p></li>
          </ul>
          <h2 class="selected-h2">ー&emsp;動画撮影オプション&emsp;ー</h2>

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
            <a href="https://shiborikonsei.com/ews/uploads/2024/11/asukyan.jpg" class="button">動画撮影のオプションはこちら</a>
          </div>
          <div class="huru">
            <h2>【ふるさと納税でもご利用いただけます！】</h2>
            <p>下記の主要サービスで「こんせい」体験を選択できます。</p> 
          </div>
          <ul class="hurusato">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/rakuten-logo.png" alt="rakuten-logo">
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/hurunabi-logo.png" alt="hurunabi-logo">
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/hurusato-choisu-logo.png" alt="hurusato-choisu-logo">
            </li>
          </ul>
        </div>
      </div>
      <div class="to">
        <div class="toujitu-box">
          <h2 class="selected-h2">【体験当日のご案内】</h2>

          <p >- 所要時間約6〜7時間</p>

          <p>（10:00スタート → 16:00〜17:00ごろ終了予定）</p>
          <p>お客様のペースに合わせて進行します</p>
          <p>昼食は自由時間（🍱お弁当の持参 or 飲食店のご案内も可能です）</p>
          <p>作業状況により終了時間が前後する場合もあります</p>

          <p>- 持ちもの</p>

          <p>汚れてもよい服装</p>
          <p>お弁当や飲み物など（必要な方）</p>
        </div>
        <div class="background2">
          <div class="design-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/towel-belt.jpg" alt="towel-belt-image">
            <ul>
              <li>
                <p>自分で表紙をデザインできます。</p>
                <p>メッセージを添えて贈り物にいかがですか？</p>
                <p>手ぬぐい用の帯はこちらからダウンロードできます。</p>
              </li>
              <li>
                <button class="down">ダウンロード（69.6kb）</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-content" id="denim">
      <div class="kasaneru">
        <img class="seka" src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/denim-firstview.jpg" alt="denim-firstview">
        <h2>デニム生地</h2>
      </div>

      <div>
        <h2 class="naiyou selected-h2">【体験内容】</h2>
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
        
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/denim-kimono.jpg" alt="denim-kimono-image">
        </div>
      </div>

      <div>
        <div class="machining-title">
          <p>【お選びいただける加工（2種）】</p>
          <p>他にもご要望がありましたらお聞かせください。</p>
        </div>

        <ul class="gar">
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/crushed-pattern.jpg" alt="crushed-pattern-image"><p>クラッシュ柄</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/striped-pattern.jpg" alt=""><p>横縞柄</p></li>
        </ul>
      </div>

      <div>
        <h2 class="selected-h2">【お選びいただける色】</h2>
        <ul class="color">
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/enji.png" alt="enji-image"><p>エンジ</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/karashi.png" alt="karashi-image"><p>カラシ</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/green.png" alt="green-image"><p>緑</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/blue.png" alt="blue-image"><p>青</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/purple.png" alt="purple-image"><p>紫</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/color-none.svg" alt="decolourization-image"><p>脱色</p></li>
        </ul>
      </div>

      <h2 class="selected-h2">【お日にち・参加人数】</h2>
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
      <div>
        <div class="content-box">
          <h2>【体験料金（令和７年４月より）】</h2>
          <table class="price-table">
            <colgroup>
              <col style="width: 70%;">
              <col style="width: 30%;">
            </colgroup>
            <tr>
              <th class="ki">基本料金</th>
              <td>30,000円</td>
            </tr>
            <tr>
              <th class="ryo">1色追加</th>
              <td>+1,000円</td>
            </tr>
            <tr>
              <th class="ryo">1加工追加</th>
              <p>（基本の畳み方よりもお時間がかかりますのでご了承ください）</p>
              <td>+1,000円</td>
            </tr>
            <tr>
              <th class="ryo">お仕立てのご案内</th>
              <th>22,000円</th>  
            </tr>
          </table>

          <p>★2回目以降の方は、事前に生地をたたんでいただくスタイルも人気です。</p>
          <p>送料無料で生地などをお届けしますのでお申し付けください。</p>
          
        </div>
      </div>
      <div class="to">
        <div class="toujitu-box">
          <h2 class="selected-h2">【体験当日のご案内】</h2>

          <p>- 所要時間約6〜7時間<p>

          <p>（10:00スタート → 16:00〜17:00ごろ終了予定）</p>
          <p>お客様のペースに合わせて進行します</p>
          <p>昼食は自由時間（🍱お弁当の持参 or 飲食店のご案内も可能です）</p>
          <p>絞りの種類や作業状況により終了時間が前後する場合もあります</p>

          <p>- 持ちもの</p>

          <p>汚れてもよい服装</p>
          <p>お弁当や飲み物など（必要な方）</p>
        </div>
        <div class="background2">
          <div class="design-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience/towel-belt.jpg" alt="towel-belt-image">
            <ul>
              <li>
                <p>自分で表紙をデザインできます。</p>
                <p>メッセージを添えて贈り物にいかがですか？</p>
                <p>手ぬぐい用の帯はこちらからダウンロードできます。</p>
              </li>
              <li>
                <button class="down">ダウンロード（69.6kb）</button>
              </li>
            </ul>
          </div>
        </div>
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