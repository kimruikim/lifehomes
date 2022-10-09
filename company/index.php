<?php
$page_class = 'company';
$title = '会社概要';

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => '会社概要', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="/assets/css/company.css"> <!-- 会社概要/CSS -->
EOD;

$add_js_area = <<< EOD
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/pnkz.php'; ?>

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
                    <td>〒900-0003  県那覇市安謝1-22-56<br>
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
            <div class="b-map"></div>
        </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>