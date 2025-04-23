<?php 
  /*
  Template Name: Info Page
  */
  get_header(); 
?>

<main>

  <div class="page-title info-first-view">
    <h2>よくある質問・お問い合わせ</h2>
  </div>


  <section class="faq-section">
    <h3 class="info-section-title title-faq">よくある質問</h3>

    <div class="all-faq">
      <div class="experiense-faq">
          <h4 class="faq-category">体験について</h4>

          <div class="experiense-faq-01">
              <div class="faq-q">
                  <p class="q-txt"><span>体験は一人で参加してもいいですか？</span></p>
                  <div class="toggle_icon"></div>
              </div>
              <div class="faq-a">
                  <p class="a-txt">お一人でもご参加いただけますが、相席になる場合がございます。<br>あらかじめご了承ください。</p>
              </div>
          </div>

          <div class="experiense-faq-02">
              <div class="faq-q">
                  <p class="q-txt"><span>お仕立てはしてもらえますか？</span></p>
                  <div class="toggle_icon"></div>
              </div>
              <div class="faq-a">
                  <p class="a-txt">和裁士さんをご紹介させていただいております。</q>
              </div>
              </div>

          <div class="experiense-faq-03">
              <div class="faq-q">
                  <p class="q-txt"><span>何歳から体験できますか？</span></p>
                  <div class="toggle_icon"></div>
              </div>
              <div class="faq-a">
                  <p class="a-txt">アイロンの使用が可能であれば、小学生でもご体験いただけます。（保護者同伴必須）</q>
              </div>
          </div>

          <div class="experiense-faq-04">
              <div class="faq-q">
                  <p class="q-txt"><span>男性でも体験できますか？</span></p>
                  <div class="toggle_icon"></div>
              </div>
              <div class="faq-a">
                  <p class="a-txt">もちろん可能でございます。</q>
              </div>
          </div>

          <div class="experiense-faq-05">
              <div class="faq-q">
                  <p class="q-txt"><span>浴衣体験の反物をあらかじめ畳んできてもいいですか？</span></p>
                  <div class="toggle_icon"></div>
              </div>
              <div class="faq-a">
                  <p class="a-txt">二回目以降のリピーターの方であれば可能です。<br>送料無料で生地などをお届けしますので、ご予約の際にお申し付けください。</q>
              </div>
          </div>
        </div>


        <div class="others-faq">
            <h4 class="faq-category">その他</h4>

            <div class="others-faq-01">
                <div class="faq-q">
                    <p class="q-txt"><span>体験時の昼食はどうすればいいですか？</span></p>
                    <div class="toggle_icon"></div>
                </div>
                <div class="faq-a">
                    <p class="a-txt">お弁当などをご持参いただき、社内で食べていただくか、お近くの飲食店をご利用ください。</q>
                </div>
            </div>

            <div class="others-faq-02">
                <div class="faq-q">
                    <p class="q-txt"><span>駐車場は何台分ありますか？</span></p>
                    <div class="toggle_icon"></div>
                </div>
                <div class="faq-a">
                    <p class="a-txt">5台ほど置いていただけます。<br>大きいお車の場合は、お近くのコインパーキングをご案内しております。</q>
                </div>
            </div>
        </div>
    </div>

  </section>


  <section class="phone-section">
      <p>皆様からのお問い合わせ・ご意見などを下記フォームよりお待ちしております。</p>
      <p>お問い合わせの内容によっては、ご返信まで少々お時間をいただく場合がございますので、
  あらかじめご了承ください。</p>
      <p>※取材依頼等も、下記フォームからお待ちしております。<br><br></p>
      <p>下記フォームがご利用になれない場合、またお急ぎの場合はお電話でお問い合わせください。</p>
      <div class="phone-section-inner">
      <div class="phone-button">
          <p>TEL.052-624-0029</p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg">
      </div>
      <p>※&nbsp;9:00～18:00&nbsp;土日祝除く</p>
      </div>
  </section>

  <section class="inquiry-section">
      <h3 class="info-section-title title-inquiry">お問い合わせ</h3>
  </section>

</main>

<script>
    $(document).ready(function() {
        // 質問をクリックしたときの処理
        $('.faq-q').click(function() {
            // クリックされた質問に対応する回答を表示/非表示
            $(this).next('.faq-a').slideToggle(300);
            
            // トグルアイコンを切り替え
            $(this).find('.toggle_icon').toggleClass('open');
        });
    });
</script>

<?php get_footer(); ?>