<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<?php wp_head(); ?>
<style>
    #nav-container ul::after {
            content: "";
            display: block;
            position: absolute;
            width: 992px;
            height: 5px;
            bottom: 0;
            right: -100%;
            z-index: 100;
            background: rgba(50,54,57,0.9);
}
</style>
</head>

<body id="top">
    <p id="page-top"><a href="#wrap"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i><br>TOP</a></p>
    <header>
        <!-- ナブメニューここから -->
        <nav class="none">
            <section id="nav-test">
                <div id="nav-container">
                    <ul>
                        <!--  classにactive-navをつけると赤線が付く。 -->
                        <li class="nav-li active-nav"><a href="#top">TOP</a></li>
                        <li class="nav-li"><a href="#news">NEWS</a></li>
                        <li class="nav-li"><a href="#aboutus">ABOUT</a></li>
                        <li class="nav-li"><a href="#company">COMPANY</a></li>
                        <li class="nav-li"><a href="#access">ACCESS</a></li>
                        <li class="nav-li"><a href="#contact">CONTACT</a></li>
                        <li class="nav-li"><a href="#service">SERVICE</a></li>
                    </ul>
                    <div id="line"></div>
                </div>
            </section>
        </nav>
        <!-- ナブメニューここまで -->
        <!-- スマホ用ナブメニューここから -->
        <section role="navigation">
            <div id="menuToggle" class="sumaho_none">
     <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <li class="nav-li active-nav"><a href="#top">TOP</a></li>
                    <li class="nav-li"><a href="#news">NEWS</a></li>
                    <li class="nav-li"><a href="#aboutus">ABOUT</a></li>
                    <li class="nav-li"><a href="#company">COMPANY</a></li>
                    <li class="nav-li"><a href="#access">ACCESS</a></li>
                    <li class="nav-li"><a href="#contact">CONTACT</a></li>
                    <li class="nav-li"><a href="#service">SERVICE</a></li>
                </ul>
            </div>
        </section>
        <!-- スマホ用ナブメニューここまで -->
        <!-- 動画の斜めエフェクト -->
            <section class="bg_naname">
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
</section>
        <!-- 動画の斜めエフェクト -->
        <!-- キャッチコピーここから -->
        <section class="title_box" data-aos="zoom-out" data-aos-delay="1500">
            <div class="title_text">
                Exective Serch Firm
            </div>
        </section>
        <!-- キャッチコピーここまで -->
        <!-- 動画 -->
        <div class="box">
            <video src="<?php echo get_template_directory_uri(); ?>/images/top_movie.mp4" class="fitMovie" preload="metadata" autoplay loop muted>
        </div>
        <!-- 動画ここまで -->
    </header>
    <!-- スクロールボタンここから -->
    <section id="section07" class="demo">
        <a href="#main"><span></span><span></span><span></span>Scroll</a>
        <!-- スクロールボタンここまで -->
    </section>
    <main id="main">
<!--         <section> -->
            <!-- //斜めの背景 -->
            <div class="top_sankaku" id="news"></div>
            <div class="naname_left1"></div>
            <div class="naname_right1"></div>
            <div class="naname_left2"></div>
            <div class="naname_right2"></div>
            <div class="naname_left3"></div>
            <div class="naname_right3"></div>
            <div class="bottom_sankaku"></div>
        <!-- </section>斜めの背景ここまで -->
        <div class="container">
            <section class="contents_left" data-aos="fade-up">
                <!-- newsここから -->
                <article class="news">
                    <h2>News</h2>
                    <p>
                        <b>2019.10.1</b>&nbsp;&nbsp;&nbsp;Webサイトをリニューアル。
                    </p>
                </article>
            </section>
            <section class="contents_right" id="aboutus" data-aos="fade-up">
                <!-- about usここから -->
                <article class="aboutus">
                    <h2>About Us</h2>
                    <p>
                        当社はエグゼクティブクラスのヘッドハンティングを中心とした人財紹介会社として2015年に設立されました。
                        社長・役員、経営幹部などエグゼクティブ層を対象とした方々のキャリアコンサルティングを専門に行っています。
                        また、人財のご紹介に留まらず、企業分析・事業戦略立案・アセスメント等のサービスもご提供しています。
                    </p>
                </article>
                <article class="profile">
                    <h2>CEO</h2>
                    <p>
                        一橋大学法学部卒業。三菱商事株式会社入社。ディーリング事業部にて新規事業に従事し、その後独立し起業。海外貿易、経営コンサル、M&Aコンサル、エグゼクティブサーチファーム事業、メディカル分野事業に携わる。<b>得意分野は、ハイスペック・ファイナンス・グローバル人材。</b>
                    </p>
                </article>
            </section>
            <section class="contents_left2" id="company" data-aos="fade-up">
                <!-- newsここから -->
                <article class="company">
                    <h2>Company</h2>
                    <section class="company_body">
                        <div class="timeline">
                            <div class="entry">
                                <div class="title">
                                    <h3>称号</h3>
                                    <p>Name</p>
                                </div>
                                <div class="body">
                                    <p>株式会社 Exective Serch</p>
                                </div>
                            </div>
                            <div class="entry">
                                <div class="title">
                                    <h3>事業所</h3>
                                    <p>Office</p>
                                </div>
                                <div class="body">
                                    <p>〒100-0000
                                        東京都千代田区丸の内1-1-1 丸ビル2階</p>
                                </div>
                            </div>
                            <div class="entry">
                                <div class="title">
                                    <h3>事業内容</h3>
                                    <p>Business</p>
                                </div>
                                <div class="body">
                                    <p>人事・組織コンサルティング</p>
                                </div>
                            </div>
                            <div class="entry">
                                <div class="title">
                                    <h3>役員</h3>
                                    <p>Officer</p>
                                </div>
                                <div class="body">
                                    <p>代表取締役 山田太郎</p>
                                </div>
                            </div>
                            <div class="entry">
                                <div class="title">
                                    <h3>設立</h3>
                                    <p>Establish</p>
                                </div>
                                <div class="body">
                                    <p>2015年1月1日</p>
                                </div>
                            </div>
                            <div class="entry">
                                <div class="title">
                                    <h3>資本金</h3>
                                    <p>Capital</p>
                                </div>
                                <div class="body">
                                    <p>5000万円</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </section><!-- contents_left2のnewsここまで -->
            <section class="contents_right2" id="access" data-aos="fade-up">
                <!-- about usここから -->
                <article class="access">
                    <h2>ACCESS</h2>
                    <div class="googlemap">
                        <iframe class="mapsize" src="https://www.google.com/maps/d/embed?mid=11WNMvo1DGOMHY0G0vqttiMZ18gQ&hl=ja" width="320" height="320"></iframe>
                    </div>
                    <div class="access_text">
                        <h4>電車でお越しの方</h4>
                        <p class="access_text2">
                            東京駅 丸の内中央口徒歩3分<br>
                            東京メトロ 二重橋前駅 7番出口徒歩1分<br>
                            東京メトロ 大手町駅 改札徒歩7分、7番出口徒歩1分<br>
                            <small>(丸ノ内線、東西線、千代田線、半蔵門線、都営三田線）</small>
                        </p>
                        <p class="access_text2">
                            <a href="http://maps.google.co.jp/maps/ms?ie=UTF8&#038;hl=ja&#038;msa=0&#038;msid=205975329053811883075.00049a5ad9d8f7bb6c834&#038;brcurrent=3,0x60188bf97912d02d:0xee1220ee8337117,0&#038;ll=35.681771,139.764397&#038;spn=0.006571,0.011802&#038;z=16&#038;source=embed" target="_blank" class="cp_link">Google Map</a><small>(別ウィンドウで開きます)</small>
                        </p>
                        <hr>
                        <p class="access_text2">駅出口は各交通機関Webページへ</p>
                        <p class="access_text2"><a href="http://www.jreast.co.jp/" target="_blank" class="cp_link">JR東日本</a>／
                            <a href="http://www.tokyometro.jp/" target="_blank" class="cp_link">東京メトロ</a>／
                            <a href="http://www.kotsu.metro.tokyo.jp/subway/" target="_blank" class="cp_link">都営地下鉄</a>
                        </p>
                    </div>
                </article>
            </section>
            <section class="contents_left3" id="contact" data-aos="fade-up">
                <!-- contactここから -->
                <article class="contact">
                    <h2>CONTACT</h2>
                    <div class="container_contact">
                        <div class="row body">
                <?php echo do_shortcode( '[contact-form-7 id="5" title="お問い合わせ"]' ); ?>
                        </div>
                    </div>
                </article>
            </section><!-- contactここまで -->
        </div><!-- continerここまで -->
        <!--         serviceここから -->
        <section class="contents_center" id="service" data-aos="fade-up">
            <!-- serviceここから -->
            <article class="service">
                <h2>SERVICE</h2>
                <div class="service_p">
                    <div class="service_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service01.jpg" alt="">
                        <h3>広報・PR活動全般のコンサルティング</h3>
                        <p class="service_text">
                            広報・PRに関連し、その課題解決に向けた調査・分析を実施し、広報活動基盤の構築から、ブランド開発、メッセージ構築など効率的かつ戦略的に実現するためのノウハウを提供します。
                        </p>
                    </div>
                    <div class="service_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service02.jpg" alt="">
                        <h3>報道関連調査および分析</h3>
                        <p class="service_text">
                            クライアントの広報活動に付随した活動に必要不可欠となる各種調査や分析を実施します。その後の広報活動や啓発型のパブリシティ活動において、ファクトベースでの裏付けとしても活用します。
                        </p>
                    </div>
                    <div class="service_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service03.jpg" alt="">
                        <h3>広報活動全般のプランニング</h3>
                        <p class="service_text">
                            目的に応じた広報活動計画を策定します。活動目的や戦略立案実行に止まらず、タイムライン、役割と責任を含めたスタッフィングなど活動全体のプロセスを可視化し、検証、次回以降の改善までを実現します。
                        </p>
                    </div>
                </div>
            </article>
        </section>
        <!--         serviceここから -->
    </main>
    <footer>
        <div class="footer">
            <small>
                Copyright 2015-2019 Exective Serch All Rights Reserved.
            </small>
        </div>
        <section class="movie">
            <div class="center">
                <!--                 <div>
                    虹は見えても渡れない<br>
                    雲をつかむようなうかれた話<br>
                    虹を渡って雲をつかんで<br>
                    君にあげるよ ほんとの話<br>
                    <br>
                    笑う人には笑っといてもらおう<br>
                    風は西から強くなっていく
                </div>
                <div>
                    明日へ突っ走れ<br>
                    未来へ突っ走れ<br>
                    魂で走れ<br>
                    明日はきっといいぜ<br>
                    未来はきっといいぜ<br>
                    魂でいこうぜ<br>
                    厚い雲を飛ばして<br>
                    太陽を呼び出して<br>
                    輝き放題
                </div> -->
                <div>
                    <iframe class="movie" width="560" height="315" src="https://www.youtube-nocookie.com/embed/BUvW1R8seOI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!--                 <div>
                    笑う人にもつきあってもらうよ<br>
                    街が西から驚いていく<br>
                    <br>
                    明日へ突っ走れ<br>
                    未来へ突っ走れ<br>
                    魂で走れ<br>
                    明日はもっといいぜ<br>
                    未来はずっといいぜ<br>
                    魂でいこうぜ<br>
                </div>
                <div>
                    厚い雲を飛ばして<br>
                    太陽を呼び出して<br>
                    雨を浴びてもいいぜ<br>
                    月をうけて光るぜ<br>
                    じゃまをするんじゃないぜ<br>
                    心はいま赤いぜ
                </div> -->
            </div>
        </section>
    </footer>
<?php wp_footer(); ?>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
/*動画全画面表示のJS*/
var winH = $(window).height();
$('.box').outerHeight(winH);

$(window).on('load', function() {
    setBgImg($('.fitMovie'));
});

$(window).on('resize', function() {
    winH = $(window).height();
    $('.box').outerHeight(winH);
    setBgImg($('.fitMovie'));
});

function setBgImg(object) {
    //画像サイズ取得
    var imgW = object.width();
    var imgH = object.height();

    //ウィンドウサイズ取得
    var winW = $(window).width();
    var winH = $(window).height();

    //幅・高さの拡大率取得
    var scaleW = winW / imgW;
    var scaleH = winH / imgH;

    //幅・高さの拡大率の大きいものを取得
    var fixScale = Math.max(scaleW, scaleH);

    //画像の幅高さを設定
    var setW = imgW * fixScale;
    var setH = imgH * fixScale;

    //画像の位置を設定
    var moveX = Math.floor((winW - setW) / 0);
    var moveY = Math.floor((winH - setH) / 0);

    //設定した数値でスタイルを適用
    object.css({
        'width': setW,
        'height': setH,
        'left': moveX,
        'top': moveY
    });
}
</script>
<script>
/*ナビメニューのanimation*/
(function() {
    var $activeWidth, $defaultMarginLeft, $defaultPaddingLeft, $firstChild, $line, $navListItem;

    $line = $('#line');

    $navListItem = $('a');

    $activeWidth = $('.active-nav').width();

    $firstChild = $('a:first-child');

    $defaultMarginLeft = parseInt($('a:first-child').next().css('marginLeft').replace(/\D/g, ''));

    $defaultPaddingLeft = parseInt($('#nav-container > ul').css('padding-left').replace(/\D/g, ''));

    $line.width($activeWidth + 'px');

    $line.css('marginLeft', $defaultPaddingLeft + 'px');

    $navListItem.click(function() {
        var $activeNav, $currentIndex, $currentOffset, $currentWidth, $initWidth, $marginLeftToSet, $this;
        $this = $(this);
        $activeNav = $('.active-nav');
        $currentWidth = $activeNav.width();
        $currentOffset = $activeNav.position().left;
        $currentIndex = $activeNav.index();
        $activeNav.removeClass('active-nav');
        $this.addClass('active-nav');
        if ($this.is($activeNav)) {
            return 0;
        } else {
            if ($this.index() > $currentIndex) {
                if ($activeNav.is($firstChild)) {
                    $initWidth = $defaultMarginLeft + $this.width() + $this.position().left - $defaultPaddingLeft;
                } else {
                    $initWidth = $this.position().left + $this.width() - $currentOffset;
                }
                $marginLeftToSet = $this.position().left + $defaultMarginLeft + 'px';
                $line.width($initWidth + 'px');
                return setTimeout(function() {
                    $line.css('marginLeft', $marginLeftToSet);
                    return $line.width($this.width() + 'px');
                }, 175);
            } else {
                if ($this.is($firstChild)) {
                    $initWidth = $currentOffset - $defaultPaddingLeft + $defaultMarginLeft + $currentWidth;
                    $marginLeftToSet = $this.position().left;
                } else {
                    $initWidth = $currentWidth + $currentOffset - $this.position().left;
                    $marginLeftToSet = $this.position().left + $defaultMarginLeft;
                }
                $line.css('marginLeft', $marginLeftToSet);
                $line.width($initWidth + 'px');
                return setTimeout(function() {
                    return $line.width($this.width() + 'px');
                }, 175);
            }
        }
    });

}).call(this);
</script>
<script>
/*AOS*/
AOS.init();
</script>
<script>
/*ゆっくり下にスクロール*/
$(function() {
    $('a[href^="#"]').click(function() {
        var speed = 800;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});
</script>
<script>
/*topへ戻るボタン*/
$(function() {
    var showFlag = false;
    var topBtn = $('#page-top');
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function() {
        if ($(this).scrollTop() > 5) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({ 'bottom': '20px' }, 200);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({ 'bottom': '-100px' }, 200);
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://zd3g08.sim.zdrv.com/wpesf/thanks/';}, false );
</script>
</html>