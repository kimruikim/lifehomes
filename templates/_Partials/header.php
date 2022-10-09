<?php
$url = $_SERVER['REQUEST_URI'];
// [meta] 設定
$site_name = 'ライフホームズ株式会社';
?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="<?php echo $description; ?>">

        <title><?php if($title) echo $title .' | '; ?><?php echo $site_name; ?></title>

        <!-- [CSS] 関連 -->
        <link rel="stylesheet" href="/assets/css/common.css">
        <?php echo $add_css_area; ?>

        <!-- [JS] 関連 -->
        <script src="/node_modules/jquery/dist/jquery.js"></script>
        <script src="/assets/js/common.js"></script>
        <?php echo $add_js_area; ?>
    </head>

<body class="<?php echo $page_class; ?>">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header_cts.php'; ?>