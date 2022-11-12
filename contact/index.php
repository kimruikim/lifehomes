<?php
$page_class = 'contact';
$title = 'お問い合わせ';

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => 'お問い合わせ', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="/assets/css/contact.css"> <!-- お問い合わせ/contact -->
EOD;

$add_js_area = <<< EOD

EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/pnkz.php'; ?>

        <section class="cts">
            <form action="/contact/complete.php">
                <table class="tbl-contact">
                    <tr>
                        <th>
                            <span>種別</span>
                            <span class="require-icon">必須</span>
                        </th>
                        <td>
                            <div class="radio-wrap">
                                <label for="la-item-1">
                                    <input type="radio" id="la-item-1" name="rdo-item" value="1">
                                    <span class="text">サービスについて</span>
                                </label>
                                <label for="la-item-2">
                                    <input type="radio" id="la-item-2" name="rdo-item" value="2">
                                    <span class="text">ご意見・ご相談</span>
                                </label>
                                <label for="la-item-3">
                                    <input type="radio" id="la-item-3" name="rdo-item" value="3">
                                    <span class="text">その他</span>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-your-name">名前</label>
                            <span class="require-icon">必須</span>
                        </th>
                        <td>
                            <input type="text" name="your-name" id="la-your-name">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-your-kana">フリガナ</label>
                            <span class="require-icon">必須</span>
                        </th>
                        <td>
                            <input type="text" name="your-kana" id="la-your-kana">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-company-name">会社名</label>
                        </th>
                        <td>
                            <input type="text" name="your-kana" id="la-company-name">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-mail-address">メール</label>
                            <span class="require-icon">必須</span>
                        </th>
                        <td>
                            <input type="text" name="mail-address" id="la-mail-address">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-tel">電話</label>
                        </th>
                        <td>
                            <input type="text" name="tel" id="la-tel">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-address">住所</label>
                        </th>
                        <td>
                            <input type="text" name="address" id="la-address">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="la-memo">詳細</label>
                            <span class="require-icon">必須</span>
                        </th>
                        <td>
                            <textarea name="memo" id="la-memo" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                </table>

                <p class="privacy-txt">プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文章、プライバシー・ポリシーに関する文</p>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="ch-privacy" value="1">
                        <span class="text">プライバシーポリシーに同意する</span>
                    </label>
                </div>

                <div class="btn-list flex-list">
                    <input type="submit" value="送　信">
                </div>
            </form>
        </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>