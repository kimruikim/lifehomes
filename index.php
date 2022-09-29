<?php
$page_class = 'index';

$title = 'TOP';

$add_css_area = <<< EOD
<!-- スライダー JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> <!-- FontAwesome CSS -->

<link rel="stylesheet" href="/sub/assets/css/top.css"> <!-- TOP画面 CSS -->
EOD;

$add_js_area = <<< EOD
<!-- スライダー JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="/sub/assets/js/slider.js"></script>
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/sub/_Partials/header.php'; ?>

    <main>

        <section>
            <ul class="b-mainImg pc" id="main-slider">
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_1.jpg" alt="あなたの家にホームドクターがいたら、、" /></li>
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_2.jpg" alt="家族を守るケアコーチ" /></li>
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_3.jpg" alt="あなたが発信ケアコーチ" /></li>
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_4.jpg" alt="老化も防ぐケアコーチ" /></li>
            </ul>
            <ul class="b-mainImg_s sp" id="main-slider_s">
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_s_1.jpg" alt="あなたの家にホームドクターがいたら、、" /></li>
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_s_2.jpg" alt="家族を守るケアコーチ" /></li>
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_s_3.jpg" alt="あなたが発信ケアコーチ" /></li>
                <li><img src="https://yobouiryou.or.jp/wp-content/uploads/2022/08/slide_s_4.jpg" alt="老化も防ぐケアコーチ" /></li>
            </ul>
        </section>

        <section class="cts" id="sec01">
            <div class="side-item side-item__type1"><img src="/sub/assets/img/common/item/flower_9.png" alt="花びら"></div>
            <div class="side-item side-item__type2"><img src="/sub/assets/img/common/item/flower_6.png" alt="花びら"></div>
            <ul class="main-list">
                <li class="main-list__item">
                    <div class="cell">
                        <a class="youtube-modal" href="" target="_blank"><img src="/sub/assets/img/top/thumb/thumb_1.png" alt="予防ケアコーチ初めてストーリー"></a>
                    </div>
                    <div class="cell">
                        <h3>『予防ケアコーチ』を学ぶとは？</h3>
                        <p>先生方に聞いてみました！<br>予防医療研究協会の先生方に予防ケアコーチの学ぶ楽しさや必要性を医師の観点から聞いてみました!</p>
                    </div>
                </li>
                <li class="main-list__item">
                    <div class="cell">
                        <a class="youtube-modal" href="" target="_blank"><img src="/sub/assets/img/top/thumb/thumb_2.png" alt="予防ケアコーチ気になる"></a>
                    </div>
                    <div class="cell">
                        <h3>予防ケアコーチ気になる～</h3>
                        <p>カフェでひょんなことから予防ケアコーチのことを知るさくら子。花子は予防CCを実践することでさらにキレイになっていた！</p>
                    </div>
                </li>
                <li class="main-list__item">
                    <div class="cell">
                        <a class="youtube-modal" href="#top_menu_player03" data-id="top_menu_player03" data-y-id="qapp3KID7Cg">
                            <img src="/sub/assets/img/top/thumb/thumb_3.jpg" alt="受講生の声">
                            <div id="top_menu_player03"></div>
                        </a>
                    </div>
                    <div class="cell">
                        <h3>受講生の声</h3>
                        <p>現在までに受講した女性たちはどんな人たち？またどんなイメージだったのでしょう？同役だったのでしょう？</p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="cts">
            <div class="side-item side-item__s_type1 sp"><img src="/sub/assets/img/common/item/flower_5.png" alt="花びら"></div>
            <div class="movie-box">
                <div class="cell">
                    <div class="side-item side-item__type8 pc"><img src="/sub/assets/img/common/item/flower_4.png" alt="花びら"></div>
                    <div class="side-item side-item__type3 pc"><img src="/sub/assets/img/common/item/flower_5.png" alt="花びら"></div>
                    <strong>私たちが考える「予防医療」とは</strong>
                    <h2>医師がいる<br class="sp">「町のかかりつけ医」から<br>お母さんがケアする<br class="sp">「家のかかりつけ医」へ</h2>
                    <p>昭和時代 ... いやもっと昔からでしょうか ...<br>
                        お腹が痛かったり病気したりした時は、<br class="pc">お母さんが適切な薬や処置をしてくれる「家のかかりつけ医」の役割を果たしてくれていました。<br>
                        そしてまたこんにちも、、医師がいる「町のかかりつけ医」から、お母さんがケアする「家のかかりつけ医」へ、、予防医療をもっと身近にする「医師が監修した女性のための資格」です。</p>
                </div>
                <ul class="movie-list cell">
                    <li class="movie-list__item">
                        <div class="b-movie">
                            <a class="youtube-modal" href="#movie_list_player01" data-id="movie_list_player01" data-y-id="yJZQkrgmKpc">
                                <img src="/sub/assets/img/top/movie_list/thumb_1.jpg" alt="動画1">
                                <div id="movie_list_player01"></div>
                            </a>
                        </div>
                        <h3>ケアコーチとは？</h3>
                        <p>「ケアコーチ」って？誰をケアするの？コーチになるの？これからの時代に必要な存在であり必要な考え方…女性にとってどんな意味を持つものなのでしょう？ヒトコトで伝えてもらいました！</p>
                        <div class="side-item side-item__s_type2 sp"><img src="/sub/assets/img/common/item/flower_1.png" alt="花びら"></div>
<!--                        <div class="b-more"><a href="">詳しくはこちら</a></div>-->
                    </li>
                    <li class="movie-list__item">
                        <div class="side-item side-item__type6 pc"><img src="/sub/assets/img/common/item/flower_5.png" alt="花びら"></div>
                        <div class="side-item side-item__s_type3 sp"><img src="/sub/assets/img/common/item/flower_6.png" alt="花びら"></div>
                        <div class="b-movie">
                            <a class="youtube-modal" href="#movie_list_player02" data-id="movie_list_player02" data-y-id="Iz6ISqPFh1A">
                                <img src="/sub/assets/img/top/movie_list/thumb_2.jpg" alt="動画2">
                                <div id="movie_list_player02"></div>
                            </a>
                        </div>
                        <h3>予防ケアコーチ資格検定とは?</h3>
                        <p>予防ケアコーチ資格検定講座を作ったスタッフに聞いてみました！今まで数々の資格講座を考案開講してきた面々でもあります！</p>
                        <div class="b-more"><a href="/medical_care#sec01">詳しくはこちら</a></div>
                    </li>
                    <li class="movie-list__item">
                        <div class="side-item side-item__type7"><img src="/sub/assets/img/common/item/flower_6.png" alt="花びら"></div>
                        <div class="side-item side-item__s_type4 sp"><img src="/sub/assets/img/common/item/flower_5.png" alt="花びら"></div>
                        <div class="b-movie">
                            <a class="youtube-modal" href="https://www.youtube.com/embed/7-pzHPDy_V0?autoplay=1" target="_blank"><img src="/sub/assets/img/top/movie_list/thumb_3.jpg" alt="動画3"></a>
                        </div>
                        <h3>検定を受けるメリット</h3>
                        <p>なぜ必要？いつ必要？誰が必要？どんなことを学び、どんな知識を得て、どう自分が変化する？あなたの未来に確実に役立つ予防ケアコーチ検定とは？</p>
                        <div class="b-more"><a href="/medical_care#sec04">詳しくはこちら</a></div>
                    </li>
                    <li class="movie-list__item">
                        <div class="side-item side-item__s_type5 sp"><img src="/sub/assets/img/common/item/flower_9.png" alt="花びら"></div>
                        <div class="b-movie">
                            <a class="youtube-modal" href="#movie_list_player04" data-id="movie_list_player04" data-y-id="7YUlCZeYHjQ">
                                <img src="/sub/assets/img/top/movie_list/thumb_4.jpg" alt="動画4">
                                <div id="movie_list_player04"></div>
                            </a>
                        </div>
                        <h3>講師はこんな人</h3>
                        <p>現在までに数千人の女性たちにレクチャーをしてきた講師の小野咲先生はこんなヒト！</p>
                        <div class="b-more"><a href="/instructor_profiles">詳しくはこちら</a></div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="cts">
            <div class="side-item side-item__type9 pc"><img src="/sub/assets/img/common/item/flower_2.png" alt="花びら"></div>
            <div class="news-box">
                <h2 class="title-box">お知らせ</h2>
                <p class="item-btn">今だけ無料！<br class="sp">ニュースリリースキャンペーン！100名まで！</p>

                <?php include $_SERVER['DOCUMENT_ROOT'] . '/sub/tmp/news_list.php'; ?>

                <a href="/news" class="more-btn">Read More</a>
                <div class="side-item side-item__type11 pc"><img src="/sub/assets/img/common/item/flower_11.png" alt="花びら"></div>
            </div>
        </section>

        <section class="cts">
            <div class="side-item side-item__type14 pc"><img src="/sub/assets/img/common/item/flower_6.png" alt="花びら"></div>
            <div class="side-item side-item__type15 pc"><img src="/sub/assets/img/common/item/flower_1.png" alt="花びら"></div>
            <div class="side-item side-item__s_type6 sp"><img src="/sub/assets/img/common/item/flower_1.png" alt="花びら"></div>
            <div class="qualification-box">
                <h2 class="title-box">既に資格をお持ちの方</h2>
                <div class="qualification-box__contents">
                    <div class="cell">
                        <div>
                            <a class="youtube-modal" href="#qualification_player" data-id="qualification_player" data-y-id="7-pzHPDy_V0">
                                <img src="/sub/assets/img/top/qualification_thumb.png" alt="有資格者に向けて">
                                <div id="qualification_player"></div>
                            </a>
                        </div>
                        <div>
                            <h3>有資格者に向けて</h3>
                            <p>協会の資格講座が大きく変わりリニューアル！<br>
                                多くの医療資格をお持ちの方にシェアさせていただいた資格講座から、プロフェッショナルな内容をより多くの一般の方に知っていただく講座にシフトし、「予防医療をもっと身近に」というカリキュラムにブラッシュアップ！</p>
                        </div>
                    </div>
                    <div class="cell">
                        <h3>小野咲先生からのメッセージ</h3>
                        <p>このたび、一般社団法人予防医療研究協会の資格講座プロデュースをさせていただくことになりました、<strong>小野咲</strong>と申します。<br><br>過去に予防医療研究協会にて資格を取得していただいた方へ、その資格を生かし、これから予防ケアコーチ資格検定に参加される方々の素敵なモデル像になっていただくとともに、予防医療の普及に向けたリーダーシップを発揮していただける方を常にリサーチしています!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cts">
            <div class="side-item side-item__type12 pc"><img src="/sub/assets/img/common/item/flower_3.png" alt="花びら"></div>
            <div class="side-item side-item__type13 pc"><img src="/sub/assets/img/common/item/flower_8.png" alt="花びら"></div>
            <div class="support-box">
                <h2 class="title-box">協賛・サポート企業</h2>
                <ul class="support-list" id="sponsorship-slider">
                    <li class="support-list__item"><a href="https://www.tsukuba-milk.co.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_1.jpg" alt="筑波乳業株式会社"></a></li>
                    <li class="support-list__item"><a href="https://www.genmaikoso.co.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_2.jpg" alt="玄米酵素株式会社"></a></li>
                    <li class="support-list__item"><a href="https://ia-foods.com" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_3.jpg" alt="株式会社アイエー・フーズ"></a></li>
                    <li class="support-list__item"><a href="https://www.fuado.com" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_4.jpg" alt="大塚オリーブ"></a></li>
                    <li class="support-list__item"><a href="https://www.ichinoe-ekimae-ilnido-dental.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_5.jpg" alt="イルニード歯科"></a></li>
                    <li class="support-list__item"><a href="https://nichinichi-phar.co.jp/wpt/" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_6.jpg" alt="ニチニチ製薬株式会社"></a></li>
                    <li class="support-list__item"><a href="http://sukoyaka.link" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_7.jpg" alt="ジャパンウェルネストレード株式会社"></a></li>
                    <li class="support-list__item"><a href="http://www.inochinomizu.com/front/bin/home.phtml" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_8.jpg" alt="株式会社 生命の水研究所"></a></li>
                    <li class="support-list__item"><a href="https://organic.jpn.com" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_9.jpg" alt="一般社団法人 日本オーガニック協会"></a></li>
                    <li class="support-list__item"><a href="https://flora.link/lp21/sp/?utm_source=google&utm_medium=cpc&utm_campaign=brand&advc=Google&gclid=CjwKCAjw0dKXBhBPEiwA2bmObU-pZZ9YPIbSsXczGZqCE2bG-BC_PB5eqtusu1OXrve0J7JROYicNhoCEaoQAvD_BwE" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_10.jpg" alt="株式会社白木屋"></a></li>
                    <li class="support-list__item"><a href="https://sakuradream.com" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_11.jpg" alt="株式会社サクラドリーム"></a></li>
                    <li class="support-list__item"><a href="https://bandscorp.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_12.jpg" alt="株式会社ビーアンドエス・コーポレーション"></a></li>
                    <li class="support-list__item"><a href="http://www.comatsu.net" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_13.jpg" alt="小松貿易株式会社"></a></li>
                    <li class="support-list__item"><a href="http://aromagift.net" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/sponsorship/logo_14.jpg" alt="アロマギフト"></a></li>
                </ul>
                <ul class="support-list" id="support-slider">
                    <li class="support-list__item"><a href="https://brain-care-dementia.jp/" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_1.png" alt="一般社団法人 日本ブレインケア認知症予防研究所"></a></li>
                    <li class="support-list__item"><a href="http://locomo.name/" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_2.png" alt="一般社団法人 ロコモ認知症予防療法協会"></a></li>
                    <li class="support-list__item"><a href="https://yobouiryou.or.jp/partner/" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_3.png" alt="一般社団法人 日本脱力関節調律協会"></a></li>
                    <li class="support-list__item"><a href="http://waarm.or.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_4.png" alt="一般社団法人 国際抗老化再生医療学会"></a></li>
                    <li class="support-list__item"><a href="http://aroma-jsa.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_5.png" alt="一般社団法人 日本アロマセラピー学会"></a></li>
                    <li class="support-list__item"><a href="http://jsa2018.com" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_6.png" alt="一般社団法人 日本壮健協会"></a></li>
                    <li class="support-list__item"><a href="https://active-wellaging.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_7.png" alt="NPO法人 アクティブ・ウェルエイジング協会"></a></li>
                    <li class="support-list__item"><a href="https://belly-paint.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_8.png" alt="一般社団法人 日本ベリーペイント協会"></a></li>
                    <li class="support-list__item"><a href="https://f-n-n-a.jimdofree.com/" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_9.png" alt="一般社団法人 フリーナース看護協会"></a></li>
                    <li class="support-list__item"><a href="https://beauty-pharmacist-assoc.or.jp" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_10.png" alt="一般社団法人 美容薬剤師協会"></a></li>
                    <li class="support-list__item"><a href="https://onlineteacher.work" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_11.png" alt="一般社団法人 世界オンライン講師協会"></a></li>
                    <li class="support-list__item"><a href="https://yobouiryou.or.jp/partner/" target="_blank"><img class="grayscale" src="/sub/assets/img/common/company/support/logo_12.png" alt="一般社団法人 健康経営推進産業医会"></a></li>
                </ul>
            </div>
        </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/sub/_Partials/footer.php'; ?>