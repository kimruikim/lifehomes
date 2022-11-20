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
        <?php wp_head(); ?>


        <!-- [CSS] 関連 -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
        <?php echo $add_css_area; ?>

        <!-- [JS] 関連 -->
        <script
                src="https://code.jquery.com/jquery-3.6.1.min.js"
                integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
                crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
        <?php echo $add_js_area; ?>
    </head>

<body class="<?php echo $page_class; ?>">

<?php include( get_stylesheet_directory() . '/templates/_Partials/header_cts.php' ); ?>
