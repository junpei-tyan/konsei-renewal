<?php 
  /*
  Template Name: Company Page
  */

  get_header(); 
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/company.css">

<main>
  <div class="page-title company-first-view">
    <h2>会社概要</h2>
  </div>

  <section class="profile">
    <table class="profile-table">
      <tbody>
        <tr>
          <th>会社名</th>
          <td>有限会社&emsp;こんせい</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>愛知県名古屋市緑区鳴海町字下中21番地</td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td>052-624-0029</td>
        </tr>
        <tr>
          <th>FAX</th>
          <td>052-622-6182</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>平成24年1月</td>
        </tr>
        <tr>
          <th>事業内容</th>
          <td>伝統工芸鳴海絞り、刺繍手加工品、婦人服や雑貨類の製造・販売、絞り染めのワークショップ</td>
        </tr>
        <tr>
          <th>代表</th>
          <td>
            近藤&emsp;泰仁<br>
            『体験できる絞り屋』として皆様に楽しんでいただけるよう日々努めております。
          </td>
      </tr>
        <tr>
          <th>沿革</th>
          <td>
            大正 6年（1916）<br>&emsp;近藤泰仁の祖父&emsp;近藤 &emsp;清一が個人創業<br><br>
            昭和26年（1951）<br>&emsp;有限会社&emsp;近清商店&emsp;設立<br><br>
            昭和46年（1971）<br>&emsp;近藤泰仁の父&emsp;近藤&emsp;典親&emsp;社長就任<br><br>
            平成 6年（1994）<br>&emsp;有限会社&emsp;近清商店に入社<br><br>
            平成24年（2012）<br>&emsp;有限会社こんせい設立 社長就任
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <section class="access">
    <div class="access-title-container">
      <span></span>
      <h3>アクセス</h3>
      <span></span>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6530.350638860713!2d136.954186!3d35.077352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037c908803f8d1%3A0x6f003b2a71a3059!2z77yI5pyJ77yJ44GT44KT44Gb44GE!5e0!3m2!1sja!2sjp!4v1745049023959!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="access-adress">
      <div class="parking-map-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parking-area-map.jpg">
      </div>
      <div class="address-txt">
        <div class="address-01">
          <p>〒458-0801 </p>
          <p>名古屋市緑区鳴海町字下中21番地</p>
          <p>TEL.052-624-0029</p>
        </div>
        <div class="address-02">
          <p>*カーナビなどで検索される場合は下記の内容でご入力下さい</p>
          <p>名古屋市緑区鳴海町下中22</p>
          <p>*駐車場ございます(左図)</p>
          <p>*名鉄鳴海駅&emsp;東出口より徒歩3分程</p>
        </div>
      </div>
    </div>
  </section>

  <div class="page-top-button" id="pageTopBtn">
    <button>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-white.svg" alt="arrow-icon">
    </button>
  </div>
</main>

<?php get_footer(); ?>