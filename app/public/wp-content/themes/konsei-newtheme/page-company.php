<!-- 【会社概要】ページ -->
<?php 
    /*
    Template Name: Company Page
    */

    get_header(); 
?>


<main>
    <div class="page_title">
        <h2>会社概要</h2>
        <!-- bgにする -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_img.jpg">
    </div>

    <div class="profile">
        <ul>
            <li>
                <h4>会社名</h4>
                <p>有限会社 こんせい</p>
            </li>
            <li>
                <h4>所在地</h4>
                <p>愛知県名古屋市緑区鳴海町字下中21番地</p>
            </li>
            <li>
                <h4>電話番号</h4>
                <p>052-624-0029</p>
            </li>
            <li>
                <h4>FAX</h4>
                <p>052-622-6182</p>
            </li>
            <li>
                <h4>設立</h4>
                <p>平成24年1月</p>
            </li>
            <li>
                <h4>事業内容</h4>
                <p>伝統工芸鳴海絞り、刺繍手加工品、婦人服や雑貨類の製造・販売、絞り染めのワークショップ</p>
            </li>
            <li>
                <h4>代表</h4>
                <p>近藤 泰仁<br>『体験できる絞り屋』として皆様に楽しんでいただけるよう日々努めております。</p>
            </li>
            <li>
                <h4>沿革</h4>
                <p>大正 6年（1916）<br>近藤泰仁の祖父　近藤清一が個人創業</p>
                <p>昭和26年（1951）<br>有限会社 近清商店　設立</p>
                <p>昭和46年（1971）<br>近藤泰仁の父　近藤 典親　社長就任</p>
                <p>平成 6年（1994）<br>有限会社 近清商店に入社</p>
                <p>平成24年（2012）<br>有限会社こんせい設立 社長就任</p>
            </li>
        </ul>
    </div>

    <div class="access">
        <h3>アクセス</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6530.350638860713!2d136.954186!3d35.077352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037c908803f8d1%3A0x6f003b2a71a3059!2z77yI5pyJ77yJ44GT44KT44Gb44GE!5e0!3m2!1sja!2sjp!4v1745049023959!5m2!1sja!2sjp" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parking-area-map.jpg">
            <div class="address_txt">
                <div class="address_01">
                    <p>〒458-0801 </p>
                    <p>名古屋市緑区鳴海町字下中21番地</p>
                    <p>TEL.052-624-0029</p>
                </div>
                <div class="address_02">
                    <p>*カーナビなどで検索される場合は下記の内容でご入力下さい</p>
                    <p>名古屋市緑区鳴海町下中22</p>
                    <p>*駐車場ございます(左図)</p>
                    <p>*名鉄鳴海駅　東出口より徒歩3分程</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>