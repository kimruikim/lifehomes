<?php
$page_class = 'company';
$title = '会社概要';
$current_url = get_template_directory_uri();

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => '会社概要', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="{$current_url}/assets/css/company.css"> <!-- 会社概要/CSS -->
EOD;

$add_js_area = <<< EOD
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

    <main>
        <?php include( get_stylesheet_directory() . '/templates/_Partials/pnkz.php' ); ?>

        <section class="cts">
            <div class="b-mainTitle">
                <h2>Company</h2>
                <span>会社概要</span>
            </div>
            <table class="tbl-company">
                <tr>
                    <th>会社名</th>
                    <td>ライフホームズ株式会社（LIFEHOMES CO., LTD.）</td>
                </tr>
                <tr>
                    <th>本社所在地</th>
                    <td>〒900-0003  沖縄県那覇市安謝1-22-56<br>
                        TEL 098-867-3530 FAX 098-867-3540</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>30,000,000円</td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>建築・設計・不動産事業</td>
                </tr>
                <tr>
                    <th>許認可</th>
                    <td>宅地建物取引業 沖縄県知事（1）第4917号<br>
                        建設業許可 沖縄県知事(般-30)第13542号<br>
                        一級建築士事務所 沖縄県知事登録 第107-3612号</td>
                </tr>
                <tr>
                    <th>役員</th>
                    <td>代表取締役：岡部　新<br>
                        常務取締役：瀧口真也</td>
                </tr>
                <tr>
                    <th>有資格者</th>
                    <td>一級建築士　１名<br>
                        宅地建物取引士　１名<br>
                        既存住宅状況調査技術者　１名<br>
                        給水装置工事主任技術者　１名<br>
                        下水道排水設備工事責任技術者　１名<br>
                        福祉住環境コーディネーター２級　１名</td>
                </tr>
                <tr>
                    <th>取引銀行</th>
                    <td>琉球銀行<br>
                        沖縄海邦銀行<br>
                        コザ信用金庫</td>
                </tr>
                <tr>
                    <th>加盟団体</th>
                    <td>公益社団法人全日本不動産協会沖縄県本部<br>
                        公益社団法人不動産保証協会沖縄県本部<br>
                        全日本不動産政治連盟沖縄県本部<br>
                        一般社団法人全国不動産協会<br>
                        北那覇法人会</td>
                </tr>
            </table>
        </section>

        <section class="cts">
            <div class="b-mainTitle">
                <h2>Access</h2>
                <span>アクセスマップ</span>
            </div>
            <div class="b-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.748322638081!2d127.69197541510376!3d26.23736599515155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bc5c964b35f%3A0xf0d3770111e5253!2z44CSOTAwLTAwMDMg5rKW57iE55yM6YKj6KaH5biC5a6J6Kyd77yR5LiB55uu77yS77yS4oiS77yV77yW!5e0!3m2!1sja!2sjp!4v1669282133491!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>