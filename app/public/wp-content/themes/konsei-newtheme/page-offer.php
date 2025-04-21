<?php 
  /*
  Template Name: Offer Page
  */

  get_header(); 
?>

<main>
  <div class="offer-firstview">
    <h1>体験の申し込み</h1>
  </div>

  <div class="phone-section">
    <p>体験のお申し込みは下記フォームよりお願いいたします。</p>
    <p>ご返信まで少々お時間をいただく場合がございますので、あらかじめご了承ください。</p>
    <p>下記フォームがご利用になれない場合、またお急ぎの場合はお電話でお問い合わせください。</p>
    <div class="phone-section-inner">
      <div class="phone-button">
        <p>TEL.052-624-0029</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/phone-call.svg" alt="phone-call-icon">
      </div>
      <p>※ 9:00～18:00 土日祝除く</p>
    </div>
  </div>
  
  <div class="calender-section">
    <h4>【お日にち・参加人数】</h4>
    <p>平日（月～金）１～５名様での御予約をお願いします。</p>
    <p>現在予約が取りにくい状況になっていることから、お一人様でのご参加の場合、相席をお願いすることがあります。</p>
    <p>ご了承くださいませ。</p>
    <p>カレンダーの<span>◯印</span>が<span>ご予約可能日</span>となります。</p>
    <div class="google-calendar">
      <iframe src="https://calendar.google.com/calendar/embed?src=ja.japanese%23holiday%40group.v.calendar.google.com&ctz=UTC" frameborder="0" scrolling="no"></iframe>
    </div>
    <p>カレンダーをご覧いただいている時点で、他の方からのご予約や申込状況などによってご希望に添えない場合がございます。</p>
    <p>下記フォームより複数のご希望日をお知らせいただけますよう宜しくお願いいたします。</p>
  </div>

  <div class="offer-form-section">
    <h4>お申し込みフォーム</h4>
    <div class="offer-form">
      <form onsubmit="return false;">
        <div class="offer-form__name-fields">
          <div class="offer-form-label">
            <label for="first-name">お名前</label>
            <span>必須</span>
          </div>
          <div>
            <input type="text" id="first-name" placeholder="姓" autocomplete="off">
            <input type="text" id="last-name" placeholder="名" autocomplete="off">
          </div>
        </div>
        <div class="offer-form__mailaddress-fields">
          <div class="offer-form-label">
            <label for="mailaddres">メールアドレス</label>
            <span>必須</span>
          </div>
          <input type="text" id="mailaddres" placeholder="example@mail.com" autocomplete="off">
        </div>
        <div class="offer-form__phone-fields">
          <div class="offer-form-label">
            <label for="phone-number">電話番号</label>
            <span>必須</span>
          </div>
          <input type="text" id="phone-number" placeholder="090-1234-5678" autocomplete="off">
        </div>
        <div class="offer-form__desired-fields">
          <div class="offer-form-label">
            <label for="desired-date">体験希望日</label>
            <span>必須</span>
          </div>
          <input type="date" id="desired-date" autocomplete="off">
        </div>
        <div class="offer-form__people-fields">
          <div class="offer-form-label">
            <label for="people">参加人数</label>
            <span>必須</span>
          </div>
          <select name="people" id="people">
            <option value="selected" disabled selected>選択してください</option>
            <option value="1">1人</option>
            <option value="2">2人</option>
            <option value="3">3人</option>
            <option value="4">4人</option>
            <option value="5">5人</option>
          </select>
        </div>
        <div class="offer-form__experience-fields">
          <div class="offer-form-label">
            <label for="experience">体験内容</label>
            <span>必須</span>
          </div>
          <select name="experience" id="experience">
            <option value="selected" disabled selected>選択してください</option>
            <option value="1">オプション1</option>
            <option value="2">オプション2</option>
            <option value="3">オプション3</option>
          </select>
        </div>
        <div class="offer-form__remarks-fields">
          <div class="offer-form-label">
            <label for="remarks">備考欄</label>
            <span>任意</span>
          </div>
          <textarea name="remarks" id="remarks"></textarea>
        </div>
        <p>※ご提供いただいた個人情報は、ご本人様の同意がある場合、または正当な理由がある場合を除き、第三者に開示または提供いたしません。</p>
        <div>
          <button class="submit-button">送信</button>
        </div>
      </form>
    </div>
  </div>

  <div class="page-top-button" id="pageTopBtn">
    <button>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-white.svg" alt="arrow-icon">
    </button>
  </div>

</main>

<?php get_footer(); ?>